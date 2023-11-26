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

   <input type="hidden"  name='tongtien'>
    <h2>Đặt hàng thành công</h2>
  <label for="hoTen">Người đặt hàng:</label>
  <input type="text" id="hoTen" name="hoten" required value="<?= $hoten ?>">

  <label for="diaChi">Địa chỉ:</label>
  <input type="text" id="diaChi" name="diachi" required value="<?= $diachi ?>">

  <label for="soDienThoai">Số điện thoại:</label>
  <input type="tel" id="soDienThoai" name="tel"  required value="<?= $tel ?>">

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required value="<?= $email ?>">

  <label for="email">Mã đơn hàng:</label>
  <input type="email" id="email" name="email" required value="<?= $email ?>">

  <label for="email">Ngày đặt hàng:</label>
  <input type="email" id="email" name="email" required value="<?= $email ?>">

  <label for="email">Tổng đơn hàng:</label>
  <input type="email" id="email" name="email" required value="<?= $email ?>">

  <label for="email">Phương thức thanh toán:</label>
  <input type="email" id="email" name="email" required value="<?= $email ?>">

</body>
</div>