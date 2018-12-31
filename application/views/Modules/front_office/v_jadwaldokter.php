<?php $this->load->view('./modules/layouts/layout-header'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Jadwal Dokter</h2>
            <small class="text-muted">Data Jadwal Dokter</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
					<!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Tambah Jadwal Dokter</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">List Dokter Praktek Hari Ini</a></li>
                    </ul>    
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Refresh</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
	                    <!-- Tab panes -->
	                    <div class="tab-content">
	                        <div role="tabpanel" class="tab-pane in active" id="home" > 
	                        	<div class="row clearfix">
	                        		<div class="col-sm-2">
								        <button type="button" class="btn btn-raised g-bg-cyan btn-block btn-lg waves-effect" data-toggle="modal" data-target="#caridokterModal">Cari Nama Dokter</button>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" class="form-control" placeholder="Nama Dokter" id="nama_dokter_view" value="" readonly>
								                
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group drop-custum">
								            <select class="form-control show-tick" id="layanan">
								                <?php if ($layanans): ?>
								                	<option value="">-- Layanan --</option>
													<?php $i=1; ?>
													<?php foreach ($layanans as $layanan): ?>
														<option value="<?=$layanan->layanan_id?>"><?=$layanan->layanan_nama?></option>
													<?php endforeach ?>
												<?php else : ?>
								                	<option value="">-- Layanan Belum ditambahkan--</option>
												<?php endif ?>
								            </select>
								        </div>
								    </div>
								</div>
								<!-- div id view data jadwal berfungsi untuk response ajax tampilkan jadwal praktek dokter setelah memilih dokter dan memilih layanan, skrip layout ada di v_jadwaldokter_tables.php  -->	
                        		<div id="view-data-jadwal">
                        			
                        		</div>
								<div class="row clearfix">
								    <div class="col-sm-12">
								        <button type="button" class="btn btn-raised g-bg-cyan right" id="jadwalBtnTambah">Tambah Jadwal</button>
								    </div>
								</div>	

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
	                    </div>
                    </div>
				</div>
			</div>
		</div>

    </div>

	<!-- caridokterModal -->
	<div class="modal fade" id="caridokterModal" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Nama Dokter</h4>
	            </div>
	            <div class="modal-body"> 
	            	<table class="table table-hover">
                		<tr>
                			<th style="width:5%; text-align:center;">No</th>
                			<th>Kode Dokter</th>
                			<th>Nama Dokter</th>
                			<th>Spesialist</th>
                			<th style="width:5%; text-align:center;">Action</th>
                		</tr>
                		<?php if ($dokters): ?>
							<?php $i=1; ?>
							<?php foreach ($dokters as $dokter): ?>
		                		<tr>
		                			<td style="width:5%; text-align:center;"><?=$i++?></td>
									<td><?=$dokter->dr_kode?></td>
									<td><?=$dokter->dr_nama?> - <?=$dokter->dr_nama_lengkap?></td>
									<td><?=$dokter->dr_gelar?></td>
		                			<td style="text-align:center;"><a href="javascript:void(0);" class="edit select_doctor" id="<?=$dokter->dr_kode?>"><i class="zmdi zmdi-check"></i></a></td>
		                		</tr>
		                	<?php endforeach ?>
						<?php else : ?>
							<tr>
								<td colspan="5"> tidak ada data dokter </td>
							</tr>
						<?php endif ?>
                    </table>
                </div>
	            <div class="modal-footer">
	                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- tambah jadwal rModal -->
	<div class="modal fade" id="tambahjadwalModal" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Tambah Jadwal Dokter</h4>
	            </div>
	            <div class="modal-body"> 
        			<div class="row clearfix">
                		<div class="col-sm-3">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Kode Dokter" id="md_dr_kode" value="" readonly="">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-6">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Nama Lengkap" id="md_dr_nama_lengkap" value="" readonly="">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-3">
					        <div class="form-group drop-custum">
					            <select class="form-control show-tick" id="hari">
					                <option value="">-- Hari --</option>
					                <option value="Sunday">Minggu</option>
					                <option value="Monday">Senin</option>
					                <option value="Tuesday">Selasa</option>
					                <option value="Wednesday">Rabu</option>
					                <option value="Thursday">Kamis</option>
					                <option value="Friday">Jumat</option>
					                <option value="Saturday" class="col-pink">Sabtu</option>
					            </select>
					        </div>
					    </div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-3">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="datepicker form-control" placeholder="Jam Mulai Praktek" id="time_open">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-3">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="datepicker form-control" placeholder="Jam Selesai Praktek" id="time_close">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-3">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Max Pasien" id="max_px">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-3">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Waktu Per Pasien" id="time_px">
					            </div>
					        </div>
					    </div>
					</div>
                </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-link waves-effect" id="jadwalBtnSimpan">Simpan Jadwal</button>
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Kembali</button>
	            </div>
	        </div>
	    </div>
	</div>
</section>

<?php $this->load->view('./modules/layouts/layout-footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){

		// inisialisasi global variable
		var dr_id_a = '', dr_kode_a = '', dr_nama_lengkap_a = '';

		$('.select_doctor').click(function(){
			var dokter_kode = $(this).attr('id');

			$.ajax({
		        url: '<?=base_url()?>frontoffice/dokter_list_tunggal',
		        type: 'POST',
		        dataType: 'text',
		        data: 'dr_kode='+dokter_kode
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);

		    	$('#nama_dokter_view').val(obj.dr_nama_lengkap);

		    	// store data dokter ke variabel global
		    	dr_id_a = obj.dr_id;
		    	dr_kode_a = obj.dr_kode;
		    	dr_nama_lengkap_a = obj.dr_nama_lengkap;

		    	$('#caridokterModal').modal('hide');

		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		});

		$('#layanan').change(function(){
			var dr_id = dr_id_a, layanan_id = $('#layanan').val();

			if (dr_id != '') {

				loadJadwalDokter(dr_id, layanan_id);
			}
		});

		// event ketika button tambah di click, tampilkan modal tambah jadwal
		$('#jadwalBtnTambah').click(function(){

			var dr_kode = dr_kode_a, dr_nama_lengkap = dr_nama_lengkap_a;

			$('#md_dr_kode').val(dr_kode);
			$('#md_dr_nama_lengkap').val(dr_nama_lengkap);

		    $('#tambahjadwalModal').modal('show');

		});

		// event ketika button simpan jadwal pada modal tambah jadwal di klik maka akan menyimpan data yang sudah di inputkan oleh user.
		$('#jadwalBtnSimpan').click(function(){

			var dr_id = dr_id_a, layanan_id = $('#layanan').val(), jadwal_hari = $('#hari').val(), jadwal_time_open = $('#time_open').val(), jadwal_time_close = $('#time_close').val(), jadwal_max_px = $('#max_px').val(), jadwal_time_px = $('#time_px').val();

			var serializeData = 'dr_id='+dr_id+'&layanan_id='+layanan_id+'&jadwal_hari='+jadwal_hari+'&jadwal_jam_open='+jadwal_time_open+'&jadwal_jam_close='+jadwal_time_close+'&jadwal_max_px='+jadwal_max_px+'&jadwal_waktu_per_px='+jadwal_time_px;

			$.ajax({

				url: '<?=base_url()?>frontoffice/jadwal_add',
		        type: 'POST',
		        dataType: 'text',
		        data: serializeData

			}).done(function(data) {

		    	var obj = JSON.parse(data);

		    	console.log(obj);

				$.notify({
					title: "<strong>Info :</strong> ",
					message: obj.message
				},{ type: 'info'});


		   		$('#tambahjadwalModal').modal('hide');

		   		loadJadwalDokter(dr_id, layanan_id);
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		});

		// $('.jadwalBtnUpdate').click(function(){

		// 	jadwal_id = $(this).attr('id');
		// 	console.log(jadwal_id);
			
		//     $('#updateJadwalModal').modal('show');
		// });
		
		// fungsi untuk get data jadwal dokter berdasarkan parameter dr_id dan layanan_id
		function loadJadwalDokter(dr_id, layanan_id)
		{
			$.ajax({

				url: '<?=base_url()?>frontoffice/jadwal_list',
		        type: 'POST',
		        dataType: 'text',
		        data: 'layanan_id='+layanan_id+'&dr_id='+dr_id

			}).done(function(data) {

		    	$('#view-data-jadwal').html(data);

		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		}
	})
</script>