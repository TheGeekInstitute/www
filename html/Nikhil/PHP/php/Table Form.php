e<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Form....</title>
    <style>
        input[type=text] {
            background-color: lightgrey;
            border-style:none;
            border-radius:5px;
            height: 25px;
        transition: width 0.5 ease-in-out;
        }
        input[type=date]{
            background-color:lightgrey;
            border-style:none;
            border-radius:5px;
            height:25px;
            width:165px;
        }
        input[type=email]{
            background-color:lightgrey;
            border-style:none;
            border-radius:5px;
            height:25px;

        }
        
        input[type=reset]{
            background-color:lightgrey;
            border-style:none;
            border-radius:5px;
            height:40px;
            width:70px;
            font-weight:bold;
        }
        input[type=mobile]{
            background-color:lightgrey;
            border-style:none;
            border-radius:5px;
            height: 25px;
        }
        input[type=submit]{
            background-color:lightgrey;
            border-style:none;
            border-radius:5px;
            height:40px;
            width:70px;
           font-weight:bold;
        }


    </style>
</head>
<body>
    <h1>HTML FORM</h1>
  <table>
     <form>
        
        <tr>
           <td>
            <label for="first name">First Name : </label>
           </td>
           <td><input type="text" class="first"></td>
        </tr>
        <tr>
            <td>
                <label for="last name">Last Name : </label>
            </td>
            <td><input type="text" class="last"></td>
        </tr>
        <tr>
            <td>
                <label for="Date Of Birth">Date Of Birth : </label>
            </td>
            <td><input type="date" class="date"></td>
        </tr>
        <tr>
            <td><label for="email">Email id : </label></td>
            <td><input type="email" class="email"></td>
        </tr>
        <tr>
            <td><label for="mobile">Mobile no  : </label></td>
            <td><input Type="mobile" class="mobile"></td>

        </tr>
        <tr>
            <td><br><br><input type="submit" class="submit"></td>
            <td><br><br><input type="reset" class="reset"></td>
        </tr>


    </form>
  </table>






    
    
</body>
</html>