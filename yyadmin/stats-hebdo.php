<?php
// yyadmin/stats-hebdo.php
/* ##### INITIALISATION ##### */
    require('inc/init.php');
    
    require_once(ROOT_PATH.'/lib/Swift-5.0.3/lib/swift_required.php');
    require_once(ROOT_PATH.'/lib/PHPExcel/PHPExcel.php');
    
    /* --- Contrôle sécurité --- */
    secure(array('superadministrateur'));
    /* ----- Configuration -----  */    
	// dossier de travail
	$dir = realpath('media/rapport-adwords');
    // Définition par défaut des dates
    $startDate = new DateTime("sunday 1 weeks ago");
    $endDate = new DateTime("last saturday 23:59:59");
    // Destinataires du mail
    $dests = array(
        'laurene.kgcom@gmail.com' => 'Equipe développement KGCOM',
        'thierno.kgcom@gmail.com' => 'Equipe développement KGCOM',
        'jkeloghlanian@gmail.com' => 'Jérôme KELOGHLANIAN',
        'contact.kgcom@gmail.com' => 'Steeve Rosilio',
        'maxime.kgcom@gmail.com'  => 'Maxime',
        'virgil@ikom.fr'          => 'Virgil'
     );
    // init divers
    $vue = 0; $display = false;
    
