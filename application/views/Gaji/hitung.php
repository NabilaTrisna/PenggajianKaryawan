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
<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php base_url()?>../../assets/css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>



<body>

<div id="page-wrapper">

<div class="container-fluid">

<!-- Start Item Show  -->

<br>
<legend> <?php echo $pegawai->nama ?>  </legend>
  <br>

  <?php echo form_open('gaji/hitungGaji'); ?>

<table>
<thead>
<td> NIK Pegawai : <input type="text" class="form-control" id="pegawai" name="pegawai" 
      value="<?php echo $pegawai->NIK ?>" style = "width:100px;" readonly >
      
<td> ID Divisi Pegawai : <input type="text" class="form-control" id="divisi" name="divisi" 
      value="<?php 
     foreach($Divisi as $D) 
     {
         if($pegawai->divisi == $D->id_divisi)
         {
           echo $D->id_divisi;
         }
     }?> " style = "width:100px;" readonly >      
</table>

<br>
<br>

<table>    
  <thead>
  <td> <input type="text" class="form-control" id="bulan" name="bulan" placeholder="ID Gaji" style = "width:130px;" > </td>
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
    </div>
  </table> 
  <br>
  <br>
  
  
  <table class="table table-striped">
  <thead>
  <th> 1. Gaji Pokok </th>
  <th> </th>
  </thead>
  <tr> </tr>
  <tr>
  </tr>
  <tr>
  <td><B> A. Hari Masuk Kerja </B></td>
  <td> </td>
  </tr>

  <tr> 
    <td> Jumlah Hari Kerja </td>
    <td> <input type="text" class="form-control" id="jumlahHariKerja" name="jumlahHariKerja" 
      value="<?php echo $jamkerja->hari_kerja ?>" style = "width:150px;" >
    </td>
  </tr>
  <tr> 
    <td> Gaji Pokok Per Jam </td>
    <td> <input type="text" class="form-control" id="gapokDivisi" name="gapokDivisi" 
      value="<?php 
      foreach($Divisi as $D) 
      {
          if($pegawai->divisi == $D->id_divisi)
          {
            echo $D->gapok;
          }
      }?>" style = "width:150px;" >
    </td>
  </tr>

  <tr>
  <td><B> B. Setengah Hari Kerja </B></td>
  <td> </td>
  </tr>    
  <tr> 
    <td> Jumlah Setengah Hari </td>
    <td> <input type="text" class="form-control" id="jumlahSetengahHari" name="jumlahSetengahHari" 
      value="<?php echo $jamkerja->setengah_hari ?>" style = "width:150px;" >
    </td>
  </tr>
  <tr> 
    <td> Gaji Pokok Per Jam </td>
    <td> <input type="text" class="form-control" id="gapokDivisi" name="gapokDivisi" 
      value="<?php 
      foreach($Divisi as $D) 
      {
          if($pegawai->divisi == $D->id_divisi)
          {
            echo $D->gapok;
          }
      }?>" style = "width:150px;" >
    </td>
  </tr>

  <tr>
  <td><B> C. Hari Sakit </B></td>
  <td> </td>
  </tr>    
  <tr> 
    <td> Jumlah Hari Sakit </td>
    <td> <input type="text" class="form-control" id="jumlahSakit" name="jumlahSakit" 
      value="<?php echo $jamkerja->sakit ?>" style = "width:150px;" ></td>
  </tr>
  <tr> 
    <td> Gaji Pokok Per Jam </td>
    <td> <input type="text" class="form-control" id="gapokDivisi" name="gapokDivisi" 
      value="<?php 
      foreach($Divisi as $D) 
      {
          if($pegawai->divisi == $D->id_divisi)
          {
            echo $D->gapok;
          }
      }?>" style = "width:150px;" ></td>
  </tr>
  
  </table>

 <table class="table table-striped">
 <th> 2. Gaji Lembur</th>
  <th> </th>
  <th> </th>
  </thead>
  <tr> </tr>
  <tr>
  </tr>
  <tr>
  <td><B> A. Kerja Lembur </B></td>
  <td> </td>
  <td></td>
  </tr>
  <tr> 
    <td> Jumlah Jam Lembur </td>
    <td> </td>
    <td> <input type="text" class="form-control" id="lembur" name="lembur" 
      value="<?php echo $jamkerja->hari_kerja ?>" style = "width:150px;" >
    </td>
  </tr>
  <tr> 
    <td> Gaji Lembur Per Jam </td>
    <td></td>
    <td> <input type="text" class="form-control" id="gapokDivisi" name="gapokDivisi" 
      value="<?php 
      foreach($Divisi as $D) 
      {
          if($pegawai->divisi == $D->id_divisi)
          {
            echo $D->gapok;
          }
      }?>" style = "width:150px;" >
    </td>
  </tr>
  </table>

  <table class="table table-striped">
  <th> 3. Gaji Tambahan 
  <?php 
  if ($nilai->bulan == 1)
  {
    echo "Januari ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 2)
  {
    echo "Februari ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 3)
  {
    echo "Maret ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 4)
  {
    echo "April ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 5)
  {
    echo "Mei ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 6)
  {
    echo "Juni ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 7)
  {
    echo "Juli ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 8)
  {
    echo "Agustus ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 9)
  {
    echo "September ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 10)
  {
    echo "Oktober ";
    echo $nilai->tahun;
  }
  else if ($nilai->bulan == 11)
  {
    echo "November ";
    echo $nilai->tahun;
  }
  else
  {
    echo "Desember ";
    echo $nilai->tahun;
  }
  
  ?> </th>
  <th> </th>
  <th></th>
  <tr> </tr>
  <tr> </tr>
  <tr>
  <td><B> A. Kerja Lembur </B></td>
  <td></td>
  </tr>
  <tr> 
    <td> Jumlah Nilai Pegawai </td>
    <td> <input type="text" class="form-control" id="nilai" name="nilai" 
      value="
      <?php 
      if($nilai->total_penilaian)
      {
        echo $nilai->total_penilaian;
      }
      else
      {
        echo "Tidak Ada Data";
      }
      ?>" style = "width:150px;" >
    </td>
    <td></td>
  </tr>
  <tr> 
    <td> Gaji Lembur Per Jam </td>
    <td> <input type="text" class="form-control" id="gaNilai" name="gaNilai" 
      value="<?php 
      if($nilai->total_penilaian >= 50)
      {
        echo "200000";
      }
      else if($nilai->total_penilaian > 30 || $nilai->total_penilaian > 50)
      {
        echo "100000";
      }
      else
      {
        echo "50000";
      }
      ?>" style = "width:150px;" >
    </td>
  </tr>
  
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