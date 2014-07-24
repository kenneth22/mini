    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo BASE_URL; ?>public/js/jquery-1.10.2.js"></script>
    <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<?php if($this->pageTitle!="Login") 
			{
			?>
			 <!-- Page-Level Plugin Scripts - Dashboard -->
			<script src="<?php echo BASE_URL; ?>public/js/plugins/morris/raphael-2.1.0.min.js"></script>
			<script src="<?php echo BASE_URL; ?>public/js/plugins/morris/morris.js"></script>
			
			<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
			<script src="<?php echo BASE_URL; ?>public/js/demo/dashboard-demo.js"></script>
			<?php
			}
	?>
   

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo BASE_URL; ?>public/js/sb-admin.js"></script>


</body>

</html>
