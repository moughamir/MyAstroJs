<?php
$annee = date('Y');
echo 
'<script type="text/javascript"> var _videodesk= _videodesk || {}; _videodesk[\'firstname\'] = \'\' ; _videodesk[\'lastname\'] = \'\' ; _videodesk[\'company\'] = \'\' ; _videodesk[\'email\'] = \'\' ; _videodesk[\'phone\'] = \'\' ; _videodesk[\'customer_lang\'] = \'\' ; _videodesk[\'customer_id\'] = \'\' ; _videodesk[\'customer_url\'] = \'\' ; _videodesk[\'cart_id\'] = \'\' ; _videodesk[\'cart_url\'] = \'\' ; _videodesk[\'uid\'] = \'1f26f319feb40da4ee2861bc06672754\' ; _videodesk[\'lang\'] = \'fr\' ; (function() { var videodesk = document.createElement(\'script\'); videodesk.type = \'text/javascript\'; videodesk.async = true; videodesk.src = (\'https:\' == document.location.protocol ? \'https://\' : \'http://\') + \'module-videodesk.com/js/videodesk.js\'; var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(videodesk, s); })(); </script>';
?>
<table width="100%" border="0" cellpadding="2">
  <tr>
    <td>
      <a href="http://<?= ROOT_URL ?>/horoscope-<?= $annee;?>" class="btn-theme">Horoscope <?= $annee;?></a>
      <a href="http://<?= ROOT_URL ?>/horoscope-du-jour" class="btn-theme">Horoscope du jour</a>
      <a href="http://<?= ROOT_URL ?>/horoscope-de-la-semaine" class="btn-theme">Horoscope de la semaine</a>
      <a href="http://<?= ROOT_URL ?>/horoscope-du-mois" class="btn-theme">Horoscope du mois</a>
      <a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour" class="btn-theme">Horoscope de l’amour</a>
    </td>
  </tr>
</table>










