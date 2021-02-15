<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style-2.css">
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">Kelvin Conrad</a>
    <h3 class="text-center">Satisfying Looping Videos</h3>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <h1>Welcome <span><?php echo $fetch_info['name'] ?></span> </h1>
    <section class="video">
        <div class="container">
           <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="video">
                        <div style="padding:100% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/232788466?autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="video">
                        <div style="padding:100% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/232625236?autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="video">
                        <div style="padding:100% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/232625236?autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
               </div>
               
           </div>
        </div>
    </section>


    <!-- video js -->
    <script src="https://player.vimeo.com/api/player.js"></script>
</body>
</html>