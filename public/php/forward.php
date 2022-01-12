<?php
$page = '';
$title = '';
$css = <<<EOT
EOT;
require_once('header.php');
?>    
    <!--page level css -->
	<link href="../vendors/bootstrap-wysihtml5-rails-b3/src/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="../css/pages/mail_box.css" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Forward</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="mail_box.php">Email</a>
                    </li>
                    <li class="active">Inbox</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row web-mail">
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="whitebg">
                            <ul>
                                <li class="compose">
                                    <a href="compose.php">
                                        <i class="livicon" data-n="pen" data-s="16" data-c="white"></i>
                                        &nbsp; &nbsp;Compose
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_box.php">
                                        <i class="livicon" data-n="inbox" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp;Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="sent.php">
                                        <i class="livicon" data-n="check-circle" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Sent
                                    </a>
                                </li>
                                <li>
                                    <a href="trash.php">
                                        <i class="livicon" data-n="trash" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Trash
                                    </a>
                                </li>
                                <li>
                                    <a href="spam.php">
                                        <i class="livicon" data-n="eye-close" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Spam
                                    </a>
                                </li>
                                <li>
                                    <a href="draft.php">
                                        <i class="livicon" data-n="unlink" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Draft
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                        <div class="whitebg">
                            <table class="table table-striped table-advance">
                                <thead>
                                    <tr>
                                        <td colspan="4">
                                            <div class="col-md-8">
                                                <h4>
                                                    <strong>Inbox</strong>
                                                </h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4">
                                            <div class="compose row">
                                                <label class="col-xs-2 hidden-xs" for="to">To:</label>
                                                <input type="text" class="col-xs-9" id="to" placeholder="Email Id" tabindex="1" required>
                                                <div class="clear"></div>
                                                <label class="col-xs-2 hidden-xs" for="to">Subject:</label>
                                                <input type="text" class="col-xs-9" id="to" tabindex="1" value="Fwd: New server for datacenter needed ">
                                                <div class="clear"></div>
                                                <a href="#" id="ccb">Cc</a>
                                                <a id="bccb" href="#">Bcc</a>
                                                <div class="clear"></div>
                                                <div id="cci" style="display:none">
                                                    <label class="col-xs-2 hidden-xs" for="to">Cc:</label>
                                                    <input type="text" class="col-xs-9" placeholder="Cc:" tabindex="1">
                                                </div>
                                                <div class="clear"></div>
                                                <div id="bcci" style="display:none">
                                                    <label class="col-xs-2 hidden-xs" for="to">Bcc:</label>
                                                    <input type="text" class="col-xs-9" tabindex="1" placeholder="Bcc:">
                                                </div>
                                                <div class='box-body pad'>
                                                    <form>
                                                        <p>
                                                            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                        </p>
                                                        <p>
                                                            <input type="file" class="default">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td width="100%">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="col-md-4">
                                                        <a href="mail_box.php" class="btn btn-sm btn-primary">
                                                            <span class="glyphicon glyphicon-open"></span>
                                                            Send
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="mail_box.php" class="btn btn-sm btn-success">
                                                            <span class="glyphicon glyphicon-inbox"></span>
                                                            Draft
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="mail_box.php" class="btn btn-sm btn-warning">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                            Discard
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td width="3%"></td>
                                        <td width="13%" class="view-message text-right">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    
    <script type="text/javascript">
    $('#slimscrollside').slimscroll({
        height: '700px',
        size: '3px',
        color: 'black',
        opacity: .3

    });
    $("#ccb").click(function() {
        $("#cci").toggle(500);
        $("#ccb").hide();

    });
    $("#bccb").click(function() {
        $("#bcci").toggle(500);
        $("#bccb").hide();

    });
    </script>
    <!-- begining of page level js-->
    <script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
    <script type="text/javascript" src="../vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
    <script type="text/javascript">
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.

        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
    </script>
    <!-- end of page level js-->
</body>
</html>
