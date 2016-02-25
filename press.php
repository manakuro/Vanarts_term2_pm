<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">Press</h3>

        <section class="section section-press">
            
            <div class="row">

            <?php foreach($config['press']['lists'] as $val): ?>

                <div class="span-6 columns section-press-li">

                    <h5 class="section-press-li-heading"><?php echo $val['heading']; ?></h5>

                    <a href="#">
                        <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">
                    </a>

                    <div class="section-press-li-divider"></div>
                </div>
            <?php endforeach; ?>

            </div>

        </section><!-- end of section-press -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>