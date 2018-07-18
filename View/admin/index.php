
<html lang="en">

<?php $this->load->view('Admin/Layout/Header') ?>
<?php $this->load->view('Admin/Layout/Header_navigation') ?>

<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php echo $this->session->userdata('username') ?>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('Admin/Layout/Footer') ?>

</body>

</html>
