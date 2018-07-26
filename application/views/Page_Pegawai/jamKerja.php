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
<br>
  
  <form action="<?php echo base_url('Page_pegawai/laporanJamKerja')?>" action="GET">
  <table>
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
  </table>

  <br>
  <td>
        <input class="btn btn-primary" type="submit" value="Cari">
        </td>

  
  <?php echo form_close(); ?>
    
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>