<?php 
    // Create social media section html
    $socialHTML = '';
    foreach($config['social_media'] as $val) {
        $socialHTML .= '<li><a href="'. $val['href'] .'"><i class="'. $val['class']  .'"></i>'. $val['name'] .'</a></li>';
    }

?>
<footer class="page-footer">
    
    <div class="row">
        
        <div class="span-3 columns">
            
            <h5 class="page-footer-title">Location</h5>

            <p class="footer-cap">
            Vancouver Institute of Media Arts 570 Dunsmuir Street, Suite 600 Vancouver, BC, Canada V6B 1Y1 
            </p>
            <p class="footer-cap">Phone: 604-682-2787</p>

        </div>

        <div class="span-3 columns">
            
            <h5 class="page-footer-title">Hours</h5>

            <p class="footer-cap">Monday - Saturday </p>
            <p class="footer-cap">8 am - 9 pm</p>
            <p class="footer-cap">Sunday</p>
            <p class="footer-cap">10 am - 6 pm</p>

        </div>

        <div class="span-3 columns">

            <h5 class="page-footer-title">Site Maps</h5>

            <ul class="page-footer-nav">
            <?php echo $navHTML; ?>
            </ul>

        </div>

        <div class="span-3 columns">
            
            <h5 class="page-footer-title">Follow Us</h5>

            <ul class="social">
            <?php  echo $socialHTML; ?>
            </ul>

        </div>

    </div>

</footer>

        <!-- JavaScript -->    
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>