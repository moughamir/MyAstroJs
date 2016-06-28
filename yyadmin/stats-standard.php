<?php
	require('inc/init.php');

	$tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	$startDate = (isset($_POST['startDate'])) ? $_POST['startDate'] : date('Y-m-d 00:00:00');
	$endDate   = (isset($_POST['endDate'])) ? $_POST['endDate'] : date('Y-m-d H:i:s');
	$website   = (isset($_POST['website'])) ? $_POST['website'] : 1 ; // 1 = MyAstro
	$amountPerWebsite = $tracker->getAmountPerWebsite($website,$startDate,$endDate);
        
        
	include('inc/header.php');
?>
<div class="wrapper">
	<form action="" method="post">
	<h4>
		Du <input type="text" name="startDate" data-start='start' value="<?= $startDate ?>" class="datepicker form-control form-inline" /> au <input type="text" name="endDate" value="<?= $endDate ?>" class="datepicker form-control form-inline" />
		<button class="btn btn-primary btn-small" >
			<i class='glyphicon glyphicon-search'></i>
		</button>
	</h4>
	<div class="graphique">
		<h3>Retour Monétaire par Site et par Campagnes:</h3>
		<div class="input-group">
			<select name="website" class="form-control">
				<?php 
					foreach($tracker->getWebsiteList() as $site){
						$selected = ($website == $site->id) ? 'selected="selected"' : '' ;
						echo '<option value="'.$site->id.'" '.$selected.'>'.$site->name.'</option>';
					}
				?>
			</select>
			<div class="input-group-btn">
				<button class="btn btn-primary btn-small">
					<i class='glyphicon glyphicon-search'></i>
				</button>
			</div>
		</div>
		<?php 
			if(empty($amountPerWebsite)){
				echo "<div class='alert alert-warning'> <i class='glyphicon glyphicon-warning-sign'></i> Auncune donnée disponible pour la période / site selectionné(e) </div>";
			}
		?>
		<div id="graph-amount-per-website">
	
		</div>
	</div>
	</form>
	<script type="text/javascript">
            
                $(document).ready(function(){
	<?php 
			if(!empty($amountPerWebsite)){
	?>
	// ------ CAMPAINS PER WEBSITE
			  var barValues = [
			  <?php
			    	$i = 0;
			    	foreach($amountPerWebsite as $r){
			    		echo $r->total;
			    		if($i<count($amountPerWebsite)-1){
			    			echo ',';
			    		}
			    		$i++;
			    	}
			  ?>
			  ];
        	  var ticks = [
        	  <?php
			    	$i = 0;
			    	foreach($amountPerWebsite as $r){
			    		echo ( isset($r->campain) ) ? '"'.$r->campain.'"' : '"Non définie"' ;
			    		if($i<count($amountPerWebsite)-1){
			    			echo ',';
			    		}
			    		$i++;
			    	}
			  ?>
        	  ];
        	  var plot1 = $.jqplot('graph-amount-per-website', [barValues], {
	            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
	            animate: !$.jqplot.use_excanvas,
	            seriesDefaults:{
	                renderer:$.jqplot.BarRenderer,
	                pointLabels: { show: true },
	                rendererOptions :{
	                	varyBarColor: true
	                },
	                
	            },
	            axes: {
	                xaxis: {
	                    renderer: $.jqplot.CategoryAxisRenderer,
	                    ticks: ticks
	                }
	            },
	            legend:{
				    renderer: $.jqplot.EnhancedLegendRenderer,
				    show: true,
				    seriesToggle : true,
				    rendererOptions: {
				        numberRows: 2,
				        numberColumns: 3,
				    }
				},
	            highlighter: { show: false }
	        });
        <?php 
    	} // Fin if!empty
        ?>
            });
	</script>
	<style type="text/css">
		.jqplot-xaxis-tick {
		top: 0;
			-webkit-transform: rotate(317deg);
			-moz-transform: rotate(314deg);
			-o-transform: rotate(314deg);
			writing-mode: lr-tb;
			margin-top: 79px;
			/* left: -63px; */
			margin-left: -75px;
			vertical-align: top;
			text-align: right;
		}	
	</style>
</div>
<?php
    include('inc/footer.php');
?>