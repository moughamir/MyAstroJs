<?php // yyadmin/stats.php

/* ##### INITIALISATION ##### */
    require_once('inc/init.php');
    
    /* --- Contrôle sécurité --- */
    secure(array('superadministrateur','SEO'));
    
    /* ----- Configuration -----  */ 
    $tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
    // Définition par défaut des dates
    $startDate = new DateTime("sunday 1 weeks ago");
    $endDate = new DateTime("last saturday 23:59:59");
    
    /* ####### EXECUTION ####### */
    // Traitement de la requête
    $req = $_POST;
    if(isset($req['submit'])){
        $formatdate = 'd/m/Y H:i:s';
        $verifdate = '#^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/(19|20)\d\d$#';
        if(preg_match($verifdate, $req['startdate'])){
            $startDate = DateTime::createFromFormat($formatdate, $req['startdate'].' 00:00:00');
        }
        if(preg_match($verifdate, $req['enddate'])){
            $endDate = DateTime::createFromFormat($formatdate, $req['enddate'].' 23:59:59');
        }
    }
    
    /* --- Récupération des données --- */
    $fstartDate = $startDate->format('Y-m-d H:s');
    $fendDate = $endDate->format('Y-m-d H:s');
    $campains = isset($req['campains'])
        ? $tracker->getStatsByCampainFilters($req['campains'], $fstartDate, $fendDate)
        : $tracker->getStatsByCampain($fstartDate, $fendDate);
    
    $sources = $tracker->getStatsBySources($fstartDate, $fendDate, isset($req['sources']) ? $req['sources'] : array() );
    
    $website = isset($req['website']) ? $req['website'] : 1 ; // 1 = MyAstro par défaut
    $campainsPerWebsite = $tracker->getStatsByCampainPerWebsite($website, $fstartDate, $fendDate);
    
/* ########## VUE ########## */
    include('inc/header.php');
    $emptyDataHtml = '<div class="alert alert-warning"><i class="glyphicon glyphicon-warning-sign"></i> Aucune donnée disponible pour la période / le site selectionné(e).</div><br>';
?>
<form action="" method="post" class="form-inline">
    <h2>
        Statistiques des Campagnes
        <div class="pull-right">
            <div class="form-group">
                <label for="startDate">Du </label>
                <input type="text" name="startDate" id="startDate" value="<?= $startDate->format('d/m/Y') ?>" class="datepicker form-control form-inline" />
            </div>
            <div class="form-group">
                <label> au </label>
                <input type="text" name="endDate" id="endDate" value="<?= $endDate->format('d/m/Y') ?>" class="datepicker form-control form-inline" />
            </div>
            <button class="btn btn-primary btn-small" type="submit" >
                <i class='glyphicon glyphicon-search'></i>
            </button>
        </div>
    </h2>

    <div class="graphique">
        <!-- ||||||||| -->
	<h3 class="well">Par Site
            <div class="pull-right">
                <select name="website" class="form-control">
<?php 
        foreach($tracker->getWebsiteList() as $site){
                $selected = ($website == $site->id) ? 'selected="selected"' : '' ;
                echo '<option value="'.$site->id.'" '.$selected.'>'.$site->name.'</option>';
        }
?>
                </select>
                <button class="btn btn-primary btn-small">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </h3>
        <div id="graph-campains-per-website">
<?php 
        if(empty($campainsPerWebsite)){
            echo $emptyDataHtml;
        }
?>
        </div>
        <!-- ||||||||| -->
        <h3 class="well">Par Campagnes
            <div class="pull-right">
<?php 
        echo $tracker->getSelectFilterCampains((isset($_POST['campains'])) ? $_POST['campains'] : array());
?>
                <button class="btn btn-primary btn-small">
                    <i class='glyphicon glyphicon-search'></i>
                </button>
            </div>
        </h3>
        <div id="graph-campains">
<?php 
        if(empty($campains)){
            echo $emptyDataHtml;
	}
?>
        </div>
        <!-- ||||||||| -->
	<h3 class="well">Par Source
            <div class="pull-right">
