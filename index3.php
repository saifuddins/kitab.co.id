<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index3.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index3.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Kitab - Beyond Legacy</title> 
          <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
          
          <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet"> 

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/scrollbar.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/shopping-indicator.css">
    <link rel="stylesheet" href="css/choose-product.css">
      </head>  
      <body id="page-top">  
          
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">KITAB</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index2.html">Buy Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index6.html#">Partners</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
          
          <!-- Page Content -->
    <div class="steps row">
        <div class="line"></div>
        <div class="step">
            <div class="circle">1</div>
            <div class="label">Customer<span class="responsive_hide"> Information</span>
            </div>
        </div>
        <!-- end "step" -->
        <div class="step">
            <div class="circle active">2</div>
            <div class="label"><span class="responsive_hide">Choose</span> Products</div>
        </div>
        <!-- end "step" -->
        <div class="step">
            <div class="circle">3</div>
            <div class="label">Customize<span class="responsive_hide"> Products</span>
            </div>
        </div>
        <!-- end "step" -->
        <div class="step">
            <div class="circle">4</div>
            <div class="label">Finish</div>
        </div>
        <!-- end "step" -->
    </div>
    <!-- end "steps" -->
          
          <br />  
           <div class="container">  
               <div class="box">
                <div class="row">
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="index3.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:2px solid #333; background-color:white; border-radius:5px; padding:16px" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive"/><br />  
                               <h4 class="text-black" style="font-size: 1em"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger" style="font-size: 1em">Rp <?php echo $row["price"]; ?></h4>  
                               <input type="number" name="quantity" class="form-control" value="1" autocomplete="off"/>  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:10px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
              
                <div style="clear:both"></div>  
                <br />  
                    <div class="col-md-4">
                <h3 class="order">Order Details</h3>  
                <div class="table-responsive">  
                    <form action="index3aksi.php" method="post">
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="20%">Item</th>  
                               <th width="20%">Quantity</th>  
                               <th width="25%">Price</th>  
                               <th width="25%">Total</th>  
                               <th width="10%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>Rp <?php echo $values["item_price"]; ?></td>  
                               <td>Rp <?php echo number_format($values["item_quantity"] * $values["item_price"], 3); ?></td>  
                               <td><a href="index3.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="left">Total</td>  
                               <td>Rp <?php echo number_format($total, 3); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>
                     <button class="btn btn-warning">Submit</button>
                    </form>
                </div>  
                        <a href="index4.html"><button class="btn btn-warning">Submit</button></a>
           </div>  
               </div>
          </div>
          </div>
           <br />  
          
              <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.js"></script>

    <!-- jQuery Version 2.1.1 -->
    <script src="js1/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js1/jquery.easing.1.3.js"></script>
    <script src="js1/classie.js"></script>
    <script src="js1/count-to.js"></script>
    <script src="js1/jquery.appear.js"></script>
    <script src="js1/cbpAnimatedHeader.js"></script>
    <script src="js1/owl.carousel.min.js"></script>
    <script src="js1/jquery.fitvids.js"></script>
    <script src="js1/styleswitcher.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js1/script.js"></script>
          
      </body>  
 </html>