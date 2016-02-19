<?php include "header.php"; ?>
    
    <main class="page-main">

        <h3 class="page-title">Services</h3>

        <section class="section section-services">
            
            <div class="row">

                <div class="span-5 columns">
                    <ul class="section-services-nav-lists">
                    <?php
                        $navListsHref = array();
                    ?>
                    <?php foreach($config['services']['nav_lists'] as $key => $val): ?>
                        <?php 
                            $navListsHref[$key] = $val['href'];
                        ?>

                        <li class="services-nav-li">
                            <a class="section-services-link" href="#<?php echo $val['href']; ?>"><?php echo $val['text']; ?></a>
                        </li>

                    <?php endforeach; ?>
                    </ul>
                </div>

                <div class="span-7 columns section-services-lists">
                    
                    <?php foreach($config['services']['lists'] as $key => $val): ?>

                        <div class="section-services-li" id="<?php echo $navListsHref[$key]; ?>">
                            
                            <h4 class="section-services-li-title"><?php echo $val['title']; ?></h4>

                            <?php foreach($val['items'] as $item): ?>
                            <p class="section-services-item"><?php echo $item['text']; ?></p>
                            <?php endforeach; ?>

                            <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>">

                        </div>

                    <?php endforeach; ?>
                    
                </div>

            </div>

        </section><!-- end of section-services -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>