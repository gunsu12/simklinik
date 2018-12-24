<div role="tabpanel" class="tab-pane" id="profile"> 
	<table class="table table-hover">
		<tr>
			<th style="width:5%; text-align:center;">No</th>
			<th>Kode</th>
			<th>Nama Administrasi</th>
			<th>Biaya</th>
			<th>Status</th>
			<th style="width:5%; text-align:center;">Action</th>
		</tr>
		<?php if ($admins): ?>
			<?php $i=1; ?>
			<?php foreach ($admins as $admin): ?>
				<tr>
					<td style="width:5%; text-align:center;"><?=$i++?></td>
					<td><?=$admin->admin_kode?></td>
					<td><?=$admin->admin_nama?></td>
					<td>Rp. <?=number_format($admin->admin_biaya,0,',','.')?></td>
					<td><?=ucfirst($admin->admin_status)?></td>
					<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-edit"></i></a></td>
				</tr>
			<?php endforeach ?>
		<?php else : ?>
			<tr>
				<td colspan="5"> tidak ada data Administrasi </td>
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