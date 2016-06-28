<?php // yyadmin/stats-gestion-campagnes.php

/* ##### INITIALISATION ##### */
    require_once('inc/init.php');
    
    /* --- Contrôle sécurité --- */
    secure(array('superadministrateur','SEO'));
    
    /* --- Récupération des données --- */
    $tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
    
/* ####### EXECUTION ####### */
    /* --- Traitement des requêtes AJAX --- */
    $update = null;
    if(isset($_GET['update'])){
        $update = true;
        $id_campain = intval($_GET['update']);
        $campain = $tracker->getCampainById($id_campain);
    }

    $updTracker = null;
    if(isset($_POST['updTracker'])){
        $enable = isset($_POST['enable']);
        $updTracker = $tracker->updateTracker($_POST['id'],$_POST['tracker'],$_POST['campain'],$_POST['idcampain'],$enable);
        if($updTracker!==false){
            $update=null;
            $updTracker = $_POST['campain'];
        }
    }
    
    $addTracker = null;
    if(isset($_POST['addTracker'])){
        $id_tracker = $tracker->addTracker($_POST['tracker'],$_POST['campain'],$_POST['idcampain']);
        if($id_tracker){
            $addTracker = $_POST['campain'];
        } else {
            $addTracker = false;
        }
    }
    
    $campainList = $tracker->getCampainList();
    
/* ###### VUE ###### */

    include('inc/header.php');
?>
<div class="wrapper container-fluid">
    <h2>Gestion des Campagnes</h2>
    
    <!--
    <div class="alert alert-warning">
        Les Urls sont toutes à donner avec le paramètre <b>?r=tracker</b><br/>
        <small>Exemple pour google analytics sur Myastro : http://www.myastro.fr?r=goo</small>
    </div>
    -->
    <?php if($addTracker===false){ ?>
    <div class="alert alert-danger">Une erreur est survenue lors de l'ajout.</div>
    <?php } elseif($addTracker!==null){?>
    <div class="alert alert-success">La campagne « <?= $addTracker ?> » a bien été ajoutée.</div>
    <?php } ?>
    
    <?php if($updTracker===false){ ?>
    <div class='alert alert-danger'>Une erreur est survenue lors de la modification.</div>
    <?php } elseif($updTracker!==null){?>
    <div class='alert alert-success'>La campagne « <?= $updTracker ?> » a bien été modifiée.</div>
    <?php } ?>
    
<!--        <div class="panel panel-danger">
            <a class="panel-heading" href="/yyadmin/download.php?q=campain&m=all" target="_blank">
                <i class="glyphicon glyphicon-download-alt"></i>
                Télécharger les campagnes
            </a>
        </div>-->

<?php if ($update!==null){ ?> <!-- #### FORMULAIRE MODIF #### -->
    <form id="updateTracker" action="<?= $_SERVER['PHP_SELF']?>" method="post" class="form-horizontal">
        <div id="modifier" class="panel panel-primary">
            <a class="panel-heading">
                <i class="glyphicon glyphicon-pencil"></i>
                Modifier une campagne
            </a>
            <div class="panel-body">
    <?php if($campain===null){ ?>
                <div class='alert alert-success'>Campagne non trouvée.</div>
    <?php } else { ?>
                <div class="row form-group">
                    <label for="id" class="col-sm-3 control-label">ID interne</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="id" id="id" value="<?= $campain->id ?>" readonly />
                    </div>
                </div>
                <div class="row form-group">
                    <label for="tracker" class="col-sm-3 control-label">Tracker</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="tracker" id="tracker" value="<?= $campain->tracker ?>" />
                    </div>
                </div>
                <div class="row form-group">
                    <label for="campain" class="col-sm-3 control-label">Nom de la campagne</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="campain" id="campain" value="<?= $campain->campain ?>" />
                    </div>
                </div>
                <div class="row form-group">
                    <label for="idcampain" class="col-sm-3 control-label">Identifiant Adwords</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="idcampain" id="idcampain" value="<?= $campain->idcampain ?>" />
                    </div>
                </div>
                <div class="row form-group" style="text-align: center">
                    <label for="enable">
                        <input type="checkbox" class="form-control ace" name="enable" value="1" id="enable" <?= $campain->enable ? 'checked' : '' ?> />
                        <span class="lbl"></span>
                        Apparait dans le rapport adwords (Activée)
                    </label>
                </div>
                <div style="text-align: center;">
                    <button type="submit" name="updTracker" class="btn btn-warning">Modifier</button>
                    <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-danger">Annuler</a>
                </div>
    <?php } ?>
            </div>
        </div>
    </form>
<?php } else { ?> <!-- #### FORMULAIRE AJOUT #### -->
    <form action="" method="post" class="form-horizontal">
        <div id="ajouter" class="panel panel-primary">
            <a class="panel-heading" data-toggle="collapse" data-target="#ajouter .panel-body">
                <i class="glyphicon glyphicon-plus"></i>
                Ajouter une campagne
            </a>

            <div class="panel-body collapse">
                <div class="row form-group">
                    <label for="tracker" class="col-sm-3 control-label">Tracker</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="tracker" id="tracker" value="" />
                    </div>
                </div>
                <div class="row form-group">
                    <label for="campain" class="col-sm-3 control-label">Nom de la campagne</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="campain" id="campain"/>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="idcampain" class="col-sm-3 control-label">Identifiant Adwords</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="idcampain" id="idcampain"/>
                    </div>
                </div>
<!--                <label>
                        Rattacher le tracker à un groupe : <br />
                        <?= $tracker->getGroupSelect() ?>
                </label>-->
                <div style="text-align: center;">
                    <button type="submit" name="addTracker" class="btn btn-success">Ajouter</button>
                </div>
            </div>
        </div>
    </form>
<?php } ?>
    
    <div class="panel panel-info tab-content">
        <h4 class="panel-heading">
            Liste des campagnes
            <span class="label label-info pull-right">
                <?php echo count($campainList); ?> résultats
            </span>
        </h4>
        <table id="campain_<?= $key ?>" class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th>ID interne</th>
                    <th>ID adwords</th>
                    <th>Tracker</th>
                    <th>Campagne</th>
                    <th>Groupe</th>
                    <th>Activée</th>
                    <th></th>
		</tr>
            </thead>
            <tbody>
            <?php foreach($campainList as $campain){ ?>
                <tr>
                    <td><?= $campain->id ?></td>
                    <td><?= $campain->idcampain ?></td>
                    <td><?= $campain->tracker ?></td>
                    <td><?= $campain->campain ?></td>
                    <td><?= ( $tracker->getGroupNameFromId($campain->group) == null ) ? 'Aucun' : $tracker->getGroupNameFromId($campain->group) ?></td>
                    <td>
                        <?php if ($campain->enable) { ?>
                        <span class="badge label-success">OUI</span>
                        <?php } else { ?>
                        <span class="badge label-danger">NON</span>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="<?= $_SERVER['PHP_SELF'] ?>?update=<?= $campain->id ?>" class="btn btn-xs btn-warning" title="Modifier la campagne">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
	</table>
    </div>
<?php
    include('inc/footer.php');
?>