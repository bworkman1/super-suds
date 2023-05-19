<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo isset($title) ? $title : 'Super Suds Pressure Washing' ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="x-ua-compatible" content="ie=edge; chrome=1">
	<meta content="<?php echo $keywords; ?>" name="keywords">
	<meta content="<?php echo $description; ?>" name="description">
	<meta name="robots" content="index, follow">

	<meta property="og:type" content="<?php echo COMPANY_NAME; ?>>" />
	<meta property="og:title" content="<?php echo isset($title) ? $title : 'Super Suds Pressure Washing' ?>" />
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:image" content="<?php echo base_url(sprintf('assets\img\%s\%s', META_IMAGE_DIRECTORY, $image), BASE_URL_PROTOCOL); ?>" />
	<meta property="og:url" content="<?php echo current_url(); ?>" />

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/img/favicon/apple-touch-icon.png', BASE_URL_PROTOCOL); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/favicon/favicon-32x32.png', BASE_URL_PROTOCOL); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicon/favicon-16x16.png', BASE_URL_PROTOCOL); ?>">
	<link rel="manifest" href="<?php echo base_url('assets/img/favicon/site.webmanifest', BASE_URL_PROTOCOL); ?>">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

	<!-- Libraries Stylesheet -->
	<link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css', BASE_URL_PROTOCOL); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/lib/animate/animate.min.css', BASE_URL_PROTOCOL); ?>" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css', BASE_URL_PROTOCOL); ?>" rel="stylesheet">

	<?php
		if(isset($css)) {
			foreach($css as $stylesheet) {
				echo '<link href="' . base_url($stylesheet, BASE_URL_PROTOCOL) . '" rel="stylesheet">';
			}
		}
	?>

	<!-- Template Stylesheet -->
	<link href="<?php echo base_url('assets/css/style.css', BASE_URL_PROTOCOL); ?>" rel="stylesheet">
</head>

<body>
