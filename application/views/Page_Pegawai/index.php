
<html lang="en">

<?php $this->load->view('Page_Pegawai/Layout/Header') ?>
<?php $this->load->view('Page_Pegawai/Layout/Header_Navigation') ?>

</nav>

<body>

 <div id="page-wrapper">
<div class="container-fluid">

<h1> <font face="Handvetica Neue"> <b> Hai 
            <?php 
            foreach($dataPegawai as $data)
            {
                echo $data->nama; 
            }
            ?>, <i class="fa fa-smile-o"> 
</i></B></font> </h1>
<br>
<br>

<table > <font face = "Georgia" size = "3">
    <th></th>
    <tr> 
     Pada sistem ini pegawai hanya bisa melihat Laporan yang meliputi : </font> <br>
    </tr>
    <br>
    <tr>
    <font face = "Georgia" size = "3">
    1. Laporan Biodata Pegawai
    </tr>
    <br><br>
    <tr>
    2. Laporan Jam Kerja pada setiap bulannya
    </tr>
    <tr>
    <br>
    <br>
    3. Laporan Penilaian Pegawai setiap bulannya
    </tr>
    <tr>
    <br>
    <br>
    4. Laporan Gaji Pegawai setiap bulannya 
    </tr>
    <tr>
    <br>
    <br>
    5. Mengunduh Laporan Gaji berdasarkan bulan dan tahun yang dipilih, dengan format <i><b> .pfd
    </tr>
    <br>
<br>
<br>
<br>
    </table>

</div>
<!-- /#page-wrapper -->

</div>

    <?php $this->load->view('Page_Pegawai/Layout/Footer') ?>

</body>

</html>
