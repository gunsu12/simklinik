<div role="tabpanel" class="tab-pane" id="profile"> 
	<table class="table table-hover">
		<tr>
			<th style="width:5%; text-align:center;">No</th>
			<th>Kode</th>
			<th>Nama Jaminan</th>
			<th>Disc Tindakan</th>
			<th>Disc Obat</th>
			<th>Status</th>
			<th style="width:5%; text-align:center;">Action</th>
		</tr>
		<?php if ($jaminans): ?>
			<?php $i=1; ?>
			<?php foreach ($jaminans as $jaminan): ?>
				<tr>
					<td style="width:5%; text-align:center;"><?=$i++?></td>
					<td><?=$jaminan->jaminan_kode?></td>
					<td><?=$jaminan->jaminan_nama?></td>
					<td><?=$jaminan->jaminan_potongan_tindakan?> %</td>
					<td><?=$jaminan->jaminan_potongan_obat?> %</td>
					<td><?=ucfirst($jaminan->jaminan_status)?></td>
					<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-edit"></i></a></td>
				</tr>
			<?php endforeach ?>
		<?php else : ?>
			<tr>
				<td colspan="5"> tidak ada data jaminan </td>
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