<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include(dirname(__FILE__)."/attributes/form.php");

    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>

<body class="wrap">

    <a href="<?php echo base_url()."form_ctrl/login_view"?>">新規登録</a>
    <h1 class="text-center">Mail To The Future</h1>

    <?php
        //container&row Start
        echo '<div class="container text-center">';
        echo '<div class="row">';
        //form Start
        echo form_open_multipart('', ' class="col-sm-12" ');
    ?>

    <!-- row1 -->
    <div class="form-group col-sm-8 offset-sm-2">
        <p>届く未来</p>
        <?php echo form_input_date($to_send_date_data); ?>
    </div>

    <!-- row2 -->
    <div class="form-group col-sm-8 offset-sm-2">
        <p>手紙を送る相手</p>
        <?php echo form_input($to_whom_data); ?>
    </div>

    <!-- row3 -->
    <div class="form-group col-sm-8 offset-sm-2">
        <p>手紙の内容</p>
        <?php echo form_textarea($message_data); ?>
    </div>

    <!-- row4 -->
    <div class="form-group col-sm-8 offset-sm-2">
        <p>写真・画像を手紙に添える</p>
        <div class="custom-file">
            <?php
                echo form_upload($file_data);
                echo form_label('ファイル選択...', 'customFile', $label_data);
            ?>
        </div>
    </div>

    <!-- row5 -->
    <div class="form-group col-sm-8 offset-sm-2">
        <p>送付先メールアドレス</p>
        <?php echo form_input_email($email_data); ?>
        <small class="text-muted">We'll never share your email with anyone else.</small>
    </div>

    <!-- row6 -->
    <div class="form-group col-sm-8 offset-sm-2">
        <?php echo form_submit($submit_data, '手紙を送信する'); ?>
    </div>

    <?php
        //container&row End
        $string = '</div></div>';
        //form End
        echo form_close($string);
    ?>

    <?php include(dirname(__FILE__)."/include/footer.php"); ?>

</body>

</html>