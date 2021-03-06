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

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<section class="content">
            <div class="box box-solid box-primary">
               <div class="box-header">
                 <h3 class="box-title"><strong>Update No &amp; Tanggal GTK</strong></h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
               <form>
               	 <div class="row">
               	 	<div class="col-xs-6"><strong><h1></strong><pre class="text-info btn btn-primary form-control">Keputusan Presiden</pre></h1></strong>
                  <div class="form-group">
                    <label for="example-text-input" class="col-1 col-form-label">NO KEPPRES</label>
                    <div class="col-4">
                      <input class="form-control" type="text" id="example-text-input">
                    </div>
                    <br>
                    <label for="example-text-input" class="col-1 col-form-label">TGL KEPPRES</label>
                    <div class="col-4">
                      <input class="form-control" type="date" id="example-text-input">
                    </div>
                  </div>
               	 	</div>
               	 	<div class="col-xs-6"><strong><h1></strong><pre class="text-info btn btn-primary form-control">Surat Menteri</pre></h1></strong>
                  <label for="example-text-input" class="col-1 col-form-label">NO SURAT MENTERI</label>
                  <div class="col-4">
                    <input class="form-control" type="text" id="example-text-input">
                  </div>
                  <br>
                  <label for="example-text-input" class="col-1 col-form-label">TGL SURAT MENTERI</label>
                  <div class="col-4">
                    <input class="form-control" type="date" id="example-text-input">
                  </div></div>
               	 </div>
               	 <div class="row">
               	 	<div class="col-xs-6"><strong><h1></strong><pre class="text-info btn btn-primary form-control">Memo SESMILPRES</pre></h1></strong>
                  <label for="example-text-input" class="col-1 col-form-label">NO MEMO SESMILPRES</label>
                    <div class="col-4">
                      <input class="form-control" type="text" id="example-text-input">
                    </div>
                    <br>
                    <label for="example-text-input" class="col-1 col-form-label">TGL MEMO SESMILPRES</label>
                    <div class="col-4">
                      <input class="form-control" type="date" id="example-text-input">
                    </div></div>
               	 	<div class="col-xs-6"><strong><h1></strong><pre class="text-info btn btn-primary form-control">MAJU &amp; KEMBALI</pre></h1></strong>
                  <label for="example-text-input" class="col-1 col-form-label">TGL MAJU</label>
                  <div class="col-4">
                    <input class="form-control" type="date" id="example-text-input">
                  </div>
                  <br>
                  <label for="example-text-input" class="col-1 col-form-label">TGL KEMBALI</label>
                  <div class="col-4">
                    <input class="form-control" type="date" id="example-text-input">
                  </div>
                  </div>
               	 </div>
                 <br><br>
                 <button type="submit" class="btn btn-primary">SIMPAN</button>&nbsp;<button type="reset" class="btn btn-danger">BATAL</button>
               </form>
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
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
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
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>