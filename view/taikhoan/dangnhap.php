
<div class="login-register-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20" >
            <div class="container">
                <div class="row" >
                    <!--Login Form Start-->
                    <div class="col-md-6 col-sm-6"  style="margin: auto;">
                        <div class="customer-login-register">
                            <div class="form-login-title">
                                <h2>Đăng nhập</h2>
                            </div>
                            <div class="login-form">
                            <form action="index.php?act=dangnhap" method="POST">
                                    <div class="form-fild">
                                        <p><label>Tài khoản<span class="required">*</span></label></p>
                                        <input name="user" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Mật khẩu <span class="required">*</span></label></p>
                                        <input name="pass" value="" type="password">
                                    </div>
                                    <div class="login-submit">
                                        <input type="submit" class="btn" name="dangnhap" value="Đăng nhập">
                                    </div>
                                    <div class="lost-password">
                                        <a href="index.php?act=quenmatkhau">Quên mật khẩu</a>
                                    </div>
                                </form>
                                <?php if(isset($thongbao)){
                                 echo $thongbao;   
                                }?>
                            </div>
                        </div>
                    </div>

                    <!--Login Form End-->
                   
                </div>
            </div>
        </div>
        <!--Login Register section end-->