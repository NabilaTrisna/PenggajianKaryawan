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
                <a class="navbar-brand" href="<?php echo base_url('Admin') ?>">Penilaian & Penggajian Pegawai <br><br>   </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-group"></i> ADMIN <b class="caret"></b></a>
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
                    <li class="active">
                        <a href="<?php echo base_url('Admin') ?>"><i class="fa fa-h-square"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-archive"></i> Data Master <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                            <a href="<?php echo base_url('divisi'); ?>"><i class="fa fa-building"></i> Data Divisi</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('pegawai'); ?>"><i class="	fa fa-child"> </i> Data Pegawai</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('jamkerja'); ?>"><i class="fa fa-clock-o"></i> Jam Kerja</a>
                    </li>
                    <li>
                    <a href="<?php echo base_url('penilaian'); ?>"><i class="fa fa-star-half-empty"></i> Penilaian Pegawai </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('gaji'); ?>"><i class="fa fa-calculator"></i> Penggajian</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>