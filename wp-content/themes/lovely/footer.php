<footer class="copyrights">
    <div class="container-fluid">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-links">
                    <?php 
                        wp_nav_menu( [ 
                            'container_class' => 'footer-links',
                            'theme_location'  => 'footer_menu'
                        ] );
                    ?>
                </p>
                <p class="footer-company-name">All Rights Reserved. <a href="#">Kozak</a> Design By : <a href="">Alexandr Yushkevych</a></p>
            </div>

            <div class="footer-right">
                <form method="get" action="#">
                    <input placeholder="Subscribe our newsletter.." name="search">
                    <i class="fa fa-envelope-o"></i>
                </form>
            </div>

        </div>
    </div><!-- end container -->
</footer>
</body>
</html>