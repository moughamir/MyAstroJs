<?php

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="shortcut icon" href="images_landing/prevision-2017/favicon.ico">
    <title>Prévisions année 2017</title>
    <link rel="stylesheet" href="css/prevision-2017.css" >
</head>
<body>
<p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
<!-- #### SCRIPTS #### -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/formValidator.js"></script>
<!-- #### REMARKETINGS #### -->
<?php
include('include/remarketing/adwords.php');
include('include/remarketing/analytics.php');
include('include/remarketing/facebook.php');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css"/>
</body>
</html>
