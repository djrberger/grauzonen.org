<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>GRAUZONEN</title>
      <link rel="icon" type="image/png" href="https://i.imgur.com/h5DBDhL.jpg">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

  </head>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]) ;
$uploadOk = 1;
$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $target_file);
$withoutExt = $withoutExt."-".$ip;


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        #echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       # echo "<div style='margin:20px;'><p>Ungültiges Dateiformat. Es können nur Bilder im Format JPG, JPEG, PNG oder GIFs hochgeladen werden!</p><br>
      #  <a class='btn btn-primary' href='https://www.grauzonen.org/uploadPage'>Zurück</a></div>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   # echo "<div style='margin:20px;'><p>Datei existiert bereits!</p><br>
    #    <a class='btn btn-primary' href='https://www.grauzonen.org/uploadPage'>Zurück</a></div>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 40000000) {
  #  echo "<div style='margin:20px;'><p>Bild zu groß! Maximale Dateigröße: 5MB!</p><br>
  #      <a class='btn btn-primary' href='https://www.grauzonen.org/uploadPage'>Zurück</a></div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    #echo "<div style='margin:20px;'><p>Es können nur Bilder im Format JPG, JPEG, PNG oder GIFs hochgeladen werden!</p><br>
       # <a class='btn btn-primary' href='https://www.grauzonen.org/uploadPage'>Zurück</a></div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div style='margin:20px;'><p><b>Datei konnte nicht hochgeladen werden!</b><br>Maximale Dateigröße: 5MB<br>Zugelassene Formate: JPG, JPEG, PNG, GIF<br><br>Bitte versuche es erneut!</p><br>
        <a class='btn btn-primary' href='https://www.grauzonen.org/uploadPage'>Zurück</a></div>";
// if everything is ok, try to upload file
} else {
  $target_file = $withoutExt.".".$imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file )) {
        echo "<div style='margin:20px;'><p>Erfolgreich!</p><br>
        <a class='btn btn-primary' href='https://www.grauzonen.org'>Zurück</a></div>";
    } else {
        echo "<div style='margin:20px;'><p>Es gab einen Fehler!</p><br>
        <a class='btn btn-primary' href='https://www.grauzonen.org'>Zurück</a></div>";
    }
}
?>
