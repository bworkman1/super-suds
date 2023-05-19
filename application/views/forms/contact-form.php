<?php

$firstName = 	isset($_POST['name']) 			? htmlspecialchars($_POST['first_name']) 	: '';
$email = 		isset($_POST['email']) 			? htmlspecialchars($_POST['email']) 		: '';
$phone = 		isset($_POST['phone']) 			? htmlspecialchars($_POST['phone']) 		: '';
$phone = 		isset($_POST['address']) 		? htmlspecialchars($_POST['address']) 		: '';
$details = 		isset($_POST['description']) 	? htmlspecialchars($_POST['description']) 		: '';
?>

<html>
<body style="background-color: #cecece;">
<div style="max-width: 800px; margin: 0 auto; background: #fff; padding:5px;">
	<h1><?php echo COMPANY_NAME ?> Quote Request</h1>
	<p>A potential customer has filled out the form located at <a target="_blank" href="<?php echo base_url('/contact-us/', BASE_URL_PROTOCOL); ?>"><?php echo base_url('/contact-us/', BASE_URL_PROTOCOL); ?></a> and the details are below.</p>

	<div style="border:1px solid #444">
		<div style="width:28%; float:left; padding: 5px"><b>First Name:</b></div>
		<div style="width:68%; float:left; padding: 5px"><?php echo $firstName; ?></div>
		<div style="clear:both;"></div>

		<div style="width:28%; float:left; padding: 5px"><b>Last Name:</b></div>
		<div style="width:68%; float:left; padding: 5px"><?php echo $lastName; ?></div>
		<div style="clear:both;"></div>

		<div style="width:28%; float:left; padding: 5px"><b>Email:</b></div>
		<div style="width:68%; float:left; padding: 5px"><?php echo $email; ?></div>
		<div style="clear:both;"></div>

		<div style="width:28%; float:left; padding: 5px"><b>Phone:</b></div>
		<div style="width:68%; float:left; padding: 5px"><?php echo $phone; ?></div>
		<div style="clear:both;"></div>

		<div style="width:28%; float:left; padding: 5px"><b>Details:</b></div>
		<div style="width:68%; float:left; padding: 5px"><?php echo $details; ?></div>
		<div style="clear:both;"></div>

		<?php if(!empty($file_name)) { ?>
			<div style="width:28%; float:left; padding: 5px"><b>Upload Image:</b></div>
			<div style="width:68%; float:left; padding: 5px"><a href="<?php echo base_url('assets/images/user_file_uploads/' . $file_name, BASE_URL_PROTOCOL); ?>" target="_blank">View Upload</a></div>
			<div style="clear:both;"></div>
		<?php } ?>
	</div>
</div>
</body>
</html>
