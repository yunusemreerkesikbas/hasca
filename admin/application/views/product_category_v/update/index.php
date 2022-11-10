<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("includes/head"); ?>

<body data-sidebar="dark">
<!-- Begin page -->
<div id="layout-wrapper">

	<?php $this->load->view("includes/navbar") ?>
	<!-- ========== Left Sidebar Start ========== -->
	<?php $this->load->view("includes/aside") ?>
	<!-- Left Sidebar End -->
	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="main-content">

		<?php $this->load->view("product_category_v/update/content"); ?>
		<!-- end row -->


		<!-- end row -->


		<!-- end row -->
	</div>
	<!-- container-fluid -->
	<?php $this->load->view("includes/footer") ?>

</div>


<!-- JAVASCRIPT -->
<?php $this->load->view("includes/include_script"); ?>
</body>

</html>

