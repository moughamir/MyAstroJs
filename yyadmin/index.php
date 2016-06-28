<?php // yyadmin/index.php

    require('inc/init.php');
    
    /* ###### VUE ###### */
    include('inc/header.php');
?>
<div class="jumbotron">
    <h2>Bonjour <?php echo $_SESSION['prenom']; ?>,</h2>
    <p>Bienvenue sur votre interface de gestion et d'administration.</p>
</div>
<?php
    include('inc/footer.php');
?>


