<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include(dirname(__FILE__)."/attributes/form-data.php");

    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>

<body class="wrap" style="background-color :#6c757d;; color : white;">
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
        <a class="navbar-brand" href="<?php echo base_url();?>main_ctrl" style="width: 190px;">
            <img src="<?php echo base_url();?>assets/img/MtoF_logo.png" alt="mtof">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    <!-- mail-form -->
    <div class="col-sm-6 col-md-6 mx-auto text-center">
        <img src="<?php echo base_url();?>assets/img/MtoF_logo1.png" alt="mtof" style="width: 200px;"><br>
    </div>
    <div class="container text-center">
        <div class="row">
            <form method="post" enctype="multipart/form-data" onsubmit="return false;" class = "col-sm-12">
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>届く未来</p>
                    <input class="form-control form-container" type="date" name="time" id="time" required><br>
                    <div id="error_time" style="color: red;"></div>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>手紙を送る相手</p>
                    <input class="form-control form-container" type="text" name="send_name" id="send_name" placeholder="１年後のぼくへ" required><br>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>手紙の内容</p>
                    <textarea class="form-control form-container" name="message" id="message" placeholder="元気にしていますか" required></textarea><br>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>写真・画像を手紙に添える</p>
                    <input type="file" name="myImage" id="myImage" accept="image/*" required>
                    <div style="display:inline-block;min-width:200px; min-height:200px; border:5px dashed #eee; padding:10px;">
                        <img id="preview" style="height: 200px; ">
                    </div><br><br>
                    <div id="error_img" style="color: red;"></div>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>送付先メールアドレス</p>
                    <input class="form-control form-container" type="email" name="mail" id="mail" placeholder="example@example.com" required><br>
                    <div id="error_mail" style="color: red;"></div>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <input class="btn btn-outline-primary" type="submit" name="" value="手紙を送信する" >
                </div>
                <input type="hidden" name="csrf_token" value="<?php echo $_COOKIE['csrf_cookie'];?>" class="token" id="token">
            </form>
        </div>
    </div>

    <?php include(dirname(__FILE__)."/include/footer.php"); ?>
    <script src="<?php echo base_url(); ?>assets/js/form.js" defer></script>
    <!-- sweet_alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" defer></script>

</body>

</html>