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
				    	<p style="text-align:center">Layanan Dokter</p>
				    	<div class="row">
				    		<div class="col-sm-6">
						    	<div class="form-group drop-custum">
						            <select class="form-control" id="l_status">
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
						    	<button type="button" class="btn btn-rimary" id="dokterBtnLayanan"> Tambah Layanan </button>
						    </div>
				    	</div>
				   		
				        <table class="table table-hover" id="viewSelectedLayanan">
							<tr>
								<th>Layanan ID</th>
								<th>Nama Layanan</th>
							</tr>

						</table>
				    </div>
				    <div class="col-sm-12">
				    </div>
				</div>
            </div>
            <div class="modal-footer">
            	 <button id="button" class="btn btn-raised g-bg-cyan btn-lg">Simpan</button>
                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
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
		$('.dokterBtnUpdate').click(function(){
			$('#dokterModalUpdate').modal('show');
		});
	})
</script>