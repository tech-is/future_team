<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form action="/Form_ctrl">
                    <button class="btn btn-outline-primary" >未来へメールを送る</button>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form>
                    <button type=button id="logout" class="btn btn-outline-primary" >ログアウト</button>
                </form>
            </li>
        </ul>
    </nav>

    <p>メール情報</p>
    <div class='row'>
        <?php for($i=1;$i<=$data[0];$i++) {
            // delete_flagが0のメールだけ表示
            if($data[$i]["delete_flag"] == 0) { ?>
        <div class='box_blue col-sm-4'>
            <form class='mail_info'>
                <ul style="list-style: none;">
                送る日<li class="send"><?php echo $data[$i]["send_date"] ?></li><br>
                届ける相手<li class="name"><?php echo $data[$i]["to_name"] ?></li><br>
                メッセージ<li class="message"><?php echo $data[$i]["message"] ?></li><br>
                画像<li class="file"><?php echo $data[$i]["file_name"] ?></li><br>
                送付先<li class="mail"><?php echo $data[$i]["to_address"] ?></li><br>
                </ul>
                <input type='hidden' name='delete_id' value='<?php echo $data[$i]['id'] ?>' class="delete_id">
                <button type='button' value='削除' class="btn btn-outline-primary delete">削除</button>
                <button type="button" class='btn btn-outline-primary js-modal-open' >編集</button>
                <input type="hidden" name="csrf_token" value="<?php echo $_COOKIE['csrf_cookie'];?>" class="token">
            </form>
        </div>
            <?php } ?>
    <?php } ?>
    </div>

    <!-- Modal_HTML -->
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
            <div class="modal__content">
                <form id="form">
                    <div class="form-group col-sm-8 offset-sm-2">
                        <p>手紙を送る相手</p>
                        <input class="form-control form-container" type="text" id="modal_info_name" required><br>
                    </div>
                    <div class="form-group col-sm-8 offset-sm-2">
                        <p>届く未来</p>
                        <input class="form-control form-container" type="date" id="modal_info_send" required><br>
                    </div>
                    <div class="form-group col-sm-8 offset-sm-2">
                        <p>手紙の内容</p>
                        <textarea class="form-control form-container" type="" id="modal_info_message" placeholder="元気にしていますか" required></textarea><br>
                    </div>
                    <div class="form-group col-sm-8 offset-sm-2">
                        <p>写真・画像を手紙に添える</p>
                        <input class="form-control" type="" id="modal_info_file"><br>
                    </div>
                    <div class="form-group col-sm-8 offset-sm-2">
                        <p>送付先メールアドレス</p>
                        <input class="form-control form-container" type="email" id="modal_info_mail" required><br>
                    </div>
                    <input type='hidden' name='delete_id' value='<?php echo $data[$i]['id'] ?>' class="delete_id">
                    <div class="form-group col-sm-8 offset-sm-2">
                        <button type="reset" class="btn btn-outline-primary" >リセット</button>
                    </div>
                    <div class="form-group col-sm-8 offset-sm-2">
                        <input class="btn btn-outline-primary" type="submit" name="" value="変更" >
                    </div>
                </form>
                <a class="js-modal-close" href="">閉じる</a>
            </div>
        </div><!--modal__inner-->
    </div><!--modal-->

    <?php include(dirname(__FILE__)."/include/footer.php"); ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/edit.js" defer></script>
    <!-- sweet_alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" defer></script>
    <!-- JS Modal -->
    <script src="<?php echo base_url(); ?>assets/js/edit.js" defer></script>
    <!-- JS load -->
    <script src="<?php echo base_url(); ?>assets/js/mypage.js" defer></script>
</body>
</html>