 
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<!-- <script src="<?=base_url()?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>  -->
 <div class="row clearfix">
 	<table class="table table-hover">
		<thead>
			<tr>
		    	<th colspan="7" style="text-align:center;">Jadwal Praktek Dokter</th>
		    </tr>
			<tr>
				<th style="width:5%; text-align:center;">No</th>
				<th>Hari</th>
				<th>Jam Mulai</th>
				<th>Jam Selesai</th>
				<th>Maks Pasien</th>
				<th>Keterangan</th>
				<th style="width:5%; text-align:center;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if ($jadwals): ?>
				<?php $i=1; ?>
				<?php foreach ($jadwals as $jadwal): ?>
					<tr>
						<td style="width:5%; text-align:center;"><?=$i++?></td>
						<td><?php 
							 if($jadwal->jadwal_hari=="Sunday") {$nama_hari="Minggu";}
					        else if($jadwal->jadwal_hari=="Monday") {$nama_hari="Senin";}
					        else if($jadwal->jadwal_hari=="Tuesday") {$nama_hari="Selasa";}
					        else if($jadwal->jadwal_hari=="Wednesday") {$nama_hari="Rabu";}
					        else if($jadwal->jadwal_hari=="Thursday") {$nama_hari="Kamis";}
					        else if($jadwal->jadwal_hari=="Friday") {$nama_hari="Jumat";}
					        else if($jadwal->jadwal_hari=="Saturday") {$nama_hari="Sabtu";}
							
							echo $nama_hari;
							?>
						</td>
						<td><?=date('H:i', strtotime($jadwal->jadwal_jam_open))?></td>
						<td><?=date('H:i', strtotime($jadwal->jadwal_jam_close))?></td>
						<td><?=$jadwal->jadwal_max_px?></td>
						<td><?=$jadwal->jadwal_waktu_per_px?></td>
						<td style="text-align:center;"><button type="button" class="edit jadwalBtnUpdate" id="<?=$jadwal->jadwal_id?>"><i class="zmdi zmdi-edit"></i></button></td>
					</tr>
				<?php endforeach ?>
			<?php else : ?>
				<tr>
					<td colspan="7"> tidak ada data jadwal oleh dokter ini </td>
				</tr>
			<?php endif ?>
		</tbody>
	</table>
</div>

<!-- caridokterModal -->
<div class="modal fade" id="updateJadwalModal" role="dialog" data-backdrop="false">
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
				                <input type="text" class="form-control" placeholder="Kode Dokter" id="md_dr_kode" value="<?=$dokter->dr_kode?>" readonly="">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-6">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" class="form-control" placeholder="Nama Lengkap" id="md_dr_nama_lengkap" value="<?=$dokter->dr_nama_lengkap?>" readonly="">
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
				                <input type="text" class="datepicker form-control" placeholder="Jam Mulai Praktek" id="time_open" value="">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-3">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" class="datepicker form-control" placeholder="Jam Selesai Praktek" id="time_close" value="">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-3">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" class="form-control" placeholder="Max Pasien" id="max_px" value="">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-3">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" class="form-control" placeholder="Waktu Per Pasien" id="time_px" value="">
				            </div>
				        </div>
				    </div>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" id="jadwalBtnHapus">Hapus Jadwal</button>
                <button type="button" class="btn btn-link waves-effect" id="jadwalBtnSimpanUpdate">Update Jadwal</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

	$('#time_open').bootstrapMaterialDatePicker({ date: false, format : 'HH:mm'  });
	$('#time_close').bootstrapMaterialDatePicker({ date: false, format : 'HH:mm' });

	$(document).ready(function(){
		// declare global variable
		var dr_id_a ='', layanan_id_a = '', jadwal_id = '';
		// event ketika button tambah di click, tampilkan modal tambah jadwal
		$('.jadwalBtnUpdate').click(function(){

			jadwal_id = $(this).attr('id');
			
			$.ajax({

				url: '<?=base_url()?>frontoffice/jadwal_AjaxFind',
		        type: 'POST',
		        dataType: 'text',
		        data: 'jadwal_id='+jadwal_id

			}).done(function(data) {

		    	var obj = JSON.parse(data);

		    	$('#hari').val(obj.jadwal_hari);
		    	$('#time_open').val(obj.jadwal_jam_open);
		    	$('#time_close').val(obj.jadwal_jam_close);
		    	$('#max_px').val(obj.jadwal_max_px);
		    	$('#time_px').val(obj.jadwal_waktu_per_px);
		    	
		    	dr_id_a = obj.dr_id;
		    	layanan_id_a = obj.layanan_id;

		    	$('#updateJadwalModal').modal('show');
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });

		});

		$('#jadwalBtnSimpanUpdate').click(function(){
			var dr_id = dr_id_a, layanan_id = $('#layanan').val(), jadwal_hari = $('#hari').val(), jadwal_time_open = $('#time_open').val(), jadwal_time_close = $('#time_close').val(), jadwal_max_px = $('#max_px').val(), jadwal_time_px = $('#time_px').val();

			var serializeData = 'dr_id='+dr_id+'&layanan_id='+layanan_id+'&jadwal_hari='+jadwal_hari+'&jadwal_jam_open='+jadwal_time_open+'&jadwal_jam_close='+jadwal_time_close+'&jadwal_max_px='+jadwal_max_px+'&jadwal_waktu_per_px='+jadwal_time_px+'&jadwal_id='+jadwal_id;

			$.ajax({

				url: '<?=base_url()?>frontoffice/jadwal_update',
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


		   		$('#updateJadwalModal').modal('hide');

		   		loadJadwalDokter(dr_id, layanan_id);
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		});

		$('#jadwalBtnHapus').click(function(){
			var dr_id = dr_id_a, layanan_id = $('#layanan').val();

			$.ajax({

				url: '<?=base_url()?>frontoffice/jadwal_delete',
		        type: 'POST',
		        dataType: 'text',
		        data: 'jadwal_id='+jadwal_id

			}).done(function(data) {

		    	var obj = JSON.parse(data);

		    	console.log(obj);

				$.notify({
					title: "<strong>Info :</strong> ",
					message: obj.message
				},{ type: 'info'});


		   		$('#updateJadwalModal').modal('hide');

		   		loadJadwalDokter(dr_id, layanan_id);
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		});

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
	});
</script>