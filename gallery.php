<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">Gallery</h3>

        <section class="section section-gallery">
            
            <div class="row">

            <?php foreach($config['gallery']['lists'] as $key => $val): ?>
                <?php
                    $id =  'gallery_'.$key;
                ?>
                <div class="span-6 columns section-gallery-li">
                    <a href="#<?php echo $id; ?>" class="fbox" data-fancybox-group="group">
                        <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                        <div class="section-gallery-li-overlay"></div>
                    </a>
                </div>

                <div id="<?php echo $id; ?>" style="display:none;" class="gallery-modal">

                    <div class="row">
                    
                        <div class="span-6 columns">
                            <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                        </div>
                        <div class="span-6 columns">
                            <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>

            </div>

        </section><!-- end of section-testimonials -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>