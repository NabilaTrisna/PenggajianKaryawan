
<html lang="en">

<?php $this->load->view('Admin/Layout/Header') ?>
<?php $this->load->view('Admin/Layout/Header_navigation') ?>

<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

            <h3> <font face="Handvetica Neue"> <b> Hai Administrator, Silahkan Pilih Menu yang Tersedia untuk Mengelola Konten ini" </B></font> </h3>
               
        <br>
        <br>
        

        <div class="container-fluid">

           <table > <font face = "Georgia" size = "4">
               <th></th>
               <tr> 
                Berikut ini adalah manual book penggunaan sistem : </font> <br>
               </tr>
               <br>
               <tr>
               <font face = "Georgia" size = "3">
               1. Admin menginputkan data Master terlebih dahulu, meliputi :
               </tr>
               <tr>
               <br>
               &nbsp&nbsp&nbsp a. Data Divisi
               <br>
               &nbsp&nbsp&nbsp b. Data Pegawai
               </tr>
               <br><br>
               <tr>
               2. Admin menginputkan penilaian pegawai setiap bulannya pada masing-masing pegawai
               </tr>
               <tr>
               <br>
               <br>
               3. Admin menginputkan jam kerja pegawai setiap bulannya pada masing-masing pegawai. <br>
               &nbsp&nbsp&nbsp Dimana jumlah jam kerja setiap harinya adalah 8 jam dan 20 hari masa kerja setiap bulannya.
               </tr>
               <tr>
               <br>
               <br>
               4. Admin menginputkan penggajian pegawai setiap bulannya pada masing-masing pegawai. <br> 
               &nbsp&nbsp&nbsp Dimana penggajian meliputi : <br>
               &nbsp&nbsp&nbsp a. Gaji Pokok yang terdiri dari jam kerja pegawai setiap bulannya <br>
               &nbsp&nbsp&nbsp b. Gaji Lembur yang merupakan total jam lembur setiap bulannya <br>
               &nbsp&nbsp&nbsp c. Gaji Tambahan yang diambil dari penilaian pegawai pada bulan tersebut <br>
               &nbsp&nbsp&nbsp d. Setiap Total Gaji pegawai akan dikurangi asuransi kesehatan yang bernilai <i>RP. 80.000 <br>
               </tr>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('Admin/Layout/Footer') ?>

</body>

</html>
