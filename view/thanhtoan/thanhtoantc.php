<div>
  <style>
    /* CSS code cho form thanh toán */
    form {
      margin: 30px auto;
      width: 60%;
      padding: 20px;
      border: 2px solid #ddd;
      border-radius: 8px;
      background-color: #f9f9f9;
    }

    label, input {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"], input[type="email"], input[type="tel"] {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .img_tt{
      width: 40px;
      height: 40px;
      margin-left: 10px;
    }
    .img_tt_momo{
      width: 30px;
      height: 30px;
    }
    .img_tt_vnpay{
      width: 70px;
      height: 30px;
    }
  </style>

<body>

<form action="index.php?act=thanhtoantc" method="post">
<?php
if(isset($list_donhangct)&&is_array($list_donhangct))
   {?>
<?php
            $thdh=ttnh($list_donhangct['phuongthuc_tt']);
            ?>
   <input type="hidden"  name='tongtien'>
    <h2 style="color: #45a049;">Đặt hàng thành công</h2>
  <label >Người đặt hàng:</label>
  <input type="text" id="hoTen" name="hoten" required readonly value="<?= $list_donhangct['hoten'] ?>">

  <label>Địa chỉ:</label>
  <input type="text" id="diaChi" name="diachi" required readonly value="<?= $list_donhangct['diachi']  ?>">

  <label >Số điện thoại:</label>
  <input type="tel" id="soDienThoai" name="tel"  required readonly value="<?= $list_donhangct['tel']  ?>">

  <label >Email:</label>
  <input type="email" id="email" name="email" required readonly value="<?= $list_donhangct['email']  ?>">

  <label >Mã đơn hàng:</label>
  <input type="email" id="email" name="email" required readonly value="<?= $list_donhangct['madh']  ?>">

  <label >Ngày đặt hàng:</label>
  <input type="email" id="email" name="email" required readonly value="<?= $list_donhangct['ngay_dathang'] ?>">

  <label>Tổng tiền hàng:</label>
  <input type="email" id="email" name="email" required readonly value="<?= number_format($list_donhangct['tong_donhang'])?> VNĐ">

  <label >Phương thức thanh toán:</label>
  <input type="email" id="email" name="email" required readonly value="<?= $thdh ?>">
  <?php } ?>

  <h2>Chi tiết giỏ hàng</h2>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      margin: 30px auto;
      border-collapse: collapse;
      width: 100%;
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

    .muahang input {
      margin: 10px;
      padding: 10px 10px;
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

    .muahang input:hover {
      background-color: #45a049;
    }
  </style>
<table>
  <tr>
    <th>STT</th>
    <th>Ảnh</th>
    <th>Tên sản phẩm</th>
    <th>Giá sản phẩm</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
  </tr>
  
  <?php $i = 1;
  $j=0;
  $tongtien=0;
  foreach($_SESSION['giohang'] as $giohang)
  {
    $tongtien+=$giohang[6];
  ?>
    <!-- $sp_add=[$id_sanpham,$img,$ten_sp,$gia_sp,$gia_cu,$soluong,$thanhtien]; -->
    <tr>
    <th><?= $i ?></th>
    <th><img src="img/<?= $giohang[1] ?>" alt="" width="100px" height="100px"></th>
    <th><?= $giohang[2] ?></th>
    <th><?= number_format($giohang[3]) ?> VNĐ</th>
    <th><?= $giohang[5] ?></th>
    <th><?= number_format($giohang[6]) ?> VNĐ</th>
  </tr>
  <?php $i++; $j+=1;} ?>
  <tr class="total-row">
      <td colspan="5"><h3>Tổng tiền :</h3></td>
      <td><h3><?= number_format($tongtien) ?> VNĐ</h3></td>
    </tr>
</table>  

<div class="muahang">
<a href="index.php"><input type="button" value="Mua thêm"></input></a>
</div>
</form>


</body>
</div>