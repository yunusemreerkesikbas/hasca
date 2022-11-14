<?php $settings = get_settings() ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="<?php echo $settings->site_description?>" />

<title><?php echo $settings->site_title?> </title>

<link rel="shortcut icon" sizes="196x196" href="<?php echo base_url("admin/uploads/settings_v/$settings->logo"); ?>">
<link rel="shortcut icon" href="<?php echo base_url("assets"); ?>/assets/images/favicon.ico">

<?php $this->load->view("includes/include_style"); ?>

