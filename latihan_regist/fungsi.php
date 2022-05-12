<?php  

    ini_set("display_errors",E_ALL);
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



     function upload(){

        $namafile = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $temp = $_FILES['gambar']['tmp_name'];

        if ($error === 4){

            echo "<script>
                  alert('pilih gambar dulu');
                  </script>";

                  return false;
        }

        $extensi = ['jpg','jpeg','png'];
        $ambilext =  strtolower(pathinfo("$namafile",PATHINFO_EXTENSION));

        if(!in_array($ambilext,$extensi)){

            echo "<script>
            alert('ini bukan gambar!!');
            </script>";

            return false;


        }
        if($ukuran>1000000){

            echo "<script>
            alert('gambany kegedean!!');
            </script>";

            return false;


        }

        move_uploaded_file($temp,'gambar/'. $namafile);

        return $namafile;



     }





   
     function insert($data){
         global $conn;

        $nama = htmlspecialchars($data['nama']);
        $nisn = htmlspecialchars($data['nisn']);
        $alamat = htmlspecialchars($data['alamat']);
        $email = htmlspecialchars($data['email']);
        $ket = htmlspecialchars($data['ket']);

        $gambar = upload();
        if(!$gambar){
            return false;
        }
        

        $query = "INSERT INTO data_manag VALUES(0,'$nama','$nisn','$alamat','$email','$ket','$gambar')";

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
        $gambar = htmlspecialchars($data['gambar']);
        $gambar_lama = htmlspecialchars($data['gambar-lama']);

        if($_FILES["gambar"]['error'] === 4){

            $gambar = $gambar_lama;
        }else{

            $gambar = upload();
        }


        global $conn;
        $query = "UPDATE data_manag SET 
                    nama = '$nama',
                    nisn = '$nisn',
                    alamat = '$alamat',
                    email = '$email',
                    ket = '$ket',
                    gambar = '$gambar' WHERE no=$no";

        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);

    }

    function cari($key){

        $query = "SELECT * FROM data_manag WHERE nama LIKE '%$key%' OR nisn LIKE '%$key%' 
        OR email LIKE '%$key%' OR alamat LIKE '%$key%' OR ket LIKE '%$key%'";
        return query($query);
    }
     

    function regis($data){

        global $conn;
        $username = strtolower(stripslashes($data['username']));
        $password = 
    }
     
?>
