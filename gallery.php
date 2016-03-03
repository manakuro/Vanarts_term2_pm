<?php include "header.php"; ?>
<?php

    $conn = connectDB();
    $paginationLimit = 6;
    $table = 'dt_galleries';
    $currentPage = $_SERVER['PHP_SELF'];

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $numberOfRows = mysqli_num_rows($result);

    $listHtml = '';
    $pagination = '';
    if ($numberOfRows > 0) {

        // Display pagination
        $numberOfpage = ceil($numberOfRows/$paginationLimit);

        if (isset($_GET['page_number'])) {
            $start = ($_GET['page_number'] * $paginationLimit) - $paginationLimit;
            $query = "SELECT * FROM $table LIMIT $start, $paginationLimit";
        } else {
            $query = "SELECT * FROM $table LIMIT 0, $paginationLimit";
        }

        $pagination .= '<ul class="pagination">';
        for ($i = 1; $i <= $numberOfpage; $i++) {
            $pagination .= '<li class="page-item"><a class="input-page" name="page_number" href="'. $currentPage .'?page_number='. $i .'">'. $i .'</a></li>';
        }
        $pagination .= '</ul>';

        // Diplay table
        $result = mysqli_query( $conn, $query );
        while ($row = mysqli_fetch_assoc($result)) {

            $listHtml .= '<div class="span-6 columns section-gallery-li">';
            $listHtml .= '<img src="'. $row['img'] .'" alt="'. $row['alt'] .'">';
            $listHtml .= '<div class="section-gallery-li-overlay"></div>';
            $listHtml .= '</div>';
            
        }

    }

?>

    <main class="page-main">

        <h3 class="page-title">Gallery</h3>

        <section class="section section-gallery">

            <div class="row row-center">
                <div class="span-6 columns">
                    <?php echo $pagination; ?>
                </div>
            </div>
            
            <div class="row">

                <div class="section-gallery--lists-wrapper cf">
                <?php echo $listHtml; ?>
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