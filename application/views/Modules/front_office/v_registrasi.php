<?php $this->load->view('./modules/layouts/layout-header'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Registrasi</h2>
            <small class="text-muted">Pendaftaran Poliklinik</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
					<!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Registrasi</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">List Antrian Pasien</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">List Booking Pasien</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">SETTINGS</a></li> -->
                    </ul>    
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Refresh</a></li>
									<!-- <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li> -->
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
					                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="home" > 
                        	<!-- <form action="" method="POST"> -->
	                        	<div class="row clearfix">
	                        		<div class="col-sm-2">
								            <button type="button" class="btn btn-raised g-bg-cyan btn-block btn-lg waves-effect" data-toggle="modal" data-target="#">Cari Pasien</button>
								    </div>
								    <div class="col-sm-2">
								            <button type="button" class="btn btn-raised g-bg-cyan btn-block btn-lg waves-effect" data-toggle="modal" data-target="#">Kode Booking</button>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="kode_booking" class="form-control" placeholder="Kode Booking" id="kode_booking" disabled="">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="no_register" class="form-control" placeholder="No Register" id="no_register">
								            </div>
								        </div>
								    </div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-2">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="rekam_medis" class="form-control" placeholder="No Rekam Medis" id="rekam_medis">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="nama_pasien" class="form-control" placeholder="Nama Pasien" id="nama_pasien">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="jenis_kunjungan" class="form-control" placeholder="Jenis Kunjungan" id="jenis_kunjungan">
								            </div>
								        </div>
								    </div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-3">
								        <div class="form-group" data-toggle="modal" data-target="#daftarlayanan">
								            <div class="form-line">
								                <input type="text" name="layanan" class="form-control" placeholder="Layanan" id="layanan">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group" data-toggle="modal" data-target="#daftardokter">
								            <div class="form-line">
								                <input type="text" name="dr_spesialist" class="form-control" placeholder="Dokter Spesialist" id="dr_spesialist">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-3">
								        <div class="form-group" data-toggle="modal" data-target="#daftarjaminan">
								            <div class="form-line">
								                <input type="text" name="jaminan" class="form-control" placeholder="Jaminan" id="jaminan">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-2">
								        <div class="form-group" data-toggle="modal" data-target="#daftaradmin">
								            <div class="form-line">
								                <input type="text" name="admin" class="form-control" placeholder="Administrasi" id="admin">
								            </div>
								        </div>
								    </div>
								    
								    <div class="col-sm-12">
								        <button id="submit" class="btn btn-raised g-bg-cyan btn-lg">Simpan</button>
								        <button id="datasosial" class="btn btn-raised bg-grey waves-effect btn-lg" data-toggle="modal" data-target="#datasosialform">Data Sosial Pasien</button>
								    </div>
								</div>
                        	<!-- </form>		 -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile"> 
                        	<table class="table table-hover">
                        		<tr>
                        			<th style="width:5%; text-align:center;">No</th>
                        			<th>Kode Dokter</th>
                        			<th>Nama Dokter</th>
                        			<th>Spesialist</th>
                        			<th style="width:5%; text-align:center;">Action</th>
                        		</tr>
                        		<tr>
                        			<td style="width:5%; text-align:center;">1</td>
                        			<td>DP0001</td>
                        			<td>Pande Wira Andika</td>
                        			<td>Komputer</td>
                        			<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-edit"></i></a></td>
                        		</tr>
                        	</table>
                        	<ul class="pagination center">
		                            <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Sebelumnya</a></li>
		                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
		                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
		                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
		                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Berikutnya</a></li>
		                    </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages"> <b>Message Content</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings"> <b>Settings Content</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                        </div>
                    </div>

                    </div>
				</div>
			</div>
		</div>
    </div>

    <!-- daftarLayanan -->
	<div class="modal fade" id="daftarlayanan" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-md">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Daftar Layanan</h4>
	            </div>
	            <div class="modal-body"> 
	            	<table class="table table-hover">
                		<tr>
                			<th style="width:5%; text-align:center;">No</th>
                			<th>Kode Layanan</th>
                			<th>Nama Layanan</th>
                			<th style="width:5%; text-align:center;">Action</th>
                		</tr>
                		<tr>
                			<td style="width:5%; text-align:center;">1</td>
                			<td>LY0001</td>
                			<td>Poli Umum</td>
                			<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-check"></i></a></td>
                		</tr>
                    </table>
                </div>
	            <div class="modal-footer">
	                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- daftarLayanan -->

	<!-- daftarDokter -->
	<div class="modal fade" id="daftardokter" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Daftar Dokter</h4>
	            </div>
	            <div class="modal-body"> 
	            	<table class="table table-hover">
                		<tr>
                			<th style="width:5%; text-align:center;">No</th>
                			<th style="width:15%;"">Kode Dokter</th>
                			<th>Nama Dokter</th>
                			<th style="width:5%; text-align:center;">Action</th>
                		</tr>
                		<tr>
                			<td style="width:5%; text-align:center;">1</td>
                			<td>DP0001</td>
                			<td>dr. Pande</td>
                			<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-check"></i></a></td>
                		</tr>
                    </table>
                </div>
	            <div class="modal-footer">
	                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- daftarDokter -->

	<!-- daftarJaminan -->
	<div class="modal fade" id="daftarjaminan" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-md">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Daftar Jaminan</h4>
	            </div>
	            <div class="modal-body"> 
	            	<table class="table table-hover">
                		<tr>
                			<th style="width:5%; text-align:center;">No</th>
                			<th>Kode Jaminan</th>
                			<th>Nama Jaminan</th>
                			<th style="width:5%; text-align:center;">Action</th>
                		</tr>
                		<tr>
                			<td style="width:5%; text-align:center;">1</td>
                			<td>JM0001</td>
                			<td>Prudential</td>
                			<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-check"></i></a></td>
                		</tr>
                    </table>
                </div>
	            <div class="modal-footer">
	                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- daftarJaminan -->

	<!-- daftarAdmin -->
	<div class="modal fade" id="daftaradmin" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-md">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Daftar Administrasi</h4>
	            </div>
	            <div class="modal-body"> 
	            	<table class="table table-hover">
                		<tr>
                			<th style="width:5%; text-align:center;">No</th>
                			<th>Kode Administrasi</th>
                			<th>Nama Administrasi</th>
                			<th style="width:5%; text-align:center;">Action</th>
                		</tr>
                		<tr>
                			<td style="width:5%; text-align:center;">1</td>
                			<td>AD0001</td>
                			<td>Umum</td>
                			<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-check"></i></a></td>
                		</tr>
                    </table>
                </div>
	            <div class="modal-footer">
	                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- daftarAdmin -->

	<!-- dataSosial -->
	<div class="modal fade" id="datasosialform" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Data Sosial Pasien</h4>
	            </div>
	            <div class="modal-body"> 
	            	<ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#data">Data Sosial</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kerabat">Data Kerabat</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#alergi">Data Alergi</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">SETTINGS</a></li> -->
                    </ul> 
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="data">
                        	<div class="row clearfix">
			            		<div class="col-sm-3">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" name="dr_tgl_lhr" class="datepicker form-control" placeholder="Tanggal Lahir" id="date" id="dr_tgl_lhr">
							            </div>
							        </div>
							    </div>
								    <!-- <div class="col-sm-3">
								        <div class="form-group drop-custum">
								            <select class="form-control show-tick">
								                <option value="">-- Jenis Kelamin --</option>
								                <option value="10">Male</option>
								                <option value="20">Female</option>
								            </select>
								        </div>
								    </div> 
								    <div class="col-sm-3">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="dr_spesialist" class="form-control" placeholder="Spesialist" id="dr_spesialist">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-3">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="dr_tlp" class="form-control" placeholder="No Telepon" id="dr_tlp">
								            </div>
								        </div>
								    </div>-->
								   <!--  <div class="col-sm-6">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="dr_alamat" class="form-control" placeholder="Alamat" id="dr_alamat">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="dr_email" class="form-control" placeholder="Email" id="dr_email">
								            </div>
								        </div>
								    </div> -->
	            			</div> 
                        </div>

                        <div role="tabpanel" class="tab-pane in active" id="kerabat">
                        	
                        </div>

                        <div role="tabpanel" class="tab-pane in active" id="alergi">
                        	
                        </div>
                    </div>
	            	
                </div>
	            <div class="modal-footer">
	                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- dataSosial -->

</section>

<?php $this->load->view('./modules/layouts/layout-footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){

		$('#submit').click(function(){

			// alert('a');
			var dr_kode = $('#dr_kode').val();
			var dr_nama = $('#dr_nama').val();
			var dr_nama_lengkap = $('#dr_nama_lengkap').val();
			var dr_spesialist = $('#dr_spesialist').val();
			var dr_tlp = $('#dr_tlp').val();
			var dr_alamat = $('#dr_alamat').val();
			var dr_email = $('#dr_email').val();
			var validasi_kodeDr = false;
			
			var validasi_kodeDr = function validasi_kodeDr(dr_kode)
			{
				$.ajax({
					 url: '<?=base_url()?>frontoffice/dokter_validasi_kode',
			        type: 'POST',
			        dataType: 'text',
			        data: 'dr_kode='+dr_kode
				})
				.done(function(data) {
					var obj = JSON.parse(data);
			    	console.log(obj);

					if (obj.status == false) {
						return false;
					}else{
						return true;
					}
			    })
			    .fail(function (jqXHR, textStatus, error) {
			        console.log("Post error: " + error);
			    });
			}
			
			if (dr_kode != '') {


				if (validasi_kodeDr == false) {
					alert('kode dokter sudah digunakan, gunakan yang lain');
				}else{
					var dataSerialize = 'dr_kode='+dr_kode+'&dr_nama='+dr_nama+'&dr_nama_lengkap='+dr_nama_lengkap+'&dr_gelar='+dr_spesialist+'&dr_tlp='+dr_tlp+'&dr_alamat='+dr_alamat+'&dr_email='+dr_email;

					$.ajax({
				        url: '<?=base_url()?>frontoffice/dokter_add',
				        type: 'POST',
				        dataType: 'text',
				        data: dataSerialize
				    })
				    .done(function(data) {

			        	$('#dr_kode').val('');
						$('#dr_nama').val('');
						$('#dr_nama_lengkap').val('');
						$('#dr_spesialist').val('');
						$('#dr_tlp').val('');
						$('#dr_alamat').val('');
						$('#dr_email').val('');

				    	var obj = JSON.parse(data);

				    	console.log(obj);

				        if (obj.status == 'ok') {
				        	alert(obj.message);
				        }else{
				        	alert(obj.message);
				        }
				    })
				    .fail(function (jqXHR, textStatus, error) {
				          console.log("Post error: " + error);
				    });
				}
			}else{
				alert('nedd to fill dr kode');
			}
		});

		
	});
</script>