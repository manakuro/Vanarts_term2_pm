<?php include "header.php"; ?>

<?php 

    $conn = connectDB();
    $paginationLimit = 5;
    $table = 'dt_trend';
    $currentPage = './trend_watch.php';
    $editPage = './trend_watch_edit.php';
    $deletePage = './trend_watch_delete.php';

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $numberOfRows = mysqli_num_rows($result);

    $galleryHtml = '';
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

            $galleryHtml .= '<tr class="t-row clickable" data-href="'. $editPage .'?id='. $row['id'] .'" data-row-id="'. $row['id'] .'">';
            foreach($row as $key => $val) {

                if ($key === 'img') {
                    $val = '<img src="'. $val .'" />';
                }

                if ($key === "date") {
                    $val = date('d F Y', strtotime($val));
                }

                if ($key === "updated_at" || $key === "created_at") {
                    $val = date('H:i <\b\r> d F Y', strtotime($val));
                }

                $galleryHtml .= '<td>'. $val .'</td>';
            }

            // Delete button
            $galleryHtml .= '<td class="prevent-click"><a class="del-btn btn" href="'. $deletePage .'">×</a></td>';

            $galleryHtml .= '</tr>';

        }

    }

?>
    
<main class="page-main">

    <section class="section section-first section-admin-gallery">
        
        <form id="login-form" name="login-form" method="post" action="login_process.php">

            <div class="row">

                <div class="span-4 columns push-8">

                    <div class="gallery-new-wrapper">
                        <a href="<?php echo $editPage; ?>" class="btn" name="submit" >New</a>
                    </div>
                    
                </div>

            </div>

            <div class="row row-center">

                <dif class="span-6 columns">
                    <?php echo $pagination; ?>
                </dif>

                <div class="span-12 columns">
                    
                    <table class="table">
                        
                        <thead class="thead">
                            <tr class="t-row">
                                <td class="span-1">ID</td>
                                <td class="span-2">Title</td>
                                <td class="span-5">Image</td>
                                <td class="span-2">Description</td>
                                <td class="span-2">Date</td>
                                <td class="span-1">Created Date</td>
                                <td class="span-1">Updated Date</td>
                                <td class="span-1">Delete</td>
                            </tr>
                        </thead>

                        <tbody class="tbody">
                            <?php echo $galleryHtml; ?>
                        </tbody>

                    </table>

                </div>

                <dif class="span-6 columns">

                    <div class="pagination-wrapper-bottom">
                        <?php echo $pagination; ?>
                    </div>
                    
                </dif>

            </div>

        </form>

    </section><!-- end of section-admin-gallery -->

</main><!-- end of page-main -->

<?php include "footer.php"; ?>