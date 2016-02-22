<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">Trendy Watch</h3>

        <section class="section section-trendy-watch">
            
            <!-- <div class="row"> -->

                <div class="section-trendy-watch-container">
                    
                    <?php foreach($config['trendy_watch']['lists'] as $key => $val): ?>

                        <div class="span-3 columns section-trendy-watch-li">
                            
                            <a href="<?php echo $val['href']; ?>">
                                
                                <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">

                                <div class="section-trendy-watch-desc-inner">
                                    <h5 class="section-trendy-watch-title"><?php echo $val['title']; ?></h5>
                                    <p class="section-trendy-watch-date"><?php echo $val['date']; ?></p>
                                    <p class="section-trendy-watch-desc"><?php echo $val['desc']; ?></p>
                                </div>

                            </a>

                        </div>

                    <?php endforeach; ?>

                </div>

            <!-- </div> -->

        </section><!-- end of section-services -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>