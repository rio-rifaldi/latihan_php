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
   
     function insert($data){

        $nama = htmlspecialchars($data['nama']);
        $nisn = htmlspecialchars($data['nisn']);
        $alamat = htmlspecialchars($data['alamat']);
        $email = htmlspecialchars($data['email']);
        $ket = htmlspecialchars($data['ket']);


        global $conn;
        $query = "INSERT INTO data_manag VALUES(0,'$nama','$nisn','$alamat','$email','$ket')";

        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
     }



     function hapus($id){
         global $conn;

         mysqli_query($conn,"DELETE FROM data_manag WHERE no=$id");

         return mysqli_affected_rows($conn);
     }

     function ubah($data){

        $no = $data['no'];
        $nama = htmlspecialchars($data['nama']);
        $nisn = htmlspecialchars($data['nisn']);
        $alamat = htmlspecialchars($data['alamat']);
        $email = htmlspecialchars($data['email']);
        $ket = htmlspecialchars($data['ket']);


        global $conn;
        $query = "UPDATE data_manag SET 
                    nama = '$nama',
                    nisn = $nisn,
                    alamat = $alamat,
                    email = $email,
                    ket = $ket WHERE no=$no";

        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);


     }
     
     
?>
