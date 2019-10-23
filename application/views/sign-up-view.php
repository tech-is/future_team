<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    // sessionが開始していない場合sessionを開始する
    if(!isset($_SESSION)){
        session_start();
    }
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
    <title>新規登録画面</title>
</head>
<body>
    <div class="header-container">
        <h1>Sign Up<h1>
    </div>
    <div class="body-container">
        <form action="/MtoF_sign_up/add_information" method="post" enctype="multipart/form-data" onsubmit="return test(this);">
            <div class="form-group col-sm-12">
                <p>名前</p>
                <input class="form-control form-container" type="text" name="name" value="" placeholder="（例）山田太郎" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>メールアドレス</p>
                <input class="form-control form-container" type="email" name="mail" value="" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>パスワード</p>
                <input class="form-control form-container" type="password" name="pswd" value="" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>パスワードの確認</p>
                <input class="form-control form-container" type="password" name="check_pswd" value="" required><br>
            </div>
            <div class="form-group col-sm-12">
                <!-- CSRF対策 「トークンの埋め込み」 -->
                <input type="hidden" name="token" value="<?php echo session_id(); ?>">
                <input class="btn btn-outline-primary" type="submit" name="" value="登録">
            </div>
        </form>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/MtoF_sign_up.js"></script>
</body>
</html>