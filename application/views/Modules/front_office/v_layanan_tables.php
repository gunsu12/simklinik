<div role="tabpanel" class="tab-pane" id="profile"> 
	<table class="table table-hover">
		<tr>
			<th style="width:5%; text-align:center;">No</th>
			<th>Kode Layanan</th>
			<th>Nama Layanan</th>
			<th>Status</th>
			<th style="width:5%; text-align:center;">Action</th>
		</tr>
		<?php if ($layanans): ?>
			<?php $i=1; ?>
			<?php foreach ($layanans as $layanan): ?>
				<tr>
					<td style="width:5%; text-align:center;"><?=$i++?></td>
					<td><?=$layanan->layanan_kode?></td>
					<td><?=$layanan->layanan_nama?></td>
					<td><?=ucfirst($layanan->layanan_status)?></td>
					<td style="text-align:center;"><button type="button" class="edit layananBtnUpdate" id="<?=$layanan->layanan_id?>"><i class="zmdi zmdi-edit"></i></button></a></td>
				</tr>
			<?php endforeach ?>
		<?php else : ?>
			<tr>
				<td colspan="5"> tidak ada data layanan </td>
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
    <!-- caridokterModal -->
	<div class="modal fade" id="layananModalUpdate" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Update Layanan</h4>
	            </div>
	            <div class="modal-body"> 
	            	<div class="row clearfix">
	            		<div class="col-sm-3">
					        <div class="form-group">
					            <div class="form-line">

					                <input type="hidden" id="l_id2" value="">
					                <input type="text" class="form-control" placeholder="Kode Layanan" id="l_kode2" value="" readonly="">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-6">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Nama Layanan" id="l_nama2" value="">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-3">
					        <div class="form-group drop-custum">
					            <select class="form-control show-tick" id="l_status2">
					                <option value="">-- Status Layanan --</option>
					                <option value="aktif">Aktif</option>
					                <option value="nonaktif">Tidak Aktif</option>
					            </select>
					        </div>
					    </div>
					</div>
                </div>
	            <div class="modal-footer">
					<button class="btn btn-raised g-bg-cyan" id="layananBtnUpdateSave">Update</button>
					<button class="btn btn-raised g-bg-cyan" id="layananBtnDelete">Hapus</button>
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$('.layananBtnUpdate').click(function(){
			var layanan_id = $(this).attr('id');

			$.ajax({
		        url: '<?=base_url()?>frontoffice/layanan_AjaxFind',
		        type: 'POST',
		        dataType: 'text',
		        data: 'layanan_id='+layanan_id
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);
		    	

		    	$('#l_id2').val(obj.layanan_id);
		    	$('#l_kode2').val(obj.layanan_kode);
				$('#l_nama2').val(obj.layanan_nama);
				$('#l_status2').val(obj.layanan_status);

				$('#layananModalUpdate').modal('show');
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });

		});

		$('#layananBtnUpdateSave').click(function(){

			var l_kode = $('#l_kode2').val();
			var l_nama = $('#l_nama2').val();
			var l_status = $('#l_status2').val();
			var layanan_id = $('#l_id2').val();
			
			if (l_kode != '' && l_nama != '') {
				
				var dataSerialize = 'layanan_id='+layanan_id+'&l_kode='+l_kode+'&l_nama='+l_nama+'&l_status='+l_status;

				$.ajax({
			        url: '<?=base_url()?>frontoffice/layanan_update',
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
						},{ type: 'danger'});

			     		loadDataAgain();
						
						$('#layananModalUpdate').modal('hide');

			        }else{

			        	$.notify({
							title: "<strong>Info :</strong> ",
							message: obj.message
						},{ type: 'info'});
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

		$('#layananBtnDelete').click(function(){

			var layanan_id = $('#l_id2').val();

			$.ajax({
		        url: '<?=base_url()?>frontoffice/layanan_delete',
		        type: 'POST',
		        dataType: 'text',
		        data: 'layanan_id='+layanan_id
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);

		    	if (obj.status != 'false') {


		    		$.notify({
						title: "<strong>Info :</strong> ",
						message: obj.message
					},{ type: 'info'});

		    		loadDataAgain();
					$('#layananModalUpdate').modal('hide');

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
			$.get( "<?=base_url()?>frontoffice/layanan_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		}
	});
</script>

