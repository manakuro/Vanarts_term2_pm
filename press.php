<?php include "header.php"; ?>
<?php

    $conn = connectDB();
    $paginationLimit = 6;
    $table = 'dt_press';
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
                <div class="span-6 columns section-press-li">

                    <h5 class="section-press-li-heading">'. $row['title'] .'</h5>

                    <a href="#">
                        <img src="'. $row['img'] .'" alt="'. $row['alt'] .'">
                    </a>

                    <div class="section-press-li-divider"></div>
                </div>
            ';

        }

    }

?>
      

    <main class="page-main">

        <h3 class="page-title">Press</h3>

        <section class="section section-press">
            
            <div class="row">
            <?php echo $listHtml; ?>
            </div>

        </section><!-- end of section-press -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>