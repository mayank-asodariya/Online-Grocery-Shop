<?php
session_start();
// $_SESSION['item'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RK Mart</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

</head>

<!-- main project coading start with here porsiton -->

<body>
    <div class="fix">
    <!-- main project all containd=s srart here -->
    <div class="main"><img src="project_photo/rklogo.png">
        <h1>RK Supermart</h1>
    </div>
<!-- all the header component -->

    <section class="header">
        <span >
            <ul id="navbar">
                <li><a href="one.php">Home</a></li>
                <li><a href="Allproduct.php">All Product</a></li>

                <!-- <li><a href="category.html"></a> -->
            
                  <div class="dropdown" >
                        
                        
                  <button class="dropbtn"><b>CATEGORY</b><i class="fa-solid fa-caret-down"></i></button>
                        <div class="dropdown-content">
                          <a href="Grains_plus.php"> Grains & Pulses</a>
                          <a href="Alloil.php">All oil</a>
                          <a href="Tea.php">Tea</a>
                          <a href="Masala.php">Masala</a>
                          <a href="Cosmatic.php">Cosmatic</a>

                        </div>
                      </div>
                </li>

                <li><a href="contact.html">contact</a></li>
                <li><a href="logout.php">logout</a></li>
                <?php
                // session_start();
                ?>
                <li class="cart"><a href="mycart.php" class="btn btn-outline-success">MY CART<?php echo "(".$_SESSION['item'].")"?></a></li>
                <?php
    // $_SESSION['item'] = $_SESSION['item'] + 1;
                ?>
            </ul>
        </span>
    </section> 
</div>
<br>
<br><br><br><br><br><br><br><br><br><br>    




    <div class="mid">
        <img src="project_photo/banner.jpg" width="100%" height="650vh">
    </div>
<!-- middle heading text all the text  -->
    <div id="heading">
        <h2>Our All The Grocery Product is Here</h2>
        <p>Shopping require Product And Get Discount</p>
    </div>
