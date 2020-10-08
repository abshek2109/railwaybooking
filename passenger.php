<?php
    
  include("connection.php");
  include("session.php");
  error_reporting(0);
$trai=$_GET[train];
 
if(isset($_POST['submit']))
{
    $trai= $_POST['tnumber'];
  $fullname= $_POST['funame'];
  $age= $_POST['age'];
  $gender= $_POST['gender'];
  $pnumber= $_POST['pnumber'];
  
  
 
  
  

  $sql =$mysqli->query("INSERT INTO `passenger`(`train_no`,`name`, `age`, `gender`, `cnumber`) VALUES ('$trai','$fullname','$age','$gender','$pnumber')");
 
   
//$query = mysqli_query($mysqli, $sql);
//$sql1="SELECT * FROM passenger where train_no=$trai";

//$row5= mysqli_fetch_array($query);



  header("Location:payment.php?t=$trai");
  


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
      <form action=""method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Passenger Information</h3>

            <label for="tnum"> Train Number</label>
            <input type="number" id="tnum" name="tnumber" placeholder="" value="<?php echo $trai?>" readonly="readonly"> <br><br>

            <label for="fname"> Full Name</label>
            <input type="text" id="fname" name="funame" placeholder="Full Name" required>

            <label for="age"> Age</label>
            <input type="number" id="age" name="age" placeholder="Age" required ><br><br>

            <label for="gender"> Gender</label>
            <input type="radio" value="male" name= "gender" required>Male&nbsp&nbsp&nbsp
            <input type="radio"  value="female" name= "gender" required>Female<br><br>

           <label for="number"> Contact Number</label>
            <input type="number" id="pnumber" name="pnumber" placeholder="Phone Number" required minlength="10" maxlength="10"><br><br>
          </div>

          
              
            </div>
          </div>
          
        </div>
        
        <input type="submit" name="submit" value="Confirm Submit" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>