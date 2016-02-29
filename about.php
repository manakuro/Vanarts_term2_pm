<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">About Us</h3>

        <section class="section section-about">
            
            <div class="row">
                
                <div class="span-6 columns">

                    <p class="about-desc">Since 2001</p>

                <?php foreach($config['about']['about_desc'] as $val): ?>
                    <p class="about-desc">
                        <?php echo $val; ?>
                    </p>
                <?php endforeach; ?>

                </div>

                <div class="span-6 columns">
                    <img src="<?php echo $config['about']['about_img']; ?>" alt="<?php echo $config['about']['about_img_alt']; ?>">
                </div>

            </div>


        </section>

        <section class="section section-about-stylists">
            
            <div class="row">

            <div class="span-12 columns">
                <h3 class="about-section-title">Stylists</h3>
            </div>

            <?php foreach($config['about']['stylists'] as $val): ?>
                <div class="span-3 columns section-about-stylists-li">
                    <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                    <p class="section-about-stylists-title"><?php echo $val['name']?></p>
                    <p class="section-about-stylists-desc"><?php echo $val['desc']?></p>
                </div>
            <?php endforeach; ?>

            </div>

        </section><!-- end of section-stylists -->

        <section class="section section-testimonials">
            
            <div class="row">

                <div class="span-12 columns">
                    <h3 class="about-section-title">Testimonials</h3>
                </div>

                <div class="section-testimonials-wrapper cf">

                    <?php foreach($config['home_testimonials'] as $val): ?>
                        <div class="span-4 columns section-testimonials-li">
                            <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                            <div class="section-testimonials-li-overlay">
                                <p class="section-testimonials-li-desc"><?php echo $val['desc']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </section><!-- end of section-testimonials -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>