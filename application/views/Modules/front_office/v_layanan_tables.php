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
					<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-edit"></i></a></td>
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
</div>