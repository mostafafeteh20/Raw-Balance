<?php
function connectdb() 
{
    $db_handle = mysqli_connect("localhost", "root", "");
    return $db_handle;
}

function countItemsInCart()
{
    global $_SESSION;
    $quantity = 0;
    if ($_SESSION != NULL) {
            foreach($_SESSION['products'] as $key=>$value)
        {
            //echo $key;
            $quantity+=$value;
        }
        return $quantity;
    } else {
        return "0";
    }
}

function addToCart($productid, $quantity, $mysql)
{
    global $_SESSION;
    $productid = (int) $productid;
    $sql = "select * from products where id = ".$productid;
    $result = $mysql->query($sql);
    if ($result->num_rows > 0)                                  
		{		
		    $row = $result->fetch_assoc();
           
            @$_SESSION['products'][$productid]+=$quantity;
            
					
        } else {
            return "No such product exists!";
            
        }
        return "<font style='color:green;font-weight:bold;' >Product added to cart.</font><BR><BR>";
}

function getCartTotal($mysql)
{
   // var_dump($mysql);
    global $_SESSION;
    $total = 0;
    
    if ($_SESSION != NULL) {
        foreach($_SESSION['products'] as $pid=>$q)
    {
        $sql = "select * from products where id = ".$pid;
       // echo $sql;
        $result = $mysql->query($sql);
       // echo mysqli_error($mysql);
        if ($result->num_rows > 0)                                  
		{        
            //var_dump($result);
            $row = $result->fetch_assoc();

            $price = $row['product_price'];
            $total+= $price * $q;
        }
    }
    return $total; 
    } else {
        return "0";
    }     

}

?>