<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ballykilcline_Society
 */

?>
<?php wp_footer(); ?>
    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="col-sm-3">
                <p><a href="/">Ballykilcline Society</a></p>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li><a href="">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">Contact</a></li>
                        <li class="signup-link"><a href="">Sign up now</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <p class="pull-right">&copy; 2018 Eastport Web</p>
            </div>
        </div>
    </footer>

    
    <!-- MODAL -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List.</h4>
                </div>
                <div class="modal-body">
                    <p>Adding your name and email will keep you up to date with <em>all </em>our news!</p>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-contorl" id="subscribe-name" placeholder="Your first name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">your email</label>
                            <input type="text" class="form-contorl" id="subscribe-email" placeholder="Your email">
                        </div>
                        <input type="submit" class="btn btn-danger" value="Subscribe!">
                    </form>
                    <hr>
                    <p><small>By providing your email you consent to recieving occasional informative emails and the odd promotion.</small>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP CORE JS ****CHANGE JQUERY IN LOCAL ASSETS-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


</body>
</html>
