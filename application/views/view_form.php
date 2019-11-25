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
    <title>未来メーーーール</title>
</head>
<body>
    <div style="text-align: right;">
    </div>
    <div class="header-container">
        <h1>Mail To The Future<h1>
    </div>
    <div class="body-container">
        <form action="#" method="post" enctype="multipart/form-data" onsubmit="return false;">
            <div class="form-group col-sm-12">
                <p>届けたい未来</p>
                <input class="form-control form-container" type="date" name="" value="" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>手紙を送る相手</p>
                <input class="form-control form-container" type="text" name="" value="" placeholder="１年後のぼくへ" required><br>
            </div>
            <div class="form-group col-sm-12">
                <p>手紙の内容</p>
                <textarea class="text-container" type="" name="" value="" placeholder="元気にしていますか" required></textarea><br>
            </div>
            <div class="form-group col-sm-12">
                <p>写真を入れる</p>
                <input class="form-control" type="file" name="" value=""><br>
            </div>
            <div class="form-group col-sm-12">
                <p>手紙を届けるメールアドレス</p>
                <input class="form-control form-container" type="email" name="" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
            </div>
            <div class="form-group col-sm-12">
                <input class="btn btn-outline-primary" type="submit" name="" value="送信" >
            </div>
        </form>
    </div>

    <!-- jQuery読み込み -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>