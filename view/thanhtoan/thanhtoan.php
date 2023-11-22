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
  </style>

<body>

<form action="index.php?act=thanhtoan" method="post">
   <input type="hidden" value=<?= $_SESSION['tongtien']?> name='tongtien'>
    <h2>Thông tin thanh toán</h2>
  <label for="hoTen">Họ và tên:</label>
  <input type="text" id="hoTen" name="hoten" required>

  <label for="diaChi">Địa chỉ:</label>
  <input type="text" id="diaChi" name="diachi" required>

  <label for="soDienThoai">Số điện thoại:</label>
  <input type="tel" id="soDienThoai" name="tel"  required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

   <p>Phương thức thanh toán:</p>
   <label>Thanh toán khi nhận hàng</label><input type="radio" name='phuongthuc_tt' value="1">
   <label>Thanh toán online</label><input type="radio" name='phuongthuc_tt' value="2">
   <label>Thanh toán qua momo</label><input type="radio" name='phuongthuc_tt' value="3">
   <label>Thanh toán qua vnpay</label><input type="radio" name='phuongthuc_tt' value="4">

   <span><h3>Tổng tiền : <?= number_format($_SESSION['tongtien'])?> VND</h3></span>
   
  <input type="submit" value="Thanh toán" name='btn-thanhtoan'>

</body>
</div>