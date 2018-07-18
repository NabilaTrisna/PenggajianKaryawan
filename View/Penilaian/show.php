<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Pegawai/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Show Penilaian Karyawan</title>

<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/css/plugins/morris.css" rel="stylesheet">

<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="page-wrapper">

<div class="container-fluid">

  <legend>Show Penilaian Karyawan</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <?php echo form_hidden('id_penilaian', $data->id_penilaian) ?>

    <table>    
  <thead>
   <td> <input type="text" class="form-control" id="id_penilaian" name="id_penilaian" placeholder="Masukkan ID Penilaian" 
      value="<?php echo $data->id_penilaian ?>" style = "width:150px;" readonly > </td>
   <td> 
                  <select class="form-control" name="pegawai" id="pegawai" readonly>
                  <option selected readonly> 
                  <?php 
                     foreach($nama as $NP) 
                     {
                       if ($NP->NIK == $data->pegawai)
                       {
                         
                         echo $NP->nama;
                       }
                     }?>
                   </select>         
  </td> 
  <td>
        <select class="form-control" name="bulan" id="bulan" readonly>
        <option selected readonly> 
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
      ?>
      </select>
    </td>     
    <td>
          <select class="form-control" name="tahun" id="tahun" style = "width:150px;" readonly>
          <option selected readonly>
          <?php echo $data->tahun ?>
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
      <option selected readonly>
          <?php echo $data->penilaian1 ?>
          </select> 
      </td>
    </tr>
    <tr>
      <td> 2 </td>
      <td> Kualitas dan Fokus Pelanggan </td>
      <td> 
      <select class="form-control" name="penilaian2" id="penilaian2" style = "width:150px;">
      <option selected readonly>
          <?php echo $data->penilaian2?>
          </select> 
      </td>
    </tr>
    <tr>
      <td> 3 </td>
      <td> Kemampuan Berkomunikasi </td>
      <td> 
      <select class="form-control" name="penilaian3" id="penilaian3" style = "width:150px;">
      <option selected readonly>
          <?php echo $data->penilaian3 ?>
          </select> 
      </td>
    </tr>
    <tr>
      <td> 4 </td>
      <td> Komitmen pada Perusahaan </td>
      <td> 
      <select class="form-control" name="penilaian4" id="penilaian4" style = "width:150px;">
      <option selected readonly>
          <?php echo $data->penilaian4 ?>
          </select> 
      </td>
    </tr>
    <tr>
      <td> 5 </td>
      <td> Etika Profesionalisme </td>
      <td> 
      <select class="form-control" name="penilaian5" id="penilaian5" style = "width:150px;">
      <option selected readonly>
          <?php echo $data->penilaian5 ?>
          </select> 
      </td>
    </tr>
    <tr>
      <td> 6 </td>
      <td> Kemampuan Fungsi Teknik </td>
      <td> 
      <select class="form-control" name="penilaian6" id="penilaian6" style = "width:150px;">
      <option selected readonly>
          <?php echo $data->penilaian6 ?>
          </select> 
      </td>
    </tr>
    <tr>
      <td> 7 </td>
      <td> Kinerja dan Produktivitas </td>
      <td> 
      <select class="form-control" name="penilaian7" id="penilaian7" style = "width:150px;">
      <option selected readonly>
          <?php echo $data->penilaian7 ?>
          </select> 
      </td>
    </tr>
    <tr>
      <td></td>
      <td><B>Total Penilaian</td>
      <td><B><?php echo $data->total_penilaian ?></td>
      </tr>
    </thead>
    </table>

    <table>    
    <td>  
    <div>
    <a class="btn btn-info" href="<?php echo base_url('penilaian/') ?>">Kembali</a>
    </td>
    <td>&nbsp</td>
    <td>
    <?php 
    echo form_open('penilaian/hapus/'.$data->id_penilaian)  ?>
            <a class="btn btn-info" href="<?php echo base_url('penilaian/edit/'.$data->id_penilaian) ?>">
              Ubah
            </a>
      </td>
      <td>&nbsp</td>
      <td>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
      </td>
            <?php echo form_close() ?>
    </div>
    </table>
    
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>