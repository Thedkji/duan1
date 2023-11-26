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
  
  <?php $i = 1;
  $j=0;
  $tongtien=0;
  foreach($_SESSION['giohang'] as $giohang)
  {
    $tongtien+=$giohang[6];
    $_SESSION['tongtien']=$tongtien;
  ?>
    <!-- $sp_add=[$id_sanpham,$img,$ten_sp,$gia_sp,$gia_cu,$soluong,$thanhtien]; -->
    <tr>
    <th><?= $i ?></th>
    <th><img src="img/<?= $giohang[1] ?>" alt="" width="150px" height="150px"></th>
    <th><?= $giohang[2] ?></th>
    <th><?= number_format($giohang[3]) ?> VNĐ</th>
    <th><?= number_format($giohang[4]) ?> VNĐ</th>
    <th><?= $giohang[5] ?></th>
    <th><?= number_format($giohang[6]) ?> VNĐ</th>
    <th><a href="index.php?act=xoa_giohang&id_cart=<?= $j ?>" onclick="return confirm('Bạn có muốn xóa')">Xóa</a></th>
    <th><a href="" onclick='return prompt("Mời nhập số lượng cần sửa")'>Sửa số lượng</a></th>
  </tr>
  <?php $i++; $j+=1;} ?>
  <tr class="total-row">
      <td colspan="7"><h3>Tổng tiền :</h3></td>
      <td><h3><?= number_format($tongtien) ?> VNĐ</h3></td>
    </tr>
</table>  

<div class="muahang">
  <button><a href="index.php">Tiếp tục mua hàng</a></button>
  <button><a href="index.php?act=thanhtoan">Thanh toán</a></button>
  <button><a href="index.php?act=xoa_giohang">Xóa giỏ hàng</a></button>
</div>

</body>
</html>
