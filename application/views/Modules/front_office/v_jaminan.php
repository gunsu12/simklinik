<?php $this->load->view('./modules/layouts/layout-header'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Jaminan</h2>
            <small class="text-muted">Master Data Jaminan</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
					<!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Tambah Jaminan</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" id="v_list">List Jaminan</a></li>
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
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="jaminan_kode" class="form-control" placeholder="Kode Jaminan" id="jaminan_kode">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="jaminan_nama" class="form-control" placeholder="Nama Jaminan" id="jaminan_nama">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-2">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="jaminan_potongan_tindakan" class="form-control" placeholder="Diskon Harga" id="jaminan_potongan_tindakan">
								            </div>
								        </div>
								    </div>
								     <div class="col-sm-2">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="jaminan_potongan_obat" class="form-control" placeholder="Diskon Obat" id="jaminan_potongan_obat">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-2">
								        <div class="form-group drop-custum">
								            <select class="form-control show-tick" name="jaminan_status" id="jaminan_status">
								                <option value="">-- Status Jaminan --</option>
								                <option value="aktif">Aktif</option>
								                <option value="nonaktif">Tidak Aktif</option>
								            </select>
								        </div>
								    </div>
								</div>
								<div class="row clearfix">
								    <div class="col-sm-12">
								        <button class="btn btn-raised g-bg-cyan" id="submit">Simpan</button>
								        <button type="reset" class="btn btn-raised">Batal</button>
								    </div>
								</div>		
	                        </div>
	                        <div role="tabpanel" class="tab-pane" id="profile">
	                        	<div id="show-tables">
	                        		
	                        	</div> 
	                        </div>
	                    </div>
                    </div>
				</div>
			</div>
		</div>
    </div>
</section>
<?php $this->load->view('./modules/layouts/layout-footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){

		$('#submit').click(function(){

			// alert('a');
			var j_kode = $('#jaminan_kode').val();
			var j_nama = $('#jaminan_nama').val();
			var j_pt_tind = $('#jaminan_potongan_tindakan').val();
			var j_pt_obat = $('#jaminan_potongan_obat').val();
			var j_status = $('#jaminan_status').val();
			
			if (j_kode != '' && j_nama != '') {
				
				var dataSerialize = 'j_kode='+j_kode+'&j_nama='+j_nama+'&j_pt_tind='+j_pt_tind+'&j_pt_obat='+j_pt_obat+'&j_status='+j_status;

				$.ajax({
			        url: '<?=base_url()?>frontoffice/jaminan_add',
			        type: 'POST',
			        dataType: 'text',
			        data: dataSerialize
			    })
			    .done(function(data) {

			    	var obj = JSON.parse(data);

			        if (obj.status == 'true') {

			        	$('#jaminan_kode').val('');
						$('#jaminan_nama').val('');
						$('#jaminan_potongan_tindakan').val('');
						$('#jaminan_potongan_obat').val('');
						$('#jaminan_status').val('');

						$.notify({
							title: "<strong>Info :</strong> ",
							message: obj.message
						},{ type: 'danger'});
			        	//showNotification('bg-black', obj.message, 'top', 'right', '', '');
			     
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
					message: "kode jaminan dan nama jaminan harus di isi"
				},{ type: 'danger'});
			}
		});

		$('#v_list').click(function(){
			$.get( "<?=base_url()?>frontoffice/jaminan_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		});
	});
</script>