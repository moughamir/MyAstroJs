<?php
// yyadmin/inc/footer.php
?>

        </div><!-- fin container -->
        
        <div id="loading" style="display: none">
            <div class="well">
                <img src="images/loader.gif" alt="Chargement en cours..." />
            </div>
        </div>
        
        <!-- INCLUDE JAVASCRIPTS -->
        <script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
        <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/excanvas.js"></script><![endif]-->
        <script language="javascript" type="text/javascript" src="js/jquery.jqplot.min.js"></script>
        <script type="text/javascript" src="js/plugins/jqplot.pieRenderer.min.js"></script>
        <script type="text/javascript" src="js/plugins/jqplot.donutRenderer.min.js"></script>
        <script type="text/javascript" src="js/plugins/jqplot.barRenderer.min.js"></script>
        <script type="text/javascript" src="js/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="js/plugins/jqplot.pointLabels.min.js"></script>
        <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-dataTables.js"></script>
        
        <script type="text/javascript" src="js/admin.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('input.datepicker').datetimepicker({
                lang:'fr',
                timepicker : false,
                format:'d/m/Y',
            });
            $('input.sqldatepicker').datetimepicker({
                lang:'fr',
                format:'Y-m-d',
                step : 15,
//                onShow:function( ct ){
//                    this.setOptions({
//                        formatDate:'Y-m-d',
//                        maxDate:$('input[name="endDate"]').val() ? $('input[name="endDate"]').val().substr(0,10) : false
//                    })
//                },
            });
//            $('input[name="endDate"]').datetimepicker({
//                lang:'fr',
//                format:'Y-m-d H:i:s',
//                step : 15,
//                onShow:function( ct ){
//                    this.setOptions({
//                        formatDate:'Y-m-d',
//                        minDate:$('input[name="startDate"]').val() ? $('input[name="startDate"]').val().substr(0,10) : false
//                    })
//                },
//            });
            $(".chosen-select").chosen();
            $('.switcher').bootstrapSwitch('size', 'small');
            
            $('.trigger-export').tooltip({container: 'body'});
            
//            $('input[name="startDate"],input[name="endDate"]').datetimepicker({
//                    timepicker : false,
//                    format:'Y-m-d',
//            });
            $('.trigger-export').on('click',function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    var start = $('input[name="startDate"]').val(); 
                    var end = $('input[name="endDate"]').val(); 
                    var website = $('select[name="website"]').val(); 
                    console.log(website);
                    var country = $(this).data('country');
                    window.open('http://www.myastro.fr/yyadmin/download.php?q=export&start='+start+'&end='+end+'&country='+country+'&website='+website);
            });
        });
        </script>
        
    </body>
</html>
