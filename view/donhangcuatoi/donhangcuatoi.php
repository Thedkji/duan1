<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);

        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;

        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
            color: #333;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .total-row td {
            font-weight: bold;
        }

        .muahang {
            text-align: center;
            margin-top: 20px;
        }

        .muahang button {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .muahang button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <table>

        <tr>
            
            <th>Mã đơn hàng</th>
            <th>Phương thức thanh toán</th>
            <th>Tổng tiền</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ngày đặt hàng</th>
            <th>Trạng thái</th>

        </tr>
        <?php
        // if (isset($_GET['id_user'])) {
        //     $id_user = $_GET['id_user'];
        // } else {
        //     $id_user = 0;
        // }    
        

        if(is_array($list_donhangct_cuatoi)){
            for ($i=0; $i <count($list_donhangct_cuatoi) ; $i++) { 
               extract($list_donhangct_cuatoi);
            
               
            ?>
            <?php
            $thdh=ttnh($dhct['phuongthuc_tt']);
            ?>
            <tr>
                <th style="display: none;"><input type="hidden" name="<?= $id_user ?>">
                <?= $id_user ?>
                </th>
                <th>
                    <?= $madh ?>
                </th>
                <th>
                    <?= $thdh ?>
                </th>
                <th>
                    <?= number_format($tong_donhang) ?> VNĐ
                </th>
                <th>
                    <?= $hoten ?>
                </th>
                <th>
                    <?= $email ?>
                </th>
                <th>
                    <?= $tel ?>
                </th>
                <th>
                    <?= $diachi ?>
                </th>
                <th>
                    <?= $ngay_dathang ?>
                </th>
                <th>
                    <?php
                    switch ($trangthai) {
                        case '0':
                            echo "<p style='color:green'>Đơn hàng mới</p>";
                            break;
                        case '1':
                            echo "<p style='color:green'>Đang xử lý</p>";
                            break;
                        case '2':
                            echo "<p style='color:green'>Đang giao hàng</p>";
                            break;
                        case '3':
                            echo "<p style='color:green'>Đã giao</p>";
                            break;
                    }
                    ?>
                </th>
            </tr>
        <?php }  }  ?>
    </table>

    <div class="muahang">
        <button><a href="index.php">Tiếp tục mua hàng</a></button>
    </div>

</body>

</html>