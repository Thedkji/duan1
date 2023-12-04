<!--Register Form Start-->
<div class="col-md-6 col-sm-6" style="margin: 20px auto;">
    <div class="customer-login-register register-pt-0">
        <div class="form-register-title">
            <h2>Đăng ký</h2>
        </div>
        <div class="register-form">
            <form action="index.php?act=dangky" method="POST">
                <div class="form-fild">
                    <p><label>Họ tên<span class="required">*</span></label></p>
                    <input name="hoten" type="text" required>
                </div>
                <div class="form-fild">
                    <p><label>Email<span class="required" >*</span></label></p>
                    <input name="email" type="email" required>
                </div>
                <div class="form-fild">
                    <p><label>Số điện thoại<span class="required">*</span></label></p>
                    <input name="tel" type="number" required>
                </div>
                <div class="form-fild">
                    <p><label>Tài khoản<span class="required" >*</span></label></p>
                    <input name="user" type="text" required>
                </div>
                <div class="form-fild">
                    <p><label>Mật khẩu<span class="required" >*</span></label></p>
                    <input name="pass" type="password" required>
                </div>
                <div class="register-submit">
                    <input type="submit" class="btn" name="dangky" value="đăng ký">
                </div>
            </form>
            <p style="color:orangered"><a href="index.php?act=quenmatkhau">Quên mật khẩu ?</p>
            <?php
            if (isset($thongbao)&&$check!=false) {
                echo $thongbao;
                ?>
                <a href="index.php?act=dangnhap"><button style="background-color: #cea679;color:white">Chuyển đến trang đăng
                        nhập</button></a>
            <?php }else if(isset($thongbao1)){
                 echo $thongbao1;
            } ?>
        </div>
    </div>
</div>
<!--Register Form End-->