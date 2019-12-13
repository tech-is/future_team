<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css読み込み -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/MtoF_form.css">
    <!-- google_fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Mansalva&display=swap" rel="stylesheet">
    <title>ログイン</title>
</head>
<body>

    <div class="header-container">
        <h1>Log In<h1>
    </div>
    <div style="text-align:right;">
        <a href="<?php echo base_url(); ?>MtoF_sign_up/">新規登録</a>
    </div>
    <div class="body-container">
        <form id="form" onsubmit="return false;">
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
                <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>"> 
                <input class="btn btn-outline-primary" type="submit" value="ログイン" >
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src= "<?php echo base_url();?>assets/js/login_ajax.js"></script>
</body>
</html>