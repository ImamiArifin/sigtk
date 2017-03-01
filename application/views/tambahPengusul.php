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
                    <h3 class="box-title">DATA USULAN GTK</h3>
                </div>
                <div class="box-body">
                	<div class="row">
                		<div class="col-xs-6">
                			<!-- small box -->
				          <div class="small-box bg-gray">
				            <div class="inner">
				            <div class="row">
				            	<div class="col-xs-10">
				             <form enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/admin/upload'); ?>">
			                   <div class="input-group">
			                      <label class="input-group-btn">
			                        <span class="btn btn-primary">
			                          Browse&hellip; <input type="file" name="tweet" accept=".csv" style="display: none;" required>
			                        </span>
			                      </label>
			                      <input type="text" class="form-control" readonly>
			                    </div>
			                    <span class="help-block">
			                      Just Upload CSV Format FILE
			                    </span>
			 
			                    <button type="submit" class="btn btn-primary">Upload</button>
			                    </form>
		                    </div>
		                    </div>
				            </div>
				            <div class="icon">
				              <i class="ion ion-ios-people"></i>
				            </div>
				            
				          </div>
				        </div>
				        <!-- ./col -->

				        <div class="col-xs-6">
                			<!-- small box -->
				          <div class="small-box bg-gray">
				            <div class="inner">
				            	<button class="btn btn-lg btn-primary"><a style="color:inherit" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i></a></h5></button>
				            	<span class="help-block">
			                      <h3>Tambah Usulan</h3>
			                    </span>
				            </div>
				            <div class="icon">
				              <i class="ion ion-person-add"></i>
				            </div>
				            
				          </div>
				        </div>
</div>
                      <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama / NIP</th>
                  <th>Golongan / Jabatan</th>
                  <th>Usulan GTK</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>ZAINUL ARIFIN, S.A.P., M.Sc.
                  </td>
                  <td>Kolonel Inf</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>I GUSTI KETUT ARTASUYASA
                  </td>
                  <td>Letkol Inf</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>TOMMY ANDERSON, MPICT
                  </td>
                  <td>Letkol Inf</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>ZULMAI HENDRI, A.Mk.Ak
                  </td>
                  <td>Mayor Ckm</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>RAKHMAT SHALEH SIREGAR</td>
                  <td>Mayor Inf</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>RONALD SITORUS</td>
                  <td>Mayor Chb</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>SUHARMAN, S.Pd.</td>
                  <td>Mayor Kav</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>BISMI TAMBUHAN</td>
                  <td>Mayor Arh</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>FERRY ARDIYATMOKO</td>
                  <td>Praka</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>HERI PURWANTO</td>
                  <td>Praka</td>
                  <td>Satyalancana Karya Satya</td>
                  <td><a class="btn btn-primary" href="#">Ubah</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                </tr>
                </tbody>
              </table>
                </div><!-- /.box-body -->
            </div>
    </section>
<?php
$this->load->view('template/js');
?>

<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Tambah Pengusul GTK</h4>
       </div>
       <div class="modal-body">
         	<form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama / NIP</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Golongan / Jabatan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Usulan GTK</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="Satyalancana Karya Satya" placeholder="Password">
                </div> 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
     
   </div>
 </div>
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