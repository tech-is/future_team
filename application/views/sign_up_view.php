<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>
<body>
    <div class="header-container">
        <h1>Sign Up<h1>
    </div>
    <div class="body-container">
        <form action="#" id="submit_push" method="post" onsubmit="return false;">
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
                <p>パスワードの確認</p>
                <input class="form-control form-container" type="password" name="check_pswd" id="check_pswd" pattern="[A-Za-z]{8,}$" title="半角英字8文字以上で入力してください" on="CheckPassword(this)" required>
                <div class="error_text" id="error_text"></div>
            </div>
            <div class="form-group col-sm-12">
                <input class="btn btn-outline-primary" type="submit"  value="登録">
                <!-- CSRF対策 「トークンの埋め込み」 -->
                <input type="hidden" name="<?php echo $csrf_token;?>" id="token" value="<?php echo $csrf_hash;?>" />
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sign_up.js"></script>
    <!-- sweet_alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>