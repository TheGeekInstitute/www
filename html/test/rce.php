
<form action="" method="GET">
    <label for="">IP Address</label>
    <input type="text" name="ip">
    <input type="submit">
</form>

    <?php
    
    function filter($data){
        // $data=str_replace("nc","",$data);
        // $data=str_replace("ncat","",$data);
        // $data=str_replace("netcat","",$data);
        // $data=str_replace("python","",$data);
        // $data=str_replace("bash","",$data);
        // $data=str_replace("ruby","",$data);
        // $data=str_replace("perl","",$data);
        // $data=str_replace("php","",$data);
        // $data=str_replace("sh","",$data);
        // $data=str_replace("||","",$data);
        // $data=str_replace("|","",$data);
        // $data=str_replace(";","",$data); 
        // $data=str_replace("zsh","",$data); 
        return $data;
    }
    if(isset($_GET['ip']) && !empty($_GET['ip'])){
            $ip=$_GET['ip'];
            echo "<pre>";
            system("ping -c 4   " . filter($ip));
        }
    ?>
    
