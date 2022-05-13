<?php 

    $conn = mysqli_connect("localhost","root",'',"latihan"); 

    function query($query){

        global $conn;
        $hasil = mysqli_query($conn,$query);
        $data = [];
        while($row = mysqli_fetch_assoc($hasil)) {

            $data [] = $row;
        }

        return $data;
    }

    // $query = mysqli_query($conn,"SELECT* FROM data_manag");

    // $data = [];

    // while($row = mysqli_fetch_assoc($query)){


    //     $data[] = $row;
    // }
    $data = query("select nama,email,alamat from data_manag");
     

    var_dump($data);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>