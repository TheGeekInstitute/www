<?php
$names=array("Aman","Raman","Chaman");
$abc=["Apple","ball","cat"];
// echo $names[0];
// echo $names[1];
// echo $names[2];
$num=count($names);

// echo $num;


// echo $abc[1];


// $new=["a"=>"Apple","b"=>"Ball","c"=>"Cat"];

// echo $new["b"];

$para="Hi I am Amit Kumar Singh";

// echo strlen($para);
// echo str_word_count($para);
// $rev=strrev($para);
// echo $rev;
// echo strrev($rev);

// echo strpos($para,"Amit");

// echo str_replace("Amit","Sumit",$para);

// echo pi();

// echo min(45,50,48);
// echo max(45,50,48);

// echo abs(-50);

// echo sqrt(25);


$num=45.725;

// echo round($num);

// echo rand(1,10);

// echo mt_rand(1,10);


?>
<h1  align="center" class="new"> <?php echo $para ?> </h1>
<style>
.new{
    color: blue;
    background-color:brown;
    border: 10px groove black;
    margin:10px
}
</style>
<?php
$name=array("Shivank","Aman","Sumit");
echo $name[0];
echo "<br>";
echo $name[1];
echo "<br>";
echo $name[2];
echo "<br>";

echo $num=count($name);

echo "<br>";
$new=["a"=>"Apple","b"=>"Ball","c"=>"Cat"];

echo $new["c"];
echo "<br>";
$para="Hii I am Shivank Shukla.";

echo $para;
echo "<br>";
echo strlen($para);
echo "<br>";
echo str_word_count($para);
echo "<br>";
echo strrev($para);
$rev=strrev($para);
echo "<br>";
echo $rev;
echo "<br>";
echo strrev($rev);
echo "<br>";
// echo str_replace("Shivank","aman",$para);
echo str_replace("Shukla","Sumit",$para);
echo strpos($para,"am");
echo "<br>";
echo pi();
$num=49.289;
echo "<br>";

echo round($num);
echo "<br>";
echo rand(1,8);
echo "<br>";
echo mt_rand(1,10);
echo "<br>";

echo sqrt(100);
echo "<br>";
echo abs(-268);
echo "<br>";
echo min(20,35,29,24,67,15.35,0034,522);
echo "<br>";
echo max(265.2,45,26,79,1588.1,2,48,);

?>




















