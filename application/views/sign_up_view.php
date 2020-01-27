<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>
<body>
    <div class="background-wrapper"></div>
    <div class="body-wrapper"></div>
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

    <section id="about">
        <div class="container">
            <div class="card row">
                <div class="col-sm-6 col-md-6 mx-auto text-center">
                    <img src="<?php echo base_url();?>assets/img/signup.png" alt="mtof"style="width: 200px;"><br>
                    <!-- <a href="<?php echo base_url(); ?>MtoF_sign_up/">会員でない方はこちらから</a> -->
                </div>
                <form action="" id="submit_push" method="post" class="form-signup" onsubmit="return false;">
                    <!-- row1 -->
                    <div class="form-group col-sm-12 col-md-12">
                        <label>名前(カナ)</label>
                        <input class="form-control form-container" type="text" name="name" id="name" placeholder="(例)ヤマダタロウ" title="全角カナで入力してください" required><br>
                        <div id="error_name" style="color: red;"></div>
                    </div>
                    <!-- <row2> -->
                    <div class="form-group col-sm-12 col-md-12">
                        <label>メールアドレス</label>
                        <input class="form-control form-container" type="email" name="mail" id="mail" placeholder="example@example.com" required><br>
                        <div id="error_mail" style="color: red;"></div>
                    </div>
                    <!-- <row3> -->
                    <div class="form-group col-sm-12 col-md-12">
                        <label>パスワード</label>
                        <input class="form-control form-container" type="password" name="pswd" id="pswd" placeholder="半角英字8文字以上で入力してください" required><br>
                        <div id="error_pswd" style="color: red;"></div>
                    </div>
                    <!-- <row4> -->
                    <div class="form-group col-sm-12 col-md-12">
                        <p>パスワードの確認</p>
                        <input class="form-control form-container" type="password" name="check_pswd" id="check_pswd"  placeholder="半角英字8文字以上で入力してください" on="CheckPassword(this)" required>
                        <div></div>
                    </div>
                    <!-- <row5> -->
                    <div class="form-group col-sm-12 col-md-12">
                        <button class="btn btn-success btn-lg btn-block" type="submit">登録</button>
                    </div> 
                        <!-- CSRF対策 「トークンの埋め込み」 -->
                        <input type="hidden" name="<?php echo $csrf_token;?>" id="token" value="<?php echo $csrf_hash;?>" />
                </form>
            </div>
        </div>
    </section>


    <?php include(dirname(__FILE__)."/include/footer.php"); ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sign_up.js" defer></script>
    <!-- sweet_alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>