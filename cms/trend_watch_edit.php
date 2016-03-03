<?php include "header.php"; ?>

<?php 

    $conn = connectDB();
    $table = 'dt_trend';
    $editPage = './trend_watch_edit_process.php';
    $row = array();

    $submit = "insert";
    $id = "";
    if (!empty($_GET['id'])) {

        $query = "SELECT * FROM $table WHERE id = $_GET[id]";
        $result = mysqli_query($conn, $query);
        $numberOfRows = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        $submit = "update";
        $id = $_GET['id'];
    }

?>
    
<main class="page-main">

    <section class="section section-first section-admin-gallery-edit">
        
        <form id="login-form" name="login-form" method="post" action="<?php echo $editPage; ?>" enctype="multipart/form-data">

            <input type="hidden" value="<?php echo $id; ?>" name="id">

            <div class="row">

                <div class="span-6 columns">
                    
                    <ul class="form-lists">

                        <li class="form-lists-inline span-6">
                            <div class="input-wrapper">

                                <span class="label-span">Image File</span>
                                <input class="input" type="file" value="" name="img">

                            </div>
                        </li>

                        <li>
                            <div class="input-wrapper">

                                <span class="label-span">Title</span>

                                <input class="input" type="text" value="<?php echo (!empty($row['title'])) ? $row['title'] : "" ?>" name="title">

                            </div>
                        </li>

                        <li>
                            <div class="input-wrapper">

                                <span class="label-span">Description</span>
                                <textarea class="input textarea" name="description"><?php echo (!empty($row['description'])) ? $row['description'] : "" ?></textarea>

                            </div>
                        </li>

                        <li>
                            <div class="input-wrapper">

                                <span class="label-span">Date</span>
                                <input class="input" type="date" name="date" value="<?php echo (!empty($row['date'])) ? $row['date'] : "" ?>"></input>

                            </div>
                        </li>

                        <li>
                            <div class="input-wrapper">
                                <input type="submit" class="btn" name="<?php echo $submit; ?>" value="Submit">
                            </div>    
                        </li>

                    </ul>

                </div>

                <div class="span-6 columns">
                    
                <?php if (!empty($row['img'])):?>

                    <img src="<?php echo $row['img']; ?>" alt="">

                <?php endif; ?>

                </div>

            </div>

        </form>

    </section><!-- end of section-admin-gallery -->

</main><!-- end of page-main -->

<?php include "footer.php"; ?>