<?php $settings = get_settings(); ?>
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

		<div class="page-content">
			<div class="container-fluid">

				<!-- start page title -->
				<div class="row">
					<div class="col-12">
						<div class="page-title-box d-sm-flex align-items-center justify-content-between">

							<h4 class="mb-sm-0 font-size-18">Hoşgeldiniz,<strong> <?php echo $settings->site_title ?></strong><span>
                                    </span></h4>




						</div>
					</div>
				</div>
				<!-- end page title -->

				<!-- end row -->


			</div>
		</div>
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
