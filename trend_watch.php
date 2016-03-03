<?php include "header.php"; ?>
<?php

    $conn = connectDB();
    $paginationLimit = 6;
    $table = 'dt_trend';
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

            $listHtml .= '
                <div class="span-3 columns section-trend-watch-li">
                    <a href="#">
                        <img src="'. $row['img'] .'" alt="'. $row['description'] .'">
                        <div class="section-trend-watch-desc-inner">
                            <h5 class="section-trend-watch-title">'. $row['title'] .'</h5>
                            <p class="section-trend-watch-date">'. $row['date'] .'</p>
                            <p class="section-trend-watch-desc">'. $row['description'] .'</p>
                        </div>
                    </a>
                </div>
            ';

        }

    }

?>
    
    <main class="page-main">

        <h3 class="page-title">Trend Watch</h3>

        <section class="section section-trend-watch">
            
            <div class="section-trend-watch-container">
            <?php echo $listHtml; ?>
            </div>

        </section><!-- end of section-services -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>