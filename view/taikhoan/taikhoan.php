
<div class="login-register-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <!--Login Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register">
                            <div class="form-login-title">
                                <h2>Login</h2>
                            </div>
                            <div class="login-form">
                            <form action="index.php?act=dangnhap" method="POST">
                                    <div class="form-fild">
                                        <p><label>User<span class="required">*</span></label></p>
                                        <input name="user" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Mật khẩu <span class="required">*</span></label></p>
                                        <input name="pass" value="" type="password">
                                    </div>
                                    <div class="login-submit">
                                        <button type="submit" class="btn" name="dangnhap">Login</button>
                                        <label>
                                            <input class="checkbox" name="rememberme" value="" type="checkbox">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                    <div class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--Login Form End-->
                    <!--Register Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register register-pt-0">
                            <div class="form-register-title">
                                <h2>Register</h2>
                            </div>
                            <div class="register-form">
                                <form action="index.php?act=dangky" method="POST">
                                    <div class="form-fild">
                                            <p><label>Email<span class="required">*</span></label></p>
                                            <input name="email"  type="email">
                                        </div>
                                        <div class="form-fild">
                                    <p><label>User<span class="required">*</span></label></p>
                                        <input name="user"  type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Mật khẩu<span class="required">*</span></label></p>
                                        <input name="pass"  type="password">
                                    </div>
                                    <div class="register-submit">
                                        <button type="submit" class="btn" name="dangky">Register</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <!--Register Form End-->
                </div>
            </div>
        </div>
        <!--Login Register section end-->