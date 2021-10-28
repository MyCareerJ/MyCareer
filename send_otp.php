 <?php 


	
	
		$otp = rand(1111,9999);
	$email= "hgopee5@gmail.com";
		$html = "$otp is your Craft Bazaar private code. Don't share it.";
		
		include('smtp/PHPMailerAutoload.php');
		$mail=new PHPMailer(true);
		$mail->isSMTP();
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->SMTPSecure = "tls";
		$mail->SMTPAuth = true;
		$mail->Username = "hgopee5@gmail.com";
		$mail->Password = "Hrithika1130";
		$mail->SetFrom("hgopee5@gmail.com");
		$mail->addAddress($email);
		$mail->IsHTML(true);
		$mail->Subject = "New OTP";
		$mail->Body = $html;
		$mail->SMTPOptions = array('ssl'=>array(
			'verify_peer'=>false,
			'verify_peer_name'=>false,
			'allow_self_signed'=>false
		));
		if($mail->send()){
			echo "done";
		}else{
		
		}
		
	
?> 