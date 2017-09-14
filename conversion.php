<?php
    session_start();
    $redirection = isset($_SESSION['redirection']) ? $_SESSION['redirection'] : 'NULL';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Chargement en cours</title>
        <style>
            p {
                padding-top: 20px;
                padding-bottom: 26px;
                background-color: #DEF0D8;
                color: #448A44;
                text-align: center;
                font-family: "Segoe UI", Arial, sans-serif;
                font-size: 16px;
            }
            img {
                position: relative;
                top: 4px;
            }
        </style>
    </head>
    <body>
        <p>
            <b><img src="/images/success-spinner.gif" /> Inscription complétée.</b>
            Vous allez être redirigé.
        </p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php
    include('include/conversion/adwords.php');
    include('include/conversion/facebook.php');
    include('include/conversion/taboola.php');
    include('include/conversion/hamedia.php');
?>
        <script type="text/javascript">
            var url = "<?= $redirection;?>";
            $(window).load(function() {
                if(url !== 'NULL'){
                    document.location.replace(url);
                }
            });
        </script>
    </body>
</html>