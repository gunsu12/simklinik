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
				<td style="text-align:center;"><a data-toggle="tab" href="#home" class="edit nav-link"><i class="zmdi zmdi-edit"></i></a></td>
			</tr>
		<?php endforeach ?>
	<?php else : ?>
		<tr>
			<td colspan="4"> tidak ada data dokter </td>
		</tr>
	<?php endif ?>
</table>
<ul class="pagination center">
        <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Sebelumnya</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Berikutnya</a></li>
</ul>