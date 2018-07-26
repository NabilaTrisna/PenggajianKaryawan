<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Page_Pegawai/Layout/Header_navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" type="image/png" href="<?php echo base_url('assets/gambar/icon4.png'); ?>">
<title>Halaman Pegawai</title>

<link href="<?php base_url()?>../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/css/sb-admin.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/css/plugins/morris.css" rel="stylesheet">

<link href="<?php base_url()?>../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="page-wrapper">

<div class="container-fluid">

<?php foreach($dataPegawai AS $p)
{ ?>

  <br>
  <legend><font face = "Georgia"> Biodata Pegawai</legend></font>
  <br>


  <table class = "table table-striped" >
  <tr>
        <td><B><font face = "Georgia"> Nama Lengkap  </B> </td>
        <td><font face = "Georgia"> <B> : </B> </td>
        <td><font face = "Georgia"> <?php echo $p->nama ?> </td>
  </tr>
  <tr>
        <td><B><font face = "Georgia"> Tanggal Lahir  </B> </td>
        <td> <B><font face = "Georgia"> : </B> </td>
        <td><font face = "Georgia"> <?php echo $p->tanggal_lahir ?> </td>
  </tr>
  <tr>
        <td><B><font face = "Georgia"> Alamat  </B> </td>
        <td><font face = "Georgia"> <B> : </B> </td>
        <td><font face = "Georgia"> <?php echo $p->alamat ?> </td>
  </tr>
  <tr>
        <td><font face = "Georgia"><B> No Telpn / Handphone  </B> </td>
        <td><font face = "Georgia"> <B> : </B> </td>
        <td><font face = "Georgia"> <?php echo $p->no_hp ?> </td>
  </tr>
  <tr>
        <td><font face = "Georgia"><B> E-Mail  </B> </td>
        <td><font face = "Georgia"> <B> : </B> </td>
        <td><font face = "Georgia"> <?php echo $p->email ?> </td>
  </tr>
  <tr>
        <td><font face = "Georgia"><B> Status  </B> </td>
        <td><font face = "Georgia"> <B> : </B> </td>
        <td><font face = "Georgia"> <?php echo $p->previlege ?> </td>
  </tr>
  <tr>
        <td><font face = "Georgia"><B> Divisi  </B> </td>
        <td><font face = "Georgia"> <B> : </B> </td>
        <td> 
            <?php 
            foreach($dataDivisi as $divisi)
            {
                if($p->divisi == $divisi->id_divisi)
                {?>
                  <font face = "Georgia"> <?php echo $divisi->nama;
                }
            }    
            ?> </td>
  </tr><tr>
        <td><B><font face = "Georgia"> Gaji   </B> </td>
        <td> <font face = "Georgia"><B> : </B> </td>
        <td> 
            <?php 
            foreach($dataDivisi as $divisi)
            {
                if($p->divisi == $divisi->id_divisi)
                {
                    echo $divisi->gapok  ; echo "     /Jam";
                }
            }    
            ?> </td>
  </tr>
  <table>
  

<?php } ?>


</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>