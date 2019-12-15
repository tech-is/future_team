<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    include(dirname(__FILE__)."/include/header.php");
?>
<body>
    <form action="/Form_ctrl">
        <button class="btn btn-outline-primary" >未来へメールを送る</button>
    </form>
    <?php
        echo 'こんにちは'."<br>";
        echo $_SESSION['id'];
        // idの情報から名前、メアドを参照
        echo $name."<br>".$mail_address."<br>".$delete_flag;
        // session_destory
        ?>
    <form action="/login_ctrl/logout">
        <button class="btn btn-outline-primary" >ログアウト</button>
    </form>
    <?php include(dirname(__FILE__)."/include/footer.php"); ?>
</body>
</html>