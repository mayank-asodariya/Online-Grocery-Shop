<?php
// session_start();
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
    <?php
            require 'header_without_image.php';
            require 'db_connect.php';
    ?>
    
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<!-- main project coading start with here porsiton -->

<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $q = "SELECT * FROM `pro` where `qu` != '0'";
        $res = mysqli_query($conn,$q);
        $n = mysqli_num_rows($res);
        $c = 0;
        $total = 0;
        while($c!=$n)
        {
            $obj = mysqli_fetch_assoc($res);
            ?>
            <tr>
      <th scope="row"><?php echo $c+1  ?></th>
      <td><?php echo $obj['item']  ?></td>
      <td><?php echo $obj['price']  ?></td>
      <td><?php echo $obj['qu']  ?></td>
      <?php
      $total = $total + ($obj['qu']*$obj['price']);
      ?>
      <td><?php echo $obj['qu']*$obj['price']  ?></td>
    </tr>
    <?php
        $c++;
        }
        
    ?>
    
    
  </tbody>
</table>
        <?php
        // $i = $_SESSION['item'];
        
        // echo $n;
        echo "Grand Total Is :-  ";
        echo $total;
        ?>
        </body>
        </html>
    