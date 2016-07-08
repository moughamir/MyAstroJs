<?php
	require('inc/init.php');
	
	$db_link = mysql_connect(DBHOST,DBLOGIN,DBPASS,'myastrosqlfor');
	mysql_select_db('myastrosqlfor');
        
        include('inc/header.php');
?>
            
            <div id="fil">
            Vous êtes ici
			<span>»</span>
			<a href="http://<?= ROOT_URL ?>/yyadmin/">Accueil</a>
			<span>»</span>
			
			<a href="http://<?= ROOT_URL ?>/yyadmin/liste-des-contacts.php">liste-des-contacts</a>
			</div>
</div>
            
        </div>  
	
        
    </div>    
	<div id="title"><h1>Liste des contacts</h1></div>	
</div>

<?php if(isset($_GET['rub']) && !empty($_GET['rub'])) { 
echo '<div id="title"><h1>'.ucfirst(str_replace("-", " ", $_GET['rub'])).'</h1></div>'; } ?>

<div id="global">
<div id="global2">
<div id="globalContent">
	<?php
	
	if(isset($_GET['page'])){ 
		$page=$_GET['page']; 
	}
	else{ 
		$page=1; 
	}
	$_SESSION['page'] = $page;
	$fin              = 20 * $page;
	$debut            = $fin - 20;
	
	if($_SESSION['page'] <= 1) { $_SESSION['page'] = 1; }
	
	
	$req_compte = mysql_query("SELECT count(*) id FROM contact") or die(mysql_error());
	$tablo_req_compte = mysql_fetch_assoc($req_compte);
	$resultat = $tablo_req_compte['id'];
	
	$req = mysql_query("SELECT * FROM contact ORDER BY id DESC LIMIT $debut,20") or die(mysql_error());
	
	if(empty($_GET['id']))	
	{
	?>
<script type="text/javascript">
function delete_x_Messages(){
var i = 1;
var ok = 0;
var first = 1;
msg_str = '';

while(ligne = document.getElementById('check_box_id_'+i))
{
	if(ligne.checked)
	{
		ok = 1;
		if(!first)
		{
			msg_str += ',' + ligne.value;
		}
		else
		{
			msg_str += ligne.value;
			first = 0;
		}
	}
	i = i+1;
}

if(ok == 1)
{
	if(confirm("Êtes-vous sûr de vouloir supprimer le(s) messages(s) "+msg_str+" ? ATTENTION, cette action est irréversible !"))
	{
		envoi_requete(msg_str);
		
	}
}
}

function envoi_requete(msg_str) 
{ 
	var xhr_object = null;
	
	if(window.XMLHttpRequest) // Firefox et autres
	   xhr_object = new XMLHttpRequest(); 
	else if(window.ActiveXObject)
	{ // Internet Explorer 
	   try 
		{
                	xhr_object = new ActiveXObject("Msxml2.XMLHTTP");
            	}
	   catch (e) 
		{
                xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
            	}
	}

	else 
	{ // XMLHttpRequest non supporté par le navigateur
		alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
		return;
	}

	var method   = "POST";
	var filename = "http://www.myastro.fr/del_mult_contacts.php";
	var data     = "data_to_delete=" + msg_str;
// Fonction Synchrone -- open(xx,xx,false) -- on attend le resultat de la requete avant d'aller plus loin

	xhr_object.open(method, filename, false);
	

//	xhr_object.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");
	xhr_object.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");

	xhr_object.send(data);

self.location = "http://www.myastro.fr/yyadmin/liste-des-contacts.php?page=<?= $_SESSION['page'] ?>";

alert(xhr_object.responseText); 
return(0);
}
</script>	
       <div class="indexation" style="text-align:justify; margin: 25px 0;line-height:30px">
        Page : 
        <?php
        
        $page_total = ceil($resultat/20);
        $constante = 0;
        while($constante < $page_total)	
		{
            $constante++;
            echo '<a href="./liste-des-contacts.php?page='.$constante.'">';
            if($page == $constante)	{ echo '<span style="color:#FF0000;">'; }
            echo $constante;
            if($page == $constante)	{ echo '</span>'; }
            echo '</a> ';
        }
        ?>
    
        </div>
        <table width="1000" cellspacing="0" cellpadding="5" border="0">
        
        <thead>
        <tr align="center">
            <th width="40">Id</th>
            <th width="80">Date</th>
            <th width="80">Nom</th>
            <th width="80">Pr&eacute;nom</th>
            <th width="80">Mail</th>
            <th width="80">Tel</th>
            <th width="80">Sujet</th>
            <th width="650">Message</th>
            <th width="30">Supp</th>
        </tr>
        </thead>
        <?php
	$i = 0;
        while($tablo_req = mysql_fetch_assoc($req))	
        {
	$i += 1;
        ?>
        
        <tr>
            <td><?php echo html_entity_decode(stripslashes($tablo_req['id']));?></td>
            <td><?php echo ret_date($tablo_req['date']);?></td>
            <td><?php echo html_entity_decode(stripslashes($tablo_req['nom']));?></td>
            <td><?php echo html_entity_decode(stripslashes($tablo_req['prenom']));?></td>
            <td><?php echo html_entity_decode(stripslashes($tablo_req['mail']));?></td>
            <td><?php echo html_entity_decode(stripslashes($tablo_req['tel']));?></td>
            <td><?php echo html_entity_decode(stripslashes($tablo_req['sujet']));?></td>
            <td><?php $texte = @ereg_replace("\r\n","<br />",$tablo_req['message']); echo html_entity_decode(stripslashes($texte)); ?></td>
	    <td><input type=checkbox id=check_box_id_<?= $i; ?> value=<?= $tablo_req["id"]; ?>></td>

<?php
/*            <td style=" text-align: center;"><a href="./<?php echo $_GET['rub']; ?>/<?php echo $_GET['main']; ?>/<?php echo $tablo_req['id']; ?>/">x</a></td>
*/
?>
        </tr>
        
        <?php } ?>
		<tr><td colspan=9 style="text-align:right;Font-size:14px">Cliquez ici pour supprimer les messages --> <a href="javascript:delete_x_Messages()" title="Supprimer les messages "><img src="/images/Delete.png" style="vertical-align:middle;"></a></td></tr>

        </table>
	
        <br /><br />
        
       <div class="indexation" style="text-align:justify; margin: 25px 0;line-height:30px">
        Page : 
        <?php
        
        $page_total = ceil($resultat/20);
        $constante = 0;
        while($constante < $page_total)	
		{
            $constante++;
            echo '<a href="./liste-des-contacts.php?page='.$constante.'">';
            if($page == $constante)	{ echo '<span style="color:#FF0000;">'; }
            echo $constante;
            if($page == $constante)	{ echo '</span>'; }
            echo '</a>';
        }
        ?>
    
        </div>
    
    <?php
	}
	
	
	if(isset($_GET['id']) && !empty($_GET['id']))	
	{	
		if(isset($_GET['confirm']) && $_GET['confirm'] == 1)	
		{	
			if(mysql_query("DELETE FROM contact WHERE id='".$_GET["id"]."'"))
			{
				echo '<div class="error">Le message de contact a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.<br /><br />
					  <a href="./'.$_GET['rub'].'/'.$_GET['main'].'?page='.$_SESSION['page'].'">Retour &agrave; la liste des messages</a></div>';
			}
			else
			{
				echo '<div class="error">Erreur lors de la suppression du message.</div>';
			}
		}
		else
		{
			echo '<div class="error">Etes vous sur de vouloir supprimer le message #'.$_GET['id'].' ? <br /><br />
				  <p class="indexation">
				  	<a href="./'.$_GET['rub'].'/'.$_GET['main'].'/'.$_GET['id'].'/1/">Ok</a>
				  	<a href="./'.$_GET['rub'].'/'.$_GET['main'].'/">Annuler</a>
				  </p>
				  </div>';
		}
	}		
	mysql_close($db_link);
	?>

		
</div>
</div>
</div>

<div id="footer">
	
    Espace administration <?php echo $companySite; ?>
    
</div>



</body>
</html>