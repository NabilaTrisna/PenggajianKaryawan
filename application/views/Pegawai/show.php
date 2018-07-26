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
<br>
  <legend><font face = "Georgia" >Detail Data Pegawai</legend> </font> <br>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <?php echo form_hidden('NIK', $data->NIK) ?>

    <div class="form-group">
      <label for="Nama">Nama Pegawai</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" 
      value="<?php echo $data->nama ?>" readonly >
    </div>

      <div class="form-group">
      <label for="tl">Tanggal Lahir</label>
      <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Nama" 
      value="<?php echo $data->tanggal_lahir ?>" readonly>
    </div>

     <div class="form-group">
      <label for="Nama">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Nama" 
      value="<?php echo $data->alamat ?>" readonly>
    </div>

    <div class="form-group">
      <label for="Nama">Kontak</label>
      <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukkan Nama" 
      value="<?php echo $data->no_hp ?>" readonly>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Nama" 
      value="<?php echo $data->email ?>" readonly>
    </div>

    
    <div class="form-group">
    <label>Divisi </label>
                  <select class="form-control" name="divisi" id="divisi" readonly>
                  <option selected readonly> 
                  <?php 
                    foreach($divisi as $ND) 
                    {
                      if ($ND->id_divisi == $data->divisi)
                      {
                        echo $ND->nama;
                      }
                    }?>
                   </select>                   
    </div>

    <div>
    <a class="btn btn-info" href="<?php echo base_url('pegawai/') ?>">Kembali</a>
  </div>
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>