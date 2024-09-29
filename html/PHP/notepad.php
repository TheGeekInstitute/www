<?php
$conn = new mysqli("localhost","root","toor","Akash");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['heading']) && !empty($_POST['heading'])){
        $heading=$_POST['heading'];

        if(isset($_POST['content']) && !empty($_POST['content'])){
            $content=$_POST['content'];

            if(isset($_POST['save'])){
            $sql="INSERT INTO `notepad`(`heading`, `content`) VALUES ('$heading','$content')";

            $query=$conn->query($sql);
            if($conn->affected_rows>0){
                echo '
                
            <script>
                alert("Data Has Been Saved");
                window.location.href="notepad.php";
            </script>
                ';
            }
            else{
                echo '
                
                <script>
                    alert("Data Can not be Saved");
                </script>
                    ';
            }
    }
    else if(isset($_POST['update'])){

        //update

        if(isset($_POST['id'])){
            $id=$_POST['id'];

            $sql="UPDATE `notepad` SET `heading`='$heading',`content`='$content' WHERE `id`='$id'";
            $query=$conn->query($sql);
            if($conn->affected_rows>0){
                echo '
                
                <script>
                    alert("Record has Been Updated");
                    window.location.href="notepad.php";
                </script>
                    ';
            }

            else{
                echo '
                
                <script>
                    alert("Please Change Data");
                </script>
                    ';
            }

            
        }






    }

    else{
        echo "Not an Request";
    }

            



        }
        else{
            echo '
            <script>
                alert("Please Enter Content");
            </script>
            ';
        }
    }
    else{
        echo '
        <script>
            alert("Please Provide Heading");

        </script>
        ';
    }
}


$heading=$content=$id="";
$show=false;
if(isset($_GET['edit']) && !empty($_GET['edit']) && ctype_digit($_GET['edit'])){
    $edit=$_GET['edit'];

    $sql="SELECT `id`,`heading`,`content` FROM `notepad` WHERE `id`='$edit'";
    $query=$conn->query($sql);
    if($query->num_rows==1){
        $show=true;
        $data=$query->fetch_assoc();
        $id=$data['id'];
        $heading=$data['heading'];
        $content=$data['content'];

    }
    else{
        echo '
        <script>
                alert("No Records Found");
                window.location.href="notepad.php";
        </script>
        ';
    }

   



}



//delete

if(isset($_GET['delete']) && !empty($_GET['delete']) && ctype_digit($_GET['delete'])){
    $id=$_GET['delete'];

    $sql="DELETE FROM `notepad` WHERE `id`='$id'";
    $query=$conn->query($sql);
    if($conn->affected_rows==1){
        echo '
        <script>
                alert("record Has been Deleted");
                window.location.href="notepad.php";
        </script>
        ';

    }
    else{
        echo '
        <script>
                alert("No Records Found");
                window.location.href="notepad.php";
        </script>
        ';
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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        body{
            overflow: hidden;
        }

        .container{
           
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30rem;
            width:50rem;
            position: absolute;
            top: calc(50% - 15rem);
            left: calc(50% - 25rem);
            background-color: antiquewhite;
        }

        .container .box{
            width: 50%;
            height: 30rem;
        }

        .container .box:first-child{
            padding: 1rem 0;

        }

        
        .container .box:first-child form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }

        
        .container .box:first-child form input{
            border: 2px solid black;
            height: 3rem;
            width: 90%;
            padding: 0 5px;
            font-size: x-large;
            outline: none;
            border-width:1px 1px 4px 1px ;
            border-radius: 3px;
        }

        .container .box:first-child form textarea{
            border: 2px solid black;
            margin-top: 1rem;
            border-width:1px 1px 4px 1px ;
            width: 90%;
            height: 20rem;
            padding: 10px;
            font-size: large;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            outline: transparent;
            border-radius: 3px;
        }

        .container .box:last-child{
          
            padding: 1rem;
       
        }


        .container .box:last-child table,
        .container .box:last-child td,
        .container .box:last-child th
        {
            border: 3px solid antiquewhite;
            border-collapse: collapse;
            padding: 3px;
            font-size: large;
        }

        
        .container .box:last-child table{
            width: 90%;
            margin: auto;
        }

        
        .container .box:last-child table th {
        background-color: green;
        color: white;
        }

        
        .container .box:last-child table tr:nth-child(odd) {
            background-color:rgb(212, 241, 241);
        
        }
        
        
        .container .box:last-child table tr:nth-child(even) {
            background-color:rgb(190, 250, 250);
        }

        .container .box:first-child form input[type="submit"]{
            background-color: royalblue;
            color: white;
            width: 7rem;
            margin: .5rem;
            height: 2.5rem;
            cursor: pointer;
            transition: all .3s linear;
            
        }

        
        .container .box:first-child form input[type="submit"]:hover{
            background-color: blue;
            
        }
    </style>
</head>
<body>


    <div class="container">
        
        <div class="box">
            <form action="" method="POST">
                <?php 
                if($show){
                    echo '<input type="hidden" name="id" value="'.$id.'">';
                }
                ?>
                <input type="text" placeholder="heading" name="heading" value="<?php echo $heading; ?>">
                <textarea name="content" placeholder="Content"><?php echo $content; ?></textarea>
                <div class="btn">
                <input type="submit" value="Save" name="save">
                <?php 
                if($show){
                    echo '<input type="submit" value="Update" name="update">';
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
                    $sql="SELECT `id`, `heading`, `content` FROM `notepad`";
                    $query=$conn->query($sql);
                    if($query->num_rows>0){
                      while( $data=$query->fetch_assoc()){
                        echo'
                        <tr>
                                <td>'.substr($data['heading'],0,20).'...</td>
                                <td>
                                    <a href="?edit='.$data["id"].'">Edit</a>
                                    <a href="?delete='.$data["id"].'">Delete</a>
                                </td>
                        </tr>

                        ';
                      }
         


                    }
                    else{
                        echo<<<print
                        <tr>
                            <td colspan="2" align="center">No Records Found</td>
                        </tr>
                        print;
                    }
                   


                ?> 
            </table>
        </div>
    </div>
</body>
</html>