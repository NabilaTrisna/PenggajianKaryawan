<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Page_Pegawai/Layout/HEader_navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Show Penilaian</title>

<link href="<?php base_url()?>../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/css/sb-admin.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/css/plugins/morris.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="page-wrapper">

<div class="container-fluid">
<br>

  <legend><font face = "Georgia"> Laporan Jam Kerja</legend>
  
  <table>
  <?php 
  foreach($dataPenilaian as $data)
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
      <th>Kategori</th>
      <th>Skor</th>
      <th></th>
    </thead>
    <tbody>
    <?php  $number = 1; foreach($dataPenilaian As $nilai) { ?>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Kedisiplinan  
    </td>
    <td>
        <input type="text" class="form-control" id="penilaian1" name="penilaian1" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $nilai->penilaian1;?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Kualitas dan Fokus Pelanggan 
    </td>
    <td>
        <input type="text" class="form-control" id="penilaian2" name="penilaian2" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $nilai->penilaian2; ?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Kemampuan Berkomunikasi  
    </td>
    <td>
        <input type="text" class="form-control" id="penilaian3" name="penilaian3" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $nilai->penilaian3;?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Komitmen pada Perusahaan  
    </td>
    <td>
        <input type="text" class="form-control" id="penilaian4" name="penilaian4" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $nilai->penilaian4; ?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Etika Profesionalisme 
    </td>
    <td>
        <input type="text" class="form-control" id="penilaian5" name="penilaian5" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $nilai->penilaian5;?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Kemampuan Fungsi Teknik 
    </td>
    <td>
        <input type="text" class="form-control" id="penilaian6" name="penilaian6" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $nilai->penilaian6; ?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        <?php echo $number++; ?>
    </td>
    <td>
      Kinerja dan Produktivitas  
    </td>
    <td>
        <input type="text" class="form-control" id="penilaian7" name="penilaian7" placeholder="Hari/Bulan" style = "width:130px;"
            value = "<?php echo $nilai->penilaian7; ?>" readonly></td>
    </td>
    </tr>

    <tr>
    <td>
        
    </td>
    <td>
      <B> Total Penilaian
    </td>
    <td>
       <B> <?php echo $nilai->total_penilaian;?>
    </td>
    </tr>

    <?php } ?>
    </tbody>
    </table>

      
<a class="btn btn-info" href="<?php echo base_url('Page_Pegawai/penilaian') ?>">Kembali</a>

   
    
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>