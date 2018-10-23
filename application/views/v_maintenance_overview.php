<!DOCTYPE html>
<html lang="en">
<head>
    <title>ProGPS - Device</title>

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
                <?php include 'v_sidebar_device.php'; ?>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <?php include 'v_topnav_home.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height:690px;">
            <div class="">

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-cogs"></i> <b> Maintenance Overviews </b></h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">

                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="list-tab"
                                                                                  role="tab" data-toggle="tab"
                                                                                  aria-expanded="true"><i
                                                        class="fa fa-list-alt"></i> <b> Maintenance Data </b> </a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="add-tab"
                                                                            data-toggle="tab" aria-expanded="false"><i
                                                        class="fa fa-plus-circle"></i> <b> New Maintenance </b> </a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <!-- EDIT TAB -->

                                        <!-- LIST TAB -->
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                             aria-labelledby="list-tab">

                                            <!-- start project list -->
                                            <table id="datatable" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>

                                                    <th class="text-center" style="vertical-align: middle;">NO.</th>
                                                    <th class="text-center" style="vertical-align: middle;">Device name</th>
                                                    <th class="text-center" style="vertical-align: middle;">Odometer(Km)</th>
                                                    <th class="text-center" style="vertical-align: middle;">Next maintenance</th>
                                                    <th class="text-center" style="vertical-align: middle;">Last maintenance</th>
                                                    <th class="text-center" style="vertical-align: middle;">Last date</th>
                                                    <th class="text-center" style="vertical-align: middle;">Lastest update</th>
                                                    <th class="text-center" style="vertical-align: middle;">Status</th>
                                                    <th class="text-center" style="vertical-align: middle;">Operation</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center" style="vertical-align: middle;">1</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>
                                                    <td class="text-center" style="vertical-align: middle;">-</td>

                                                </tr>

                                                </tbody>
                                            </table>
                                            <!-- end project list -->
                                        </div><!-- /TAB PANEL -->

                                        <!-- ADD TAB -->
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                             aria-labelledby="add-tab">
                                            <div class="x_panel">
                                                <div class="x_content">
                                                    <form action="http://localhost/audit/ms_audit_code/manage_audit_code/create"
                                                          id="demo-form2" class="form-horizontal form-label-left"
                                                          0="data-parsley-validate" method="post"
                                                          accept-charset="utf-8">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Device
                                                                    name</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"
                                                                           name="device"
                                                                           required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Odometer</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"
                                                                           name="odometer"
                                                                           required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Last
                                                                    maintenance</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"
                                                                           name="last_maintenance"
                                                                           required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Last date</label>
                                                                <div class="col-md-4">
                                                                    <input id="issued-date-add"
                                                                           class="date-picker form-control col-md-4"
                                                                           type="text" name="last_date"
                                                                           placeholder="e.g. 10-10-2018" type="text"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Next
                                                                    maintenance</label>
                                                                <div class="col-md-4">
                                                                    <input
                                                                           class="form-control col-md-4"
                                                                           type="text"
                                                                           name="next_date"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox"> Notification ON / OFF
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="ln_solid"></div>
                                                            <div class="form-group">
                                                                <div class="col-md-8 col-md-offset-4">
                                                                    <button type="submits" class="btn btn-success">
                                                                        Confirm
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- /TAB PANEL -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- / ROW -->
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->                <!-- /footer content -->
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


<!-- validator -->
<script src="<?php echo site_url(); ?>assets/vendors/validator/validator.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo site_url(); ?>assets/build/js/custom.min.js"></script>


<!-- Datatables -->
<script>
    $(document).ready(function () {
        TableManageButtons = function () {
            "use strict";
            return {
                init: function () {
                    handleDataTableButtons();
                }
            };
        }();
        $('#datatable').dataTable();
        TableManageButtons.init();
    });
</script>
<!-- /Datatables -->
<!-- Daterangepicker-->
<script>
    $(document).ready(function () {
        $('#issued-date-add').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_5"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!--/Daterangepicker-->

</body>
</html>