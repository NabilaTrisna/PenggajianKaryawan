<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Pegawai/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Edit Jam Kerja</title>

<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/plugins/morris.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="page-wrapper">

<div class="container-fluid">

  <legend>Edit Jam Kerja Karyawan</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">

  <?php echo form_open_multipart('jamkerja/update/'.$data->id_jam); ?>  
    <?php echo form_hidden('id_jam', $data->id_jam) ?>


    <table>    
  <thead>
   <td> <input type="text" class="form-control" id="id_jam" name="id_jam" placeholder="Masukkan ID Penilaian" 
      value="<?php echo $data->id_jam ?>" style = "width:150px;" readonly> </td>
   <td> 
                  <select class="form-control" name="pegawai" id="pegawai" >
                  <option selected > 
                  <?php 
                     foreach($nama as $NP) 
                     {
                       if ($NP->NIK == $data->pegawai)
                       {
                         
                         echo $NP->nama;
                       }
                     }?>
                    </option> 
                  <?php foreach($nama as $d){ ?>
                  <option value="<?php echo $d->NIK; ?>"><?php echo $d->nama; ?> </option>
                  <?php } ?>
                   </select>         
  </td> 
  <td>
        <select class="form-control" name="bulan" id="bulan" >
        <option selected > 
        <?php if ($data->bulan == 1)
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
        }
      ?> </option>
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
          <select class="form-control" name="tahun" id="tahun" style = "width:150px;" >
          <option selected >
          <?php echo $data->tahun ?> </option>
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
      <td> <input type="text" class="form-control" id="hari_kerja" name="hari_kerja" placeholder="Hari/Bulan" style = "width:70px;"
            value = "<?php echo $data->hari_kerja?>"> </td>
    </tr>
    <tr>
      <td> 2 </td>
      <td> Jumlah Hari Tidak Masuk Kerja  </td>
      <td> <input type="text" class="form-control" id="tidak_masuk" name="tidak_masuk" placeholder="Hari/Bulan" style = "width:70px;" 
            value = "<?php echo $data->tidak_masuk?>" >
      </td>
    </tr>
    <tr>
      <td> 3 </td>
      <td> Jumlah Jam Lembur </td>
      <td> <input type="text" class="form-control" id="jam_lembur" name="jam_lembur" placeholder="Jam/Bulan" style = "width:70px;" 
            value = "<?php echo $data->jam_lembur?>" >
      </td>
    </tr>
    <tr>
      <td> 4 </td>
      <td> Jumlah Hari yang Masuk Setengah Hari </td>
      <td> <input type="text" class="form-control" id="setengah_hari" name="setengah_hari" placeholder="Hari/Bulan" style = "width:70px;" 
            value = "<?php echo $data->setengah_hari?>" >
      </td>
    </tr>
    <tr>
    <tr>
      <td> 5 </td>
      <td> Jumlah Jam Hari yang Masuk Kerja </td>
      <td> <input type="text" class="form-control" id="jumlah_jam" name="jumlah_jam" placeholder="Jam/Bulan" style = "width:70px;" 
            value = "<?php echo $data->jumlah_jam?>" >
      </td>
    </tr>
      <td> 6 </td>
      <td> Jumlah Jam Hari yang Masuk Setengah Hari </td>
      <td> <input type="text" class="form-control" id="jumlah_setengah" name="jumlah_setengah" placeholder="Jam/Bulan" style = "width:70px;" 
            value = "<?php echo $data->jumlah_setengah?>">
      </td>
    </tr>
    </thead>
    </table>
    <button type="submit" class="btn btn-primary">OK</button>
    <a class="btn btn-info" href="<?php echo base_url('jamkerja/') ?>">Kembali</a>
    <?php 
    form_close();
    ?>

    
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>