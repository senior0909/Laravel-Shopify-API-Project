<?php
$page = 'x-editable';
$title = 'X-editable';
$css = <<<EOT
 <!-- page level css -->
<link href="../vendors/x-editable/css/x-select.css" type="text/css" rel="stylesheet" />
<link href="../vendors/x-editable/css/bootstrap-editable.css" type="text/css" rel="stylesheet" />
<link href="../vendors/x-editable/css/x-selectbootstrap.css" type="text/css" rel="stylesheet" />
<link href="../vendors/x-editable/css/typehead-bootstrap.css" type="text/css" rel="stylesheet" />
<link href="../css/pages/inlinedit.css" rel="stylesheet" />
<!-- end of page level css -->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inline Edit
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>
                UI Components
            </li>
            <li class="active">X-editable</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading buttons">
                        <div class="col-md-12 btns">
                            <h3 class="panel-title"> <i class="livicon" data-name="star-full" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                X-Editable
                            </h3>
                            <span class="pull-right">
                                <form method="get" id="frm" class="form-inline" action="#">
                                    <label>
                                        <select name="c" id="c" class="form-control select2">
                                            <option value="popup">Popup</option>
                                            <option value="inline">Inline</option>
                                        </select>
                                    </label>
                                    <button type="submit" class="btn btn-responsive btn-primary btn-sm">Refresh</button>
                                </form>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="col-md-12 txt-align">
                                <label>
                                    <span class="chkbx">
                                        <input type="checkbox" id="autoopen">&nbsp;</span>
                                    auto-open next field
                                </label>
                                <button id="enable" class="btn btn-success btn-sm enable-btn">
                                    Enable / Disable
                                </button>
                            </div>
                            <table id="user" class="table table-bordered table-striped" style="clear:both">
                                <tbody>
                                    <tr>
                                        <td>
                                            Simple text field
                                        </td>
                                        <td>
                                            <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click" data-original-title="" title="">Superuser</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Empty text field, required
                                        </td>
                                        <td>
                                            <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty" data-original-title="" title="">Change It</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Select, local array, custom display
                                        </td>
                                        <td>
                                            <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" data-original-title="" title="">
                                                not selected
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Select, remote array, no buttons
                                        </td>
                                        <td>
                                            <a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group" class="editable editable-click" data-original-title="" title="">Admin</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Select, error while loading
                                        </td>
                                        <td>
                                            <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status" class="editable editable-click">Active</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Combodate (date)
                                        </td>
                                        <td>
                                            <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Combodate (datetime)
                                        </td>
                                        <td>
                                            <a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Textarea</td>
                                        <td>
                                            <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">
                                                Awesome user!
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Twitter typeahead.js
                                        </td>
                                        <td>
                                            <a href="#" id="state2" data-type="typeaheadjs" data-pk="1" data-placement="right" data-title="Start typing State.." class="editable editable-click">California</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Checklist</td>
                                        <td>
                                            <a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits" class="editable editable-click">
                                                Peach
                                                <br>Apple</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Select2 (tags mode)
                                        </td>
                                        <td>
                                            <a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags" class="editable editable-click">
                                                Html, Javascript
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Select2 (dropdown mode)
                                        </td>
                                        <td>
                                            <a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country" class="editable editable-click">Bahamas</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Custom input, several fields
                                        </td>
                                        <td>
                                            <a id="address" data-type="address" data-pk="1" data-title="Please, fill address" class="editable editable-click" data-original-title="" title=""> <b>Moscow</b>
                                                , Lenina st., bld. 12
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
<!-- page-wrapper -->
<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script src="../vendors/x-editable/jquery.mockjax.js"></script>
<script src="../vendors/x-editable/moment.min.js"></script>
<script src="../vendors/x-editable/select2.js"></script>
<script>var f = 'bootstrap3';</script>
<script src="../vendors/x-editable/bootstrap-editable.js"></script>
<script src="../vendors/x-editable/typeahead.js"></script>
<script src="../vendors/x-editable/typeaheadjs.js"></script>
<script src="../vendors/x-editable/address.js"></script>
<script>
        var c = window.location.href.match(/c=inline/i) ? 'inline' : 'popup';
        $.fn.editable.defaults.mode = c === 'inline' ? 'inline' : 'popup';

        $(function() {
            $('#f').val(f);
            $('#c').val(c);

            $('#frm').submit(function() {
                var f = $('#f').val();
                if (f === 'jqueryui') {
                    $(this).attr('action', 'demo-jqueryui.php');
                } else if (f === 'plain') {
                    $(this).attr('action', 'demo-plain.php');
                } else if (f === 'bootstrap2') {
                    $(this).attr('action', 'demo.php');
                } else {
                    $(this).attr('action', 'x-editable.php');
                }
            });
        });
    </script>
<script src="../vendors/x-editable/demo-mock.js"></script>
<script src="../vendors/x-editable/demo.js"></script>
<!-- end of page level scripts-->

</body>
</html>