<?php
if(isset($_POST['demande_rappel']) && empty($_POST['antisp']) && !isset($_SESSION['demanderappel'])){
    $destinataire = 'standard.kgcom@gmail.com,thierno.kgcom@gmail.com';
    $sujet        = utf8_decode('['.$objet.' - '.$support_obj.'] - '.htmlentities(strip_tags($_POST['prenom'])).' - '.uniqid());
    $email        = 'contact@myastro.fr';
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
    $headers .= 'From: Myastro - Demande de rappel  <'.$email.'>'."\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";

    $message = '
        <table>
            <tr>
                <td>ID Astro : </td>
                <td>'.$idastro.'</td>
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
                <td>'.$site.'</td>
            </tr>
            <tr>
                <td>Source : </td>
                <td>'.$source_affil.'</td>
            </tr>
            <tr>
                <td>Page : </td>
                <td>'.$url.'</td>
            </tr>';

    if(!empty($gclid) && ($source_affil != "Naturel")){
        $message .= '
            <tr>
                <td>Gclid : </td>
                <td>'.$gclid.'</td>
            </tr>';
    }
    
    $message .= '
            <tr>
                <td>Support : </td>
                <td>MAILING</td>
            </tr>';
        
    if(!empty($voyant)){
        $message .= '
            <tr>
                <td>Voyant : </td>
                <td>'.$voyant.'</td>
            </tr>';
    }
    
    if(isset($campagne) && !empty($campagne)){
        $message .= '
            <tr>
                <td>Code promo : </td>
                <td>'.$campagne.'</td>
            </tr>';
    }
    
    $message .= '
        </table>';

    if(mail($destinataire, $sujet, $message, $headers)){
        echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
        $_SESSION['demanderappel'] = true;
    } else {
        echo '<p class="erreur_envoye">Votre message n\'a pas été correctement envoyé</p>';
    }
    
} elseif(isset($_SESSION['demanderappel'])){
    echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
}
