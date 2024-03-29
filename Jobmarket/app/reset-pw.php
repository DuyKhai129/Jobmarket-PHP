<?php
$opt = $_GET['opt'];
require '../constants/settings.php';
require '../constants/db_config.php';
require '../constants/uniques.php';

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
	$stmt->bindParam(':email', $opt);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);
	
	if ($rec == "0") {
	    print '
	 <div class="alert alert-warning">
    Không có tài khoản nào được liên kết với email <strong>'.$opt.'</strong>
	 </div>
     ';
		
	}else{
    foreach($result as $row)
    {
	
    $myfname = $row['first_name'];
	$mylname = $row['last_name'];
	$mymail = $row['email'];
	$full_name = "$myfname $mylname";
	$idt = 'token'.get_rand_numbers(17).'';
    $token = md5($idt);
    $def_link = 'http://'.$_SERVER['HTTP_HOST'].'/reset.php?token='.$token.'';

    $stmt = $conn->prepare("DELETE FROM tbl_tokens WHERE email = :email");
	$stmt->bindParam(':email', $opt);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO tbl_tokens (email, token) VALUES (:email, :token)");
    $stmt->bindParam(':email', $opt);
	$stmt->bindParam(':token', $token);
    $stmt->execute();	

	$message = "Hellow!! <b>$full_name</b>, <br>Nhấp chuột <a href='$actual_link'>ở đây</a> để thiết lập lại mật khẩu của bạn.";   
    require '../mail/PHPMailerAutoload.php';

    $mail = new PHPMailer;
                          

    $mail->isSMTP();                                      
    $mail->Host = $smtp_host;
    $mail->SMTPAuth = true;                           
    $mail->Username = $smtp_user;               
    $mail->Password = $smtp_pass;                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                   

    $mail->setFrom($smtp_user, 'bwirejobs@no-reply');
    $mail->addAddress($mymail , $full_name);              
   
    $mail->isHTML(true);                                 

    $mail->Subject = 'Password Reset';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    if(!$mail->send()) {
    print '
	 <div class="alert alert-danger">
     Đã xảy ra lỗi vui lòng liên hệ với chúng tôi để được trợ giúp thêm.
	 </div>
     ';
    } else {
    print '
	 <div class="alert alert-info">
     Một liên kết để đặt lại mật khẩu của bạn đã được gửi đến '.$mymail.'.
	 </div>
     ';
    }

	
    }
} 


					  
	}catch(PDOException $e)
    {

    }
	


?>