/* ####### EXECUTION ####### */
    // Traitement de la requête
    $req = $_POST;
    if(isset($req['submit'])){
        $vue = 1;
        
        $formatdate = 'd/m/Y H:i:s';
        $verifdate = '#^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/(19|20)\d\d$#';
        if(preg_match($verifdate, $req['startdate'])){
            $startDate = DateTime::createFromFormat($formatdate, $req['startdate'].' 00:00:00');
        }
        if(preg_match($verifdate, $req['enddate'])){
            $endDate = DateTime::createFromFormat($formatdate, $req['enddate'].' 23:59:59');
        }
        
        $_SESSION['startdate'] = $startDate;
        $_SESSION['enddate'] = $endDate;
        $_SESSION['options'] = isset($req['options']) ? $req['options'] : null;
        
        $req['mode'] = intval($req['mode']);
        if($req['mode']===0){
            $req['confirm'] = true;
            $display = true;
        }
    }
    
    if(isset($req['cancel'])){
        unset($_SESSION['startdate']);
        unset($_SESSION['enddate']);
    }
    
    if(isset($req['confirm']) AND isset($_SESSION['startdate'])){
        $vue = 2;
        $success = false;
        
        /* ----- Génération et envoi du rapport -----  */        
        $startDate = $_SESSION['startdate'];
        $endDate = $_SESSION['enddate'];
        
        $rapport = 'Génération du rapport de campagne du '.$startDate->format('d/m/Y').' au '.$endDate->format('d/m/Y')." inclus \r\n";
        
        // Récup data de tracking
        $tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
        $tracks  = $tracker->getStatsForWeeklyReport($startDate->format('Y-m-d H:i:s'), $endDate->format('Y-m-d H:i:s'));
        $rapport .= "Initialisation de l'objet tracker \r\n";
        
        // Lecture fichier adwords.csv
        $rapport .= "Lecture du fichier adwords.csv \r\n";
        $adwords_csv = $dir.'/adwords.csv';
        $handle = fopen($adwords_csv,'r');
        if ($handle !== false){
            while($r = fgetcsv($handle,null,"\t")){
                if (count($r)>=10){
                    $id_campain = str_ireplace(chr( 0 ),'',$r[4]);
                    $cost = str_ireplace(chr( 0 ),'',$r[11]);
                    if(isset($id_campain) && !empty($id_campain)){
                        $i=0;
                        foreach($tracks['Globale'] as $campain){
                            if(utf8_decode($campain['id_campain']) == $id_campain ){
                                $cost = str_replace(
                                    array('"', ' ', ',', chr(160)),
                                    array('' , '' , '.', ''),
                                    $cost
                                );
                                $tracks['Globale'][$i]['cost'] = $cost;
                            }
                            $i++;
                        }
                    }
                }
            }
            // calcul du tableau
            $rapport .= "Calcul des statistiques \r\n";
            $data = array(); $i = 0;
            
            foreach($tracks['Globale'] as $track){
                // Campagne
                $data[$i]['name'] = $track['campain'];
                // Coût campagne
                $data[$i]['cost'] = ( isset($track['cost']) ) ? $track['cost'] : 0;
                // Visiteurs
                $data[$i]['displays'] = $track['displays']['total'];
                // Leads
                $data[$i]['leads'] = $track['leads']['total'];
                // Clients
                $data[$i]['customers'] = $track['appointement']['total'];
                // CA1
                $data[$i]['amount'] = $track['appointement']['amount'];
                // CA3
                $data[$i]['report'] = $track['report'];
                // CA2
                $data[$i]['realAmount'] = $track['payment']['amount'];
                // CA4
                $data[$i]['reportpayment'] = $track['reportpayment'];
                // Compteur
                $i++;
            }
            
            
            $rapport .= "Construction du rapport excel \r\n";
            $objPHPExcel = new PHPExcel();
            // Set document properties
            $objPHPExcel ->getProperties()->setCreator("Julien Citerne")
                         ->setLastModifiedBy("Laurène Dourdin")
                         ->setTitle("Performance des campagnes adwords")
                         ->setSubject("Liste des campagnes et trackers");
            // set headlines
            $objPHPExcel ->setActiveSheetIndex(0)
                         ->setCellValue('A1', 'Performance des campagnes adwords du '.$startDate->format('d/m/Y').' au '.$endDate->format('d/m/Y'))
                         ->setCellValue('A2', 'Campagne')
                         ->setCellValue('B2', 'Coût Campagne')
                         ->setCellValue('C2', 'Visiteurs')
                         ->setCellValue('D2', 'Inscriptions')
                         ->setCellValue('E2', 'Clients')
                         ->setCellValue('F2', 'Chiffre théorique (CA1)')
                         ->setCellValue('G2', 'Panier Moyen')
                         ->setCellValue('H2', 'Marge théorique')
                         ->setCellValue('I2', 'Taux de marge')
                         ->setCellValue('J2', 'Report théorique (CA3)')
                         ->setCellValue('K2', 'Marge théorique avec report')
                         ->setCellValue('L2', 'Taux de Marge')
                         ->setCellValue('M2', 'Chiffre réel (CA2)')
                         ->setCellValue('N2', 'Marge réelle')
                         ->setCellValue('O2', 'Taux de Marge')
                         ->setCellValue('P2', 'Report réel (CA4)')
                         ->setCellValue('Q2', 'Marge réelle avec report')
                         ->setCellValue('R2', 'Taux de Marge')
            ;
            // set content
            $r = 4;
            foreach ($data as $ligne){
                $objPHPExcel->getActiveSheet()
                        ->setCellValue('A'.$r, $ligne['name'])
                        ->setCellValueExplicit('B'.$r,$ligne['cost'], PHPExcel_Cell_DataType::TYPE_NUMERIC)
                        ->setCellValue('C'.$r, $ligne['displays'])
                        ->setCellValue('D'.$r, $ligne['leads'])
                        ->setCellValue('E'.$r, $ligne['customers'])
                        ->setCellValue('F'.$r, $ligne['amount']) // CA1
                        ->setCellValue('G'.$r, '=IF(E'.$r.'=0,0,F'.$r.'/E'.$r.')')
                        ->setCellValue('H'.$r, '=F'.$r.'-B'.$r)
                        ->setCellValue('I'.$r, '=IF(B'.$r.'=0,0,H'.$r.'/B'.$r.')')
                        ->setCellValue('J'.$r, $ligne['report']) // CA3
                        ->setCellValue('K'.$r, '=F'.$r.'+J'.$r.'-B'.$r)
                        ->setCellValue('L'.$r, '=IF(B'.$r.'=0,0,K'.$r.'/B'.$r.')')
                        ->setCellValue('M'.$r, $ligne['realAmount']) // CA2
                        ->setCellValue('N'.$r, '=M'.$r.'-B'.$r)
                        ->setCellValue('O'.$r, '=IF(B'.$r.'=0,0,N'.$r.'/B'.$r.')')
                        ->setCellValue('P'.$r, $ligne['reportpayment']) // CA4
                        ->setCellValue('Q'.$r, '=M'.$r.'+P'.$r.'-B'.$r)
                        ->setCellValue('R'.$r, '=IF(B'.$r.'=0,0,Q'.$r.'/B'.$r.')')
                ;
                $r++;
            }
            // set total
            $objPHPExcel->getActiveSheet()
                        ->setCellValue('A3', 'TOTAL')
                        ->setCellValue('B3', '=SUM(B4:B'.$r.')') // coût campagne
                        ->setCellValue('C3', '=SUM(C4:C'.$r.')') // visiteurs
                        ->setCellValue('D3', '=SUM(D4:D'.$r.')') // inscriptions
                        ->setCellValue('E3', '=SUM(E4:E'.$r.')') // clients
                        ->setCellValue('F3', '=SUM(F4:F'.$r.')') // CA1
                        ->setCellValue('G3', '=IF(E3=0,0,F3/E3)') // Panier Moyen
                        ->setCellValue('H3', '=F3-B3') // Marge théorique
                        ->setCellValue('J3', '=SUM(J4:J'.$r.')') // CA3
                        ->setCellValue('K3', '=J3+F3-B3') // Marge théorique avec report
                        ->setCellValue('M3', '=SUM(M4:M'.$r.')') // CA2
                        ->setCellValue('N3', '=M3-B3') // Marge réelle
                        ->setCellValue('P3', '=SUM(P4:P'.$r.')') // CA4
                        ->setCellValue('Q3', '=M3+P3-B3') // Marge réelle avec report
            ;
            // set Dimensions
            $objPHPExcel->getActiveSheet()->getDefaultColumnDimension()->setWidth(12);
            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(60);
            // set cell format
            $nombre_format = '#,##0.00'; // deux décimales et séparateur de milliers
            $percent_format = '0.00%'; // pourcentage à deux décimales
            $marge_format = '[Green]#,##0.00;[Red]-#,##0.00'; // deux décimales, séparateur de milliers, vert si positif, rouge si négatif
            $money_format = '#,##0\ "€";[Red]#,##0\ "€"'; // monétaire avec €, sans décimales, rouge si négatif
            $objPHPExcel->getActiveSheet()->getStyle('B3')->getNumberFormat()->setFormatCode($money_format); 
            $objPHPExcel->getActiveSheet()->getStyle('F3:Q3')->getNumberFormat()->setFormatCode($money_format); 
            $objPHPExcel->getActiveSheet()->getStyle('G4:G'.$r)->getNumberFormat()->setFormatCode($nombre_format); 
            $objPHPExcel->getActiveSheet()->getStyle('H4:H'.$r)->getNumberFormat()->setFormatCode($marge_format); 
            $objPHPExcel->getActiveSheet()->getStyle('I3:I'.$r)->getNumberFormat()->setFormatCode($percent_format); 
            $objPHPExcel->getActiveSheet()->getStyle('K4:K'.$r)->getNumberFormat()->setFormatCode($marge_format); 
            $objPHPExcel->getActiveSheet()->getStyle('L3:L'.$r)->getNumberFormat()->setFormatCode($percent_format); 
            $objPHPExcel->getActiveSheet()->getStyle('N4:N'.$r)->getNumberFormat()->setFormatCode($marge_format); 
            $objPHPExcel->getActiveSheet()->getStyle('O3:O'.$r)->getNumberFormat()->setFormatCode($percent_format); 
            $objPHPExcel->getActiveSheet()->getStyle('Q4:Q'.$r)->getNumberFormat()->setFormatCode($marge_format); 
            $objPHPExcel->getActiveSheet()->getStyle('R3:R'.$r)->getNumberFormat()->setFormatCode($percent_format); 
            // set style
            $headline_styleArray = array(
                'font' => array('bold' => true),
                'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'startcolor' => array('argb' => 'FFB9B9B9')
                ),
            );
            $total_styleArray = array(
                'font' => array(
                    'size' => 14,
                    'bold' => true
                ),
                'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'startcolor' => array('argb' => 'FFFDE9D9')
                ),
            );
            $objPHPExcel->getActiveSheet()->getStyle('A2:R2')->applyFromArray($headline_styleArray);
            $objPHPExcel->getActiveSheet()->getStyle('A3:R3')->applyFromArray($total_styleArray);

            // --- enregistrement du fichier 
            if(isset($_SESSION['options']['save_file']) OR !$display){ // on enregistre forcément le fichier pour envoi par mail
                $filename = $startDate->format('W.[d-m-y]').'-'.$endDate->format('[d-m-y]').date('.His').'.xlsx';
                $rapport .= 'Enregistrement du fichier - '.$filename." - \r\n";

                $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save($dir.'/'.$filename);
            }

            // --- Envoi par mail
            if(!$display){ // si l'on est pas en mode affichage
                $rapport .= "Ecriture du mail \r\n";
                $content = '<p>Statistiques des campagnes du '.$startDate->format('d/m/Y').' au '.$endDate->format('d/m/Y').'</p>';

                $transport = Swift_SmtpTransport::newInstance('localhost', 25)
                                    ->setUsername('postmaster@myastro.fr')
                                    ->setPassword('fYJAWB2RqK9fJ');
                $mailer = Swift_Mailer::newInstance($transport);

                $message = Swift_Message::newInstance($transport);
                $message ->setSubject('[MyAstro]-Rapport de campagne du '.$startDate->format('d/m/Y').' au '.$endDate->format('d/m/Y'))
                         ->setFrom(array('contact@myastro.fr' => 'Myastro - Rapport'))
                         ->setTo($dests)
                         ->attach(Swift_Attachment::fromPath($dir.'/'.$filename))
                         ->setBody($content,'text/html');

                $rapport .= "Envoi du mail \r\n";
                $result = $mailer->send($message);
                // suppression du fichier si on ne voulait pas l'enregistrer
                if(!isset($_SESSION['options']['save_file'])){
                    $rapport .= "Suppression du fichier - ".$filename." - \r\n";
                    unlink($dir.'/'.$filename);
                }
            }
            
            // --- suppression adwords.csv
            if(isset($_SESSION['options']['del_adwords'])){
                $rapport .= "Suppression du fichier - adwords.csv - \r\n";
                unlink($adwords_csv);
            }
            
            $success = true;
            $rapport .= "Opération terminée avec succès !";
			
			unset($_SESSION['options']);
        } else {
            $success = false;
            $erreur = 'Le fichier adwords.csv est introuvable !';
        }
    }
    /* ########## VUES ########## */
    
    include('inc/header.php');
