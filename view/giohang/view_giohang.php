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

    th, td {
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
    <th>STT</th>
    <th>Ảnh</th>
    <th>Tên sản phẩm</th>
    <th>Giá sản phẩm</th>
    <th>Giá cũ sản phẩm</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    <th>Hành động</th>
  </tr>
  <?php if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) { ?>
    <?php
    $i = 0;
    $tongtien = 0;
    foreach ($_SESSION['giohang'] as $item) {
      $tt = $item[3] * $item[5];
      $tongtien += $tt;
      ?>
      <tr>
        <td><?= ($i + 1) ?></td>
        <td><img src="img/<?= $item[1] ?>" alt=""></td>
        <td><?= $item[2] ?></td>
        <td><?= number_format($item[3]) ?></td>
        <td><?= number_format($item[4]) ?></td>
        <td><?= $item[5] ?></td>
        <td><?= number_format($tt) ?></td>
        <td><a href="index.php?act=xoa_giohang&i=<?= $i ?>">Xóa</a></td>
      </tr>
      <?php $i++;
    } ?>
    <tr class="total-row">
      <td colspan="7"><h3>Tổng tiền :</h3></td>
      <td><h3><?= number_format($tongtien) ?> VNĐ</h3></td>
    </tr>
  <?php }  $_SESSION['tongtien']=$tongtien;?>
</table>

<div class="muahang">
  <button><a href="index.php">Tiếp tục mua hàng</a></button>
  <button><a href="index.php?act=thanhtoan">Thanh toán</a></button>
  <button><a href="index.php?act=xoa_giohang">Xóa giỏ hàng</a></button>
</div>

</body>
</html>
