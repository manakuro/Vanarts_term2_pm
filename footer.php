<?php 
    // Create social media section html
    $socialHTML = '';
    foreach($config['social_media'] as $val) {
        $socialHTML .= '<li><a href="'. $val['href'] .'"><i class="'. $val['class']  .'"></i>'. $val['name'] .'</a></li>';
    }

?>
<footer class="page-footer section">
    
    <div class="row">
        
        <div class="span-4 columns">
            
            <h5 class="page-footer-title">Follow Us</h5>

            <ul class="social">
            <?php  echo $socialHTML; ?>
            </ul>

        </div>

        <div class="span-4 columns">

            <h5 class="page-footer-title">Site Maps</h5>

            <ul class="page-footer-nav">
            <?php echo $navHTML; ?>
            </ul>

        </div>

        <div class="span-4 columns">
            
            <h5 class="page-footer-title">News Letter</h5>

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