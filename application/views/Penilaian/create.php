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
<legend><font face ="Georgia"> Tambah Penilaian Pegawai </legend></font>
  <br>

  <?php echo form_open('penilaian/input'); ?>

<table>    
  <thead>
   <td> <input type="text" class="form-control" id="id_penilaian" name="id_penilaian" placeholder="ID Penilaian" style = "width:130px;" > </td>
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
    <th> Kategori </th>
    <th> Skor </th>
    </thead>
    <tr>
      <td> 1 </td>
      <td> Kedispilinan </td>
      <td> 
      <select class="form-control" name="penilaian1" id="penilaian1" style = "width:150px;">
                <option selected> -- Nilai -- </option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2  </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
      </td>
    </tr>
    <tr>
      <td> 2 </td>
      <td> Kualitas dan Fokus Pelanggan </td>
      <td> 
      <select class="form-control" name="penilaian2" id="penilaian2" style = "width:150px;">
                <option selected> -- Nilai -- </option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2  </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
      </td>
    </tr>
    <tr>
      <td> 3 </td>
      <td> Kemampuan Berkomunikasi </td>
      <td> 
      <select class="form-control" name="penilaian3" id="penilaian3" style = "width:150px;">
                <option selected> -- Nilai -- </option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2  </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
      </td>
    </tr>
    <tr>
      <td> 4 </td>
      <td> Komitmen pada Perusahaan </td>
      <td> 
      <select class="form-control" name="penilaian4" id="penilaian4" style = "width:150px;">
                <option selected> -- Nilai -- </option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2  </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
      </td>
    </tr>
    <tr>
      <td> 5 </td>
      <td> Etika Profesionalisme </td>
      <td> 
      <select class="form-control" name="penilaian5" id="penilaian5" style = "width:150px;">
                <option selected> -- Nilai -- </option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2  </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
      </td>
    </tr>
    <tr>
      <td> 6 </td>
      <td> Kemampuan Fungsi Teknik </td>
      <td> 
      <select class="form-control" name="penilaian6" id="penilaian6" style = "width:150px;">
                <option selected> -- Nilai -- </option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2  </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
      </td>
    </tr>
    <tr>
      <td> 7 </td>
      <td> Kinerja dan Produktivitas </td>
      <td> 
      <select class="form-control" name="penilaian7" id="penilaian7" style = "width:150px;">
                <option selected> -- Nilai -- </option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2  </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
      </td>
    </tr>
    </thead>
    </table>

    <a class="btn btn-info" href="<?php echo base_url('penilaian/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>

    <?php 
    form_close();
    ?>

</body>


<?php $this->load->view('layouts/base_end') ?>