<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Page_Pegawai/Layout/HEader_navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Show Penilaian Karyawan</title>

<link href="<?php base_url()?>../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/css/sb-admin.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/css/plugins/morris.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="page-wrapper">

<div class="container-fluid">
<br>
  <legend><font face = "Georgia">Laporan Jam Kerja</legend>
  
  <table>
  <?php 
  foreach($dataJamKerja as $data)
  { ?>
  <td>
        <select class="form-control" name="bulan" id="bulan" readonly>
        <option selected readonly> 
        <?php 
        
          if ($data->bulan == 1)
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
        } ?>

    <td>
          <select class="form-control" name="tahun" id="tahun" style = "width:150px;" readonly>
          <option selected readonly>
          <?php echo $data->tahun ?>
          </select>                  
    </td>    
  <?php } ?>
    </table>

    <br>

    <table class="table table-striped">
    <thead>
      <th>NO</th>
      <th>Keterangan</th>
      <th>Jumlah</th>
      <th></th>
    </thead>
    <tbody>
    <?php  $number = 1; foreach($dataJamKerja As $jam) { ?>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Jumlah Masuk Hari Kerja  
    </td>
    <td>
        <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $jam->hari_kerja; echo " Hari / Bulan "?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Jumlah Hari Tidak Masuk Kerja 
    </td>
    <td>
        <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $jam->tidak_masuk; echo " Hari / Bulan "?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Jumlah Jam Lembur 
    </td>
    <td>
        <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $jam->jam_lembur; echo " Jam / Bulan "?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
    Jumlah Hari yang Masuk Setengah Hari 
    </td>
    <td>
        <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $jam->setengah_hari; echo " Hari / Bulan "?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Jumlah Hari Sakit
    </td>
    <td>
        <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $jam->sakit; echo " Hari / Bulan "?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Jumlah Jam Hari yang Masuk Kerja 
    </td>
    <td>
        <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $jam->jumlah_jam; echo " Jam / Bulan "?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Jumlah Jam Hari yang Masuk Setengah Hari 
    </td>
    <td>
        <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $jam->jumlah_setengah; echo " Jam / Bulan "?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        
    </td>
    <td>
      <B>Total Jam
    </td>
    <td>
       <B> <?php echo $jam->total_jam; echo " Jam / Bulan" ?>
    </td>
    </tr>

    <?php } ?>
    </tbody>
    </table>

<a class="btn btn-info" href="<?php echo base_url('Page_pegawai/jamkerja') ?>">Kembali</a>
   
    
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>