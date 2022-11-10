<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("includes/head"); ?>
<body>

<?php $this->load->view("includes/header"); ?>

<?php $this->load->view("includes/banner"); ?>




<div class="about-section3 position-relative overflow-hidden pt-120" id="about">
	<img src="<?php  echo base_url("assets")?>/assets/images/bg/watermark2-bg.png" alt="image" class="watermark2-bg">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center g-4">
			<div class="col-xl-7 col-lg-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
				<img src="<?php  echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg" class="img-fluid about4-image" alt="image">
			</div>
			<div class="col-xl-5 col-lg-6">
				<div class="about3-content style-2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".2s">
					<h3>Geçmişten aldığımız güçle, geleceğe daha güçlü bakıyoruz.</h3>
					<p class="para">Lorem Ipsum is simply dumm of free available in market the way printing and
						typesetting industry has been the industry's standard dummy text ever.</p>
					<ul class="about3-list">
						<li>Price of additional materials or parts (if needed)</li>
						<li>Transportation cost for carrying new materials/parts</li>
						<li>You will get 100% money back offer.</li>
					</ul>
					<div class="about-footer d-flex jusify-content-start align-items-center flex-wrap gap-4">
						<a href="about.html" class="eg-btn btn--primary2 btn--lg">DAHA FAZLA</a>
						<div class="experience d-flex flex-row align-items-center">
							<svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_445_100)">
									<path d="M21.45 0.223437C21.2695 0.403906 21.2266 0.532812 21.2266 0.859375C21.2266 1.18594 21.2695 1.31484 21.45 1.49531C21.6305 1.67578 21.7594 1.71875 22.0859 1.71875C22.4125 1.71875 22.5414 1.67578 22.7219 1.49531C22.9023 1.31484 22.9453 1.18594 22.9453 0.859375C22.9453 0.532812 22.9023 0.403906 22.7219 0.223437C22.5414 0.0429688 22.4125 0 22.0859 0C21.7594 0 21.6305 0.0429688 21.45 0.223437Z"/>
									<path d="M16.9898 0.764866C14.4547 1.59846 12.1258 3.0594 10.3039 4.95861C8.1125 7.23596 6.64297 10.0633 5.98984 13.2688C5.82656 14.1024 5.80078 14.4891 5.80078 16.3281C5.80078 18.1672 5.82656 18.5539 5.98984 19.3875C6.64297 22.593 8.06953 25.343 10.2867 27.6719C10.7508 28.1617 11 28.4883 10.9742 28.5656C10.9484 28.6344 9.77969 30.7055 8.3875 33.1719C6.13594 37.1336 5.84375 37.6922 5.84375 38.0188C5.84375 38.5516 6.14453 38.8438 6.69453 38.8438C6.90938 38.8352 8.34453 38.5774 9.88281 38.2508C11.9367 37.8211 12.693 37.6922 12.7359 37.7696C12.7703 37.8211 13.2602 39.1789 13.8359 40.786C14.5922 42.9086 14.9187 43.7422 15.0648 43.8453C15.3398 44.0688 15.9672 44.0516 16.2164 43.8196C16.3195 43.7164 17.6773 41.3961 19.2242 38.6633C20.7711 35.9305 22.0602 33.6961 22.0859 33.6961C22.1117 33.6961 23.4008 35.9305 24.9477 38.6633C26.4945 41.3961 27.8523 43.7164 27.9641 43.8196C28.2477 44.086 28.8664 44.0688 29.1414 43.7938C29.2875 43.6563 29.657 42.7196 30.3273 40.8117C30.8687 39.2821 31.35 37.95 31.4016 37.8469C31.4961 37.6664 31.5047 37.6664 34.2891 38.2508C35.8273 38.5688 37.2625 38.8352 37.4773 38.8438C38.0273 38.8438 38.3281 38.5516 38.3281 38.0188C38.3281 37.6836 38.0445 37.1422 35.793 33.1719C34.3922 30.7141 33.232 28.643 33.2063 28.5742C33.1719 28.4883 33.4039 28.1789 33.8852 27.6719C36.1023 25.343 37.5289 22.593 38.182 19.3875C38.3453 18.5539 38.3711 18.1758 38.3711 16.3281C38.3711 14.4891 38.3453 14.1024 38.1734 13.2688C37.5289 10.0719 36.068 7.23596 33.868 4.95861C32.5188 3.55783 31.1867 2.58674 29.3648 1.66721C28.0414 1.00549 26.1766 0.386742 25.7469 0.464085C25.3172 0.541428 25.0508 0.876583 25.0508 1.33205C25.0508 1.89924 25.2656 2.07112 26.4516 2.44924C31.625 4.10783 35.243 8.18127 36.4117 13.6641C36.6523 14.7985 36.6266 18.0297 36.3688 19.1985C35.0453 25.1367 30.6367 29.4766 24.7672 30.6367C23.2633 30.9375 20.9086 30.9375 19.4047 30.6367C14.1797 29.6055 9.96016 25.936 8.29297 20.9516C7.7 19.1727 7.61406 18.5797 7.61406 16.3281C7.61406 14.0766 7.7 13.4836 8.29297 11.7047C9.79688 7.21877 13.2859 3.83284 17.8492 2.41487C18.8891 2.0883 19.1211 1.89065 19.1211 1.32346C19.1211 1.03127 19.0695 0.902367 18.8977 0.721897C18.5453 0.369553 18.1586 0.378147 16.9898 0.764866ZM13.2516 30.1125C15.1164 31.3242 17.5398 32.2266 19.6969 32.5102C20.118 32.5703 20.4617 32.6477 20.4703 32.6906C20.4961 32.8024 15.8641 40.9063 15.8039 40.8375C15.7781 40.8031 15.3914 39.7547 14.9531 38.5C14.0422 35.9133 13.9477 35.75 13.3289 35.75C13.1141 35.75 11.9453 35.9649 10.7422 36.2141C9.53906 36.4719 8.54219 36.6696 8.53359 36.661C8.50781 36.6438 12.4781 29.6485 12.5125 29.6485C12.5297 29.6485 12.8648 29.8547 13.2516 30.1125ZM33.6875 33.1719C34.7703 35.0797 35.6469 36.6524 35.6383 36.661C35.6297 36.6696 34.6328 36.4719 33.4297 36.2141C32.2266 35.9649 31.0578 35.7586 30.843 35.75C30.2242 35.75 30.1297 35.9133 29.2188 38.5C28.7805 39.7547 28.3938 40.8031 28.368 40.8375C28.3164 40.8977 23.7102 32.8883 23.6844 32.6992C23.6844 32.6563 24.0281 32.5703 24.4664 32.5102C26.6578 32.218 29.3047 31.2211 31.0234 30.0438C31.3328 29.8289 31.6078 29.6656 31.6508 29.6742C31.6852 29.6828 32.6047 31.2555 33.6875 33.1719Z"/>
									<path d="M20.1523 3.52344C19.2328 3.66953 17.9352 4.03906 17.0586 4.41719C15.357 5.13047 14.1023 6.01562 12.7531 7.41641C11.0344 9.19531 9.94297 11.2578 9.40156 13.75C9.27266 14.3344 9.23828 14.8414 9.23828 16.3281C9.23828 18.3391 9.31563 18.8977 9.80547 20.393C10.4414 22.3352 11.4125 23.882 12.968 25.4461C14.8672 27.3453 16.8867 28.4453 19.5078 29.0125C20.5563 29.2445 23.6156 29.2445 24.6641 29.0125C27.3023 28.4367 29.2961 27.3453 31.2039 25.4461C33.1031 23.5383 34.1945 21.5445 34.7703 18.9062C35.0023 17.8578 35.0023 14.7984 34.7703 13.75C34.1945 11.1117 33.1031 9.11797 31.2039 7.21016C29.3305 5.33672 27.4227 4.27969 24.8445 3.67813C23.9938 3.48047 21.0547 3.38594 20.1523 3.52344ZM23.9766 5.38828C28.5312 6.14453 32.2523 9.86563 33.0344 14.4289C33.3266 16.1219 33.1719 18.2188 32.6391 19.8086C31.7195 22.5414 29.7602 24.8359 27.1477 26.2023C24.5438 27.5688 21.3297 27.8094 18.5109 26.8555C15.3398 25.7727 12.6156 23.0398 11.55 19.8773C10.8023 17.6516 10.8023 15.0047 11.5586 12.7617C12.057 11.2492 13.0797 9.63359 14.2828 8.44766C16.8953 5.87812 20.3672 4.77812 23.9766 5.38828Z"/>
									<path d="M21.682 8.0352C21.4328 8.13833 21.2781 8.40473 20.2898 10.3727L19.1813 12.5985L16.9984 12.925C15.8039 13.1055 14.6781 13.286 14.5063 13.329C14.0852 13.4407 13.8359 13.7672 13.8359 14.2055C13.8359 14.5493 13.8875 14.6094 15.6148 16.3454L17.4023 18.1329L17.0328 20.35C16.5945 23.0227 16.5859 23.1344 16.9211 23.4696C17.368 23.9079 17.5656 23.8477 19.9633 22.6102L22.0945 21.5016L24.2172 22.6102C26.6062 23.8477 26.8039 23.9079 27.2508 23.4696C27.5859 23.1344 27.5773 23.0227 27.1391 20.35L26.7695 18.1329L28.557 16.3454C30.2844 14.6094 30.3359 14.5493 30.3359 14.2055C30.3359 13.7672 30.0867 13.4407 29.6656 13.329C29.4938 13.286 28.368 13.0969 27.1734 12.925L24.9906 12.5985L23.882 10.3727C22.8594 8.33599 22.7391 8.14692 22.4727 8.02661C22.1117 7.88052 22.0344 7.88052 21.682 8.0352ZM22.8766 12.504C23.3664 13.475 23.7016 14.0508 23.8477 14.1454C23.9766 14.2313 24.6984 14.3774 25.6695 14.5321C26.5633 14.6696 27.3367 14.7899 27.4055 14.7985C27.4656 14.8157 26.9844 15.3399 26.3313 15.9758C25.6695 16.6118 25.0938 17.2133 25.0336 17.3079C24.8789 17.5743 24.8961 17.9438 25.1797 19.5852C25.3172 20.4102 25.4203 21.1063 25.4031 21.1149C25.3859 21.1321 24.6984 20.7969 23.8734 20.3672C22.8594 19.8516 22.275 19.5938 22.0859 19.5938C21.8969 19.5938 21.3125 19.8516 20.2984 20.3758C19.4734 20.7969 18.7859 21.1407 18.7688 21.1235C18.7516 21.1063 18.8547 20.4102 18.9922 19.5852C19.2758 17.9438 19.293 17.5829 19.1383 17.3079C19.0781 17.2047 18.4938 16.6118 17.8406 15.9758C17.1703 15.3313 16.6977 14.8157 16.7664 14.7985C16.8352 14.7899 17.6086 14.6696 18.5023 14.5321C19.4734 14.3774 20.1953 14.2313 20.3242 14.1454C20.4703 14.0508 20.8055 13.475 21.2953 12.504C21.7078 11.679 22.0602 11 22.0859 11C22.1117 11 22.4641 11.679 22.8766 12.504Z"/>
								</g>
								<defs>
									<clipPath id="clip0_445_100">
										<rect width="44" height="44" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<h4 class="mb-0">20+ Yıllık Tecrübe</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<div class="portfolio-section pt-120 pb-120">
	<img src="<?php echo base_url("assets")?>/assets/images/bg/section-bg1.png" alt="image" class="img-fluid section-bg-top">
	<img src="<?php echo base_url("assets")?>/assets/images/bg/section-bg-bttm.png" alt="image" class="img-fluid section-bg-bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="section-title primary5">
					<span>-Ürün Grupları-</span>
					<h3>Ürünlerimiz</h3>
					<p class="para">Get the most of reduction in your team’s operating costs for the whole product
						which creates amazing UI/UX experiences.</p>
				</div>
			</div>
		</div>
		<div class="row position-relative justify-content-center">
			<div class="swiper portfolio-slider1 swiper-fix">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<div class="portfolio-img">
								<img alt="image" src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg">
							</div>
							<div class="portfolio-content">
								<span>Kuruyemiş</span>
								<h4><a href="project-details.html">Fındık,fıstık,kaju ve daha fazlası...</a></h4>
								<a href="project-details.html" class="text-btn">Ürünleri gör
									<svg width="18"
										 height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
										<path
												d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
										<path
												d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<div class="portfolio-img">
								<img alt="image" src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg">
							</div>
							<div class="portfolio-content">
								<span>Kuruyemiş</span>
								<h4><a href="project-details.html">Fındık,fıstık,kaju ve daha fazlası...</a></h4>
								<a href="project-details.html" class="text-btn">Ürünleri gör
									<svg width="18"
										 height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
										<path
												d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
										<path
												d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<div class="portfolio-img">
								<img alt="image" src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg">
							</div>
							<div class="portfolio-content">
								<span>Kuruyemiş</span>
								<h4><a href="project-details.html">Fındık,fıstık,kaju ve daha fazlası...</a></h4>
								<a href="project-details.html" class="text-btn">Ürünleri gör
									<svg width="18"
										 height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
										<path
												d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
										<path
												d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<div class="portfolio-img">
								<img alt="image" src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg">
							</div>
							<div class="portfolio-content">
								<span>Kuruyemiş</span>
								<h4><a href="project-details.html">Fındık,fıstık,kaju ve daha fazlası...</a></h4>
								<a href="project-details.html" class="text-btn">Ürünleri gör
									<svg width="18"
										 height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
										<path
												d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
										<path
												d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
									</svg>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="slider-bottom d-flex justify-content-between align-items-center">
				<div class="swiper-pagination style-3 d-block"></div>
			</div>

		</div>
	</div>
