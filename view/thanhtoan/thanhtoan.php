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

<form action="index.php?act=thanhtoan" method="post">
<?php
  if(isset($_SESSION['user'])){
    $hoten=$_SESSION['user']['hoten'];
    $diachi=$_SESSION['user']['diachi'];
    $tel=$_SESSION['user']['tel'];
    $email=$_SESSION['user']['email'];
  }else{
    $hoten="";
    $diachi="";
    $tel="";
    $email="";
  }
  ?>
   <input type="hidden"  name='tongtien'>
    <h2>Thông tin thanh toán</h2>
  <label for="hoTen">Họ và tên:</label>
  <input type="text" id="hoTen" name="hoten" required value="<?= $hoten ?>">

  <label for="diaChi">Địa chỉ:</label>
  <input type="text" id="diaChi" name="diachi" required value="<?= $diachi ?>">

  <label for="soDienThoai">Số điện thoại:</label>
  <input type="tel" id="soDienThoai" name="tel"  required value="<?= $tel ?>">

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required value="<?= $email ?>">

   <p>Phương thức thanh toán:</p>
   <span>Thanh toán khi nhận hàng</span><img src="img/thanh toán khi nhận.jpg" alt="" class='img_tt'><input type="radio" name='phuongthuc_tt' value="1" required >
   <!-- <span>Thanh toán qua ngân hàng</span><img src="img/thanh toán ngân hàng.jpg" alt="" class='img_tt'><input type="radio" name='phuongthuc_tt' value="2" required>
   <span>Thanh toán qua momo</span><img src="img/thanh toán momo.png" alt="" class='img_tt img_tt_momo'><input type="radio" name='phuongthuc_tt' value="3" required>
   <span>Thanh toán qua vnpay</span><img src="img/thanh toán vnpay.png" alt="" class='img_tt img_tt_vnpay'><input type="radio" name='phuongthuc_tt' value="4" required> -->
   
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
    <form action="" method="post">
    <tr>
        <th style="display: none;"><input type="hidden" value="<?= $giohang[0] ?>" name="id_sanpham"></th>   
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
    </form>
</table>  

<div class="muahang">
  <input type="button" value="Mua thêm"><a href="index.php"></a></input>
  <input type="submit" name='thanhtoan' value='Thanh toán'></input>
</div>
</form>


</body>
</div>