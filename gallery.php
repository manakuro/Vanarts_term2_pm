<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">Gallery</h3>

        <section class="section section-gallery">
            
            <div class="row">

                <div class="section-gallery--lists-wrapper cf">
                    
                <?php foreach($config['gallery']['lists'] as $key => $val): ?>

                    <div class="span-6 columns section-gallery-li">
                        <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                        <div class="section-gallery-li-overlay"></div>
                    </div>

                <?php endforeach; ?>

                </div>

            </div>

            <div class="row row-center">
                
                <div class="span-6 columns">
                    <a href="./booking.php" class="section-gallery-cta btn">Schedule Now</a>
                </div>

            </div>
            
        </section><!-- end of section-testimonials -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>