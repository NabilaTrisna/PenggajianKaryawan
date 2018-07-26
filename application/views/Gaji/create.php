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
<legend><font face = "Georgia"> Tambah Gaji Pegawai </legend></font>
  <br>

  <?php echo form_open('gaji/penggajian'); ?>

<table class="table table-striped">    
  <thead>
   <td>
                <select class="form-control" name="NIK" id="NIK" style = "width:150px;">
                <option selected> -- Pilih Pegawai -- </option>
                <?php foreach($namaPegawai as $pegawai){ ?>
                <option value="<?php echo $pegawai->NIK; ?>"><?php echo $pegawai->nama; ?>   </option>
                <?php } ?>
                </select>
    </td>
    </table>
    
    <table>
    <tr> <B> Pilih Bulan dan Tahun Penilaian Pegawai </B></tr>
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
   </td>
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
   </tr>
    </div>
  </table> 
  <br>                
  <br>
  
    <a class="btn btn-info" href="<?php echo base_url('gaji/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">Hitung</button>

    <?php 
    form_close();
    ?>

</body>


<?php $this->load->view('layouts/base_end') ?>