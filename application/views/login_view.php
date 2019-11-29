<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>
<body>
    <div class="header-container">
        <h1>Log In<h1>
    </div>
    <div style="text-align:right;">
        <a href="<?php echo base_url(); ?>Main_ctrl/view_sign_up/">新規登録</a>
    </div>
    <div class="body-container">
        <form id="form" onsubmit="return false;" class = "col-sm-12">
            <div class="form-group col-sm-12">
                <p>名前</p>
                <input class="form-control form-container" type="text" name="name" id="name" placeholder="(例)ヤマダタロウ" pattern="[ァ-ヶ]*" title="全角カナで入力してください" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>メールアドレス</p>
                <input class="form-control form-container" type="email" name="mail" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>パスワード</p>
                <input class="form-control form-container" type="password" name="pswd" id="pswd" pattern="[A-Za-z]{8,}$" title="半角英字8文字以上で入力してください" required><br>
            </div>
            <div class="form-group col-sm-12">
                <!-- CSRF対策 「トークンの埋め込み」 -->
                <input type="hidden" name="<?php echo $csrf_token;?>" id="token" value="<?php echo $csrf_hash;?>" />
                <input class="btn btn-outline-primary" type="submit" value="ログイン" >
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src= "<?php echo base_url();?>assets/js/sign_in.js"></script>
    <!-- sweet_alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>