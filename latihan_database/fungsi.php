<?php  

    $conn = mysqli_connect("localhost","root",'',"latihan");

    
    function query($query)
    {   
        global $conn;
        $hasil = mysqli_query($conn,$query);
        $data =[];
        while($row = mysqli_fetch_assoc($hasil)){

            $data[] = $row;
            
        }

        return $data;


     };
   
     
     
?>