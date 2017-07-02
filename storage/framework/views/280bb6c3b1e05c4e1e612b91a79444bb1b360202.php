<!DOCTYPE>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="SuperFlat Responsive Admin Template">
        <meta name="keywords" content="SuperFlat Admin, Admin, Template, Bootstrap">

        <title>SuperFlat Responsive Admin Template</title>

        <link href="<?php echo e(asset('assetmin/vendors/bower_components/animate.css/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assetmin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assetmin/vendors/bower_components/jquery.bootgrid/dist/jquery.bootgrid.override.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assetmin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assetmin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')); ?>" rel="stylesheet">
<?php echo $__env->yieldContent('css'); ?>
        <link href="<?php echo e(asset('assetmin/css/app.min.css')); ?>" rel="stylesheet">

    </head>

    <body>
<?php echo $__env->yieldContent('dashboard'); ?>
        <!-- Javascript Libraries -->
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/flot/jquery.flot.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/flot/jquery.flot.resize.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/flot-orderBars/js/jquery.flot.orderBars.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/flot.curvedlines/curvedLines.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/flot-orderBars/js/jquery.flot.orderBars.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/sparklines/jquery.sparkline.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')); ?>"></script>

        <script src="<?php echo e(asset('assetmin/vendors/bootstrap-growl/bootstrap-growl.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/moment/min/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')); ?> "></script>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/summernote/dist/summernote.min.js')); ?>"></script>
        <!-- Charts - Please read the read-me.txt inside the js folder-->
        <script src="<?php echo e(asset('assetmin/js/flot-charts/curved-line-chart.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/js/flot-charts/bar-chart.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/js/charts.js')); ?>"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="<?php echo e(asset('assetmin/js/functions.js')); ?>"></script>
        <script src="<?php echo e(asset('assetmin/js/demo.js')); ?>"></script>
        @js('jsd')
    </body>
</html>
