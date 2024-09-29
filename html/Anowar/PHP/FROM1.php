<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num">
        <br><br>
        <select name="choice" id="">
            <option value="sr">Sr No</option>
            <option value="odd">ODD</option>
            <option value="even">EVEN</option>
        </select>
        <br><br>
        <input type="submit" value="Show">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST["num"]) && !empty($_POST['num']) && isset($_POST["choice"]) && !empty($_POST["choice"])){
        $num=$_POST['num'];
        $choice=$_POST['choice'];

        function table($sum){
            for($i=1 ; $i<=10 ; $i++){
                echo $sum . " x " . $i . " = " . $sum*$i . "<br>";
            }
        }

        


        if($choice=="sr"){
            for($i=1; $i<=$num ; $i++){
                echo $i . "<br>";
            }
        }





        else if($choice=="odd"){
            for($i=1; $i<=$num ; $i++){
                if($i%2!=0){
                    echo $i . "<br>";

                }
            }
        }


        else if($choice == "even"){
            for($i=1; $i<=$num ; $i++){
                if($i%2==0){
                    echo $i . "<br>";

                }
            }
        }
        else{
            echo "Invalid Choice";
        }


        
    }
   
}

table(10);
table(20);

?>

<!-- array1 = np.zeros(4) -->




int main (void)
int x[2][3][2] = {{{0,1}, {2,3}, {4,5}},
                 {{6,7}, {8,9}, {10,11}}};


for (int i =0:i < 2:++i){
    for (int j =0:j < 3:++j){
        for
    }
}                 


<!-- function table($num){
    for($i=1 ; $i<=10 ; $i++){
        echo $num . " x " . $i . " = " . $num*$i . "<br>";
    }
}



table(10);



table(50); -->