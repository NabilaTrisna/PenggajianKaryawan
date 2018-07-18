
<html lang="en">

<?php $this->load->view('Page_Pegawai/Layout/Header') ?>
<?php $this->load->view('Page_Pegawai/Layout/Header_Navigation') ?>

</nav>

<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php echo $this->session->userdata('previlege') ?>
                <br> <br>
                <?php echo $this->session->userdata('NIK') ?>
                <br> <br>



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('Page_Pegawai/Layout/Footer') ?>

</body>

</html>
