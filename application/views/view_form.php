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
    <title>未来メーーーール</title>
</head>
<body>
    <div style="text-align: right;">
        <a href="<?php echo base_url(); ?>MtoF_sign_up/">新規登録</a><br>
        <a href="<?php echo base_url(); ?>MtoF_log_in/">ログイン</a>
    </div>
    <div class="header-container">
        <h1>Mail To The Future<h1>
    </div>
    <div class="body-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group col-sm-12">
                <p>届けたい未来</p>
                <input class="form-control form-container" type="date" name="" value="" placeholder="1年後" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>手紙を送る相手</p>
                <input class="form-control form-container" type="text" name="" value="" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>手紙の内容</p>
                <textarea class="text-container" type="" name="" value="" required></textarea><br>
            </div>
            <div class="form-group col-sm-12">
                <p>写真を入れる</p>
                <input class="form-control file-container" type="file" name="file" value=""><br>
            </div>
            <div class="form-group col-sm-12">
                <p>手紙を届けるメールアドレス</p>
                <input class="form-control form-container" type="email" name="" value="" required><br>
            </div>
            <div class="form-group col-sm-12">
                <input class="btn btn-outline-primary" type="submit" name="" value="送信" >
            </div>
        </form>
    </div>
    <pre>
        <?php 
            // var_dump($_SERVER);
            // var_dump($_COOKIE);
        ?> 
    </pre>

    <!-- jQuery読み込み -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>