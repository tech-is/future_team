<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
     // sessionが開始していない場合sessionを開始する
    if(!isset($_SESSION['id'])){
        echo 'ログイン失敗';
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
    <title>マイページ</title>
</head>
<body>
<form action="/MtoF/view_form">
    <button class="btn btn-outline-primary" >未来へメールを送る</button>
</form>
<?php
    echo 'こんにちは'."<br>";
    echo $_SESSION['id'];
    // idの情報から名前、メアドを参照
    echo $name."<br>".$mail_address."<br>".$delete_flag;
    // session_destory
    ?>
<form action="/MtoF_login/logout">
    <button class="btn btn-outline-primary" >ログアウト</button>
</form>