</div>


<div class="activities-section pt-80 pb-80">
	<img src="<?php echo base_url("assets")?>/assets/images/bg/water-mark1.png" alt="image" class="img-fluid water-mark1">
<!--	<img src="--><?php //echo base_url("assets")?><!--/assets/images/bg/water-mark2.png" alt="image" class="img-fluid water-mark2">-->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="section-title primary3">
					<span>Neden Biz?</span>
					<h3>Bizi neden tercih etmelisiniz?</h3>
					<p class="para">Get the most of reduction in your team’s operating costs for the whole product
						which creates amazing UI/UX experiences.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="activities-area">

				<div class="company-counter wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<div class="row g-4 d-flex justify-content-center">
						<div class="col-lg-3 col-md-6 col-sm-10 col-10">
							<div class="counter-single text-center d-flex flex-row wow animate fadeInDown"
								 data-wow-duration="1.5s" data-wow-delay="0.6s">
								<div class="coundown d-flex flex-column">
									<h2 class="odometer" data-odometer-final="20">&nbsp;</h2>
									<a href="#">Yıllık tecrübe</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-10 col-10">
							<div class="counter-single text-center d-flex flex-row wow animate fadeInDown"
								 data-wow-duration="1.5s" data-wow-delay="0.6s">
								<div class="coundown d-flex flex-column">
									<h2 class="odometer" data-odometer-final="5">&nbsp;</h2>
									<a href="#">Farklı ürün çeşidi</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-10 col-10">
							<div class="counter-single text-center d-flex flex-row wow animate fadeInDown"
								 data-wow-duration="1.5s" data-wow-delay="0.6s">
								<div class="coundown d-flex flex-column">
									<h2 class="odometer" data-odometer-final="30">&nbsp;</h2>
									<a href="#">Marka</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-10 col-10">
							<div class="counter-single text-center d-flex flex-row wow animate fadeInDown"
								 data-wow-duration="1.5s" data-wow-delay="0.8s">
								<div class="coundown d-flex flex-column">
									<h2 class="odometer" data-odometer-final="1000">&nbsp;</h2>
									<a href="#">Mutlu müşteri</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>






