<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include(dirname(__FILE__)."/attributes/form-data.php");

    echo doctype();
    include(dirname(__FILE__)."/include/header.php");
?>

<body class="wrap">
    <h1 class="text-center">Mail To The Future</h1>
    <div class="container text-center">
        <div class="row">
            <form action="#" method="post" enctype="multipart/form-data" onsubmit="return false;" class = "col-sm-12">
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>届く未来</p>
                    <input class="form-control form-container" type="date" name="" value="" required><br>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>手紙を送る相手</p>
                    <input class="form-control form-container" type="text" name="" value="" placeholder="１年後のぼくへ" required><br>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>手紙の内容</p>
                    <textarea class="form-control form-container" type="" name="" value="" placeholder="元気にしていますか" required></textarea><br>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>写真・画像を手紙に添える</p>
                    <input class="form-control" type="file" name="" value=""><br>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <p>送付先メールアドレス</p>
                    <input class="form-control form-container" type="email" name="" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <input class="btn btn-outline-primary" type="submit" name="" value="手紙を送信する" >
                </div>
            </form>
        </div>
    </div>
    <?php include(dirname(__FILE__)."/include/footer.php"); ?>

</body>

</html>