<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RK Mart</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        // echo "MANJIIIIIIIIIIIIIIIIIII";
        if(isset($_POST['submit'])&&(isset($_POST['p1'])))
        {
            // echo "Please select any item";
            $pro = $_POST['p1'];
            if($_POST['p1'])
            {
                echo "GANJIIIIIIIIIIIIIIIIIIIIIIIIIII";
            }
        }
        else{
            echo "Please Select Item";
            
        }
       
    }
    ?>
    <div class="main"><img src="project_photo/rklogo.png">
        <h1>RK Supermart</h1>
    </div>
    <form action="website.php" method="post">
    <section class="header">
        <input type="text" placeholder="   Search For Product ">
        <span>
            <ul id="navbar">
                <li><a href="website.php">Home</a></li>
                <li><a href="all.html">All Product</a></li>
                <li><a href="category.html">category</a></li>
                <li><a href="feedback">Feedback</a></li>
                <li><a href="contact.php">contact</a>
                <li>
                <li><a href="contachtml"> MY CART </a>
                <li></li>
            </ul>
        </span>
    </section>
    
    <div class="mid">
        <img src="project_photo/banner.jpg" width="2030vw" height="500vh">
    </div>
    <div id="heading">
        <h2>Our All The Grocery Product is Here</h2>
        <p>Shopping Needy Product And Get Discount</p>
    </div>
    <section id="product1"  class="section-p1">

        <div class="pro-container">
            <div class="pro">
                <img src="project_photo/15kg-tirupati.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <input value="p1" type="checkbox" id="p1" name = "p1">
    <button name="submit" type="submit" value="true">SUBMIT</button>
                    </form>
                    <div class="star">
                        
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p55.png" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p2.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p3.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p4.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p5.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p6.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p7.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p8.png" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p9.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p10.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p11.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p12.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p13.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p14.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p15.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p16.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p17.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p18.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p19.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p20.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p21.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p22.png" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p23.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p24.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p25.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p26.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p27.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p28.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/15kg-tirupati.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p8.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p9.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p10.jpg" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p18.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>
            <div class="pro">
                <img src="project_photo/p16.webp" width="250px" alt="">
                <div class="des">
                    <span>Tirupati</span>
                    <h5>Tirupati 15kg oil teen</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.2580</h4>
                </div>
                <a href="#"><i class="fas fa-star"></i>
                </a>
            </div>


        </div>
    </section>
    <div>
        <img src="project_photo/middelimg.jpg " width="2030vw" height="800vh" alt="">
    </div>
    <!-- <section id="newsletter">
    <div class="newstext">
        <h4>Sign UP For Newsletters</h4>
        <p>Get E-Mail Updates About our letest shop and <span>Special Offers</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your E-Mail Address">
        <button>Sign Up</button>
    </div>
</section> -->
<a href="#"><i class="fas fa-star"></i>


    <footer>

    </footer>

</body>

</html>