<?php $settings = get_settings() ?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="kuruyemiş, çiğ kuruyemiş, kuru meyve, fındık, lokum, cezerye, krokan, Türk kahvesi, ay çekirdeği, antep fıstığı, badem, kaju, ceviz, karışık kuruyemiş, fıstık, mısır, leblebi, kabak çekirdeği, çekirdek">
	<meta name="author" content="Yunus Emre Erkesikbaş | Muhammed Talha Ergüney">
	<meta name="robots" content="">
	<meta name="description" content="<?php echo $settings->site_title?>">
	<meta property="og:title" content="<?php echo $settings->site_title?>">
	<meta property="og:description" content="<?php echo $settings->site_title?>">
	<meta property="og:image" content="<?php echo base_url("admin/uploads/settings_v/$settings->logo")?>">
	<title><?php echo $settings->site_title?></title>
	<link rel="icon" href="<?php echo base_url("admin/uploads/settings_v/$settings->logo")?>" type="image/gif" sizes="20x20">
	<?php $this->load->view("includes/include_style") ?>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>





