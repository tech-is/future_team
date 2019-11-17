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
    <?php include(dirname(__FILE__)."/include/header.php"); ?>
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

    <?php echo '<div class="container text-center">' ?>
    <?php echo '<div class="row">' ?>

    <?php echo form_open_multipart('#', ' class="col-sm-12" ');?>

    <div class="form-group col-sm-8 offset-sm-2">
        <p>届く未来</p>
        <input type="date" name="" value="" required>
    </div>

    <div class="form-group col-sm-8 offset-sm-2">
        <p>手紙を送る相手</p>
        <?php
                    $data = array(
                            'class'         => 'form-control',
                            'name'          => '',
                            'id'            => '',
                            'value'         => '',
                            'placeholder'   => '1年後の僕へ',
                            'required'      => ''
                    );
                    echo form_input($data);
                ?>
    </div>

    <div class="form-group col-sm-8 offset-sm-2">
        <p>手紙の内容</p>
        <?php
                    $data = array(
                            'class'         => 'form-control',
                            'name'          => '',
                            'id'            => '',
                            'value'         => '',
                            'placeholder'   => '元気にしていますか',
                            'required'      => ''
                    );
                    echo form_textarea($data);
                ?>
    </div>

    <div class="form-group col-sm-8 offset-sm-2">
        <p>写真・画像を手紙に添える</p>
        <div class="custom-file">
            <?php
                        $data = array(
                                'class'         => 'custom-file-input',
                                'name'          => '',
                                'id'            => 'customFile'
                        );

                        $attributes = array(
                                'class' => 'custom-file-label',
                                'data-browse' => '参照'
                        );

                        echo form_upload($data);
                        echo form_label('ファイル選択...', 'customFile', $attributes);
                    ?>
        </div>
    </div>

    <div class="form-group col-sm-8 offset-sm-2">
        <p>送付先メールアドレス</p>
        <input type="email" class="form-control" name="" value="" placeholder="Enter email" required>
        <small class="text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group col-sm-8 offset-sm-2">
        <?php
                    $submit = array(
                            'class'         => 'btn btn-outline-primary',
                            'name'          => ''
                    );
                    echo form_submit($submit, '手紙を送信する');
                    echo form_textarea($data);
                ?>
    </div>
    <?php
            $string = '</div></div>';
            echo form_close($string);
        ?>
    <?php include(dirname(__FILE__)."/include/footer.php"); ?>
</body>

</html>