<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Instansi</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/Instansi') ?>"><i class="fa fa-circle-o"></i> Pengisian Data GTK</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Kementrian / Lembaga</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/KL'); ?>"><i class="fa fa-circle-o"></i> Pengisian Data GTK</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Pembuatan Surat Usulan</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Administrasi</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/Administrasi') ?>"><i class="fa fa-circle-o"></i> Unduh File Piagam</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Verifikasi</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/Verifikasi/data')?>"><i class="fa fa-circle-o"></i> Pengisian Data GTK</a></li>
                    <li><a href="<?php echo base_url('index.php/Verifikasi/konfirmasi')?>"><i class="fa fa-circle-o"></i> Verifikasi Penerimaan GTK</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Penganugrahan</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Histori Penerimaan GTK</a></li>
                    <li><a href="<?php echo base_url('index.php/Penganugerahan/cetak'); ?>"><i class="fa fa-circle-o"></i> Cetak Dokumen</a></li>
                </ul>
            </li>
			</ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">