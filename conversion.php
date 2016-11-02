<?php
    session_start();
    $redirection = $_SESSION['redirection'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Chargement en cours</title>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php
    include('include/conversion/adwords.php');
    include('include/conversion/facebook.php');
?>
        <script type="text/javascript">
            var url = "<?= $redirection ?>";
            $(window).load(function() {
                document.location.replace(url);
            });
        </script>
    </body>
</html>