<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
     <link rel="stylesheet" href="../css/profile.css">
    <script src=""></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav id="nav">
        <div id="img">
            <img src="../pictuer/logo.png" alt="this is the picture" width="100px" height="100px">
        </div>
        <h1 class="h">Profile Page</h1>
        <div id="btn">
            <input type="search" name="search" id="search" placeholder="Entered Your Search">
            <button id="button" name="button">Search</button>
        </div>
    </nav>

    <section id="sec">
        <h1 class="h1">Fill the form Properly</h1>
        <form action="../php/profile1.php" method="POST" id="form">
            Name:<input type="text" name="name" placeholder="Entered your name" value="" required>
            <?php if (isset($name_error)) {?> <p><?php echo  $name_error ?></p> <?php }?>

            Phone Number:<input type="number" name="ph" placeholder="Enterd Your Phone number" value="" required>
            <?php if (isset($ph_error)) {?> <p><?php echo  $ph_error ?></p> <?php }?>

            Address:<input type="text" name="add" placeholder="Entered Your Address" value="" required>
            <?php if (isset($add_error)) {?> <p><?php echo $add_error ?></p> <?php }?>

            Email-Id<input type="email" name="email" placeholder="Entered Your Email-id" value="" required>
            <?php if (isset($email_error)) {?> <p><?php echo  $email_error ?></p> <?php }?>

            Write Your Problem-<textarea name="problem" placeholder="Writte Here" value="" required></textarea>
            <?php if (isset($problem_error)) {?> <p><?php echo  $problem_error?></p> <?php }?>

            How we help you: <textarea name="help" placeholder="Writte Here" value="" required></textarea>
            <?php if (isset( $help_error)) {?> <p><?php echo   $help_error ?></p> <?php }?>

            <button type="submit" name="btnk" id="btn20">Submit</button>
        </form>
        
    </section>
    <footer class="foot">
        <div id="half">
            <h1 class="ha20">Covid-19</h1>
            <p class="para20">Active coronavirus cases in the country fell below the 15-lakh mark on Saturday after 52 days, with recoveries out numbering new cases for more than three weeks in a row. 2,677 deaths due to the coronavirus were recorded in the last 24 hours. Stay here for all live updates</p>
            <h5 class="para21">EMERGENCY NUMBERS - KOLKATA · CORONA ( COVID 19 ) HELPLINE : 011-23978046 OR 1075 · KOLKATA COVID 19 HELPLINE :033-22143526 , 23412600.</h5>
        </div>
        <div id="full">
            <a href="https://google.com" target="blank">Go to Google</a>
            <a href="https://facebook.com" target="blank">Go to Facebook</a>
            <a href="https://linkdin.com" target="blank">GO to Linkdin</a>
            <a href="https://twitter.com" target="blank">Go to Twitter</a>
            <a href="https://gmail.com" target="blank">Go to Gmail</a>
        </div>
</footer>
</body>

</html>