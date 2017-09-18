    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.js')?>"></script>
    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>
        
	 <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/plugins/node-waves/waves.js')?>"></script>
     <!-- Jquery DataTable Plugin Js -->
    <?php if($this->router->fetch_method()=='index') {?>
	<script src="<?php echo base_url('assets/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
	<script src="<?php echo base_url('assets/js/pages/tables/jquery-datatable.js')?>"></script>
	<?php }?>
     <!-- Custom Js -->
    <script src="<?php echo base_url('assets/js/admin.js')?>"></script>
    
    <!-- Demo Js -->
	<?php if(isset($jqvalscript) and !empty($jqvalscript)):?>
	<script src="<?php echo base_url('assets/plugins/jquery-validation/'.$jqvalscript)?>"></script>
	<?php endif;?>
	<?php if(isset($script) and !empty($script)):?>
	<script src="<?php echo base_url('assets/js/pages/forms/'.$script)?>"></script>
	<?php endif;?>
	<script src="<?php echo base_url('assets/js/demo.js')?>"></script>
    </body>
</html>