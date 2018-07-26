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

<!-- Bootstrap Core CSS -->
<link href="<?php base_url()?>../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php base_url()?>../assets/css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php base_url()?>../assets/css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php base_url()?>../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>



<body>

<div id="page-wrapper">

<div class="container-fluid">

<!-- Start Item Show  -->

<br>
<legend><font face = "Georgia"> Tambah Jam Kerja Pegawai </legend></font>
  <br>

  <?php echo form_open('jamkerja/input'); ?>

<table>    
  <thead>
   <td> <input type="text" class="form-control" id="id_jam" name="id_jam" placeholder="ID Jam" style = "width:130px;" > </td>
   <td> 
  
                <select class="form-control" name="namaPegawai" id="namaPegawai" style = "width:150px;">
                <option selected> -- Pilih Pegawai -- </option>
                <?php foreach($namaPegawai as $pegawai){ ?>
                <option value="<?php echo $pegawai->NIK; ?>"><?php echo $pegawai->nama; ?>   </option>
                <?php } ?>
                </select>
    </td>
    <td>              
                <select class="form-control" name="bulan" id="bulan" style = "width:150px;">
                <option selected> -- Pilih Bulan -- </option>
                <option value="1">Januari </option>
                <option value="2">Februari </option>
                <option value="3">Maret </option>
                <option value="4">April </option>
                <option value="5">Mei </option>
                <option value="6">Juni </option>
                <option value="7">Juli </option>
                <option value="8">Agustus </option>
                <option value="9">September </option>
                <option value="10">Oktober </option>
                <option value="11">November </option>
                <option value="12">Desember </option>
                </select>
    <td>
  
                <select class="form-control" name="tahun" id="tahun" style = "width:150px;">
                <option selected> -- Pilih Tahun -- </option>
                <option value="2017">2017 </option>
                <option value="2018">2018 </option>
                <option value="2019">2019 </option>
                <option value="2020">2020 </option>
                <option value="2021">2021 </option>
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
      <td> <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:130px;">
            *Tidak Lebih dari 20 Hari </td>
    </tr>
    <tr>
      <td> 2 </td>
      <td> Jumlah Hari Tidak Masuk Kerja  </td>
      <td> <input type="text" class="form-control" id="tidak_masuk" name="tidak_masuk" placeholder="Hari/Bulan" style = "width:130px;" >
      </td>
    </tr>
    <tr>
      <td> 3 </td>
      <td> Jumlah Jam Lembur </td>
      <td> <input type="text" class="form-control" id="jam_lembur" name="jam_lembur" placeholder="Jam/Bulan" style = "width:130px;" >
      </td>
    </tr>
    <tr>
      <td> 4 </td>
      <td> Jumlah Hari yang Masuk Setengah Hari </td>
      <td> <input type="text" class="form-control" id="setengah_hari" name="setengah_hari" placeholder="Hari/Bulan" style = "width:130px;" >
      </td>
    </tr>
    <tr>
      <td> 5 </td>
      <td> Jumlah Hari Sakit </td>
      <td> <input type="text" class="form-control" id="sakit" name="sakit" placeholder="Hari/Bulan" style = "width:130px;" >
      </td>
    </tr>
    </thead>
    </table>

    <a class="btn btn-info" href="<?php echo base_url('jamkerja/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>

    <?php 
    form_close();
    ?>

</body>


<?php $this->load->view('layouts/base_end') ?>