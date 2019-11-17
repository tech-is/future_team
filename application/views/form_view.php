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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css読み込み -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/MtoF_form.css">
    <!-- google_fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Mansalva&display=swap" rel="stylesheet">
    <title>未来メーーーール</title>
</head>

<body>
    <div class="text-right">
        <a href="<?php echo base_url()."form_ctrl/login_view"?>">新規登録</a>
    </div>

    <div class="container">
        <div class="col-sm-12 text-center">
            <h1>Mail To The Future<h1>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <form action="#" method="post" enctype="multipart/form-data" class="col-sm-12 ">

                <div class="form-group col-sm-8 offset-sm-2">
                    <p>届く未来</p>
                    <input type="date" name="" value="" required>
                </div>

                <div class="form-group col-sm-8 offset-sm-2">
                    <p>手紙を送る相手</p>
                    <input type="text" class="form-control" name="" value="" placeholder="１年後のぼくへ" required>
                </div>

                <div class="form-group col-sm-8 offset-sm-2">
                    <p>手紙の内容</p>
                    <textarea type="" class="form-control" name="" value="" placeholder="元気にしていますか" required></textarea>
                </div>

                <div class="form-group col-sm-8 offset-sm-2">
                    <p>写真・画像を手紙に添える</p>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile" data-browse="参照">ファイル選択...</label>
                    </div>

                </div>

                <div class="form-group col-sm-8 offset-sm-2">
                    <p>送付先メールアドレス</p>
                    <input type="email" class="form-control" name="" value="" placeholder="Enter email" required>
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group col-sm-8 offset-sm-2">
                    <input type="submit" class="btn btn-outline-primary" name="" value="手紙を送る">
                </div>

            </form>
        </div>
    </div>



    <?php
            // var_dump($_SERVER);
            // var_dump($_COOKIE);
        ?>

    <!-- jQuery読み込み -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>