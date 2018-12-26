<?php if ($jadwals): ?>
	<?php $i=1; ?>
	<?php foreach ($jadwals as $jadwal): ?>
		<tr>
			<td style="width:5%; text-align:center;"><?=$i++?></td>
			<td><?=$jadwal->jadwal_hari?></td>
			<td><?=$jadwal->jadwal_jam_open?></td>
			<td><?=$jadwal->jadwal_jam_close?></td>
			<td><?=$jadwal->jadwal_max_px?></td>
			<td><?=$jadwal->jadwal_waktu_per_px?></td>
			<td style="text-align:center;"><a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-edit"></i></a></td>
		</tr>
	<?php endforeach ?>
<?php else : ?>
	<tr>
		<td colspan="5"> tidak ada data jadwal oleh dokter ini </td>
	</tr>
<?php endif ?>