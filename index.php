<?php include "header.php"; ?>

    <div class="hero section">

        <div class="hero-heading">

            <p class="hero-heading-ca-title">New Hair Styles</p>
            <p class="hero-heading-ca-title">for 2016</p>

            <a href="./booking.php" class="hero-heading-ca btn">Schedule Now</a>                    

        </div>

        <?php foreach($config['hero_images'] as $key => $val): ?>
        <div class="hero-bg slider-show" style="<?php echo $val['style']; ?>" data-image_index="image_<?php echo $key; ?>"></div>
        <?php endforeach; ?>

    </div><!-- end of hero -->
    
    <main class="page-main">

        <section class="section section-stylists">
            
            <h3 class="section-title">Top Stylists</h3>

            <div class="row">

            <?php foreach($config['home_stylists'] as $val): ?>
                <div class="span-4 columns section-stylists-li">
                    <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                    <p class="section-stylists-title"><?php echo $val['name']?></p>
                    <p class="section-stylists-desc"><?php echo $val['desc']?></p>
                </div>
            <?php endforeach; ?>

            </div>

        </section><!-- end of section-stylists -->

        <section class="section section-testimonials">
            
            <h3 class="section-title">Testimonials</h3>

            <div class="row">

            <?php foreach($config['home_testimonials'] as $val): ?>
                <div class="span-4 columns section-testimonials-li">
                    <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                    <div class="section-testimonials-li-overlay">
                        <p class="section-testimonials-li-desc"><?php echo $val['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>

        </section><!-- end of section-testimonials -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>