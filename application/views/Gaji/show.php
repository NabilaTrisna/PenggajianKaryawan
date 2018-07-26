<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Pegawai/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" type="image/png" href="<?php echo base_url('assets/gambar/icon4.png'); ?>">
<title>Halaman Admin</title>

<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/plugins/morris.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="page-wrapper">

<div class="container-fluid">

  <legend>Show Gaji Pegawai </legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <?php echo form_hidden('idgaji', $data->idgaji) ?>

    <table>    
  <thead>
   <td> <input type="text" class="form-control" id="idgaji" name="idgaji" placeholder="Masukkan ID Gaji" 
      value="<?php echo $data->idgaji ?>" style = "width:150px;" readonly > </td>
   <td> 
                  <select class="form-control" name="pegawai" id="pegawai" readonly>
                  <option selected readonly> 
                  <?php 
                     foreach($nama as $NP) 
                     {
                       if ($NP->NIK == $data->pegawai)
                       {
                         
                         echo $NP->nama;
                       }
                     }?>
                   </select>         
  </td> 
  <td>
        <select class="form-control" name="bulan" id="bulan" readonly>
        <option selected readonly> 
        <?php if ($data->bulan == 1)
        {
          echo "Januari";
        }
        else if ($data->bulan == 2)
        {
          echo "Februari";
        }
        else if ($data->bulan == 3)
        {
          echo "Maret";
        }
        else if ($data->bulan == 4)
        {
          echo "April";
        }
        else if ($data->bulan == 5)
        {
          echo "Mei";
        }
        else if ($data->bulan == 6)
        {
          echo "Juni";
        }
        else if ($data->bulan == 7)
        {
          echo "Juli";
        }
        else if ($data->bulan == 8)
        {
          echo "Agustus";
        }
        else if ($data->bulan == 9)
        {
          echo "September";
        }
        else if ($data->bulan == 10)
        {
          echo "Oktober";
        }
        else if ($data->bulan == 11)
        {
          echo "November";
        }
        else
        {
          echo "Desember";
        }
      ?>
      </select>
    </td>     
    <td>
          <select class="form-control" name="tahun" id="tahun" style = "width:150px;" readonly>
          <option selected readonly>
          <?php echo $data->tahun ?>
          </select>                  
    </td>
  </table> 
  <br>                
  <br>

   <table class="table table-striped">
    <thead>
    <th> NO </th>
    <th> Keterangan </th>
    <th> Jumlah </th>
    </thead>
    <tr>
      <td> 1 </td>
      <td> Gaji Pokok </td>
      <td> <input type="text" class="form-control" id="gapok" name="gapok" placeholder="/Bulan" style = "width:150px;"
            value = "<?php echo $data->total_gapok; echo "  / Bulan "?>" readonly></td>
    </tr>
    <tr>
      <td> 2 </td>
      <td> Gaji Lembur </td>
      <td> <input type="text" class="form-control" id="lembur" name="lembur" placeholder="/Bulan" style = "width:150px;" 
            value = "<?php echo $data->total_gajilembur; echo " / Bulan "?>" readonly>
      </td>
    </tr>
    <tr>
      <td> 3 </td>
      <td> Gaji Tambahan </td>
      <td> <input type="text" class="form-control" id="jam_lembur" name="jam_lembur" placeholder="/Bulan" style = "width:150px;" 
            value = "<?php echo $data->total_tambahan; echo " / Bulan "?>" readonly>
      </td>
    </tr>
    <tr>
      <td> 4 </td>
      <td> Gaji Kotor</td>
      <td> <input type="text" class="form-control" id="setengah_hari" name="setengah_hari" placeholder="/Bulan" style = "width:150px;" 
            value = "<?php echo $data->total_gajikotor; echo " / Bulan "?>" readonly>
      </td>
    </tr>
    <tr>
      <td> 5 </td>
      <td> Gaji Bersih </td>
      <td> <input type="text" class="form-control" id="setengah_hari" name="setengah_hari" placeholder="/Bulan" style = "width:150px;" 
            value = "<?php echo $data->total_gajibersih; echo "  / Bulan "?>" readonly>
      </td>
    </tr>
    </thead>
    </table>
    <?php 
    form_close();
    ?>

    <table>    
    <td>  
    <div>
    <a class="btn btn-info" href="<?php echo base_url('gaji/') ?>">Kembali</a>
    </td>
    <td>&nbsp</td>
    <td>
    <?php 
    echo form_open('gaji/hapus/'.$data->idgaji)  ?>
      <td>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
      </td>
            <?php echo form_close() ?>
    </div>
    </table>
    
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>