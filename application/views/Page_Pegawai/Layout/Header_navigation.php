<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('Page_Pegawai') ?>">Penilaian Pegawai <br>   </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Pegawai <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                        <a href="<?php echo base_url('login/logout'); ?>"i class="fa fa-fw fa-power-off">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url('Page_Pegawai'); ?>"><i class="fa fa-h-square"></i> Home </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Page_Pegawai/biodata'); ?>"><i class="fa fa-users"></i> Biodata </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-line-chart"></i> Laporan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                            <a href="<?php echo base_url('Page_Pegawai/jamKerja'); ?>"><i class="fa fa-clock-o"></i> Jam Kerja </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('Page_pegawai/penilaian'); ?>"><i class="fa fa-star-half-empty"></i> Penilaian Kinerja </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('Page_pegawai/gaji'); ?>"><i class="fa fa-calculator"></i> Gaji </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                    <a href="<?php echo base_url('Laporan_pdf/gaji'); ?>"><i class="fa fa-file-pdf-o"></i> Download Laporan </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>