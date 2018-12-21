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
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">List Dokter</a></li>
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
                        	<form action="" method="POST">
	                        	<div class="row clearfix">
	                        		<div class="col-sm-3">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="dr_nama" class="form-control" placeholder="Kode Dokter" id="dr_nama">
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-3">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="dr_nama_singkat" class="form-control" placeholder="Nama Singkat" id="dr_nama_singkat">
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
								    <!-- <div class="col-sm-3">
								        <div class="form-group">
								            <div class="form-line">
								                <input type="text" name="dr_tgl_lhr" class="datepicker form-control" placeholder="Tanggal Lahir" id="datetime" id="dr_tgl_lhr">
								            </div>
								        </div>
								    </div> -->
								    <!-- <div class="col-sm-3">
								        <div class="form-group drop-custum">
								            <select class="form-control show-tick">
								                <option value="">-- Jenis Kelamin --</option>
								                <option value="10">Male</option>
								                <option value="20">Female</option>
								            </select>
								        </div>
								    </div> -->
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
                        	</form>		
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
                        <div role="tabpanel" class="tab-pane" id="messages"> <b>Message Content</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings"> <b>Settings Content</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
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

			var dr_kode = $('#dr_kode').val();
			var dr_nama_singkat = $('#dr_nama_singkat').val();
			var dr_nama_lengkap = $('#dr_nama_lengkap').val();
			var dr_spesialist = $('#dr_spesialist').val();
			var dr_tlp = $('#dr_tlp').val();
			var dr_alamat = $('#dr_alamat').val();
			var dr_email = $('#dr_email').val();

			var dataSerialize = 'dr_kode='+dr_kode+'&dr_nama='+dr_nama_singkat+'dr_nama_lengkap='+dr_nama_lengkap+'dr_gelar='+dr_spesialist+'dr_tlp='+dr_tlp+'dr_alamat='+dr_alamat+'dr_email='+dr_email;

			$.ajax({
		        url: '<?=base_url()?>frontoffice/dokter_add',
		        type: 'POST',
		        dataType: 'text',
		        data: dataSerialize
		    })
		    .done(function(data) {
		    	var obj = JSON.parse(data);

		        if (obj.status == 'ok') {

		        }else{
		        	
		        }
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		})

	});
</script>