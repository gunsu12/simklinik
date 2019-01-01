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
									    	<p style="text-align:center">Layanan Dokter</p>
									    	<button type="button" class="btn btn-rimary" id="dokterBtnLayanan"> Tambah Layanan </button>
									        <table class="table table-hover" id="viewSelectedLayanan">
												<tr>
													<th>Layanan ID</th>
													<th>Nama Layanan</th>
													<th>Action</th>
												</tr>

											</table>
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

<!-- modal untuk add layanan dokter -->
<div class="modal fade" id="dokterModalLayanan" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">List Layanan</h4>
            </div>
            <div class="modal-body"> 	
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
								<td style="text-align:center;"><a href="javascript:void(0);" class="edit select_layanan" id="<?=$layanan->layanan_id?>"><i class="zmdi zmdi-check"></i></a></td>
							</tr>
						<?php endforeach ?>
					<?php else : ?>
						<tr>
							<td colspan="5"> tidak ada data layanan </td>
						</tr>
					<?php endif ?>
				</table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('./modules/layouts/layout-footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){

		var layananSelectedList = [];
		loadJsonToRow();

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
			}
		});

		$('#v_dokter').click(function(){
			$.get( "<?=base_url()?>frontoffice/dokter_list", function( data ) {
			  $( "#show-tables" ).html( data );
			});
		});

		$('#dokterBtnLayanan').click(function(){
			$('#dokterModalLayanan').modal('show');
		});

		$('.select_layanan').click(function(){

			var layanan_id = $(this).attr('id');

			$.ajax({
		        url: '<?=base_url()?>frontoffice/layanan_AjaxFind',
		        type: 'POST',
		        dataType: 'text',
		        data: 'layanan_id='+layanan_id
		    })
		    .done(function(data) {
			    
			    var obj = JSON.parse(data);
		    	var item = {};
				item ["layanan_id"] = layanan_id;
				item ["layanan_nama"] = obj.layanan_nama;

				if (layananSelectedList.length != 0) {

					var status = false;

					$.each( layananSelectedList, function( key, value ) {

					 	if (layananSelectedList[key].layanan_id == item.layanan_id) {
					 		status = true;
					 		return false;
					 	}else{
					 		status = false;
					 	}

					});

					if (status == true) {
						alert('tidak di push');
					}else{
						layananSelectedList.push(item);
		    			$('#dokterModalLayanan').modal('hide');
		    			loadJsonToRow();
					}
				}else{
					layananSelectedList.push(item);
					$('#dokterModalLayanan').modal('hide');
		    		loadJsonToRow();
				}
		    })
		    .fail(function (jqXHR, textStatus, error) {
		          console.log("Post error: " + error);
		    });

			console.log(layananSelectedList);
		});

		$('.hapus_layanan').click(function(){
			alert('a');
		});

		function loadJsonToRow()
		{
			$('#viewSelectedLayanan').empty();

			var i = 0;
			$.each( layananSelectedList, function( key, value ) {
				
				var record = "<tr><td>"+layananSelectedList[key].layanan_id+"</td><td>"+layananSelectedList[key].layanan_nama+"</td><td><button type='button' class='edit hapus_layanan' id='"+i+"'><i class='zmdi zmdi-check'></button></td></tr>";


				$('#viewSelectedLayanan').append(record);

				i++;
			});

			$('.hapus_layanan').click(function(){
				var index = $(this).attr('id');

				layananSelectedList.splice(index);

				console.log(layananSelectedList);
				
				//loadJsonToRow();
			});
			
		}

		// Builds the HTML Table out of myList.
		// function buildHtmlTable(selector) {
		//   var columns = addAllColumnHeaders(myList, selector);

		//   for (var i = 0; i < myList.length; i++) {
		//     var row$ = $('<tr/>');
		//     for (var colIndex = 0; colIndex < columns.length; colIndex++) {
		//       var cellValue = myList[i][columns[colIndex]];
		//       if (cellValue == null) cellValue = "";
		//       row$.append($('<td/>').html(cellValue));
		//     }
		//     $(selector).append(row$);
		//   }
		// }

		// Adds a header row to the table and returns the set of columns.
		// Need to do union of keys from all records as some records may not contain
		// all records.
		// function addAllColumnHeaders(myList, selector) {
		//   var columnSet = [];
		//   var headerTr$ = $('<tr/>');

		//   for (var i = 0; i < myList.length; i++) {
		//     var rowHash = myList[i];
		//     for (var key in rowHash) {
		//       if ($.inArray(key, columnSet) == -1) {
		//         columnSet.push(key);
		//         headerTr$.append($('<th/>').html(key));
		//       }
		//     }
		//   }
		//   $(selector).append(headerTr$);

		//   return columnSet;
		// }
	});
</script>