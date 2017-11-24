
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork 5</title>
</head>
<body>
    <form action = "index.php" method = "post" enctype = "multipart/form-data">
    height: <input type="number" name="height"><br>
    weight: <input type="number" name="weight"><br>
    檔案名稱: <input type="file" name="file" id="file"><br>
    <input type="submit">
    </form>
</body>
</html>


<?php
    if (isset($_POST["height"], $_POST["weight"])){
        $height = $_POST["height"];
        $weight = $_POST["weight"];
    
        if ($height == "" || $weight == ""){
            echo "Please type in all information<br>";
        }else{
            $BMI = $weight / pow(($height / 100), 2);
            echo "$BMI<br>";
        }
    }

    if (isset($_FILES["file"])){
        if (empty($_FILES["file"]["size"])){
                echo "empty";
            }else{
                $check = exif_imagetype($_FILES["file"]["tmp_name"]);
                if($check == FALSE){
                    echo "wrong file type";
                }else{
                    $filename = $_FILES["file"]["name"];
                    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
                    echo '<img src = "upload/' . $filename. '"/>';
            }
        }
    }   
?>  