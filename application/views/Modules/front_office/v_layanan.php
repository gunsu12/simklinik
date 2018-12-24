<?php $this->load->view('./modules/layouts/layout-header'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Layanan</h2>
            <small class="text-muted">Master Data Layanan</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
					<!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Tambah Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" id="v_list">List Layanan</a></li>
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
	                        		<div class="col-sm-3">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" class="form-control" placeholder="Kode Layanan" id="l_kode">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" class="form-control" placeholder="Nama Layanan" id="l_nama">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-3">
								        <div class="form-group drop-custum">
								            <select class="form-control show-tick" id="l_status">
								                <option value="">-- Status Layanan --</option>
								                <option value="aktif">Aktif</option>
								                <option value="nonaktif">Tidak Aktif</option>
								            </select>
								        </div>
								    </div>
								</div>
								<div class="row clearfix">
								    <div class="col-sm-12">
								        <button class="btn btn-raised g-bg-cyan" id="submit">Simpan</button>
								        <button class="btn btn-raised">Kembali</button>
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
			var l_kode = $('#l_kode').val();
			var l_nama = $('#l_nama').val();
			var l_status = $('#l_status').val();
			
			if (l_kode != '' && l_nama != '') {
				
				var dataSerialize = 'l_kode='+l_kode+'&l_nama='+l_nama+'&l_status='+l_status;

				$.ajax({
			        url: '<?=base_url()?>frontoffice/layanan_add',
			        type: 'POST',
			        dataType: 'text',
			        data: dataSerialize
			    })
			    .done(function(data) {

			    	var obj = JSON.parse(data);

			        if (obj.status == 'true') {

			        	$('#l_kode').val('');
						$('#l_nama').val('');
						$('#l_status').val('');

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
					message: "kode layanan dan nama layanan harus di isi"
				},{ type: 'danger'});
			}
		});

		$('#v_list').click(function(){
			$.get( "<?=base_url()?>frontoffice/layanan_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		});
	});
</script>