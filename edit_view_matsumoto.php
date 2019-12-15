<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>
<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
        <a class="navbar-brand" href="<?php echo base_url();?>main_ctrl" style="width: 190px;">
            <img src="<?php echo base_url();?>assets/img/MtoF_logo.png" alt="mtof">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
        <div class="col-sm-6 col-md-6 mx-auto text-center">
            <img src="<?php echo base_url();?>assets/img/mail_form.png" alt=mtof>
        </div>

<!-- form-group -->
<div class="form-group col-sm-12 col-md-12">
    <div class="container mt-5 p-lg-5 bg-light">
        <form class="needs-validation" novalidate>
        <div class="body-container text-left">
            <form action="#" method="post" enctype="multipart/form-data">

            <!-- 日時 -->
            <div class="form-row mb-4">
                <p>SEND MAIL TO THE FUTURE</p><span class="badge badge-warning text-danger bg-light">required</span>
                <input class="form-control form-container" type="date" name="" value="" placeholder="1年後" required>    
            </div>
            
            <!--氏名-->
            <div class="form-row mb-4">
                <p>ADDRESSEE</p><span class="badge badge-warning text-danger bg-light">required</span>
                <input type="text" class="form-control" id="Name" placeholder="名前を入力してください" required>
                <div class="invalid-feedback">
                入力してください</div>
            </div>
            
            <!--/氏名-->

            <!--Eメール-->
            <div class="form-row mb-4">
                <p>ADDRESS</p><span class="badge badge-warning text-danger bg-light">required</span>
                <input type="email" class="form-control" id="inputEmail" placeholder="Eメール" required>
                <div class="invalid-feedback">入力してください</div>
            </div>
            <!--/Eメール-->

            <!--ファイル選択-->
            <div class="form-row mb-4">
                <p>PICTURE</p><span class="badge badge-warning text-danger bg-light">required</span>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile" data-browse="参照">ファイル選択...</label>
                </div>
            </div>
            <!--/ファイル選択-->

            <!--内容-->
            <div class="form-row mb-4">
                <label for="textarea1">CONTENT OF A LETTER</label><span class="badge badge-warning text-danger bg-light">required</span>
                <textarea class="form-control" id="Textarea" rows="10" placeholder="手紙の内容" required></textarea>
                <div class="invalid-feedback">入力してください</div><?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>
<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
        <a class="navbar-brand" href="<?php echo base_url();?>main_ctrl" style="width: 190px;">
            <img src="<?php echo base_url();?>assets/img/MtoF_logo.png" alt="mtof">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
        <div class="col-sm-6 col-md-6 mx-auto text-center">
            <img src="<?php echo base_url();?>assets/img/mail_form.png" alt=mtof>
        </div>

<!-- form-group -->
<div class="form-group col-sm-12 col-md-12">
    <div class="container mt-5 p-lg-5 bg-light">
        <form class="needs-validation" novalidate>
        <div class="body-container text-left">
            <form action="#" method="post" enctype="multipart/form-data">

            <!-- 日時 -->
            <div class="form-row mb-4">
            <img src="<?php echo base_url();?>assets/img/SEND_MAIL_TO_THE_FUTURE.png" alt=mtof><span class="badge badge-warning text-danger bg-light">required</span>
                <input class="form-control form-container" type="date" name="" value="" placeholder="1年後" required>    
            </div>
            
            <!--氏名-->
            <div class="form-row mb-4">
            <img src="<?php echo base_url();?>assets/img/ADDLESSEE.png" alt=mtof>assets/img/ADDLESSEE.png" alt=mtof><span class="badge badge-warning text-danger bg-light">required</span>
                <input type="text" class="form-control" id="Name" placeholder="name here" required>
                <div class="invalid-feedback">
                入力してください</div>
            </div>
            
            <!--/氏名-->

            <!--Eメール-->
            <div class="form-row mb-4">
            <img src="<?php echo base_url();?>assets/img/ADDLESS.png" alt=mtof><span class="badge badge-warning text-danger bg-light">required</span>
                <input type="email" class="form-control" id="inputEmail" placeholder="input e-mail addless" required>
                <div class="invalid-feedback">入力してください</div>
            </div>
            <!--/Eメール-->

            <!--ファイル選択-->
            <div class="form-row mb-4">
            <img src="<?php echo base_url();?>assets/img/PICTURE.png" alt=mtof><span class="badge badge-warning text-danger bg-light">required</span>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile" data-browse="brow">select picture</label>
                </div>
            </div>
            <!--/ファイル選択-->

            <!--内容-->
            <div class="form-row mb-4">
            <img src="<?php echo base_url();?>assets/img/CONTENT_OF_LETTER.png" alt=mtof><span class="badge badge-warning text-danger bg-light">required</span>
                <textarea class="form-control" id="Textarea" rows="10" placeholder="content of letter" required></textarea>
                <div class="invalid-feedback">please enter</div>
            </div>
            <!--/内容-->
            <!-- ボタン -->
            <div class="col-sm-12 col-md-12">
                <button class="btn btn-success btn-lg btn-block" type="submit">UP DATE</button>
            </div>

            </form>
        </div>
        </form>
    </div>
</div>

<div class="py-4 bg-dark text-light text-center">
    <ul class="navbar-nav mr-auto">
    <small>&copy 2019-2019 Mail to the Future</small>   
    </ul>
</div>

</body>
</html>

            </div>
            <!--/内容-->
            <!-- ボタン -->
            <div class="col-sm-12 col-md-12">
                <button class="btn btn-success btn-lg btn-block" type="submit">UP DATE</button>
            </div>

            </form>
        </div>
        </form>
    </div>
</div>

<div class="py-4 bg-dark text-light text-center">
    <ul class="navbar-nav mr-auto">
    <small>&copy 2019-2019 Mail to the Future</small>   
    </ul>
</div>

</body>
</html>
