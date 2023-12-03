<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idsp = $_REQUEST['idsp'];

$dsbl = loadall_bl($idsp);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<style>
    .binhluan {
        width: 100%;
        height: 100%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        
    }

    table,
    th,
    td {
        word-wrap:break-word;
        max-width: 1200px;
        border: 1px solid #ccc;
    }

    th,
    td {
        max-width: 600px;
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    .hang1 td{
        font-weight: bold;
    }
</style>

<body>
    <div class="mb">
        <div class="box_content2 product_portfolio">
            <table class='binhluan'>
                <tr class="hang1">
                    <td>Người bình luận</td>
                    <td>Nội dung</td>
                    <td>Ngày bình luận</td>
                </tr>
                <?php
                foreach ($dsbl as $dsbl) {
                    extract($dsbl);
                    ?>
                    <tr>
                        <td>
                            <?= $hoten ?>
                        </td>

                        <td>
                            <?= $noidung_bl ?>
                        </td>


                        <td>
                            <?= $ngay_bl ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
            ?>
            <div class="box_search">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="hidden" name='idsp' value='<?= $idsp ?>'>
                    <textarea name="noidung" id="" cols="30" rows="10" style="width: 500px; height:100px" placeholder="Nhập nội dung bình luận..."></textarea>
                    <div><input type="submit" value="gửi bình luận" name="guibinhluan"
                            style='width: 130px;height: 50px; margin:20px auto;font-weight: bold;background-color: black;border: none;color:white'>
                    </div>
                </form>
            </div>
        <?php } else {
            echo "Bạn cần đăng nhập để bình luận";
        } ?>
        <?php
        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noidung_bl = $_POST['noidung'];
            $id_user = $_SESSION['user']['id_user'];
            $idsp = $_POST['idsp'];
            $ngay_bl = date('Y-m-d h:m:s');
            insert_bl($noidung_bl, $id_user, $idsp, $ngay_bl);
            header("location:" . $_SERVER['HTTP_REFERER']);
        }

        ?>
    </div>

</body>

</html>