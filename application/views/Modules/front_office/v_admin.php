<?php $this->load->view('./modules/layouts/layout-header'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Administrasi</h2>
            <small class="text-muted">Master Data Administrasi</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
					<!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Tambah Administrasi</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" id="v_list">List Administrasi</a></li>
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
								                <input type="text" class="form-control" placeholder="Kode Administrasi" id="a_kode">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" class="form-control" placeholder="Nama Administrasi" id="a_nama">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-2">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" class="form-control" placeholder="Biaya Administrasi" id="a_biaya">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-2">
								        <div class="form-group drop-custum">
								            <select class="form-control show-tick" id="a_status">
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
								        <button class="btn btn-raised">Batal</button>
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
			var a_kode = $('#a_kode').val();
			var a_nama = $('#a_nama').val();
			var a_biaya = $('#a_biaya').val();
			var a_status = $('#a_status').val();
			
			if (a_kode != '' && a_kode != '') {
				
				var dataSerialize = 'a_kode='+a_kode+'&a_nama='+a_nama+'&a_biaya='+a_biaya+'&a_status='+a_status;

				$.ajax({
			        url: '<?=base_url()?>frontoffice/admin_add',
			        type: 'POST',
			        dataType: 'text',
			        data: dataSerialize
			    })
			    .done(function(data) {

			    	var obj = JSON.parse(data);

			        if (obj.status == 'true') {

			        	$('#a_kode').val('');
						$('#a_nama').val('');
						$('#a_harga').val('');
						$('#a_status').val('');

						$.notify({
							title: "<strong>Info :</strong> ",
							message: obj.message
						},{ type: 'danger'});
			     
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

		$('#v_list').click(function(){
			$.get( "<?=base_url()?>frontoffice/admin_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		});
	});
</script>