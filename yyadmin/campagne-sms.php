<?php
require('inc/init.php');
require_once('../sms/myastro-sms.php');

$A_on_off = array(0 => 'Off', 1 => 'On');

include('inc/header.php');
?>

<!-- Détails de la configuration des campagnes de SMS -->
<div class="wrapper container-fluid">
	<h2 style="color:#428bca;font-size:16px">Configuration des SMS automatisés</h2>
	<table border="1" style="border-color:#428bca">
		<thead>
			<tr>
				<th>SMS</th>
				<th>Texte</th>
				<th>On/off</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Inscription</td>
				<td><?= INSCRIPTION_1 ?></td>
				<td><?= $A_on_off[INSCRIPTION_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>Flash 1</td>
				<td><?= FLASH_1 ?></td>
				<td><?= $A_on_off[FLASH_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>Flash 11</td>
				<td><?= FLASH_11 ?></td>
				<td><?= $A_on_off[FLASH_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>Flash 2</td>
				<td><?= FLASH_2 ?></td>
				<td><?= $A_on_off[FLASH_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>Flash 24</td>
				<td><?= FLASH_24 ?></td>
				<td><?= $A_on_off[FLASH_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>Flash 3 </td>
				<td><?= FLASH_3 ?></td>
				<td><?= $A_on_off[FLASH_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>Flash 4</td>
				<td><?= FLASH_4 ?></td>
				<td><?= $A_on_off[FLASH_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>Flash 73 </td>
				<td><?= FLASH_73 ?></td>
				<td><?= $A_on_off[FLASH_ACTIVATED] ?></td>
			</tr>
			<tr>
				<td>SMS J + 1</td>
				<td><?= J_PLUS_UN_1 ?></td>
				<td><?= $A_on_off[SMS_J_PLUS_1_ACTIVATED] ?></td>
			</tr>
		</tbody>
	</table>

</div>