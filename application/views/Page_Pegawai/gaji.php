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
  <legend><font face = "Georgia"> Laporan Gaji Pegawai</legend>
  <table class="table table-striped">

  
<thead>      
  <th>No</th>
  <th>Bulan</th>
  <th>Tahun</th>
  <th>Gaji Pokok  </th>
  <th>Gaji Lembur  </th>
  <th>Gaji Tambahan  </th>
  <th>Gaji Kotor  </th>
  <th>Total Gaji  </th>
  <th>
    
    </a>
  </th>
</thead>
<tbody>
<form action="<?php echo base_url('Page_Pegawai/laporanGaji')?>" action="GET">
    <?php if(count($dataGaji) > 0 ) {
    $number = 1; foreach($dataGaji as $row) { ?>
    <tr>
      <td>
          <?php echo $number++ ?>
        </a>
      </td>
      <td>
        <?php         
          if ($row->bulan == 1)
          {
            echo "Januari";
          }
        else if ($row->bulan == 2)
        {
            echo "Februari";
        }
        else if ($row->bulan == 3)
        {
            echo "Maret";       
        }
        else if ($row->bulan == 4)
        {
            echo "April";
         }
        else if ($row->bulan == 5)
        {
            echo "Mei";
         }
        else if ($row->bulan == 6)
        {
            echo "Juni";
         }
        else if ($row->bulan == 7)
        {
            echo "Juli";
        } 
        else if ($row->bulan == 8)
        {
            echo "Agustus";
        }
        else if ($row->bulan == 9)
        { 
            echo "September";
        }
        else if ($row->bulan == 10)
        {
            echo "Oktober";
        }
        else if ($row->bulan == 11)
        {
              echo "November";
        }
        else
        {
            echo "Desember";
        } ?>
    </td>
    <td>
          <?php echo $row->tahun ?>
          </select>                  
    </td>
    <td>
        <?php
          echo "Rp" .number_format($row->total_gapok,2,',','.');
        ?>
      </td>   
      <td>
        <?php
          echo "Rp" .number_format($row->total_gajilembur,2,',','.');
        ?>
      </td> 
      <td>
        <?php
          echo "Rp" .number_format($row->total_tambahan,2,',','.');
        ?>
      </td>  
      <td>
        <?php
          echo "Rp" .number_format($row->total_gajikotor,2,',','.');
        ?>
      </td> 
      <td>
        <B>
        <?php
          echo "Rp" .number_format($row->total_gajibersih,2,',','.');
        ?>
        </B>
      </td>
     
    </tr>
    <?php }
    } else { echo "Data Tidak Ada";} ?>
  </tbody>
</table>
<?php //echo $links ?>
<?php 
//else { ?>
<div> </div>
<?php //} ?>

</body>
  

  
  <?php echo form_close(); ?>
    
</div>
</div>
</body>

<?php $this->load->view('layouts/base_end') ?>