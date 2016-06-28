<?php
if(isset($_POST['demande_rappel']) && empty($_POST['antisp']) && !isset($_SESSION['demanderappel']) && !empty($id_astro)){
    
    $destinataire = 'standard.kgcom@gmail.com,thierno.kgcom@gmail.com';
    $objet        = utf8_decode('[MYASTRO - '.$support.'] - '.$_POST['prenom'].' - '. uniqid());
    $email        = 'contact@myastro.fr';
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
    $headers .= 'From: Myastro - Demande de rappel  <'.$email.'>'."\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    
    $message = '
        <table>
            <tr>
                <td>ID Astro : </td>
                <td>'.$id_astro.'</td>
            </tr>
            <tr>
                <td>Prénom : </td>
                <td>'.$_POST['prenom'].'</td>
            </tr>
            <tr>
                <td>Téléphone : </td>
                <td>'.$_POST['tel'].'</td>
            </tr>
            <tr>
                <td>Pays : </td>
                <td>'.$_POST['pays'].'</td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>'.$email_user.'</td>
            </tr>
            <tr>
                <td>Site : </td>
                <td>MyAstro</td>
            </tr>
            <tr>
                <td>Source : </td>
                <td>'.$source_affil.'</td>
            </tr>
            <tr>
                <td>Page : </td>
                <td>'.$page.'</td>
            </tr>';

    if(isset($_POST['gclid']) && !empty($_POST['gclid'])){
        $message .= '
            <tr>
                <td>Gclid : </td>
                <td>'.$_SESSION['gclid'].'</td>
            </tr>';
    }
    
    $message .= '
            <tr>
                <td>Support : </td>
                <td>'. $support .'</td>
            </tr>';
        
    if(!empty($voyant)){
        $message .= '
            <tr>
                <td>Voyant : </td>
                <td>'.$voyant.'</td>
            </tr>';
    }
    if(isset($_POST['campagne']) && !empty($_POST['campagne'])){
        $message .= '
            <tr>
                <td>Code promo : </td>
                <td>'.$_POST['campagne'].'</td>
            </tr>';
    }
    
    $message .= '
        </table>';

    if(mail($destinataire, $objet, $message, $headers)){
        echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
        $_SESSION['demanderappel'] = true;
    } else {
        echo '<p class="erreur_envoye">Votre message n\'a pas été correctement envoyé</p>';
    }
    
} else if(isset($_SESSION['demanderappel'])){
    echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
} else if(!isset($_SESSION['demanderappel']) && empty($id_astro)){
    echo '<p class="message_envoye">Votre demande de rappel a déjà été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
}
