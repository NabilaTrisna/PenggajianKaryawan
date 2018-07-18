<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Pegawai/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Show Penilaian Karyawan</title>

<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/plugins/morris.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="page-wrapper">

<div class="container-fluid">

  <legend>Show Jam Kerja Karyawan</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <?php echo form_hidden('id_jam', $data->id_jam) ?>

    <table>    
  <thead>
   <td> <input type="text" class="form-control" id="id_penilaian" name="id_penilaian" placeholder="Masukkan ID Penilaian" 
      value="<?php echo $data->id_jam ?>" style = "width:150px;" readonly > </td>
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
      <td> Jumlah Hari Masuk Kerja </td>
      <td> <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $data->hari_kerja; echo " Hari / Bulan "?>" readonly></td>
    </tr>
    <tr>
      <td> 2 </td>
      <td> Jumlah Hari Tidak Masuk Kerja  </td>
      <td> <input type="text" class="form-control" id="tidak_masuk" name="tidak_masuk" placeholder="Hari/Bulan" style = "width:130px;" 
            value = "<?php echo $data->tidak_masuk; echo " Hari / Bulan "?>" readonly>
      </td>
    </tr>
    <tr>
      <td> 3 </td>
      <td> Jumlah Jam Lembur </td>
      <td> <input type="text" class="form-control" id="jam_lembur" name="jam_lembur" placeholder="Jam/Bulan" style = "width:120px;" 
            value = "<?php echo $data->jam_lembur; echo " Jam / Bulan "?>" readonly>
      </td>
    </tr>
    <tr>
      <td> 4 </td>
      <td> Jumlah Hari yang Masuk Setengah Hari </td>
      <td> <input type="text" class="form-control" id="setengah_hari" name="setengah_hari" placeholder="Hari/Bulan" style = "width:130px;" 
            value = "<?php echo $data->setengah_hari; echo " Hari / Bulan "?>" readonly>
      </td>
    </tr>
    <tr>
    <tr>
      <td> 5 </td>
      <td> Jumlah Jam Hari yang Masuk Kerja </td>
      <td> <input type="text" class="form-control" id="jumlah_jam" name="jumlah_jam" placeholder="Jam/Bulan" style = "width:130px;" 
            value = "<?php echo $data->jumlah_jam; echo " Jam / Bulan "?>" readonly>
      </td>
    </tr>
      <td> 6 </td>
      <td> Jumlah Jam Hari yang Masuk Setengah Hari </td>
      <td> <input type="text" class="form-control" id="jumlah_setengah" name="jumlah_setengah" placeholder="Jam/Bulan" style = "width:130px;" 
            value = "<?php echo $data->jumlah_setengah; echo " Jam / Bulan "?>" readonly>
      </td>
    </tr>
    <tr>
      <td></td>
      <td><B>Total Penilaian</td>
      <td><B><?php echo $data->total_jam; echo " Jam / Bulan" ?></td>
    </tr>
    </thead>
    </table>
    <?php 
    form_close();
    ?>

    <table>    
    <td>  
    <div>
    <a class="btn btn-info" href="<?php echo base_url('jamkerja/') ?>">Kembali</a>
    </td>
    <td>&nbsp</td>
    <td>
    <?php 
    echo form_open('jamkerja/hapus/'.$data->id_jam)  ?>
            <a class="btn btn-info" href="<?php echo base_url('jamkerja/edit/'.$data->id_jam) ?>">
              Ubah
            </a>
      </td>
      <td>&nbsp</td>
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