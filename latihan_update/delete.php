<?php  

      require "fungsi.php";
      $nm = $_GET['no'];

      if(hapus($nm)>0){
            echo "<script>
                  alert('documet berhasil di hapus');
                  document.location.href = 'index.php';
                  </script>";
      }else{

            echo "<script>
            alert('documet gagal di hapus');
            document.location.href = 'index.php';
            </script>";
      }
?>