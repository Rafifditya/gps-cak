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
                                <h2><i class="fa fa-cogs"></i> <b> Target Group </b></h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">

                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="list-tab"
                                                                                  role="tab" data-toggle="tab"
                                                                                  aria-expanded="true"><i
                                                        class="fa fa-list-alt"></i> <b>List Group Device</b> </a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="add-tab"
                                                                            data-toggle="tab" aria-expanded="false"><i
                                                        class="fa fa-plus-circle"></i> <b>Add New Group Device</b> </a>
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

                                                    <th class="text-center" style="vertical-align: middle;">#</th>
                                                    <th class="text-center" style="vertical-align: middle;">Group name
                                                    </th>
                                                    <th class="text-center" style="vertical-align: middle;">
                                                        Description
                                                    </th>
                                                    <th class="text-center" style="vertical-align: middle;">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center" style="vertical-align: middle;">1</td>
                                                    <td class="text-center" style="vertical-align: middle;">default
                                                        group
                                                    </td>
                                                    <td class="text-center" style="vertical-align: middle;">
                                                        default group
                                                    </td>
                                                    <td class="text-center" style="vertical-align: middle;">
                                                        <a href="#"
                                                           class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
                                                            Edit </a>
                                                        <a class="btn btn-danger btn-xs" data-toggle="modal"
                                                           data-target=".modal-confirm-delete1"><i
                                                                    class="fa fa-trash-o"></i> Delete </a>
                                                        <div class="modal fade modal-confirm-delete1" tabindex="-1"
                                                             role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-xs">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal"><span
                                                                                    aria-hidden="true">×</span></button>
                                                                        <center><h4 class="modal-title"
                                                                                    id="myModalLabel"><b>GPS CAK</b>
                                                                            </h4></center>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <center><h5><i class="fa fa-warning fa-lg"></i>
                                                                                &nbsp;Do you want to delete this audit
                                                                                code?</h5></center>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <a href="#">Delete</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
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
                                                                <label class="control-label col-md-4">Group name</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control" name="code"
                                                                           required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Description</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="4"
                                                                              name="desc"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="ln_solid"></div>
                                                            <div class="form-group">
                                                                <div class="col-md-8 col-md-offset-4">
                                                                    <button type="reset" class="btn btn-default">Reset
                                                                        all data
                                                                    </button>
                                                                    <button type="submits" class="btn btn-success">Add
                                                                        New Group
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

</body>
</html>