<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content">
            <div class="box box-solid box-primary">
               <div class="box-header">
               	 <br>
                 <h3 class="box-title"><strong>List Usulan GTK</strong></h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <table id="example2" class="table table-striped table-bordered table-hover">
                   <thead>
                   <tr>
                   	 <th style="width: 5%;text-align: center;">No</th>
                     <th style="width: 85%;text-align: center;">Usulan Bulan &amp; Tahun</th>
                     <th style="width: 10%;text-align: center">Menu</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                     <td style="text-align: center;">1</td>
                     <td>Januari 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/1'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">2</td>
                     <td>Februari 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/2'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">3</td>
                     <td>Maret 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/3'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">4</td>
                     <td>April 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/4'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">5</td>
                     <td>Mei 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/5'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">6</td>
                     <td>Juni 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/6'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">7</td>
                     <td>Juli 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/7'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">8</td>
                     <td>Agustus 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/8'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">9</td>
                     <td>September 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/9'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">10</td>
                     <td>Oktober 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/10'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">11</td>
                     <td>November 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/11'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   <tr>
                     <td style="text-align: center;">12</td>
                     <td>Desember 2017</td>
                     <td style="text-align: center;"><a href="<?php echo site_url('KL/lihat/12'); ?>" class="btn btn-primary">Lihat Detail</a></td>
                   </tr>
                   </tbody>
                 </table>
               </div>
               <!-- /.box-body -->
			</div>
		</section>
             <!-- /.box -->
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<!--<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>-->
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>-->

<!-- AdminLTE for demo purposes -->
<!--<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>-->

<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.js') ?>" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example2').DataTable( {
          "bLengthChange" : false,
          //"aoColumns":[{"sType": 'numeric'}],
          "bFilter" : true,
          "bInfo" : false,
          "pageLength" : 25,
          "columnDefs": { "orderable": false, "target": 0 }
        } );
    } );
</script>

<?php
$this->load->view('template/foot');
?>