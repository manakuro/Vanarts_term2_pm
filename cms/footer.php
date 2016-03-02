<?php 
    // Create social media section html
    $socialHTML = '';
    foreach($config['social_media'] as $val) {
        $socialHTML .= '<li><a href="'. $val['href'] .'"><i class="'. $val['class']  .'"></i>'. $val['name'] .'</a></li>';
    }

?>
<footer class="page-footer">
    
    <div class="row row-center">
        
        <div class="span-12 columns">
            
            <p class="footer-cap">©Yoshi Hair Salon Studio 2016</p>

        </div>

    </div>

</footer>

        <!-- JavaScript -->
        <script src="../js/admin.js"></script>

    </body>
</html>