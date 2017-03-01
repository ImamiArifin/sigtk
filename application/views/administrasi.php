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
<section class="content-header">
   
</section>

<section class="content">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">UNDUH DATA USULAN GTK</h3>
                </div>
                <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>JUDUL KEPPRES</th>
                  <th>NO KEPPRES</th>
                  <th>TANGGAL KEPPRES</th>
                  <th>UNDUH</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>TK Bintang Kartika Eka Pakcl an Brigjen TNI Blitar
                  </td>
                  <td align="center"> 032/TK/Tahun 2016</td>
                  <td> 20-7-2016 </td>
                  <td align="center"><a class="btn btn-primary" href="#">Unduh</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>TK Bintang Satyalancana
                  </td>
                  <td align="center"> 035/TK/Tahun 2016 </td>
                  <td> 18-9-2016 </td>
                  <td align="center"><a class="btn btn-primary" href="#">Unduh</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Bintang Penegak Demokrasi
                  </td>
                  <td align="center"> 040/TK/Tahun 2016 </td>
                  <td> 3-12-2016 </td>
                  <td align="center"><a class="btn btn-primary" href="#">Unduh</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Bintang Kemanusiaan
                  </td>
                  <td align="center"> 003/TK/Tahun 2017 </td>
                  <td> 5-1-2017 </td>
                  <td align="center"><a class="btn btn-primary" href="#">Unduh</a></td>
                </tr>
                </tbody>
              </table>
                </div><!-- /.box-body -->
            </div>
    </section>
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
        $('#example1').DataTable( {
          "bLengthChange" : false,
          "aoColumns":[{"sType": 'numeric'}, {"sType": 'string'}, {"sType": 'string'}, {"sType": 'string'}, {"sType": 'string'}],
          "bFilter" : true,
          "bInfo" : false,
          "pageLength" : 25,
          "columnDefs": { "orderable": false, "target": 0 }
        } );
    } );
</script>

<script type="text/javascript">
  $(function() {
    // We can attach the `fileselect` event to all file inputs on the page
    $(document).on('change', ':file', function() {
      var input = $(this),
          numFiles = input.get(0).files ? input.get(0).files.length : 1,
          label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
    });
 
    // We can watch for our custom `fileselect` event like this
    $(document).ready( function() {
        $(':file').on('fileselect', function(event, numFiles, label) {
 
            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;
 
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
 
        });
    });
  });
</script>

<?php
$this->load->view('template/foot');
?>