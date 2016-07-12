<?php if (isset($_SESSION['conversion']) && $_SESSION['conversion'] == 1 and $_SESSION['affiliation'] == 'adwords'){ ?>
<!-- Conversion tag Adwords Asynchrone -->
<!-- Google Code for MY ASTRO QUESTION INSCRIPTION Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    window.google_trackConversion({
        google_conversion_id : 1024378253,
        google_conversion_language : "fr",
        google_conversion_format : "1",
        google_conversion_color : "ffffff",
        google_conversion_label : "arTgCM2fhAMQjYu76AM",
        google_remarketing_only : false
    });
    /* ]]> */
</script>
<?php } 
    unset($_SESSION['conversion']);
?>

