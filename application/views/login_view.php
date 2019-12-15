<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>
<body>
    <div class="background-wrapper"></div>
    <div class="body-wrapper"></div>

    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
        <a class="navbar-brand" href="#" style="width: 190px;"><img src="<?php echo base_url(); ?>assets/img/MtoF_logo.png" alt="mtof"></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                <a class="nav-link" href="<?php echo base_url(); ?>Main_ctrl/view_sign_up">新規登録</a>
            </li>
        </ul>
    </nav>

    <section id="about">
        <div class="container">
            <div class="card row">
                <div class="col-sm-6 col-md-6 mx-auto text-center">
                    <img src="<?php echo base_url();?>assets/img/login.png" alt="mtof" style="width: 200px;"><br>
                </div>
                <form id="form" onsubmit="return false;" class = "form-login">
                    <!-- row1 -->
                    <div class="form-group col-sm-12 col-md-12">
                        <label>名前</label>
                        <input class="form-control form-container" type="text" name="name" id="name" placeholder="(例)ヤマダタロウ" title="全角カナで入力してください" required><br>
                    </div>
                    <!-- row2 -->
                    <div class="form-group col-sm-12 col-md-12">
                        <label>メールアドレス</label>
                        <input class="form-control form-container" type="email" name="mail" id="mail" required><br>
                    </div>
                    <!-- row3 -->
                    <div class="form-group col-sm-12 col-md-12">
                        <label>パスワード</label>
                        <input class="form-control form-container" type="password" name="pswd" id="pswd" title="半角英字8文字以上で入力してください" required><br>
                    </div>
                    <!-- row4 -->
                    <div class="col-sm-12 col-md-12 checkbox mb-2">
                        <label><input type="checkbox" value="remember-me">パスワードを保存します</label>
                    </div>
                    <!-- row5 -->
                    <div class="form-group col-sm-12 col-md-12">
                        <input class="btn btn-success btn-lg btn-block" type="submit" value="ログイン" >
                    </div>
                    <!-- CSRF対策 「トークンの埋め込み」 -->
                    <input type="hidden" name="<?php echo $csrf_token;?>" id="token" value="<?php echo $csrf_hash;?>" />
                </form>
            </div>
        </div>
    </section>
    <?php include(dirname(__FILE__)."/include/footer.php"); ?>
    <script type="text/javascript" src= "<?php echo base_url();?>assets/js/sign_in.js" defer></script>
    <!-- sweet_alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" ></script>
</body>
</html>