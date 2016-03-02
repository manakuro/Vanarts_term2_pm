<?php
    include("../bootstrap.php");

    if (!empty($_POST)) {

        /** Validate Image  **/
        // Create path of image
        // $imagePath = "galleries/gallery_lists/";
        $targetDirectory = '../img/galleries/gallery_lists/';
        $targetFile = $targetDirectory. basename($_FILES['img']['name']);
        $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        $uploadOk = true;

        $img = '';
        if (!empty($_FILES['img']['tmp_name'])) {

            $check = getimagesize($_FILES['img']['tmp_name']);
            if (!$check) {
                $uploadOk = false;
            }

            // Check to see if the file exists or not
            // if (file_exists($targetFile)) {
            //     $uploadOk = false;
            // }

            //  Check to see file extension
            if (!in_array($imageFileType, ["jpg", "jpeg", "png"])) {
                $uploadOk = false;
            }

            if ($uploadOk) {

                if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)) {

                    // Convert relative path to absolute path
                    $img = convert_to_uri($targetFile, BASE_URL.$_SERVER["SCRIPT_NAME"]);

                }

            }

        }

        $conn = connectDB();
        $table = 'dt_galleries';

        $id =  mysqli_real_escape_string($conn,$_POST['id']);
        $name =  mysqli_real_escape_string($conn,$_POST['name']);
        $img =  mysqli_real_escape_string($conn,$img);
        $alt =  mysqli_real_escape_string($conn,$_POST['alt']);
        $time =  mysqli_real_escape_string($conn, date('Y/m/d H:i:s'));

        // Insert
        if (isset($_POST['insert'])) {

            $query = "INSERT INTO $table (name, img, alt, created_at, updated_at) 
                       VALUES ('$name', '$img', '$alt', '$time', '$time')";

        // Update
        } else {

            $query = "UPDATE $table ";
            $query .= "SET name = '$name',";
            $query .= (!empty($img)) ? "img = '$img', " : "";
            $query .= "alt = '$alt', ";
            $query .= "updated_at = '$time' ";
            $query .= "WHERE id = $id";

        }

        $query = mysqli_query($conn, $query);
        if (!$query) {
            echo $conn->error;
            exit;
        }

        header("location: ./gallery.php");

    }
