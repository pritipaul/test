<?php
    include "./server.php";

  if (isset($_POST['btnk'])) {
       
    $name = $_POST['name'];
    $ph = $_POST['ph'];
    $add = $_POST['add'];
    $email = $_POST['email'];
    $problem = $_POST['problem'];
    $help = $_POST['help'];

    $sql = "INSERT INTO `covit_about` . `contact`(`name`, `ph`, `add`, `email`, `problem`, `help`) VALUES ('$name','$ph','$add','$email','$problem','$help')";

    if ($conn -> query($sql) == true) {
        include "../html/sawprofile.php";
        exit;
    }
    else {
        include "../html/delet.html";
        exit;
    }
    $conn->close();

}
?>

<?php
       $name = $_POST['name'];
       $ph = $_POST['ph'];
       $add = $_POST['add'];
       $email = $_POST['email'];
       $problem = $_POST['problem'];
       $help = $_POST['help'];
    
       
if (empty($name)) {
    $name_error = "Pleace entered name properly";
}
if (empty($ph)) {
    $ph_error = "Pleace entered Phone Number properly";
}
if (empty($add)) {
    $add_error = "Pleace entered Address properly";
}
if (empty($email)) {
    $email_error = "Pleace entered Email-id properly";
}
if (empty($problem)) {
    $problem_error = "Your Problem properly";
}
if (empty($help)) {
    $help_error = "Write properly the help which you want";
}

?>