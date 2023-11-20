<!--Register Form Start-->
<div class="col-md-6 col-sm-6" style="margin: 20px auto;">
    <div class="customer-login-register register-pt-0">
        <div class="form-register-title">
            <h2>
                <?= $_SESSION['user']['user'] ?>
            </h2>
        </div>
        <div class="register-form">
            <form action="index.php?act=thongtincuatoi" method="POST">
                <?php if (isset($_SESSION['user']) && is_array($_SESSION['user'])) { ?>
                    <div class="form-fild">
                        <input name="id_user" type="hidden" value=<?= $_SESSION['user']['id_user'] ?>>
                    </div>
                    <div class="form-fild">
                        <p><label>Email<span class="required">*</span></label></p>
                        <input name="email" type="email" value=<?= $_SESSION['user']['email'] ?>>
                    </div>
                    <div class="form-fild">
                        <p><label>Số điện thoại<span class="required">*</span></label></p>
                        <input name="tel" type="number" value=<?= $_SESSION['user']['tel'] ?>>
                    </div>
                    <div class="form-fild">
                        <p><label>Tài khoản<span class="required">*</span></label></p>
                        <input name="user" type="text" value=<?= $_SESSION['user']['user'] ?>>
                    </div>
                    <div class="form-fild">
                        <p><label>Mật khẩu<span class="required">*</span></label></p>
                        <input name="pass" type="text" value=<?= $_SESSION['user']['pass'] ?>>
                    </div>
                    <div class="form-fild">
                        <p><label>Địa chỉ<span class="required">*</span></label></p>
                        <input name="diachi" type="text" value=<?= $_SESSION['user']['diachi'] ?>>
                    </div>
                    <div class="register-submit">
                        <input type="submit" class="btn" name="capnhat" value="Cập nhật thông tin">
                    </div>
                <?php } ?>
            </form>
            <?php
            if (isset($thongbao)) {
                echo $thongbao;
                ?>
            <?php } ?>
        </div>
    </div>
</div>
<!--Register Form End-->