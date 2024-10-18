<?php
$msg="";
$heading=$content=$id="";
 
$conn=mysqli_connect("localhost","root","toor","SANDEEP",);

if($_SERVER['REQUEST_METHOD']=="POST"){ 

    
        if(isset($_POST['heading']) && !empty($_POST['heading'])){
            $heading=$_POST['heading'];
            
          if(isset($_POST['content']) && !empty($_POST['content'])){
            $content=$_POST['content'];
            if(isset($_POST['save'])){
            $sql="INSERT INTO `Note`(`heading`, `content`) VALUES ('$heading','$content')";
            $query=mysqli_query($conn,$sql);
            if($query){
                header("location:" . $_SERVER['PHP_SELF']);
            }
        
          }

          if(isset($_POST['update']) && isset($_POST['post_id']) && !empty($_POST['post_id'])){
            $id=$_POST['post_id'];
            $sql="UPDATE `Note` SET`heading`='$heading',`content`='$content' WHERE `id`='$id'";
            $query=mysqli_query($conn,$sql);
            if($query){
                header("location:" . $_SERVER['PHP_SELF']);

            }

          }


         

        }
    }
}



if(isset($_GET['edit']) && !empty($_GET['edit'])){
    $id =$_GET['edit'];
    $sql="SELECT `id`, `heading`, `content` FROM `Note` WHERE `id`='$id'";

    $query=mysqli_query($conn,$sql);
    if($query){
        if(mysqli_num_rows($query)==1){
            $data=mysqli_fetch_assoc($query);
            $heading=$data['heading'];
            $content=$data['content'];
        }
    }
  
}


if(isset($_GET['delete']) && !empty($_GET['delete'])){
    $id=$_GET['delete'];

    echo $id;
    $sql="DELETE FROM `Note` WHERE `id`='$id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:" . $_SERVER['PHP_SELF']);
    }
}




?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Pad</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            overflow: hidden;
        }

        .container {

            display: flex;
            justify-content: center;
            align-items: center;
            height: 30rem;
            width: 50rem;
            position: absolute;
            top: calc(50% - 15rem);
            left: calc(50% - 25rem);
            background-color: antiquewhite;
        }

        .container .box {
            width: 50%;
            height: 30rem;
        }

        .container .box:first-child {
            padding: 1rem 0;

        }


        .container .box:first-child form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }


        .container .box:first-child form input {
            border: 2px solid black;
            height: 3rem;
            width: 90%;
            padding: 0 5px;
            font-size: x-large;
            outline: none;
            border-width: 1px 1px 4px 1px;
            border-radius: 3px;
        }

        .container .box:first-child form textarea {
            border: 2px solid black;
            margin-top: 1rem;
            border-width: 1px 1px 4px 1px;
            width: 90%;
            height: 20rem;
            padding: 10px;
            font-size: large;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            outline: transparent;
            border-radius: 3px;
        }

        .container .box:last-child {

            padding: 1rem;

        }


        .container .box:last-child table,
        .container .box:last-child td,
        .container .box:last-child th {
            border: 3px solid antiquewhite;
            border-collapse: collapse;
            padding: 3px;
            font-size: large;
        }


        .container .box:last-child table {
            width: 90%;
            margin: auto;
        }


        .container .box:last-child table th {
            background-color: green;
            color: white;
        }


        .container .box:last-child table tr:nth-child(odd) {
            background-color: rgb(212, 241, 241);

        }


        .container .box:last-child table tr:nth-child(even) {
            background-color: rgb(190, 250, 250);
        }

        .container .box:first-child form input[type="submit"] {
            background-color: royalblue;
            color: white;
            width: 7rem;
            margin: .5rem;
            height: 2.5rem;
            cursor: pointer;
            transition: all .3s linear;

        }


        .container .box:first-child form input[type="submit"]:hover {
            background-color: blue;

        }
    </style>
</head>

<body>


    <div class="container">

        <div class="box">
            <form action="" method="POST">
                <input type="text" placeholder="heading" name="heading" value="<?php echo $heading; ?>">
                <textarea name="content" placeholder="Content"><?php echo $content; ?></textarea>
                <div class="btn">
                    <input type="submit" value="Save" name="save">
                    <input type="hidden" name="post_id"  value="<?php echo $id; ?>">

                    <?php
                        if(isset($_GET['edit'])){
                            echo '
                            <input type="submit" value="Update" name="update" >
                            
                            ';
                        }

                    ?>
                </div>
            </form>
        </div>
        <div class="box">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                <?php
                    $sql="SELECT `id`, `heading`, `content` FROM `Note`";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        if(mysqli_num_rows($query)>0){
                            while($data=mysqli_fetch_assoc($query)){
                                echo '
                                <tr>
                                <td>'.$data['heading'].'</td>
                                <td>
                                 <a href="?edit='.$data['id'].'">Edit  
                                          /
                                    </a>
                                <a href="?delete='.$data['id'].'">Delete</a>
                                </td>
                                </tr>
                                
                                
                                ';
                            }
                        }
                        else{
                            echo '
                                     <tr>
                    
                    <td colspan="2">
                       No Records Found
                    </td>
                    </tr>
                            
                            ';
                        }
                    }
                ?>


      


            </table>
        </div>
    </div>
</body>

</html>