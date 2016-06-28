<?php
// yyadmin/rechercher_inscrit.php

/* ##### INITIALISATION ##### */
    require_once('inc/init.php');
    
    /* --- Contrôle sécurité --- */
    secure(array('standard','superadministrateur','phoning','voyant'));
    try { $bdd = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBLOGIN, DBPASS);}
    catch(Exception $e){
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
        die();
    }
  
    $search = false;
    $results = array();
    $results_m = array();
    
/* ####### EXECUTION ####### */
    // Traitement du formulaire
    if(isset($_POST['submit'])){
        
        $sql = 'SELECT internal_id AS id_astro, questionDate AS date_inscription, nom, prenom, dateNaissance AS date_naissance, email, tel, ville, pays, stf_source_kgestion AS source_kgestion, IFNULL(stf_formurl_kgestion, source) AS form, url, stf_source_kgestion AS source, gclid FROM ag_users LEFT JOIN source_to_formurl ON source = stf_source_myastro';
        $where = array();
        
        $sql_m = 'SELECT DISTINCT external_id AS id_astro, `date` AS date_inscription, lastname, firstname, birthdate AS date_naissance, email, phone, pays, IFNULL(stf_formurl_kgestion, source) AS form, url, stf_source_kgestion AS source FROM users_common LEFT JOIN source_to_formurl ON source = stf_source_myastro';
        $where_m = array();
        
        $search = true;
        // id astro
        if(isset($_POST['id_astro']) and !empty($_POST['id_astro'])){
            $id_astro = intval(htmlspecialchars($_POST['id_astro']));
            $where[] = array(
                'field' => 'internal_id',
                'operator' => '=',
                'value' => $id_astro
            );
            $where_m[] = array(
                'field' => 'external_id',
                'operator' => '=',
                'value' => $id_astro
            );
        } else { $id_astro = null;}
        // date naissance
        if(isset($_POST['date_naissance']) and !empty($_POST['date_naissance'])){
            $date_naissance = DateTime::createFromFormat('d/m/Y',$_POST['date_naissance']) ?: $_POST['date_naissance'];
            if (is_object($date_naissance)){
                $where[] = array(
                    'field' => 'dateNaissance',
                    'operator' => '=',
                    'value' => '"'.$date_naissance->format('Y-m-d').'"'
                );
                $where_m[] = array(
                    'field' => 'birthdate',
                    'operator' => '=',
                    'value' => '"'.$date_naissance->format('Y-m-d').'"'
                );
            }
        } else { $date_naissance = null;}
        // nom
        if(isset($_POST['nom']) and !empty($_POST['nom'])){
            $nom = htmlspecialchars($_POST['nom']);
            $where[] = array(
                'field' => 'nom',
                'operator' => 'LIKE',
                'value' => '"%'.$nom.'%"'
            );
            $where_m[] = array(
                'field' => 'lastname',
                'operator' => 'LIKE',
                'value' => '"%'.$nom.'%"'
            );
        } else { $nom = null;}
        // prenom
        if(isset($_POST['prenom']) and !empty($_POST['prenom'])){
            $prenom = htmlspecialchars($_POST['prenom']);
            $where[] = array(
                'field' => 'prenom',
                'operator' => 'LIKE',
                'value' => '"%'.$prenom.'%"'
            );
            $where_m[] = array(
                'field' => 'firstname',
                'operator' => 'LIKE',
                'value' => '"%'.$prenom.'%"'
            );
        } else { $prenom = null;}
        // mail
        if(isset($_POST['mail']) and !empty($_POST['mail'])){
            $mail = htmlspecialchars($_POST['mail']);
            $where[] = array(
                'field' => 'email',
                'operator' => 'LIKE',
                'value' => '"%'.$mail.'%"'
            );
            $where_m[] = array(
                'field' => 'email',
                'operator' => 'LIKE',
                'value' => '"%'.$mail.'%"'
            );
        } else { $mail = null;}
        // telephone
        if(!in_array($_SESSION['role'], ['voyant'])){
            if(isset($_POST['tel']) and !empty($_POST['tel'])){
                $tel = htmlspecialchars($_POST['tel']);
                $where[] = array(
                        'field' => 'tel',
                        'operator' => 'LIKE',
                        'value' => '"%'.$tel.'%"'
                );
                $where_m[] = array(
                        'field' => 'phone',
                        'operator' => 'LIKE',
                        'value' => '"%'.$tel.'%"'
                );
            } else { $tel = null;}
        }
        
        // ajout des conditions à la recherche
        foreach ($where as $key=>$wherecond){
            if($key==0){
                $sql .= ' WHERE ';
                $sql_m .= ' WHERE ';
            } else {
                $sql .= ' AND ';
                $sql_m .= ' AND ';
            }
            $sql .= implode(' ', $wherecond);
            $sql_m .= implode(' ', $where_m[$key]);
        }
        $sql .= ' ORDER BY date_inscription LIMIT 0, 250';
        $results = $bdd->query($sql)->fetchAll();
        $sql_m .= ' GROUP BY external_id ORDER BY date_inscription LIMIT 0, 250';
        $results_m = $bdd->query($sql_m)->fetchAll();
        foreach($results_m as $key=>$client){
            if($client['id_astro'] >= '2000000'){
                if($client['id_astro'] < '3000000'){
                    $site = 'ascendant-astrologique.net';
                } elseif($client['id_astro'] < '4000000'){
                    $site = 'tirage-tarots-gratuit.net';
                } elseif($client['id_astro'] < '5000000'){
                    $site = 'horoscope-de-la-semaine.net';
                } elseif($client['id_astro'] < '6000000'){
                    $site = 'medium-serieux.net'; break;
                } elseif($client['id_astro'] < '7000000'){
                    $site = 'voyant-virtuel.com';
                } elseif($client['id_astro'] < '8000000'){
                    $site = 'numerologie-gratuite.com';
                } elseif($client['id_astro'] < '9000000'){
                    $site = 'voyance-par-tchat.com';
                } elseif($client['id_astro'] < '10000000'){
                    $site = 'voyance-virtuelle.com';
                } elseif($client['id_astro'] < '11000000'){
                    $site = 'oracle-gratuit.fr';
                } elseif($client['id_astro'] < '12000000'){
                    $site = 'voyanceenligne.net';
                } else {
                    $site = 'Indéterminé';
                }
                $results_m[$key]['site'] = $site;
            }
        }
    }
    
    $count_results_MA = count($results);
    $results_MA = array_chunk($results,10);
    
    $count_results_MS = count($results_m);
    $results_MS = array_chunk($results_m,10);

