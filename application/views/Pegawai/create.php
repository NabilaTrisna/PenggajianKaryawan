<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Pegawai/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Tambah Pegawai</title>

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


  <legend>Tambah Data Pegawai</legend>
  
  <?php echo form_open('pegawai/input'); ?>

    <div class="form-group">
      <label for="NIK">Nomor Induk Pegawai </label>
      <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK ">
    </div>

    <div class="form-group">
      <label for="Nama">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
    </div>

    <div class="form-group">
      <label for="Nama">Tanggal Lahir </label>
      <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir">
    </div>

     <div class="form-group">
      <label for="alamat">Alamat </label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Tanggal Lahir">
    </div>

      <div class="form-group">
      <label for="kontak">NO HP </label>
      <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan NO Hp">
    </div>

    <div class="form-group">
      <label for="mail">E-mail </label>
      <input type="text" class="form-control" id="mail" name="mail" placeholder="Masukkan E-mail">
    </div>

     <div class="form-group">
    <label>Divisi </label>
                  <select class="form-control" name="divisi" id="divisi">
                  <option selected> -- Pilih Divisi -- </option>
                  <?php foreach($data as $divisi){ ?>
                  <option value="<?php echo $divisi->id_divisi; ?>"><?php echo $divisi->nama; ?>   </option>
                  <?php } ?>
                  </select>
    </div>

    <div class="form-group">
      <label for="mail">Password </label>
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan Password">
    </div>
    

    <a class="btn btn-info" href="<?php echo base_url('pegawai/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>


</div>
   </div>

<?php $this->load->view('layouts/base_end') ?>