<?php
// yyadmin/rechercher_client.php
/* ##### INITIALISATION ##### */
    include('inc/header.php');
    
    require_once('inc/tools.php');
    
    /* --- Contrôle sécurité --- */
    secure(array('standard','superadministrateur','phoning','voyant'));
    try { $bdd = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBLOGIN, DBPASS);}
    catch(Exception $e){
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
        die();
    }
    
    $search = false;
    $sql = 'SELECT internal_id AS id_astro, history AS date_inscription, nom, prenom, dateNaissance AS date_naissance, email, tel, ville, pays FROM ag_users';
    $where = array();
    
/* ####### EXECUTION ####### */
    // Traitement du formulaire
    if(isset($_POST['submit'])){
        $search = true;
        // id astro
        if(isset($_POST['id_astro']) and !empty($_POST['id_astro'])){
            $id_astro = intval(htmlspecialchars($_POST['id_astro']));
            $where[] = array(
                'field' => 'internal_id',
                'operator' => '=',
                'value' => $id_astro
            );
        }
        // date naissance
        if(isset($_POST['date_naissance']) and !empty($_POST['date_naissance'])){
            $date_naissance = DateTime::createFromFormat('d/m/Y',$_POST['date_naissance']) ?: $_POST['date_naissance'];
            if (is_object($date_naissance)){
                $where[] = array(
                    'field' => 'dateNaissance',
                    'operator' => '=',
                    'value' => '"'.$date_naissance->format('Y-m-d').'"'
                );
            }
        }
        // nom
        if(isset($_POST['nom']) and !empty($_POST['nom'])){
            $nom = htmlspecialchars($_POST['nom']);
            $where[] = array(
                'field' => 'nom',
                'operator' => 'LIKE',
                'value' => '"%'.$nom.'%"'
            );
        }
        // prenom
        if(isset($_POST['prenom']) and !empty($_POST['prenom'])){
            $prenom = htmlspecialchars($_POST['prenom']);
            $where[] = array(
                'field' => 'prenom',
                'operator' => 'LIKE',
                'value' => '"%'.$prenom.'%"'
            );
        }
        // mail
        if(isset($_POST['mail']) and !empty($_POST['mail'])){
            $mail = htmlspecialchars($_POST['mail']);
            $where[] = array(
                'field' => 'email',
                'operator' => 'LIKE',
                'value' => '"%'.$mail.'%"'
            );
        }
        // telephone
        if(isset($_POST['tel']) and !empty($_POST['tel'])){
            $tel = htmlspecialchars($_POST['tel']);
            $where[] = array(
                'field' => 'tel',
                'operator' => 'LIKE',
                'value' => '"%'.$tel.'%"'
            );
        }
    }
    // ajout des conditions à la recherche
    foreach ($where as $key=>$wherecond){
        if($key==0){
            $sql .= ' WHERE ';
        } else {
            $sql .= ' AND ';
        }
        $sql .= implode(' ', $wherecond);
    }
    $sql .= ' LIMIT 0, 100';
    $results = $bdd->query($sql);
    $clients = $results->fetchAll();
    
/* ########## VUES ########## */
?>

<div class="wrapper container-fluid">
    <h2>Rechercher un client</h2>
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
                <label for="tel" class="col-sm-5 control-label">Téléphone</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="tel" name="tel" <?php if ($search){ echo 'value="'.$tel.'"';} ?> />
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <button type="submit" name="submit" class="btn btn-primary">Rechercher</button>
            <button type="reset" name="submit" class="btn btn-warning">Effacer le formulaire</button>
        </div>
    </form>
    <div class="space"></div>
    <p class="alert alert-info"><?php echo count($clients);?> résultats.</p>
    <table class="table well">
        <thead>
            <tr>
                <th>Id Astro</th>
                <th>Date d'inscription</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Mail</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($clients as $client){ ?>
            <tr>
                <td><?php echo $client['id_astro']; ?></td>
                <td><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $client['date_inscription'])->format('d/m/Y H:i'); ?></td>
                <td><?php echo $client['nom']; ?></td>
                <td><?php echo $client['prenom']; ?></td>
                <td><?php echo DateTime::createFromFormat('Y-m-d', $client['date_naissance'])->format('d/m/Y'); ?></td>
                <td><?php echo $client['email']; ?></td>
                <td><?php echo $client['tel']; ?></td>
            </tr>
        <?php } /* endforeach */ ?>
        </tbody>
    </table>
</div>