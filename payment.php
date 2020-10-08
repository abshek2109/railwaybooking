<?php
    
  include("connection.php");
  include("session.php");
  error_reporting(0);

$s = $_GET[t];

if(isset($_POST['submit']))
{
  $cname = $_POST['cname'];
  $cnumber = $_POST['cnumber'];
  $tnumber = $s;
   $emonth = $_POST['expmonth'];
   $eyear = $_POST['expyear'];
   $cvv = $_POST['cvv'];
  
  
  

  $sql = $mysqli->query("INSERT INTO `payment` VALUES ('$tnumber','$cname','$cnumber','$emonth','$eyear','$cvv')");

  if($sql)
{
  header("Location:print.php?t=$tnumber");
}

  


}
  ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST">
      
        <div class="row">
        
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>

            <label for="tnum"> Train Number</label>
            <input type="number" id="tnum" name="tnumber" placeholder="" value="<?php echo $s?>" readonly="readonly"> <br><br>

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" required>

            <label for="ccnum">Credit/Debit Card number</label>
            <input type="text" id="ccnum" name="cnumber" required>

            <label for="expmonth">Expiry Month</label>
            <input type="text" id="expmonth" name="expmonth" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Expiry Year</label>
                <input type="number" id="expyear" name="expyear" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required minlength="3" maxlength="3">
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" name="submit" value="Make Payment" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>





<?php
//    $no   = 1;
//    $total  = 0;

$sql="SELECT * FROM train where from1='$frm' and to1='$t'";

$query = mysqli_query($mysqli, $sql);
    while ($row5= mysqli_fetch_array($query))
    {
      //$amount  = $row5['amount'] == 0 ? '' : number_format($row5['amount']);
      

      echo '<tr>

                 <td>BOOK</a></td>
 
        </tr>';
  
    }?>