?>
    <h2>Génération du rapport de performance des campagnes AdWords</h2>
    <form method="post" action="" >
        <div class="row">
            <div class="col-md-12">
    <?php if($vue == 2){  /* ### Etape 3 : action et retour ### */ ?>
                <pre><?= $rapport ?></pre>
                <?php if ($success){ ?>
                <p class="alert alert-success">
                    <?php if (!$display){ ?>
                    Le rapport à été envoyé.
                    <?php } else { ?>
                    Rapport généré avec succès.
                    <?php } ?>
                </p>
                <p class="text-center">
                    <input type="submit" class="btn btn-primary" value="Retour" name="cancel" />
                </p>
                    <?php if($display){ ?>
                
                    <?php } ?><!-- end if($display) -->
                <?php } else { ?>
                <p class="alert alert-danger"><b>Erreur :</b> <?= $erreur ?></p>
                <input type="submit" class="btn btn-warning" value="Réessayer" name="confirm" />
                <input type="submit" class="btn btn-danger" value="Annuler" name="cancel" />
                <?php } ?>
    <?php } elseif($vue==1){ /* ### Etape 2 : confirmation ### */ ?>
                <p class="alert alert-warning">
                    Vous allez envoyer aux destinataires suivants un fichier excel de rapport par mail pour la période du 
                    <?= $startDate->format('d/m/Y') ?> au <?= $endDate->format('d/m/Y') ?> inclus.<br /><br />
                    <input type="submit" class="btn btn-warning" value="Confirmer" name="confirm" />
                    <input type="submit" class="btn btn-danger" value="Annuler" name="cancel" />
                </p>
                <ul class="list-group">
                    <?php foreach($dests as $mail=>$nom){ 
                        echo '<li class="list-group-item">'.$mail.' ('.$nom.")</li>\r\n";
                    } ?>
                </ul>
    <?php } else { /* ### Etape 1 : formulaire ### */ ?>
                <p>Vous allez générer un rapport de performances des campagnes adwords : </p>
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label for="mode_mail" class="col-sm-offset-3">
                            <input type="radio" id="mode_mail" name="mode" value="1" checked required />
                            L'envoyer par mail
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="mode_disp" class="col-sm-offset-3">
                            <input type="radio" id="mode_disp" name="mode" value="0" />
                            L'afficher
                        </label>
                    </div>
                </div>
                <p>Pour celà, il faut :</p>
                <ol>
                    <li>Télécharger le rapport correspondant depuis le compte adwords</li>
                    <li>L'uploader par FTP dans le dossier /yyadmin/media/rapport-adwords en le renommant adwords.csv</li>
                    <li class="form-horizontal">Entrer les dates du rapport ci dessous :
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="debut">Du </label>
                            <div class="col-sm-9">
                                <input type="text" name="startdate" id="debut" value="<?= $startDate->format('d/m/Y') ?>" class="datepicker form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="fin">Au </label>
                            <div class="col-sm-9">
                                <input type="text" name="enddate" id="fin" value="<?= $endDate->format('d/m/Y') ?>" class="datepicker form-control" />
                            </div>
                        </div>
                    </li>
                </ol>
                <p>Autres options :</p>
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label for="save_file" class="col-sm-offset-3">
                            <input type="checkbox" id="save_file" name="options[save_file]" value="1" checked />
                            Enregistrer le fichier excel du rapport
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="del_adwords" class="col-sm-offset-3">
                            <input type="checkbox" id="del_adwords" name="options[del_adwords]" value="1" checked />
                            Supprimer le fichier adwords.csv
                        </label>
                    </div>
                </div>
                <p class="text-center">
                    <input type="submit" class="btn btn-primary btn-lg" value="Valider" name="submit" />
                </p>
    <?php } ?>
            </div>
        </div>
    </form>
<?php
    include('inc/footer.php');
?>