<div role="tabpanel" class="tab-pane" id="profile"> 
	<table class="table table-hover">
		<tr>
			<th style="width:5%; text-align:center;">No</th>
			<th>Kode</th>
			<th>Nama Administrasi</th>
			<th>Biaya</th>
			<th>Status</th>
			<th style="width:5%; text-align:center;">Action</th>
		</tr>
		<?php if ($admins): ?>
			<?php $i=1; ?>
			<?php foreach ($admins as $admin): ?>
				<tr>
					<td style="width:5%; text-align:center;"><?=$i++?></td>
					<td><?=$admin->admin_kode?></td>
					<td><?=$admin->admin_nama?></td>
					<td>Rp. <?=number_format($admin->admin_biaya,0,',','.')?></td>
					<td><?=ucfirst($admin->admin_status)?></td>
					<td style="text-align:center;"><button type="button" class="edit adminBtnUpdate" id="<?=$admin->admin_id?>"><i class="zmdi zmdi-edit"></i></button></a></td>
				</tr>
			<?php endforeach ?>
		<?php else : ?>
			<tr>
				<td colspan="5"> tidak ada data Administrasi </td>
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
	<div class="modal fade" id="adminModalUpdate" role="dialog" data-backdrop="false">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Update Biaya Administrasi</h4>
	            </div>
	            <div class="modal-body"> 
	            	<div class="row clearfix">
                		<div class="col-sm-2">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Kode Administrasi" id="a_kode2">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-6">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Nama Administrasi" id="a_nama2">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-2">
					        <div class="form-group">
					            <div class="form-line">
					                <input type="text" class="form-control" placeholder="Biaya Administrasi" id="a_biaya2">
					            </div>
					        </div>
					    </div>
					    <div class="col-sm-2">
					        <div class="form-group drop-custum">
					            <select class="form-control show-tick" id="a_status2">
					                <option value="">-- Status Jaminan --</option>
					                <option value="aktif">Aktif</option>
					                <option value="nonaktif">Tidak Aktif</option>
					            </select>
					        </div>
					    </div>
					</div>
	            </div>
	            <div class="modal-footer">
					<button class="btn btn-raised g-bg-cyan" id="adminBtnUpdateSave">Update</button>
					<button class="btn btn-raised g-bg-cyan" id="adminBtnDelete">Hapus</button>
	                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		var admin_id = '';

		$('.adminBtnUpdate').click(function(){
			admin_id = $(this).attr('id');

			$.ajax({
		        url: '<?=base_url()?>frontoffice/admin_AjaxFind',
		        type: 'POST',
		        dataType: 'text',
		        data: 'admin_id='+admin_id
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);
		    	
	        	$('#a_kode2').val(obj.admin_kode);
				$('#a_nama2').val(obj.admin_nama);
				$('#a_biaya2').val(obj.admin_biaya);
				$('#a_status2').val(obj.admin_status);

				jaminan_id = obj.jaminan_id;
		    	
				$('#adminModalUpdate').modal('show');

		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });

		});

		$('#adminBtnUpdateSave').click(function(){

			// alert('a');
			var a_kode = $('#a_kode2').val();
			var a_nama = $('#a_nama2').val();
			var a_biaya = $('#a_biaya2').val();
			var a_status = $('#a_status2').val();
			
			if (a_kode != '' && a_kode != '') {
				
				var dataSerialize = 'a_kode='+a_kode+'&a_nama='+a_nama+'&a_biaya='+a_biaya+'&a_status='+a_status+'&admin_id='+admin_id;

				$.ajax({
			        url: '<?=base_url()?>frontoffice/admin_update',
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

						$('#adminModalUpdate').modal('show');


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
					message: "kode dan nama administrasi harus di isi"
				},{ type: 'danger'});
			}
		});

		$('#adminBtnDelete').click(function(){

			$.ajax({
		        url: '<?=base_url()?>frontoffice/admin_delete',
		        type: 'POST',
		        dataType: 'text',
		        data: 'admin_id='+admin_id
		    })
		    .done(function(data) {

		    	var obj = JSON.parse(data);

		    	if (obj.status != 'false') {


		    		$.notify({
						title: "<strong>Info :</strong> ",
						message: obj.message
					},{ type: 'info'});

		     		loadDataAgain();

					$('#adminModalUpdate').modal('show');

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
			$.get( "<?=base_url()?>frontoffice/admin_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		}
	});
</script>