<?php 
        echo $tracker->getSelectFilterSources((isset($_POST['sources'])) ? $_POST['sources'] : array());
?>
                <button class="btn btn-primary btn-small">
                    <i class='glyphicon glyphicon-search'></i>
                </button>
            </div>
        </h3>
        <div id="graph-sources">
<?php 
        if(empty($sources)){
            echo $emptyDataHtml;
        }
?>
        </div>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function(){
        $.jqplot.config.enablePlugins = true;
        // ----- CAMPAINS
        var Campains = [
<?php
    $i = 0;
    foreach($campains as $key => $campain){
        if(is_object($campain)){
            $name = ($campain->campain == null) ? 'Non définie' : $campain->campain;
            echo '["'.$name.'",'.$campain->many.']';
        } else {
            $name = $tracker->getWebsiteCampain($key);
            echo '["'.$name.'",'.$campain.']';
        }
        if($i<count($campains)-1){
            echo ',';
        }
        $i++;
    }
?>
        ];
        // ----- SOURCES
        var Sources = [
<?php
    $i = 0;
    foreach($sources as $source){
        $name = ($source->source == null) ? 'Non définie' : $source->source;
        echo '["'.$name.'",'.$source->many.']';
        if($i<count($sources)-1){
            echo ',';
        }
        $i++;
    }
?>
        ];
        // ------ CAMPAINS PER WEBSITE
        var barValues = [
<?php
    $i = 0;
    foreach($campainsPerWebsite as $r){
        echo $r->total;
        if($i<count($campainsPerWebsite)-1){
            echo ',';
        }
        $i++;
    }
?>
        ];
        var ticks = [
<?php
    $i = 0;
    foreach($campainsPerWebsite as $r){
        echo ( isset($r->campain) ) ? '"'.$r->campain.'"' : '"Non définie"' ;
        if($i<count($campainsPerWebsite)-1){
            echo ',';
        }
        $i++;
    }
?>
        ];
        
        var plot1 = jQuery.jqplot ('graph-campains', [Campains], { 
            seriesDefaults: {
                renderer: jQuery.jqplot.PieRenderer, 
                rendererOptions: { showDataLabels: true }
            },
            cursor :{
                show: true,
                showTooltip: true,      // show a tooltip showing cursor position.
                followMouse: true,     // wether tooltip should follow the mouse or be stationary.
            },
            legend: { show:false, location: 'e' },
            highlighter: { show: true }
        });

        $("#graph-campains").bind('jqplotDataHighlight', function(ev, seriesIndex, pointIndex, data) {
            var $this = $(this);                
            $this.attr('title', data[0] + ": " + data[1]);                               
        });
        
        $("#graph-campains").bind('jqplotDataUnhighlight', function(ev, seriesIndex, pointIndex, data) {
            var $this = $(this);                
            $this.attr('title',""); 
        });
        
        var plot2 = jQuery.jqplot ('graph-sources', [Sources], {
            seriesDefaults: {
                renderer: jQuery.jqplot.PieRenderer,
                rendererOptions: { showDataLabels: true }
            },
            legend: { show:true, location: 'e' },
            highlighter: { show: true }
        });
        
        $("#graph-sources").bind('jqplotDataHighlight', function(ev, seriesIndex, pointIndex, data) {
            var $this = $(this);                
            $this.attr('title', data[0] + ": " + data[1]);                               
        }); 
        
        $("#graph-sources").bind('jqplotDataUnhighlight', function(ev, seriesIndex, pointIndex, data) {
            var $this = $(this);                
            $this.attr('title',""); 
        });

<?php if(!empty($campainsPerWebsite)){ ?>
        var plot3 = $.jqplot('graph-campains-per-website', [barValues], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                shadowAngle: 135,
                rendererOptions :{
                    barDirection: 'horizontal',
                    varyBarColor: true
                },
                pointLabels: { show: true }
            },
            legend: { show:false, location: 'e' },
            axes: {
                yaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
            highlighter: { show: true }
        });
<?php } ?>
    });
</script>

<?php
    include('inc/footer.php');
?>