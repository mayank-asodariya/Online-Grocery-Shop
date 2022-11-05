<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-uquiv="refresh" content="5">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RK Mart</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
 require "header.php";
 require "db_connect.php";

 ?>
 

<!-- first product start -->
    <section id="product1" class="section-p1">
        <div class="pro-container" id="allp">
        
        
                <?php
                        
                    $q = "SELECT * FROM `pro`";
                    $res = mysqli_query($conn,$q);
                    $n = mysqli_num_rows($res);
                    if($n)
                    {
                        // echo $n . " rows found";
                        $c = 0;
                        if(!isset($_SESSION['item']))
                        {
                        $_SESSION['item'] = 0;
                        }
                        while($c!=$n)
                        {
                            $obj = mysqli_fetch_assoc($res);
                            // echo $obj['sr'] . " and " . $obj['item'];  
                              
                            // ?>
                             <?php
                            // echo $obj['image_name'];
                            ?>
            <form action="one.php" method="post">
                <div class="pro">

                <img src="<?php echo $obj['image_name']?>" width ='260px' height='300px'>

                <div class="des">
                   
                    <span><?php echo $obj['item'] ?></span>
                    <h4><?php echo $obj['desc'] ?></h4>
                    <input type="hidden" name="Tirupati 15kg oil tin">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h4>
                    <b class="price"><?php echo "Rs.".$obj['price'] ?></b>
                    
                        <button  class="addtocartbox" name= "<?php echo "Add_To_Cart".$c ?>" type="submit">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="Tirupati 1">
                        <input type="hidden" name="Price" value="2420">
                        <!-- <input type="hidden" value="" name="check"/> -->
             </form>
                    </h4>
                </div>
            </div> 

                 <?php
                    // $rand = rand();
                    // $_SESSION['rand'] = $rand;
                 ?>
                 
                    <?php
                      if($_SERVER['REQUEST_METHOD']=="POST")
                {
                      if(isset($_POST['Add_To_Cart'.$c]))
                      {
                          // header("location:header.php");
                        //   $_SESSION['item'] = $cart;
                          $_SESSION['item'] = $_SESSION['item'] + 1 ;
                          $obj['inc'] = $obj['inc'] + 1;
                          $o = $obj['inc'];
                          $i = $obj['item'];
                          $obj['qu'] = $obj['qu'] + 1;
                          $r = $obj['qu'];
                          $q = "UPDATE `pro` SET `inc`='$o' WHERE 1";
                          $qu = "UPDATE `pro` SET `qu`='$r' WHERE `item`='$i'";
                          mysqli_query($conn,$q);
                          mysqli_query($conn,$qu);
                        //   echo "<script> language='javascript'>alert('succcessfullt inserted!!')</script>";
                          echo "<script> document.location='one.php'</script>";
                        }
                    }
                             $c = $c +1;
                }  
            }

                ?>
        </div>
    </section>
</body>
</html>