<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Penilaian/Layout/Navigation') ?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" type="image/png" href="<?php echo base_url('assets/gambar/icon4.png'); ?>">
<title>Halaman Admin</title>

<!-- Bootstrap Core CSS -->
<link href="<?php base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php base_url()?>../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php base_url()?>assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../assets/css/sb-admin.css" rel="stylesheet">
<!-- Morris Charts CSS -->
<link href="<?php base_url()?>assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../assets/css/plugins/morris.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="<?php base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php base_url()?>../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>


<body>

<div id="page-wrapper">

  <div class="container-fluid">

<!-- Start Item Show  -->
<br>
<legend><font face ="Georgia">Penilaian Pegawai </legend></font>
<br>
    <a class="btn btn-primary" href="<?php echo base_url('penilaian/tambah') ?>">
            Tambah
    </a>
  
    <form action="<?php echo base_url('penilaian/cariData')?>" action="GET">
    <table>
				<div class="form-group">
        <td>
        <select class="form-control" name="cari" id="cari" style = "width:150px;">
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
        <select class="form-control" name="filter" id="filter" style = "width:150px;">
                <option selected> -- Pilih Tahun -- </option>
                <option value="2017">2017 </option>
                <option value="2018">2018 </option>
                <option value="2019">2019 </option>
                <option value="2020">2020 </option>
                <option value="2021">2021 </option>
        </select>         
        </td>
        <td>
        <input class="btn btn-primary" type="submit" value="Cari">
        </td>
			</form>
  <br>    
</form>
</td> 
</table>
</body>
<br>
<br>
<?php $this->load->view('/layouts/base_end') ?>
