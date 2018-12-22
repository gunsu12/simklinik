<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="<?=base_url()?>assets/js/pages/forms/basic-form-elements.js"></script>
<script src="<?=base_url()?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?=base_url()?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="<?=base_url()?>assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="<?=base_url()?>assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<script src="<?=base_url()?>assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="<?=base_url()?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="<?=base_url()?>assets/bundles/chartscripts.bundle.js"></script> <!-- Chart Plugins Js -->
<script src="<?=base_url()?>assets/bundles/sparklinescripts.bundle.js"></script> <!-- Chart Plugins Js -->

<script src="<?=base_url()?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="<?=base_url()?>assets/js/pages/index.js"></script>
<script src="<?=base_url()?>assets/js/pages/charts/sparkline.min.js"></script>

<script src="<?=base_url()?>assets/js/pages/ui/modals.js"></script>

<script src="<?=base_url()?>assets/plugins/select2/dist/js/select2.full.min.js"></script><!-- Select2 -->

<script type="text/javascript">
	// $('.select2').select2()

	$('#date').bootstrapMaterialDatePicker({ weekStart : 1, time: false, format : 'DD/MM/YYYY'});
	$('#tanggallahir').bootstrapMaterialDatePicker({ weekStart : 1, time: false, format : 'DD/MM/YYYY'});
	$('#tanggalrm').bootstrapMaterialDatePicker({ weekStart : 1, time: false, format : 'DD/MM/YYYY'});
	$('#sejakalergi').bootstrapMaterialDatePicker({ weekStart : 1, time: false, format : 'DD/MM/YYYY'});
	$('#datetime').bootstrapMaterialDatePicker({ format : 'YYYY-mm-DD' });
	$('#tanggalregister').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm' });
	$('#time_open').bootstrapMaterialDatePicker({ date: false, format : 'HH:mm'  });
	$('#time_close').bootstrapMaterialDatePicker({ date: false, format : 'HH:mm' });
</script>

</body>

</html>