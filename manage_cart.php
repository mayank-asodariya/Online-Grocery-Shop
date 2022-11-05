<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {

        }
    
            // session_start();
        else
         {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_SESSION['Price'],'Quantity'=>1);
            print_r($_SESSION['cart']);
         }
    }
}

 ?>