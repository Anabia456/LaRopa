<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 1rem;
}
.text-reset {
    --bs-text-opacity: 1;
    color: inherit!important;
}

</style>
<body>
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <hr>
  <p>
    Having trouble? <a href="contact.php">Contact us</a>
  </p>
  <p class="lead">
    <form method="POST">
      <input class="btn btn-default btn-sm" style="background-color: #cf9163; color: white;" value="Continue Shopping" type="submit" name="continue" role="button">
    </form>
  </p>
</div>
<?php
if(isset($_POST['continue'])){
  include "connection.php";
  unset($_SESSION['myCart']);
  unset($_SESSION['myQty']);

  echo "<script>window.location.assign('index.php')</script>";
}
?>
<div class="container-fluid">
<?php 
  include "connection.php";
  $max=mysqli_query($connect,"Select MAX(o_id) id from order_tbl");
  $row1=mysqli_fetch_assoc($max);
  $i=implode(",",$row1);
  $query = mysqli_query($connect,"Select * from order_tbl O inner join  user_tbl U on O.u_name = U.u_id inner join product_tbl P on O.pro_id = P.p_id where o_id='$i'");
  $row=mysqli_fetch_assoc($query);  
?>
<div class="container">
  <!-- Title -->
  <div class="d-flex justify-content-between align-items-center py-3">
    <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> Order #<?php echo $row['unique_order_num']?></h2>
  </div>

  <!-- Main content -->
  <div class="row">
    <div class="col-lg-8">
      <!-- Details -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="mb-3 d-flex justify-content-between">
            <div>
              <b>Date: </b><span class="me-3"><?php echo date("d/m/Y")?></span></br>
              <b>Time: </b><span class="me-3"><?php date_default_timezone_set("Asia/Karachi"); echo date("h:i a")?></span></br>
              <span class="me-3"><b>Payment Method:</b> <?php echo $row['payment_method']?></span>
            </div>
          </div>
          <table class="table table-borderless">                   
            <tbody>
            <?php
                include "connection.php";
                $price = 0;
                for ($i=0; $i < count($_SESSION['myCart']); $i++) { 
                $query = "Select * from product_tbl where p_id = ". $_SESSION['myCart'][$i];
                $result = mysqli_query($connect,$query);
                $fetch = mysqli_fetch_assoc($result);
                $images=explode(",",$fetch['p_img']);
                $price += $fetch['p_price'] * $_SESSION['myQty'][$i];
            ?>
              <tr>
                <td>
                  <div class="d-flex mb-2">
                    <div class="flex-shrink-0">
                      <img src="../images/<?php echo $images[0]?>" alt="" width="80" class="img-fluid">
                    </div>
                    <span>  </span>
                    <div class="flex-lg-grow-1 ms-4">
                      <h6 class="mb-0"><?php echo $fetch['p_name']?></h6>
                    </div>
                  </div>
                </td>
                <td>x<?php echo $_SESSION['myQty'][$i]?></td>
                <td class="text-end">Rs<?php echo $fetch['p_price']?></td>
              </tr>
              <?php
                }
              ?>
            </tbody>
            <tfoot>
              <tr class="fw-bold">
                <td colspan="2"><b> GRAND TOTAL</b></td>
                <td class="text-end" style="color: red;">Rs<?php echo $price?></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card mb-4">
        <!-- Shipping information -->
        <div class="card-body">
          <h3><u> Customer Information</u></h3>
          <address>
            <strong><?php echo $_SESSION['uName']?></strong><br>
            <b>Email:</b> <?php echo $_SESSION['uEmail']?><br>
            <b>Phone#:</b> <?php echo $_SESSION['uPhone']?><br>
            <b>Address:</b> <?php echo $_SESSION['uAddress']?><br>
            <b>Country:</b> <?php echo $_SESSION['uCountry']?><br>
            <b>City:</b> <?php echo $_SESSION['uCity']?>
          </address>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</body>
</html>