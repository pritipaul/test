<?php
    include "./server.php";

    
if (isset($_POST['btn'])) {
    $name1 = $_POST['name1'];
    $email = $_POST['email'];
    $pic = $_FILES['pic']['name'];
    $tmp_name = $_FILES['pic']['tmp_name'];

    move_uploaded_file($tmp_name, "../uplode/$pic");

    $sql = "INSERT INTO `covit_about`.`about`(`name1`, `email`,`pic`) VALUES ('$name1', '$email','$pic')";

    if ($conn -> query($sql) == true) {
        include "../html/show.php";
    }
    else {
       echo "not successfull";
    }
    $conn->close();
}
?>

<?php
     $name1 = $_POST['name1'];
     $email = $_POST['email'];
     $pic = $_FILES['pic']['name'];
     $tmp_name = $_FILES['pic']['tmp_name'];
 
    
?>