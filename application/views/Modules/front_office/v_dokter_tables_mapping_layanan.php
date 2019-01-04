<table class="table table-hover">
	<thead>
		<tr>
			<th>Layanan ID</th>
			<th>Nama Layanan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>		
		<?php if ($dokter_layanans): ?>
			<?php foreach ($dokter_layanans as $data): ?>
				<tr>
					<td><?=$data->layanan_id?><input type="hidden" name="dr_kode3" id="dr_kode3" value="<?=$data->dr_kode?>"></td>
					<td><?=$data->layanan_nama?></td>
					<td style="text-align:center;"><button type="button" class="edit dokterBtnDeleteMapping" id="<?=$data->_id?>"><i class="zmdi zmdi-close"></i></button></td>
				</tr>
			<?php endforeach ?>
		<?php endif ?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){

		$('.dokterBtnDeleteMapping').click(function(){
			var id = $(this).attr('id'), dr_kode = $('#dr_kode3').val();

			$.ajax({
				url: '<?=base_url()?>frontoffice/delete_mapping_dokter_layanan',
		        type: 'POST',
		        dataType: 'text',
		        data: 'id='+id
			}) 
			.done(function(data) {

				showMappingDokterLayanan(dr_kode);
		    	
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });

		});

		function showMappingDokterLayanan(dr_kode)
		{
			$.ajax({
				url: '<?=base_url()?>frontoffice/getData_mapping_dokter_layanan',
		        type: 'POST',
		        dataType: 'text',
		        data: 'dr_kode='+dr_kode
			}) 
			.done(function(data) {

				$('#loadDataMappingDokterLayanan').html(data);
		    	
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });
		}
	});
</script>