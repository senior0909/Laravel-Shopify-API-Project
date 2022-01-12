<!DOCTYPE html>
<html>

<head>
    <title>ログイン 【トドクヨ】</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="css/pages/login.css" />
    <!-- end of page level css -->
    <style>
        .link_text{
            text-decoration: none !important;
            font-size: var(--login-fontsize-14);
        }
        .change_link{
            text-align:center;
        }
    </style>
</head>

<body>
    <?php 
        if(isset($output))
            echo'<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    '.$output.'
                </div>';
    ?>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="/login" method="post">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                <h3>
                                    ログイン
                                    <br/>
                                </h3>
                                <br/>
                                <p>
                                    <label style="margin-bottom:0px;" for="username" class="uname"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                    メールアドレスまたアカウントID
                                    </label>
                                    <input id="username" name="username" required type="text" placeholder="username or e-mail" />
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                    パスワード
                                    </label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="login button">
                                    <input type="submit" value="ログイン" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <!-- <a href="#toforgot" class="link_text"> -->
                                    <a href="#toforgot" class="link_text">
                                        パスワードをお忘れですか？
                                    </a>
                                </p>
                                <p class="change_link">
                                    <a href="#toregister" class="link_text">
                                        新しくアカウントを作成する
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            
                            <form action="/setUser" method="POST">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                <h3 class="">
                                    <br>サインアップ
                                </h3>
                                <div class="form-group">
                                    <label style="margin-bottom:0px;" for="first_name" class="youmail">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        生産者名(登録のID)
                                    </label>
                                    <input id="first_name" name="name" required type="text" placeholder="Aimi" />
                                </div>

                                <div class="form-group">
                                    <label style="margin-bottom:0px;" for="company" class="youmail" required>
                                        運送会社
                                    </label>
                                    <select name="company" class="form-control" style="width:97%">
                                        <option value="ヤマト運輸">ヤマト運輸</option>
                                        <option value="佐川急便">佐川急便</option>
                                        <option value="日本郵便">日本郵便</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label style="margin-bottom:0px;" for="email" class="youmail">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        メールアドレス
                                    </label>
                                    <input id="email" name="email" required type="email" placeholder="mysupermail@mail.com" />
                                </div>

                                <!-- <div class="form-group">
                                    <label style="margin-bottom:0px;" for="last_name" class="youmail">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        登録のID
                                    </label>
                                    <input id="last_name" name="last_name" required type="text" placeholder="Doe" />
                                </div> -->

                                <div class="form-group">
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        パスワード
                                    </label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                </div>

                                <!-- <div class="form-group">
                                    <label style="margin-bottom:0px;" for="passwor_confirm" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        パスワードを認証する
                                    </label>
                                    <input id="password_confirm" name="password_confirm" required type="password" placeholder="eg. X8df!90EO" />
                                </div> -->
                            
                                <p class="signin button">
                                    <input type="submit" class="btn btn-success" value="サインアップ" />
                                </p>
                                <!-- <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm" style="float:right">戻る</button>
                                    </a>
                                </p> -->
                            </form>
                        </div>
                        <div id="forgot" class="animate form">
                            <form action="forget-password" autocomplete="on" method="post">
                                @csrf
                                <h3 class="black_bg">
                                    <img src="img/logo.png" alt="josh logo"></h3>
                                <p>
                                    以下にメールアドレスを入力してください。パスワード再設定用のリンクが送信されます。
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="emailsignup1" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        あなたのメール
                                    </label>
                                    <input id="emailsignup1" name="email" required autofocus type="email" placeholder="your@mail.com" />
                                    
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif

                                </p>
                                <p class="login button">
                                    <input type="submit" value="送信" class="btn btn-success" />
                                </p>
                                <!-- <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                    </a>
                                </p> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="js/josh.js" type="text/javascript"></script>
    <script src="js/metisMenu.js" type="text/javascript"> </script>
    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
</body>
</html>