/* ########## VUES ########## */
    include('inc/header.php');
?>
        <h2>Rechercher un inscrit</h2>
        <form method="post" action="" class="form-horizontal well" >
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="id_astro" class="col-sm-5 control-label">Id Astro</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="id_astro" name="id_astro" <?php if ($search){ echo 'value="'.$id_astro.'"';} ?> />
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="date_naissance" class="col-sm-5 control-label">Date de naissance</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control datepicker" id="date_naissance" placeholder="JJ/MM/YYYY" name="date_naissance" <?php if ($search){ echo 'value="'.(is_object($date_naissance) ? $date_naissance->format('d/m/Y') : $date_naissance).'"';} ?> />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="nom" class="col-sm-5 control-label">Nom</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nom" name="nom" <?php if ($search){ echo 'value="'.$nom.'"';} ?> />
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="prenom" class="col-sm-5 control-label">Prenom</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="prenom" name="prenom" <?php if ($search){ echo 'value="'.$prenom.'"';} ?> />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="mail" class="col-sm-5 control-label">Mail</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="mail" name="mail" <?php if ($search){ echo 'value="'.$mail.'"';} ?> />
                    </div>
                </div>
                <div class="col-sm-6 form-group">
				<?php if(!in_array($_SESSION['role'], ['voyant'])){ ?>
                    <label for="tel" class="col-sm-5 control-label">Téléphone</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="tel" name="tel" <?php if ($search){ echo 'value="'.$tel.'"';} ?> />
                    </div>
				<?php } ?>
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" name="submit" class="btn btn-primary">Rechercher</button>
                <button type="reset" class="btn btn-warning">Effacer le formulaire</button>
            </div>
        </form>
        <div class="space"></div>
        <div class="panel panel-success tab-content">
            <h4 class="panel-heading">
                MyAstro
                <span class="label label-success pull-right">
                    <?php echo $count_results_MA;?> résultats
                </span>
            </h4>
            <?php foreach($results_MA as $key=>$page){ ?>
            <table id="results_MA_<?= $key ?>" class="table table-striped table-bordered tab-pane <?php if($key==0){ echo 'active';}?>">
                <thead>
                    <tr>
                        <th>Id Astro</th>
                        <th>Id pour KGestion</th>
                        <th>Date d'inscription</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Mail</th>
		<?php if(!in_array($_SESSION['role'], ['voyant'])){ ?>
                        <th>Téléphone</th>
		<?php } ?>
                        <th>Source</th>
                        <th>Formulaire</th>
                        <th>Url</th>
                        <th>Gclid</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($page as $client){ ?>
                    <tr>
                        <td><?php echo $client['id_astro']; ?></td>
                        <td><?php echo strtoupper(base_convert($client['id_astro'], 10, 32))?></td>
                        <td><?php echo DateTime::createFromFormat('Y-m-d', $client['date_inscription'])->format('d/m/Y'); ?></td>
                        <td><?php echo $client['nom']; ?></td>
                        <td><?php echo $client['prenom']; ?></td>
                        <td><?php echo DateTime::createFromFormat('Y-m-d', $client['date_naissance'])->format('d/m/Y'); ?></td>
                        <td><?php echo $client['email']; ?></td>
                    <?php if(!in_array($_SESSION['role'], ['voyant'])){ ?>
                        <td><?php echo $client['tel']; ?></td>
                    <?php } ?>
                        <td><?php echo $client['source']; ?></td>
                        <td><?php echo $client['form']; ?></td>
                        <td><?php echo $client['url']; ?></td>
                        <td><?php echo $client['gclid']; ?></td>
                    </tr>
                <?php } /* endforeach */ ?>
                </tbody>
            </table>
            <?php } /* endforeach */ ?>
            <div class="panel-footer">
                <ul class="pagination">
                    <?php foreach ($results_MA as $key=>$page) { ?>
                    <li <?php  echo $key == 0 ? 'class="active"' : '' ?>><a href="#results_MA_<?= $key ?>" data-toggle="tab"><?= $key+1 ?></a></li>
                    <?php } /* endforeach */ ?>
                </ul>
            </div>
        </div><!-- fin panel -->

        <div class="space"></div>

        <div class="panel panel-danger tab-content">
            <h4 class="panel-heading">
                Mini-Sites
                <span class="label label-danger pull-right">
                    <?php echo $count_results_MS;?> résultats
                </span>
            </h4>
        <?php foreach($results_MS as $key=>$page){ ?>
            <table id="results_MS_<?= $key ?>" class="table table-striped table-bordered tab-pane <?php if($key==0){ echo 'active';}?>">
                <thead>
                    <tr>
                        <th>Id Astro</th>
                        <th>Id pour KGestion</th>
                        <th>Date d'inscription</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Mail</th>
                    <?php if(!in_array($_SESSION['role'], ['voyant'])){ ?>
                        <th>Téléphone</th>
                    <?php } ?>
                        <th>Site</th>
                        <th>Source</th>
                        <th>Formulaire</th>
                        <th>Url</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($page as $client){ ?>
                    <tr>
                        <td><?php echo $client['id_astro']; ?></td>
                        <td><?php echo strtoupper(base_convert($client['id_astro'], 10, 32))?></td>
                        <td><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $client['date_inscription'])->format('d/m/Y H:i'); ?></td>
                        <td><?php echo $client['lastname']; ?></td>
                        <td><?php echo utf8_encode($client['firstname']); ?></td>
                        <td><?php echo DateTime::createFromFormat('Y-m-d', $client['date_naissance'])->format('d/m/Y'); ?></td>
                        <td><?php echo $client['email']; ?></td>
                    <?php if(!in_array($_SESSION['role'], ['voyant'])){ ?>
                        <td><?php echo $client['phone']; ?></td>
                    <?php } ?>
                        <td><?php echo $client['site'] ?></td>
                        <td><?php echo $client['source']; ?></td>
                        <td><?php echo $client['form']; ?></td>
                        <td><?php echo $client['url']; ?></td>
                    </tr>
                <?php } /* endforeach */ ?>
                </tbody>
            </table>
            <?php } /* endforeach */ ?>
            <div class="panel-footer">
                <ul class="pagination">
                    <?php foreach ($results_MS as $key=>$page) { ?>
                    <li <?php  echo $key == 0 ? 'class="active"' : '' ?>><a href="#results_MS_<?= $key ?>" data-toggle="tab"><?= $key+1 ?></a></li>
                    <?php } /* endforeach */ ?>
                </ul>
            </div>
        </div><!-- fin panel -->
        
        <div class="space"></div>
        
        <form class="well">
	<span>Convertisseur base 10 à base 32 : </span><input id="input1" type="text"></input><input type="button" value="Convertir" onclick="conv1032()"></input><span id="res1"></span><br/>
	<span>Convertisseur base 32 à base 10 : </span><input id="input2" type="text"></input><input type="button" value="Convertir" onclick="conv3210()"></input><span id="res2"></span><br/>
        </form>	
<script type="text/javascript">
function conv1032() {
	var res = document.getElementById('res1');
	var finalRes = document.getElementById('input1').value;
	res.innerHTML = parseInt(finalRes).toString(32);
}

function conv3210() {
	var res = document.getElementById('res2');
	var finalRes = document.getElementById('input2').value;
	res.innerHTML = parseInt(finalRes,32);
}
</script>
<?php
    include('inc/footer.php');
?>
    