<?php $this->load->view('./modules/layouts/layout-header'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dokter</h2>
            <small class="text-muted">Master Data Dokter</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
					<!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Tambah Dokter</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" id="v_dokter">List Dokter</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">MESSAGES</a></li> -->
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
		                        		<div class="col-sm-3">
									        <div class="form-group">
									            <div class="form-line">
									                <input type="text" name="dr_kode" class="form-control" placeholder="Kode Dokter" id="dr_kode">
									            </div>
									        </div>
									    </div>
									    <div class="col-sm-3">
									        <div class="form-group">
									            <div class="form-line">
									                <input type="text" name="dr_nama" class="form-control" placeholder="Nama Singkat" id="dr_nama">
									            </div>
									        </div>
									    </div>
									    <div class="col-sm-6">
									        <div class="form-group">
									            <div class="form-line">
									                <input type="text" name="dr_nama_lengkap" class="form-control" placeholder="Nama Panggilan" id="dr_nama_lengkap">
									            </div>
									        </div>
									    </div>
									</div>
									<div class="row clearfix">
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
									    </div>
									    <div class="col-sm-6">
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
									    </div>
									    <div class="col-sm-12">
									        <button id="submit" class="btn btn-raised g-bg-cyan btn-lg">Simpan</button>
									    </div>
									</div>
	                        	<!-- </form>		 -->
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
			var dr_kode = $('#dr_kode').val();
			var dr_nama = $('#dr_nama').val();
			var dr_nama_lengkap = $('#dr_nama_lengkap').val();
			var dr_spesialist = $('#dr_spesialist').val();
			var dr_tlp = $('#dr_tlp').val();
			var dr_alamat = $('#dr_alamat').val();
			var dr_email = $('#dr_email').val();
			
			if (dr_kode != '') {
				var dataSerialize = 'dr_kode='+dr_kode+'&dr_nama='+dr_nama+'&dr_nama_lengkap='+dr_nama_lengkap+'&dr_gelar='+dr_spesialist+'&dr_tlp='+dr_tlp+'&dr_alamat='+dr_alamat+'&dr_email='+dr_email;
				$.ajax({
			        url: '<?=base_url()?>frontoffice/dokter_add',
			        type: 'POST',
			        dataType: 'text',
			        data: dataSerialize
			    })
			    .done(function(data) {

			    	var obj = JSON.parse(data);

			        if (obj.status == 'true') {

			        	$('#dr_kode').val('');
						$('#dr_nama').val('');
						$('#dr_nama_lengkap').val('');
						$('#dr_spesialist').val('');
						$('#dr_tlp').val('');
						$('#dr_alamat').val('');
						$('#dr_email').val('');


			        	showNotification('bg-black', obj.message, 'top', 'right', '', '');
			        	// alert(obj.message);

			        }else{
			        	// bisa gak dibikin sweet alert untuk yang ini?
			        	showNotification('bg-black', obj.message, 'top', 'right', '', '');
			        	// alert(obj.message);
			        
			        }
			    })
			    .fail(function (jqXHR, textStatus, error) {
			          console.log("Post error: " + error);
			    });
			
			}else{
				$.notify({
					title: "<strong>Peringatan:</strong> ",
					message: "kode dokter dan nama dokter harus di isi"
				},{ type: 'danger'});
			    // showNotification('bg-black', 'kode dokter dan nama dokter harus di isi', 'top', 'right', '', '');
				// alert('nedd to fill dr kode');
			}
		});

		$('#v_dokter').click(function(){
			$.get( "<?=base_url()?>frontoffice/dokter_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		});
	});
</script>