<div class="blog-section pt-80 pb-80">
	<img src="<?php echo base_url("assets")?>/assets/images/bg/water-mark1.png" alt="image" class="img-fluid water-mark1">
	<img src="<?php echo base_url("assets")?>/assets/images/bg/water-mark2.png" alt="image" class="img-fluid water-mark2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="section-title primary1">
					<span>-Blog-</span>
					<h3>Blog & Haberler</h3>
					<p class="para">Get the most of reduction in your team’s operating costs for the whole product
						which creates amazing UI/UX experiences.</p>
				</div>
			</div>
		</div>
		<div class="row position-relative justify-content-center g-4">
			<div class="col-lg-4 col-md-6 col-sm-10">
				<div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<div class="blog-image">
						<img src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-1.jpg" class="img-fluid" alt="image">
					</div>
					<div class="blog-content hover-border1">
						<h4><a href="blog-details.html">Kuruyemişin içindeki mucize</a>
						</h4>
						<a href="project-details.html" class="text-btn">Devamını oku
							<svg width="18"
								 height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
								<path
										d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
								<path
										d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
							</svg>
						</a>

					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-10">
				<div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<div class="blog-image">
						<img src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg" class="img-fluid" alt="image">
					</div>
					<div class="blog-content hover-border1">
						<h4><a href="blog-details.html">Kuruyemişin içindeki mucize</a>
						</h4>
						<a href="project-details.html" class="text-btn">Devamını oku
							<svg width="18"
								 height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
								<path
										d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
								<path
										d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
							</svg>
						</a>

					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-10">
				<div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<div class="blog-image">
						<img src="<?php echo base_url("assets")?>/assets/images/bg/about-bg-2.jpg" class="img-fluid" alt="image">
					</div>
					<div class="blog-content hover-border1">
						<h4><a href="blog-details.html">Kuruyemişin içindeki mucize</a>
						</h4>
						<a href="project-details.html" class="text-btn">Devamını oku
							<svg width="18"
								 height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
								<path
										d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
								<path
										d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
							</svg>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="sponsor-section pt-80 pb-80">
	<div class="container">
		<div class="row align-items-center justify-content-lg-start justify-content-center">
			<div class="col-md-6 text-lg-start text-center">
				<div class="section-title primary5 text-lg-start text-center mb-0">
					<span>-Referanslar-</span>
					<h3 class="mb-0">Bizi tercih eden markalar</h3>
				</div>
			</div>
			<div class="col-md-6 d-lg-flex justify-content-end d-none">
				<div class="slider-arrows2 text-center d-flex gap-4">
					<div class="sponsor-prev1 swiper-prev-arrow" tabindex="0" role="button"
						 aria-label="Previous slide">
						<svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
							<circle cx="23" cy="23" r="22.25" stroke-width="1.5"/>
							<path
									d="M20 27.573V23V18.427C20 18.2574 19.8022 18.1648 19.672 18.2734L14 23L19.672 27.7266C19.8022 27.8352 20 27.7426 20 27.573Z"/>
							<path
									d="M32 23.5C32.2761 23.5 32.5 23.2761 32.5 23C32.5 22.7239 32.2761 22.5 32 22.5V23.5ZM19.672 27.7266L19.9921 27.3425V27.3425L19.672 27.7266ZM14 23L13.6799 22.6159L13.219 23L13.6799 23.3841L14 23ZM19.672 18.2734L19.3519 17.8893L19.3519 17.8893L19.672 18.2734ZM32 22.5H20V23.5H32V22.5ZM19.5 23V27.573H20.5V23H19.5ZM19.9921 27.3425L14.3201 22.6159L13.6799 23.3841L19.3519 28.1107L19.9921 27.3425ZM14.3201 23.3841L19.9921 18.6575L19.3519 17.8893L13.6799 22.6159L14.3201 23.3841ZM19.5 18.427V23H20.5V18.427H19.5ZM19.9921 18.6575C19.7967 18.8203 19.5 18.6814 19.5 18.427H20.5C20.5 17.8335 19.8078 17.5093 19.3519 17.8893L19.9921 18.6575ZM19.5 27.573C19.5 27.3186 19.7967 27.1797 19.9921 27.3425L19.3519 28.1107C19.8078 28.4907 20.5 28.1665 20.5 27.573H19.5Z"/>
						</svg>
					</div>
					<div class="sponsor-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide">
						<svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
							<circle cx="23" cy="23" r="23"/>
							<path
									d="M26 18.427V23V27.573C26 27.7426 26.1978 27.8352 26.328 27.7266L32 23L26.328 18.2734C26.1978 18.1648 26 18.2574 26 18.427Z"/>
							<path
									d="M14 22.5C13.7239 22.5 13.5 22.7239 13.5 23C13.5 23.2761 13.7239 23.5 14 23.5V22.5ZM26.328 18.2734L26.0079 18.6575V18.6575L26.328 18.2734ZM32 23L32.3201 23.3841L32.781 23L32.3201 22.6159L32 23ZM26.328 27.7266L26.6481 28.1107L26.6481 28.1107L26.328 27.7266ZM14 23.5H26V22.5H14V23.5ZM26.5 23V18.427H25.5V23H26.5ZM26.0079 18.6575L31.6799 23.3841L32.3201 22.6159L26.6481 17.8893L26.0079 18.6575ZM31.6799 22.6159L26.0079 27.3425L26.6481 28.1107L32.3201 23.3841L31.6799 22.6159ZM26.5 27.573V23H25.5V27.573H26.5ZM26.0079 27.3425C26.2033 27.1797 26.5 27.3186 26.5 27.573H25.5C25.5 28.1665 26.1922 28.4907 26.6481 28.1107L26.0079 27.3425ZM26.5 18.427C26.5 18.6814 26.2033 18.8203 26.0079 18.6575L26.6481 17.8893C26.1922 17.5093 25.5 17.8335 25.5 18.427H26.5Z"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center position-relative mt-60">
			<div class="swiper sponsor-slider swiper-fix wow fadeInUp" data-wow-duration="1.5s"
				 data-wow-delay="0.2s">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor1.png" alt="image">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor2.png" alt="image">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor3.png" alt="image">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor5.png" alt="image">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor6.png" alt="image">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor4.png" alt="image">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor3.png" alt="image">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="single-sponsor ">
							<img src="<?php echo base_url("assets")?>/assets/images/bg/sponsor5.png" alt="image">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php $this->load->view("includes/footer"); ?>

<?php $this->load->view("includes/include_script"); ?>

</body>
