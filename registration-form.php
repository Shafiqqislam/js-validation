<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>js Database</title>
</head>
<body>
<?php
// include('connection.php');

$firstName =$Email= $lastName =$presentAdress=$parmanentAdress=$Phone =$Username=$Password=$Dob=$Religion=$Gender="";
$firstNameErr =$emailErr= $lastNameErr=$usernameErr=$passwordErr=$dobErr=$religionErr=$genderErr = "";
$flag = false;
$successfulMessage = $errorMessage = "";

if(isset($_POST[''])&& isset($_POST['']) && isset($_POST[''])){

}

if($_SERVER['REQUEST_METHOD'] === "POST") {
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$Dob=$_POST['dob'];
$Religion=$_POST['relegion'];
$Gender=isset($_POST['gender']);

$Email=$_POST['email'];
$presentAdress=$_POST['present_adress'];
$parmanentAdress=$_POST['parmanent_adress'];
$Username=$_POST['username'];
$Password=$_POST['password'];


if(empty($firstName)) {
$firstNameErr = "Field can not be empty";
$flag = true;
}
if(empty($lastName)) {
$lastNameErr = "Field can not be empty";
$flag = true;
}
if(empty($Email))
   {
    $emailErr="Value cant be empty";
    $flag=true;
   }

if(empty($Username))
   {
    $usernameErr="Value cant be empty";
    $flag=true;
   }
  
if (empty($Password))
   {
    $passwordErr="Value cant be empty";
    $flag=true;
   }
if(empty($Gender))
     {
        $genderErr="Value cant be empty";
        $flag=true;}
if(empty($Dob))
     {
        $dobErr="Value can't be empty";
    $flag=true;
     }
if(empty($Religion))
     {
        $religionErr="Value cant be empty";
        $flag=true;}


else {
$errorMessage = "Error while saving.";
}
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
    <legend>Basic Information:</legend>
    <label for="fname">First name:</label>
    <label for="firstname">First Name<span style="color: red">*</span>: </label>
    <input type="text" name="firstname" id="firstname">
    <span id="firstNameErr"></span>
    <span style="color: red"><?php echo $firstNameErr; ?></span>
    <br><br>
    <label for="lastname">Last Name<span style="color: red">*</span>: </label>
    <input type="text" name="lastname" id="lastname">
    <span id="lastNameErr" style="color: red"><?php echo $lastNameErr; ?></span>
    <br><br>
    <label for="gender">Gender:<span style="color: red">*:</span></label>
    <label for="male">Male</label> 
    <input type="radio" id="maleId" name="gender" value="male">
    <label for="female">Female</label>
    <input type="radio" id="femaleId" name="gender" value="female">
    <label for="other">Other</label> 
    <input type="radio" id="othersId" name="gender" value="other">
    <span style="color: red"><?php echo $genderErr; ?></span><br><br>
    <label for="dob">DoB<span style="color: red">*</span></label>
    <input type="date" name="dob" id="dob">
    <span style="color: red"><?php echo $dobErr; ?></span><br><br>
    <label for="relegion">Relegion<span style="color: red">*</span>:</label>
    <select id = "relegion" name="relegion">
    <option value="Islam"> Islam </option> 
    <option value="Hindu"> Hindu </option>
    <option value="Buddha"> Buddha </option>
    <option value="Other"> Other </option>   
    </select>
   
</fieldset>

<fieldset>
   <legend>Contact Information:</legend> 
   <label for="present_adress">Present adress<span style="color: red">*</span>: </label> 
   <input type="text" id="present_adress" name="present_adress"><br><br>
   <label for="parmanent_adress">Present adress<span style="color: red">*</span>: </label> 
   <input type="text" id="parmanent_adress" name="parmanent_adress"><br><br>
   <label for ="phone"> Phone</label>
   <input type="tel" id="phone" name="phone" ><br><br>
   <label for="email">Email<span style="color: red">*</span>:</label>
   <input type="email" id="emailId" name="email">
   <span style="color: red"><?php echo $emailErr; ?></span><br><br>
   <label for ="url">Personal Website link :</label>
   <input type="url" name="url" id="url">
</fieldset>

 <fieldset>
     <legend>Account information</legend>
     <label for="username">User name<span style="color: red">*</span>:</label>
     <input type="text" id="username" name="username"><br><br>
     <label for="password">Password<span style="color: red">*</span>:</label>
     <input type="password" id="password"  name="password"><br><br>
 </fieldset>
<input type="submit" name="submit" value="Submit">
</form>

<br>
<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>
<a href="login.php">Go to Login</a>
<script src="./script.js"></script>
</body>
</html>