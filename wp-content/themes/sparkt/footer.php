<?php wp_footer()?>
<div class="c-footer">
    <a class="c-footer__back-to-top" href="#" class="">
        Back to top
        <img class="c-footer__back-to-top-icon" src='<?php echo get_template_directory_uri() ?>/public/images/arrow-top.svg' />
    </a>
    <div class="c-footer__wrapper">
        <div class="c-footer__column">
            <a class="c-footer__logo-link" href="<?php echo get_home_url(); ?>">
                <img src='<?php echo get_template_directory_uri() ?>/public/images/logo-white.svg' />
            </a>
            <div class="c-footer__address"><strong>SparkT</strong> <br />ul. Wańkowicza 5/30<br />02-796 Warsaw, Poland</div>
        </div>
        <div class="c-footer__column">
            <?php wp_nav_menu(array("theme_location" => "main-menu")); ?>
        </div>
        <div class="c-footer__column">
            <ul class="c-footer__wrapper-privacy">
                <li class="c-footer__privacy-item">
                    <a class="c-footer__privacy-link" href="#">Privacy policy</a>
                </li>
                <li class="c-footer__privacy-item">
                    <a class="c-footer__privacy-link" href="#">Terms of use</a>
                </li>
            </ul>
            <div class="c-footer__title">Follow us</div>
            <ul class="o-social__wrapper-social">
                <li class="o-social__social-item">
                    <a href="https://www.facebook.com/sparkbit.software/" target="_blank" class="o-social__social-link"><img src='<?php echo get_template_directory_uri() ?>/public/images/icon-fb.svg' /></a>
                </li>
                <li class="o-social__social-item">
                    <a href="https://twitter.com/_sparkbit_" target="_blank" class="o-social__social-link"><img src='<?php echo get_template_directory_uri() ?>/public/images/icon-tw.svg' /></a>
                </li>
                <li class="o-social__social-item">
                    <a href="https://www.linkedin.com/company/sparkbit?trk=company_logo" target="_blank" class="o-social__social-link"><img src='<?php echo get_template_directory_uri() ?>/public/images/icon-in.svg' /></a>
                </li>
            </ul>
        </div>
        <div class="c-footer__column">
            <h3>Boost your business</h3>
            <button class="o-btn c-footer__btn">Schedule demo</button>
        </div>
    </div>
</div>
<a href="#" class="c-footer__post"><img src='<?php echo get_template_directory_uri() ?>/public/images/icon-post.svg' /></a>
</body>
</html>
