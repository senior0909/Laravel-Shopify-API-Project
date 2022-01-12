<?php
$page = 'editable_table';
$title = 'Editable Tables';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" type="text/css" href="../vendors/datatables/css/select2.css" />
<link rel="stylesheet" type="text/css" href="../vendors/datatables/css/dataTables.bootstrap.css" />
<link href="../css/pages/tables.css" rel="stylesheet" type="text/css" />
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editable Datatables
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">DataTables</a>
            </li>
            <li class="active">
                Editable Datatables
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Second Data Table -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box default">
                    <div class="portlet-title">
                        <div class="caption"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Editable Table
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class=" btn btn-custom">
                                    Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle btn-custom" data-toggle="dropdown">
                                    Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#">Print</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Save as PDF
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Export to Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="sample_editable_1_wrapper" class="">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_editable_1" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1">Username</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Full Name
                                            : activate to sort column ascending" style="width: 222px;">Full Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Points
                                            : activate to sort column ascending" style="width: 124px;">Points</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Notes
                                            : activate to sort column ascending" style="width: 152px;">Notes</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Edit
                                            : activate to sort column ascending" style="width: 88px;">Edit</th>
                                        <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Delete
                                            : activate to sort column ascending" style="width: 125px;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Tatyana</td>
                                        <td>
                                            Tatyana Nilson
                                        </td>
                                        <td>1234</td>
                                        <td class="center">power user</td>
                                        <td>
                                            <a class="edit" href="javascript:;">Edit</a>
                                        </td>
                                        <td>
                                            <a class="delete" href="javascript:;">Delete</a>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Martena</td>
                                        <td>
                                            Martena Mccray
                                        </td>
                                        <td>62</td>
                                        <td class="center">new user</td>
                                        <td>
                                            <a class="edit" href="javascript:;">Edit</a>
                                        </td>
                                        <td>
                                            <a class="delete" href="javascript:;">Delete</a>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Cedric</td>
                                        <td>
                                            Cedric Kelly
                                        </td>
                                        <td>132</td>
                                        <td class="center">elite user</td>
                                        <td>
                                            <a class="edit" href="javascript:;">Edit</a>
                                        </td>
                                        <td>
                                            <a class="delete" href="javascript:;">Delete</a>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Sonya</td>
                                        <td>Sonya Wong</td>
                                        <td>434</td>
                                        <td class="center">new user</td>
                                        <td>
                                            <a class="edit" href="javascript:;">Edit</a>
                                        </td>
                                        <td>
                                            <a class="delete" href="javascript:;">Delete</a>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Gavin</td>
                                        <td>
                                            Gavin Joyce
                                        </td>
                                        <td>232</td>
                                        <td class="center">power user</td>
                                        <td>
                                            <a class="edit" href="javascript:;">Edit</a>
                                        </td>
                                        <td>
                                            <a class="delete" href="javascript:;">Delete</a>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Timothy</td>
                                        <td>
                                            Antonio Sanches
                                        </td>
                                        <td>462</td>
                                        <td class="center">new user</td>
                                        <td>
                                            <a class="edit" href="javascript:;">Edit</a>
                                        </td>
                                        <td>
                                            <a class="delete" href="javascript:;">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET--> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</aside>
<!-- right-side -->

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../vendors/datatables/select2.min.js"></script>
<script type="text/javascript" src="../vendors/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../vendors/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="../js/pages/table-editable.js"></script>
<!-- end of page level js -->
</body>
</html>