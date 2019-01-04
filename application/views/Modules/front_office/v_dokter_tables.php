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
				<td style="text-align:center;"><button type="button" class="edit dokterBtnUpdate" id="<?=$dokter->dr_kode?>"><i class="zmdi zmdi-edit"></i></button></td>
			</tr>
		<?php endforeach ?>
	<?php else : ?>
		<tr>
			<td colspan="5"> tidak ada data dokter </td>
		</tr>
	<?php endif ?>
</table>

<!-- modal untuk add layanan dokter -->
<div class="modal fade" id="dokterModalUpdate" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Data Dokter</h4>
            </div>
            <div class="modal-body"> 	
        		<div class="row clearfix">
            		<div class="col-sm-3">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" name="dr_kode" class="form-control" placeholder="Kode Dokter" id="dr_kode2" value="" readonly="">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-3">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" name="dr_nama" class="form-control" placeholder="Nama Singkat" id="dr_nama2" value="">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-6">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" name="dr_nama_lengkap" class="form-control" placeholder="Nama Panggilan" id="dr_nama_lengkap2">
				            </div>
				        </div>
				    </div>
				</div>
				<div class="row clearfix">
				    <div class="col-sm-3">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" name="dr_spesialist" class="form-control" placeholder="Spesialist" id="dr_spesialist2">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-3">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" name="dr_tlp" class="form-control" placeholder="No Telepon" id="dr_tlp2">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-6">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" name="dr_alamat" class="form-control" placeholder="Alamat" id="dr_alamat2">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-6">
				        <div class="form-group">
				            <div class="form-line">
				                <input type="text" name="dr_email" class="form-control" placeholder="Email" id="dr_email2">
				            </div>
				        </div>
				    </div>
				    <div class="col-sm-12">
				    	<p style="text-align:center">Layanan Dokter</p>
				    	<div class="row">
				    		<div class="col-sm-6">
						    	<div class="form-group drop-custum">
						            <select class="form-control" id="l_id2">
						                <option value="">-- Status Layanan --</option>
						                <?php if ($layanans): ?>
											<?php $i=1; ?>
											<?php foreach ($layanans as $layanan): ?>
												 <option value="<?=$layanan->layanan_id?>"><?=$layanan->layanan_nama?></option>
											<?php endforeach ?>
										<?php else : ?>
											
										<?php endif ?>
						            </select>
						        </div>
						    </div>
				    		<div class="col-sm-6">
						    	<button type="button" class="btn btn-rimary" id="dokterBtnTambahLayanan"> Tambah Layanan </button>
						    </div>
				    	</div>
				   		
				      	<div id="loadDataMappingDokterLayanan">
				      		
				      	</div>
				    </div>
				    <div class="col-sm-12">
				    </div>
				</div>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-raised g-bg-cyan btn-sm" id="dokterBtnUpdateSave">Update</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- <ul class="pagination center">
        <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Sebelumnya</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Berikutnya</a></li>
</ul> -->

<script type="text/javascript">

	$(document).ready(function(){

		var dr_kode = '';
		$('.dokterBtnUpdate').click(function(){
			dr_kode = $(this).attr('id');

			$.ajax({
				url: '<?=base_url()?>frontoffice/dokter_list_tunggal',
		        type: 'POST',
		        dataType: 'text',
		        data: 'dr_kode='+dr_kode
			}) 
			.done(function(data) {

		    	var obj = JSON.parse(data);

		     	$('#dr_kode2').val(obj.dr_kode);
				$('#dr_nama2').val(obj.dr_nama);
				$('#dr_nama_lengkap2').val(obj.dr_nama_lengkap);
				$('#dr_spesialist2').val(obj.dr_gelar);
				$('#dr_tlp2').val(obj.dr_tlp);
				$('#dr_alamat2').val(obj.dr_alamat);
				$('#dr_email2').val(obj.dr_email);
		       	
		       	showMappingDokterLayanan(obj.dr_kode);

				$('#dokterModalUpdate').modal('show');

		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		});

		$('#dokterBtnTambahLayanan').click(function(){
			
			var layanan_id = $('#l_id2').val();

			var dataSerialize = 'dr_kode='+dr_kode+'&layanan_id='+layanan_id

			$.ajax({
				url: '<?=base_url()?>frontoffice/dokter_add_mapping_layanan',
		        type: 'POST',
		        dataType: 'text',
		        data: dataSerialize
			}) 
			.done(function(data){  

		    	var obj = JSON.parse(data);

				if (obj.status == 'false') {

					$.notify({
						title: "<strong>Peringatan:</strong> ",
						message: obj.message
					},{ type: 'danger'});

				}else{
					showMappingDokterLayanan(dr_kode);
				}
			})
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		});

		$('#dokterBtnUpdateSave').click(function(){
			
			var dr_nama = $('#dr_nama2').val();
			var dr_nama_lengkap = $('#dr_nama_lengkap2').val();
			var dr_spesialist = $('#dr_spesialist2').val();
			var dr_tlp = $('#dr_tlp2').val();
			var dr_alamat = $('#dr_alamat2').val();
			var dr_email = $('#dr_email2').val();
			
			var dataSerialize = 'dr_kode='+dr_kode+'&dr_nama='+dr_nama+'&dr_nama_lengkap='+dr_nama_lengkap+'&dr_gelar='+dr_spesialist+'&dr_tlp='+dr_tlp+'&dr_alamat='+dr_alamat+'&dr_email='+dr_email;
			$.ajax({
		        url: '<?=base_url()?>frontoffice/dokter_update',
		        type: 'POST',
		        dataType: 'text',
		        data: dataSerialize
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);

		        if (obj.status == 'true') {

		        	loadAgainTheTable();

					$.notify({
						title: "<strong>Info :</strong> ",
						message: obj.message
					},{ type: 'info'});

		        }else{
		        	// bisa gak dibikin sweet alert untuk yang ini?
		        	showNotification('bg-black', obj.message, 'top', 'right', '', '');
		        	// alert(obj.message);
		        
		        }
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
	
		});

		function loadAgainTheTable()
		{
			$.get( "<?=base_url()?>frontoffice/dokter_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		}

		function showMappingDokterLayanan(dr_kode)
		{
			$.ajax({
				url: '<?=base_url()?>frontoffice/getData_mapping_dokter_layanan',
		        type: 'POST',
		        dataType: 'text',
		        data: 'dr_kode='+dr_kode
			}) 
			.done(function(data) {

				$('#loadDataMappingDokterLayanan').html(data);
		    	
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		}
	})
</script>