<!DOCTYPE html>
<html>  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../vendors/custom/img/favicon.png" /> 

    <title>Dieta Rapida</title>

    <!-- Bootstrap -->
    <link href="<?php echo BASE; ?>components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo BASE; ?>components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo BASE; ?>components/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo BASE; ?>components/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo BASE; ?>components/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- Dieta CSS -->
    <link href="<?php echo BASE; ?>components/custom/css/encuesta.css" rel="stylesheet"/>
    <!-- NProgress -->
    <link href="<?php echo BASE; ?>components/nprogress/nprogress.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="<?php echo BASE; ?>components/dropzone/dist/min/dropzone.min.css" rel="stylesheet"> 
    <!-- Mult-Select.css -->
    <link rel="stylesheet" href="<?php echo BASE; ?>components/custom/css/bootstrap-select.css">   
    
    <!-- Custom Theme Style -->
    <link href="<?php echo BASE; ?>assets/css/custom.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?php echo BASE; ?>components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE; ?>components/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE; ?>components/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE; ?>components/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE; ?>components/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">  
  </head>  
    <body class="nav-md">
        <!-- Menu -->
        <?php include 'menu.php' ?>
        <div class="right_col" role="main">
             <?php $this->loadViewInTemplate($viewName, $viewData, $viewFolder); ?>
        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Willian Nascimento - Dieta Rapida
          </div>
          <div class="clearfix"></div>
        </footer>
        
        <script type="text/javascript">var BASE = '<?php echo BASE; ?>'</script>
        <!-- jQuery -->
        <script src="<?php echo BASE; ?>components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo BASE; ?>components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo BASE; ?>components/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo BASE; ?>components/nprogress/nprogress.js"></script>
        <!-- jQuery Sparklines -->
        <script src="<?php echo BASE; ?>components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo BASE; ?>components/jqvmap/dist/jquery.vmap.js"></script>
        <script src="<?php echo BASE; ?>components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo BASE; ?>components/jqvmap/dist/maps/jquery.vmap.usa.js"></script>
        <script src="<?php echo BASE; ?>components/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- easy-pie-chart -->
        <script src="<?php echo BASE; ?>components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
         <!-- Datatables -->
        <script src="<?php echo BASE; ?>components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src=".<?php echo BASE; ?>components/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src=".<?php echo BASE; ?>components/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo BASE; ?>components/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?php echo BASE; ?>components/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo BASE; ?>components/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo BASE; ?>components/pdfmake/build/vfs_fonts.js"></script>
        <!-- Dinamic Form -->
        <script src="<?php echo BASE; ?>components/custom/js/encuesta.js"></script>
        <!-- FastClick -->
        <script src="<?php echo BASE; ?>components/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo BASE; ?>components/nprogress/nprogress.js"></script>
        <!-- Dropzone.js -->
        <script src="<?php echo BASE; ?>components/dropzone/dist/min/dropzone.min.js"></script>    
        <!-- Mult-Select.js -->
        <script src="<?php echo BASE; ?>components/custom/js/bootstrap-select.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo BASE; ?>assets/js/custom.min.js"></script>
        <!-- Diet JS -->
        <script src="<?php echo BASE; ?>assets/js/diet.js"></script>
        <!-- Meal JS -->
        <script src="<?php echo BASE; ?>assets/js/meal.js"></script>        
    </body>       
</html>