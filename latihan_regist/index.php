<?php 

      require "fungsi.php";

      $mahasiswa = query("SELECT * FROM data_manag");
      if(isset($_POST['cari'])){

            $mahasiswa = cari($_POST['keyword']);
      }

?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>latihan data</title>

</head>
<body>
      <h1 style="padding: 20px; text-align:center">data management</h1>
      <br>
      <form action="" method="post">
            <input type="text" name="keyword" size="40" autocomplete="off" autofocus placeholder="ketik disini untuk cari...">
            <button type="submit" name="cari">cari</button>
      </form>

      <br>
      <table border="1" cellpadding="10" cellspacing="0">
            
      <tr>
            <th>No</th>
            <th>Action</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Ket</th>
            <th>Gambar</th>
      </tr>
      <?php $i = 1 ; ?>
      
      <?php  foreach($mahasiswa as $d): ?>
      
      <tr>
            <td><?= $i?></td>
            <td>
                  <a href="ubah.php?no=<?=$d['no'];?>">ubah</a> |
                  <a href="delete.php?no=<?=$d['no'] ;?>" onclick="return confirm('yakin');">hapus</a>
            </td>
            <td><?= $d['nama']  ; ?>
            </td>
            <td><?= $d['nisn']  ; ?>
            </td>
            <td><?= $d['alamat']  ; ?>
            </td>
            <td>
                  <?= $d['email']  ; ?>
                  
            </td>
            <td><?= $d['ket']  ; ?>
            </td>
            <td><img src="gambar/<?=$d['gambar']; ?>
            " width="70"></td>
      </tr>
      <?php $i++ ; ?>
      
      <?php endforeach ; ?>
      
</table>
      <br>
      <ul>

            <a href="tambah.php">tambah data</a>
       </ul>
     
     
      
</body>
</html>