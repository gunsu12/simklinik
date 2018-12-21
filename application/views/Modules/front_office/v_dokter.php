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
                        	<div class="row clearfix">
                        		<div class="col-sm-3">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="form-control" placeholder="Kode Dokter">
							            </div>
							        </div>
							    </div>
							    <div class="col-sm-3">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="form-control" placeholder="Nama Singkat">
							            </div>
							        </div>
							    </div>
							    <div class="col-sm-6">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="form-control" placeholder="Nama Panggilan">
							            </div>
							        </div>
							    </div>
							</div>
							<div class="row clearfix">
							    <div class="col-sm-3">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="datepicker form-control" placeholder="Tanggal Lahir" id="datetime">
							            </div>
							        </div>
							    </div>
							    <div class="col-sm-3">
							        <div class="form-group drop-custum">
							            <select class="form-control show-tick">
							                <option value="">-- Jenis Kelamin --</option>
							                <option value="10">Male</option>
							                <option value="20">Female</option>
							            </select>
							        </div>
							    </div>
							    <div class="col-sm-3">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="form-control" placeholder="Spesialist">
							            </div>
							        </div>
							    </div>
							    <div class="col-sm-3">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="form-control" placeholder="No Telepon">
							            </div>
							        </div>
							    </div>
							    <div class="col-sm-6">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="form-control" placeholder="Alamat">
							            </div>
							        </div>
							    </div>
							    <div class="col-sm-6">
							        <div class="form-group">
							            <div class="form-line">
							                <input type="text" class="form-control" placeholder="Email">
							            </div>
							        </div>
							    </div>
							    <div class="col-sm-12">
							        <button type="submit" class="btn btn-raised g-bg-cyan">Simpan</button>
							        <button type="submit" class="btn btn-raised">Batal</button>
							    </div>
							</div>		
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