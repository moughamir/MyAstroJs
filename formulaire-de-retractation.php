<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Notre formulaire de Rétractation : Myastro</title>
	<meta name="description" content="My Astro : Voyance discount - Obtenez des réponses immédiates à toutes vos questions. Voyance discount." />

<?php include('include/header_inc.php'); ?>


<div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

            <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><h4 class="h4"><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Formulaire de rétractation</h4></li>
                                    </ul>
                                </div>
                                <div class="cat-widget-title"style="background:none;text-align:center;">
                                    
                                        <h3 itemprop="headline">Formulaire en ligne de rétractation</h3>
                                    
                                </div>

<!-- ------------------------------- CONTENU ------------------------------- -->

                        <div class="row-fluid">
                        <!-- main content -->
                        <div class="span6 form-retract" style="width:100%;"><br><br>
                            <form action="" method="post" id="retractation-form" >
                               
                                        <div>
                                            <div class="msg-conf hidden">
                                                <h3>Votre demande a bien été prise en compte</h3>
                                            </div>
                                        </div>
                                 
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <label for="prenom">Votre nom</label>
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre Nom..." required>
                                            </div>
                                            <div class="span6">
                                                <label for="prenom">Votre prénom</label>
                                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prénom..." required>
                                            </div>
                                        </div>
               
                                    <div class="row-fluid">
                                            <div class="span6">
                                                <label for="birthdate">Votre date de naissance</label>
                                                <input name="date_naissance" type="text" placeholder="Votre Date de Naissance jj/mm/aaaa" id="birthday" class="form-control control-date" required="frenchDate" data-rule-required="true" data-msg-required="Merci de renseigner votre date de naissance" required>
                                            </div>
                                            <div class="span6">
                                                <label for="mail">Votre email</label>
                                                <input name="mail" type="email" placeholder="Votre mail..." id="mail" class="form-control" required>
                                            </div>
                                    </div>
                                    <div class="row-fluid">
                                            <div class="span6">
                                                <label for="offre">Offre ou produit concerné</label>
                                                <input type="text" name="offre" id="offre" placeholder="Precisez l'offre ou le produit concerné..." class="form-control" required/>
                                            </div>
                                            <div class="span6">
                                                <label for="montant">Montant</label>
                                                <input type="text" name="montant" id="montant" placeholder="Le montant..." class="form-control" required/>
                                            </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span6">
                                                <label for="phone">Votre téléphone</label>
                                                <input type="text" name="phone" id="phone" placeholder="Votre téléphone..." class="form-control" required/>
                                        </div>
                                        <div class="span6">
                                                <label for="voyant">Voyant consulté</label>
                                                <input name="voyant" type="text" placeholder="Le voyant que vous avez consulté..." id="voyant" class="form-control" required>
                                        </div>
                                    </div><br>
                                    
                                <div class="row-fluid cdt">
                                        <label class="checkbox">
                                            <input type="checkbox" name="horoscope" required> Je certifie être l’auteur de la commande, du paiement et de la demande de rétractation.
                                        </label>
                                         <label class="checkbox">
                                            <input type="checkbox" name="partenaires" required> Je certifie l'exactitude des données indiquées ci-dessus.
                                        </label>
                                </div>
                                <div>
                                        <input type="submit" id="retr-subm" value="Envoyer" class="btn btn-info" />
                                </div>

                            </form>
                        </div>

                </div>

            </div>
                       
    </div>

</div>
    

<?php include('include/footer_inc_tarot.php'); ?>
<script >
        function ajax(url)
    {
        var xhr=null;
        
        if (window.XMLHttpRequest) { 
            xhr = new XMLHttpRequest();
        }
        else if (window.ActiveXObject) 
        {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
        //on appelle le fichier reponse.txt
        xhr.open("GET", url, false);
        xhr.send(null);
       
        return(xhr.responseText);
    }
            
    $("form").submit(function(){
        
  
        nom = $('input[name="nom"]').val();
        prenom = $('input[name="prenom"]').val();
        dateNaissance = $('input[name="date_naissance"]').val();
        email = $('input[name="mail"]').val();
        offre = $('input[name="offre"]').val();
        montant = $('input[name="montant"]').val();
        phone = $('input[name="phone"]').val();
        voyant = $('input[name="voyant"]').val();
        url = ajax('mail/retractation.php?nom='+nom+'&prenom='+prenom+'&date_naissance='+dateNaissance+'&mail='+email+'&offre='+offre+'&montant='+montant+'&phone='+phone+'&voyant='+voyant);
    
    
        if(url == "ok"){
            $(".msg-conf").removeClass("hidden");
        }
    });

    </script>