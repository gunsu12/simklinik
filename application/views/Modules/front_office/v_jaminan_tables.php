<div role="tabpanel" class="tab-pane" id="profile"> 
	<table class="table table-hover">
		<tr>
			<th style="width:5%; text-align:center;">No</th>
			<th>Kode</th>
			<th>Nama Jaminan</th>
			<th>Disc Tindakan</th>
			<th>Disc Obat</th>
			<th>Status</th>
			<th style="width:5%; text-align:center;">Action</th>
		</tr>
		<?php if ($jaminans): ?>
			<?php $i=1; ?>
			<?php foreach ($jaminans as $jaminan): ?>
				<tr>
					<td style="width:5%; text-align:center;"><?=$i++?></td>
					<td><?=$jaminan->jaminan_kode?></td>
					<td><?=$jaminan->jaminan_nama?></td>
					<td><?=$jaminan->jaminan_potongan_tindakan?> %</td>
					<td><?=$jaminan->jaminan_potongan_obat?> %</td>
					<td><?=ucfirst($jaminan->jaminan_status)?></td>
					<td style="text-align:center;"><button type="button" class="edit jaminanBtnUpdate" id="<?=$jaminan->jaminan_kode?>"><i class="zmdi zmdi-edit"></i></button></a></td>
				</tr>
			<?php endforeach ?>
		<?php else : ?>
			<tr>
				<td colspan="5"> tidak ada data jaminan </td>
			</tr>
		<?php endif ?>
		
	</table>
	<!-- <ul class="pagination center">
            <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Sebelumnya</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Berikutnya</a></li>
    </ul> -->
    <!-- modal update jaminan -->
	<div class="modal fade" id="jaminanModalUpdate" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Update Jaminan</h4>
	            </div>
	            <div class="modal-body"> 
	            	<div class="row clearfix">
                		<div class="col-sm-2">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" name="jaminan_kode" class="form-control" placeholder="Kode Jaminan" id="jaminan_kode2" value="">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-6">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" name="jaminan_nama" class="form-control" placeholder="Nama Jaminan" id="jaminan_nama2" value="">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-2">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" name="jaminan_potongan_tindakan" class="form-control" placeholder="Diskon Harga" id="jaminan_potongan_tindakan2" value="">
					            </div>
					        </div>
					    </div>
					     <div class="col-sm-2">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" name="jaminan_potongan_obat" class="form-control" placeholder="Diskon Obat" id="jaminan_potongan_obat2" value="">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-2">
					        <div class="form-group drop-custum">
					            <select class="form-control show-tick" name="jaminan_status" id="jaminan_status2">
					                <option value="">-- Status Jaminan --</option>
					                <option value="aktif">Aktif</option>
					                <option value="nonaktif">Tidak Aktif</option>
					            </select>
					        </div>
					    </div>
					</div>
	            </div>
	            <div class="modal-footer">
					<button class="btn btn-raised g-bg-cyan" id="jaminanBtnUpdateSave">Update</button>
					<button class="btn btn-raised g-bg-cyan" id="jaminanBtnDelete">Hapus</button>
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		var jaminan_id = '';

		$('.jaminanBtnUpdate').click(function(){
			var jaminan_kode = $(this).attr('id');

			$.ajax({
		        url: '<?=base_url()?>frontoffice/jaminan_AjaxFind',
		        type: 'POST',
		        dataType: 'text',
		        data: 'jaminan_kode='+jaminan_kode
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);
		    	
	        	$('#jaminan_kode2').val(obj.jaminan_kode);
				$('#jaminan_nama2').val(obj.jaminan_nama);
				$('#jaminan_potongan_tindakan2').val(obj.jaminan_potongan_tindakan);
				$('#jaminan_potongan_obat2').val(obj.jaminan_potongan_obat);
				$('#jaminan_status2').val(obj.jaminan_status);

				jaminan_id = obj.jaminan_id;
		    	
				$('#jaminanModalUpdate').modal('show');

		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });

		});

		$('#jaminanBtnUpdateSave').click(function(){

			var j_kode = $('#jaminan_kode2').val();
			var j_nama = $('#jaminan_nama2').val();
			var j_pt_tind = $('#jaminan_potongan_tindakan2').val();
			var j_pt_obat = $('#jaminan_potongan_obat2').val();
			var j_status = $('#jaminan_status2').val();
			
			if (j_kode != '' && j_nama != '') {
				
				var dataSerialize = 'j_kode='+j_kode+'&j_nama='+j_nama+'&j_pt_tind='+j_pt_tind+'&j_pt_obat='+j_pt_obat+'&j_status='+j_status+'&jaminan_id='+jaminan_id;

				$.ajax({
			        url: '<?=base_url()?>frontoffice/jaminan_update',
			        type: 'POST',
			        dataType: 'text',
			        data: dataSerialize
			    })
			    .done(function(data) {

			    	var obj = JSON.parse(data);

			        if (obj.status == 'true') {

						$.notify({
							title: "<strong>Info :</strong> ",
							message: obj.message
						},{ type: 'info'});
			     		
			     		loadDataAgain();

						$('#jaminanModalUpdate').modal('hide');

			        }else{

			        	$.notify({
							title: "<strong>Info :</strong> ",
							message: obj.message
						},{ type: 'danger'});
			        }
			    })
			    .fail(function (jqXHR, textStatus, error) {
			          console.log("Post error: " + error);
			    });
			
			}else{
				$.notify({
					title: "<strong>Peringatan:</strong> ",
					message: "kode layanan dan nama layanan harus di isi"
				},{ type: 'danger'});
			}
		});

		$('#jaminanBtnDelete').click(function(){

			$.ajax({
		        url: '<?=base_url()?>frontoffice/jaminan_delete',
		        type: 'POST',
		        dataType: 'text',
		        data: 'jaminan_id='+jaminan_id
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);

		    	if (obj.status != 'false') {


		    		$.notify({
						title: "<strong>Info :</strong> ",
						message: obj.message
					},{ type: 'info'});

		     		loadDataAgain();

					$('#jaminanModalUpdate').modal('hide');

		    	}else{

		    		$.notify({
						title: "<strong>Info :</strong> ",
						message: obj.message
					},{ type: 'danger'});

		    	}		    		

		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		});

		function loadDataAgain()
		{
			$.get( "<?=base_url()?>frontoffice/jaminan_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		}
	});
</script>