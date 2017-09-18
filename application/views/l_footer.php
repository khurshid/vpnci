    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/plugins/node-waves/waves.js')?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/js/admin.js')?>"></script>
    <script src="<?php echo base_url('assets/js/pages/examples/sign-in.js')?>"></script>
	<script src="<?php echo base_url('assets/js/pages/ui/modals.js')?>"></script>
	<script>
$(function(){
	    $("#frm-forgot").on("submit",function(e){
		e.preventDefault();		
		$(".modal-body").html("<p>Your password has been sent successfully at <strong>"+$("#email").val()+"</strong>.</p>");
	});
	
});
</script>
</body>
</html>