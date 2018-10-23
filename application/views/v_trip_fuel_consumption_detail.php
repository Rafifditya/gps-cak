<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ProGPS - report</title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo site_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo site_url(); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo site_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
          rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo site_url(); ?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo site_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">

    <!--date example fot chart-->
    <script src="<?php echo site_url();?>assets/build/js/utils.js"></script>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-map"></i> <span>G P S |<span
                                    style="color:orange"> C A K! </span></span></a>
                </div>

                <div class="clearfix"></div>

                <!-- sidebar menu -->
                <?php include 'v_sidebar_report.php'; ?>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <?php include 'v_topnav_home.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height:690px;">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-bars"></i> <b>OBD report</b></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php echo $this->session->flashdata('notif'); ?>
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="list-tab"
                                                                                  role="tab" data-toggle="tab"><i
                                                        class="fa fa-list-alt"></i> <b> Trip fuel consumption
                                                    Details</b></a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <!-- search TAB -->
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                             aria-labelledby="list-tab">
                                            <?php
                                            echo form_open();
                                            ?>
                                            <div class="col-md-12 col-xs-12">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="form-inline">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Select device :
                                                                            <select class="form-control"
                                                                                    name="device_name">
                                                                                <option value="" disabled selected>
                                                                                    Device Name
                                                                                </option>
                                                                            </select>
                                                                        </label>

                                                                        <div class="radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios"
                                                                                       id="optionsRadios1"
                                                                                       value="option1" checked>
                                                                                Daily Details
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios"
                                                                                       id="optionsRadios2"
                                                                                       value="option2">
                                                                                Periode Details | Select Date :
                                                                            </label>
                                                                        </div>
                                                                        <input type="text" name="visit_date"
                                                                               id="visit_date_edit" class="form-control"
                                                                               placeholder="e.g. 12-08-2018 - 21-08-2018"
                                                                               required>
                                                                        <button type="submit" class="btn btn-warning">
                                                                            check
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /DIV COL-MD-6 (1) -->

                                            <div class="col-md-12 col-xs-12">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="row tile_count">
                                                                    <div class="col-md-2 col-sm-3 col-xs-6 tile_stats_count">
                                                                        <span class="count_top"> <b> Total Trip Times </b> </span>
                                                                        <div class="count"><i class="fa fa-road"></i> 0
                                                                        </div>
                                                                        <span class="count_bottom"><i
                                                                                    class="green">10%</i> From last Week</span>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                                                        <span class="count_top"> <b> Total Mileage </b> </span>
                                                                        <div class="count green"><i
                                                                                    class="fa fa-map-marker"></i><i
                                                                                    class="fa fa-car"></i> 0
                                                                        </div>
                                                                        <span class="count_bottom"><i class="green"><i
                                                                                        class="fa fa-sort-asc"></i>7% </i> From last Week</span>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                                                        <span class="count_top"> <b> Total Run Time </b></span>
                                                                        <div class="count red"><i
                                                                                    class="fa fa-clock-o"></i> 0
                                                                        </div>
                                                                        <span class="count_bottom"><i class="red"><i
                                                                                        class="fa fa-sort-desc"></i>3% </i> From last Week</span>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                                                        <span class="count_top"> <b>Total fuel Consumption</b> </span>
                                                                        <div class="count"><i class="fa fa-tint"></i> 0
                                                                        </div>
                                                                        <span class="count_bottom"><i class="red"><i
                                                                                        class="fa fa-sort-desc"></i>10% </i> From last Week</span>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                                                        <span class="count_top"> <b>Average fuel consumption</b> </span>
                                                                        <div class="count"><i class="fa fa-fire"></i> 0
                                                                        </div>
                                                                        <span class="count_bottom"><i class="red"><i
                                                                                        class="fa fa-sort-desc"></i>10% </i> From last Week</span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div><!-- DIV COL-MD-6 (1) -->

                                                    </div><!-- /DIV x_CONTENT -->
                                                </div><!-- DIV X_PANEL -->
                                            </div><!-- /DIV COL-MD-8 -->

                                            <div class="col-md-12 col-xs-12">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <div>
                                                            <canvas id="canvas"></canvas>
                                                            <script>
                                                                var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                                                var config = {
                                                                    type: 'line',
                                                                    data: {
                                                                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                                                        datasets: [{
                                                                            label: 'Fuel Consumption (L)',
                                                                            backgroundColor: window.chartColors.red,
                                                                            borderColor: window.chartColors.red,
                                                                            data: [
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor()
                                                                            ],
                                                                            fill: false,
                                                                        }, {
                                                                            label: 'Mileage (Km)',
                                                                            fill: false,
                                                                            backgroundColor: window.chartColors.blue,
                                                                            borderColor: window.chartColors.blue,
                                                                            data: [
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor(),
                                                                                randomScalingFactor()
                                                                            ],
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        responsive: true,
                                                                        title: {
                                                                            display: true,
                                                                            text: 'Fuel Consumption Chart'
                                                                        },
                                                                        tooltips: {
                                                                            mode: 'index',
                                                                            intersect: false,
                                                                        },
                                                                        hover: {
                                                                            mode: 'nearest',
                                                                            intersect: true
                                                                        },
                                                                        scales: {
                                                                            xAxes: [{
                                                                                display: true,
                                                                                scaleLabel: {
                                                                                    display: true,
                                                                                    labelString: 'Month'
                                                                                }
                                                                            }],
                                                                            yAxes: [{
                                                                                display: true,
                                                                                scaleLabel: {
                                                                                    display: true,
                                                                                    labelString: 'Value'
                                                                                }
                                                                            }]
                                                                        }
                                                                    }
                                                                };

                                                                window.onload = function() {
                                                                    var ctx = document.getElementById('canvas').getContext('2d');
                                                                    window.myLine = new Chart(ctx, config);
                                                                };


                                                                var colorNames = Object.keys(window.chartColors);

                                                            </script>

                                                        </div>
                                                    </div><!-- /DIV x_CONTENT -->
                                                </div><!-- DIV X_PANEL -->
                                            </div><!-- /DIV COL-MD-8 -->


                                            <div class="col-md-12">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <div class="form-group">

                                                            <div class="col-md-12 col-xs-12">
                                                                <table id="datatable"
                                                                       class="table table-striped table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="text-center"
                                                                            style="vertical-align: middle;">no
                                                                        </th>
                                                                        <th class="text-center"
                                                                            style="vertical-align: middle;">Device name
                                                                        </th>
                                                                        <th class="text-center"
                                                                            style="vertical-align: middle;">Trip times
                                                                        </th>
                                                                        <th class="text-center"
                                                                            style="vertical-align: middle;">Mileage
                                                                        </th>
                                                                        <th class="text-center"
                                                                            style="vertical-align: middle;">Run time
                                                                        </th>
                                                                        <th class="text-center"
                                                                            style="vertical-align: middle;">Fuel
                                                                            consumption (L)
                                                                        </th>
                                                                        <th class="text-center"
                                                                            style="vertical-align: middle;">Average fuel
                                                                            consumption (L/100km)
                                                                        </th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">1
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">Motor honda
                                                                            Beat
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">0
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">0
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">0
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">0
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">0
                                                                        </td>

                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <label class="control-label col-md-4">
                                                            <a href="#" class="btn btn-success">Excel</a>
                                                            <a href="# " class="btn btn-danger">PDF</a>
                                                            <a href="# " class="btn btn-primary">Print</a>
                                                        </label>
                                                        <!-- <div class="ln_solid"></div> -->
                                                        <div class="form-group">
                                                            <div class="col-md-8 col-md-offset-4">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /DIV COL-MD-12 -->
                                            <?php echo form_close(); ?>
                                        </div><!-- /TAB PANEL -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <?php include 'v_footer.php'; ?>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo site_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo site_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo site_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo site_url(); ?>assets/vendors/nprogress/nprogress.js"></script>

<!-- Datatables -->
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo site_url(); ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- bootstrap-daterangepicker -->
<script src="<?php echo site_url(); ?>assets/production/js/moment/moment.min.js"></script>
<script src="<?php echo site_url(); ?>assets/production/js/datepicker/daterangepicker.js"></script>

<!-- Select2 -->
<script src="<?php echo site_url(); ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>

<!--Chart.js-->
<script src="<?php echo site_url(); ?>assets/vendors/Chart.js/dist/chart.min.js"></script>

<!-- validator -->
<script src="<?php echo site_url(); ?>assets/vendors/validator/validator.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo site_url(); ?>assets/build/js/custom.min.js"></script>

<!-- validator -->
<script>
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function () {
        validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('form').submit(function (e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();

        return false;
    });
</script>
<!-- /validator -->

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function () {
        $('#issued-date-add').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_5"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    $(document).ready(function () {
        $('#issued-date-edit').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_5"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    $(document).ready(function () {
        $('#issued-date-revisi').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_5"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#visit_date_add').daterangepicker(null, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    $(document).ready(function () {
        $('#visit_date_edit').daterangepicker(null, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    $(document).ready(function () {
        $('#visit_date_revisi').daterangepicker(null, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->


<!--chart js-->
<!--/chartjs-->

<!-- Select2 -->
<script>
    $(document).ready(function () {
        $(".select2_multiple").select2({
            maximumSelectionLength: 99,
            placeholder: " Select audit requrement",
            allowClear: true
        });
    });
</script>
<!-- /Select2 -->

<!-- Datatables -->
<script>
    $(document).ready(function () {
        $('#datatable').dataTable();
        TableManageButtons.init();
    });
</script>
<!-- /Datatables -->

</body>
</html>
