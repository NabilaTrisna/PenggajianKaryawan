  <html>
  <head>
  <title>Laporan gaji Pegawai</title>
  <body>
  <h1><center>Laporan Gaji Pegawai</center></h1>
  <br>
  <br>
  <br>
  <?php 
            foreach($dataPegawai as $data)
            {
                echo "Nama : " .$data->nama; 
            }
 ?>
 <br>
  <?php 
  foreach($dataGaji as $data)
  { ?>
        <?php 
        
          if ($data->bulan == 1)
        {
          echo "Bulan : Januari";
        }
        else if ($data->bulan == 2)
        {
          echo "Bulan : Februari";
        }
        else if ($data->bulan == 3)
        {
          echo "Bulan : Maret";
        }
        else if ($data->bulan == 4)
        {
          echo "Bulan : April";
        }
        else if ($data->bulan == 5)
        {
          echo "Bulan : Mei";
        }
        else if ($data->bulan == 6)
        {
          echo "Bulan : Juni";
        }
        else if ($data->bulan == 7)
        {
          echo "Bulan : Juli";
        }
        else if ($data->bulan == 8)
        {
          echo "Bulan : Agustus";
        }
        else if ($data->bulan == 9)
        {
          echo "Bulan : September";
        }
        else if ($data->bulan == 10)
        {
          echo "Bulan : Oktober";
        }
        else if ($data->bulan == 11)
        {
          echo "Bulan : November";
        }
        else
        {
          echo "Bulan : Desember";
        } ?>
    <br>

    
          <?php echo "Tahun : " .$data->tahun ?>  
  <?php } ?>

    <br>
    <br>

    <table border="1" height="50%" width="100%">
    <tr>
      <td><center><B>NO</td>
      <td><center><B>Kategori Gaji</td>
      <td><center><B>Total Gaji</td>
    </thead>
    <?php  $number = 1; foreach($dataGaji As $nilai) { ?>

    <tr>
        <td>
                 <center><?php echo $number++; ?>
        </td>
        <td>
                 Gaji Pokok  
        </td>
        <td>
                  <?php echo $nilai->total_gapok;?>
        </td>
    </tr>

    <tr>
        <td>
            <center><?php echo $number++; ?>
        </td>
        <td>
             Gaji Lembur 
        </td>
        <td>
            <?php echo $nilai->total_gajilembur; ?>
        </td>
    </tr>

    <tr>
        <td>
            <center><?php echo $number++; ?>
        </td>
        <td>
            Gaji Tambahan  
        </td>
        <td>
            <?php echo $nilai->total_tambahan;?>
        </td>
    </tr>

    <tr>
        <td>
            <center><?php echo $number++; ?>
        </td>
        <td>
            Total Gaji Kotor  
        </td>
        <td>
        <?php echo $nilai->total_gajikotor; ?>
        </td>
    </tr>

    <tr>
        <td></td>
        <td>
            <B>Gaji yang diperoleh 
        </td>
        <td>
            <?php echo $nilai->total_gajibersih;?>
        </td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>
