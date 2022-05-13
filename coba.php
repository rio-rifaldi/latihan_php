<?php  


$nama = "rio rifaldi 2004";

function hapus($nama){

       if(empty(trim($nama))){

              echo "<script>
                     alert('ada spasi');
              </script>";
              return false;
       }else{
              

              echo "<script>
                     alert('berhasil');
              </script>";
              
       }
}

echo hapus($nama);

?>
