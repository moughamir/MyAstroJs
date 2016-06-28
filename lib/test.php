<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
include('../include/tools.php');    
include('Swift-5.0.3/lib/swift_required.php');

$smartFocus = new SmartFocus(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST),new Compteur());
?>
<h1>Test SOAP client EMV</h2>

<pre>
<?php 
/*	var_dump($smartFocus->insert('julien.testAPI@gmail.com', array('FIRSTNAME' => 'API','LASTNAME' => 'TEST')));
	var_dump($smartFocus->getStatus())*/
	var_dump($smartFocus->processTask());

?>
</pre>