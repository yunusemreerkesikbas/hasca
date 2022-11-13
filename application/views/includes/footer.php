<?php $settings = get_settings() ?>

<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row gy-5 footer-layout">
				<div class="col-lg-3 col-md-6">
					<div class="footer-item">
						<a href="index.html"><img style="width: 100px;" alt="image" src="<?php echo base_url("assets/assets/img/hasca-logo.svg")?>"></a>
						<p>Gelişmelerden haberdar olmak için bizi takip etmeyi unutmayın!</p>
						<form>
							<div class="input-with-btn d-flex jusify-content-start align-items-strech">
								<input type="text" placeholder="Email ">
								<button type="submit"><img alt="image"
														   src="<?php echo base_url("assets")?>/assets/images/icons/send-icon.svg"></button>
							</div>
						</form>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
					<div class="footer-item">
						<h5>Hızlı Menü</h5>
						<ul class="footer-list">
							<li><a href="<?php echo base_url()?>">Ana Sayfa</a></li>
							<li><a href="<?php echo base_url("hakkimizda")?>">Kurumsal</a></li>
							<li><a href="<?php echo base_url("urunlerimiz")?>">Ürünlerimiz</a></li>
							<li><a href="<?php echo base_url("medya")?>">Medya</a></li>
							<li><a href="<?php echo base_url("katalog")?>">E - Katalog</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-item">
						<h5>İletişim</h5>
						<ul class="address-list">
							<li>
								<svg width="18" height="25" viewBox="0 0 14 18" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M7 18C7 18 13.75 11.6033 13.75 6.75C13.75 4.95979 13.0388 3.2429 11.773 1.97703C10.5071 0.711159 8.79021 0 7 0C5.20979 0 3.4929 0.711159 2.22703 1.97703C0.961159 3.2429 0.25 4.95979 0.25 6.75C0.25 11.6033 7 18 7 18ZM7 10.125C6.10489 10.125 5.24645 9.76942 4.61351 9.13649C3.98058 8.50355 3.625 7.64511 3.625 6.75C3.625 5.85489 3.98058 4.99645 4.61351 4.36351C5.24645 3.73058 6.10489 3.375 7 3.375C7.89511 3.375 8.75355 3.73058 9.38649 4.36351C10.0194 4.99645 10.375 5.85489 10.375 6.75C10.375 7.64511 10.0194 8.50355 9.38649 9.13649C8.75355 9.76942 7.89511 10.125 7 10.125Z"/>
								</svg>
								<a style="color: #fff;"><?php echo $settings->address?></a>
							</li>
							<li>
								<svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										  d="M2.12018 0.574918C2.31702 0.378368 2.55339 0.225896 2.81362 0.127607C3.07385 0.0293176 3.352 -0.0125448 3.62963 0.00479393C3.90727 0.0221327 4.17805 0.0982766 4.42402 0.22818C4.67 0.358083 4.88557 0.538779 5.05643 0.758293L7.0758 3.35254C7.44593 3.82842 7.57643 4.44829 7.43018 5.03329L6.8148 7.49704C6.78299 7.62465 6.78471 7.75832 6.81979 7.88507C6.85488 8.01182 6.92214 8.12734 7.01505 8.22042L9.77918 10.9845C9.87237 11.0776 9.98808 11.145 10.115 11.1801C10.242 11.2152 10.3759 11.2168 10.5037 11.1848L12.9663 10.5694C13.255 10.4972 13.5563 10.4916 13.8475 10.553C14.1387 10.6144 14.4121 10.7412 14.6471 10.9238L17.2413 12.942C18.1739 13.6677 18.2594 15.0458 17.4247 15.8794L16.2614 17.0427C15.4289 17.8752 14.1847 18.2408 13.0248 17.8324C10.0561 16.7879 7.36073 15.0884 5.13855 12.8599C2.91025 10.6381 1.21074 7.94306 0.166053 4.97479C-0.241197 3.81604 0.124428 2.57067 0.956928 1.73817L2.12018 0.574918Z"/>
								</svg>
								<a href="tel:+8801761456456"><?php echo $settings->phone_1?></a>
							</li>
							<li>
								<svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M0 2.25C0 1.65326 0.237053 1.08097 0.65901 0.65901C1.08097 0.237053 1.65326 0 2.25 0L15.75 0C16.3467 0 16.919 0.237053 17.341 0.65901C17.7629 1.08097 18 1.65326 18 2.25V11.25C18 11.8467 17.7629 12.419 17.341 12.841C16.919 13.2629 16.3467 13.5 15.75 13.5H4.96575C4.66741 13.5001 4.3813 13.6186 4.17037 13.8296L0.96075 17.0392C0.882147 17.1181 0.781932 17.1718 0.672791 17.1936C0.563649 17.2154 0.450486 17.2044 0.347624 17.1618C0.244763 17.1193 0.156827 17.0473 0.0949469 16.9547C0.0330667 16.8622 2.36417e-05 16.7534 0 16.6421L0 2.25ZM3.9375 3.375C3.78832 3.375 3.64524 3.43426 3.53975 3.53975C3.43426 3.64524 3.375 3.78832 3.375 3.9375C3.375 4.08668 3.43426 4.22976 3.53975 4.33525C3.64524 4.44074 3.78832 4.5 3.9375 4.5H14.0625C14.2117 4.5 14.3548 4.44074 14.4602 4.33525C14.5657 4.22976 14.625 4.08668 14.625 3.9375C14.625 3.78832 14.5657 3.64524 14.4602 3.53975C14.3548 3.43426 14.2117 3.375 14.0625 3.375H3.9375ZM3.9375 6.1875C3.78832 6.1875 3.64524 6.24676 3.53975 6.35225C3.43426 6.45774 3.375 6.60082 3.375 6.75C3.375 6.89918 3.43426 7.04226 3.53975 7.14775C3.64524 7.25324 3.78832 7.3125 3.9375 7.3125H14.0625C14.2117 7.3125 14.3548 7.25324 14.4602 7.14775C14.5657 7.04226 14.625 6.89918 14.625 6.75C14.625 6.60082 14.5657 6.45774 14.4602 6.35225C14.3548 6.24676 14.2117 6.1875 14.0625 6.1875H3.9375ZM3.9375 9C3.78832 9 3.64524 9.05926 3.53975 9.16475C3.43426 9.27024 3.375 9.41332 3.375 9.5625C3.375 9.71168 3.43426 9.85476 3.53975 9.96025C3.64524 10.0657 3.78832 10.125 3.9375 10.125H9.5625C9.71168 10.125 9.85476 10.0657 9.96025 9.96025C10.0657 9.85476 10.125 9.71168 10.125 9.5625C10.125 9.41332 10.0657 9.27024 9.96025 9.16475C9.85476 9.05926 9.71168 9 9.5625 9H3.9375Z"/>
								</svg>
								<a
									href="https://demo.egenslab.com/cdn-cgi/l/email-protection#f39a9d959cb3968b929e839f96dd909c9e"><span
										class="__cf_email__"
										data-cfemail="4920272f26092c31282439252c672a2624"><?php echo $settings->email?></span></a>
							</li>
						</ul>
						<ul class="footer-social gap-3">
							<li><a target="_blank" href="<?php echo $settings->facebook?>"><i class='bx bxl-facebook'></i></a></li>
							<li><a target="_blank" href="<?php echo $settings->instagram?>"><i class='bx bxl-instagram'></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row d-flex align-items-center g-3">
				<div class="col-lg-6 d-flex justify-content-lg-start justify-content-center">
					<p>Copyright 2022 <a href="https://www.linkedin.com/in/yunusemreerkesikbas/" class="egns-lab">yee</a> | Design By <a
							href="https://www.linkedin.com/in/muhammed-talha-erg%C3%BCney-43117323a/"
							class="egns-lab">ergytalha</a></p>
				</div>

			</div>
		</div>
	</div>
</footer>
