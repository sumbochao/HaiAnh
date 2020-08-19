<main id="lg_top">
    <section id="lg_topNav">
        <a href="http://<?=$config_url?>" title="" target="_blank">
           <i class="fa fa-reply-all" aria-hidden="true"></i> Vào trang web
        </a>
    </section>
    <section id="lg_box">
        <form action="index.php?com=user&act=login" id="validate" class="form" method="post">
            <section id="lg_pg_center">
                <header id="lg_header">
                    <h3><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập quản trị</h3>
                </header><!-- /header -->
                <section id="lg_content">
                    <aside class="lg_row">
                        <label>Tên đăng nhập: </label>
                        <input type="text" name="username" value="" id="username" class="validate[required]" placeholder="">
                    </aside>
                    <aside class="lg_row">
                        <label>Mật khẩu: </label>
                        <input type="password" name="password" value="" class="validate[required]" id="pass" placeholder="">
                    </aside>
                    <aside class="lg_row">
                        <label>Mã bảo vệ: </label>
                        <p><img src="img-captcha.php?rand=<?php echo rand();?>" style="cursor: pointer; margin-bottom: 10px;" onclick="this.src='img-captcha.php?rand=Math.random()*10000'" id='captchaimg'></p>
                        <input type="captcha" name="captcha" value="" class="validate[required]" id="captcha" placeholder="">
                    </aside>
                    <aside class="lg_row">
                        <div class="lg_inner">
                           <p style="text-align: center;">Nếu bạn quên mật khẩu vui lòng nhấn vào đây <a href="http://<?=$config['link-web']?>" title="<?=$config['link-web']?>" target="_blank"><?=$config['link-web']?></a></p>
                        </div>
                    </aside>
                </section>
                <section id="lg_btn">
                    <input type="submit" name="" value="Vào hệ thống" class="logMeIn">
                </section>
                <div class="ajaxloader"><img src="images/loader.gif" alt="loader" /></div>
                <div id="loginError">

                </div>
            </section>
        </form>
    </section>
    <section id="lg_copy">
        Copyright &copy; 2016 by <?=$config['link-web']?> 
    </section>
</main>