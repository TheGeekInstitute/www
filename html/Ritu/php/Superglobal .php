


<h1> Registration Form </h1>

<fieldset>
 <legend> Registration Form </legend>






<form method="POST"  enctype=" multipar/form data">

First Name : <input type="text" name="name" required title=" Please Enter Your First Name" Placeholder=" Enter Your Name">
<br><br>
 Last Name : <input type= "text" name="title"     required title=" Please Enter Your last Name" Placeholder=" Enter  Last Name">>
 <br><br>
 DOB : <input type = "date" DOB ="date">
 <br><br> 
  Gender : <label>male</label> <input type="radio" name="gender" >
  <label>female</label> <input type="radio" name="gender" >

  <br><br>
  <select>
<option value="">choose</option>
<option value="" selected>male</option>
<option value="">female</option>
<option value="">other</option>
</select>
<br><br>

   <input type="submit">
   <input type="reset">

</form>

</fieldset>
<?php


if(isset($_POST['name'])){
     $name=$_POST['name'];
     echo "<h1> . Hi ," . $name .    "!</h1>" ;
}
// if(isset($_POST['name'])){
//     $name=$_POST['name'];
//     echo "<h1> Hi, ". $name. " !</h1>";
// }




?>



