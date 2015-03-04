<?
ini_set("display_errors", "off"); 
ini_set("log_errors", "on");
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'].'/contact/log.log');
set_include_path('/path/to/zend/');
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$name = $_POST['name'];
	$msg = $_POST['msg'];
	$from = $_POST['from'];
	include 'Zend/Validate/EmailAddress.php';
	$emailValidator     = new Zend_Validate_EmailAddress();
	if(trim($email) == '' || trim($name) == '' || trim($msg) == ''){
		echo '<div class="error"><span class="english">You must fill every fields</span><br/><span class="french">Vous devez remplir tous les champs</span></div>';
		exit;
	}
	if($emailValidator->isValid($email) && trim($name) != '' && trim($msg) != ''){
        include 'Zend/Mail.php';
		$body = 'Message de '.$name.' ('.$email.")\n\n";
		$body .= $msg;
        $message = new Zend_Mail('utf-8');
        $message->setFrom($email, 'Contact')
                ->setSubject('Un message du site (ref : '.$from.')')
                ->setBodyText($body)
				->setReplyTo($email, $name)
                ->addTo('mail@example.net');
        $message->send();
		echo 'ok';
		exit;
	}else{
		$errorType = $emailValidator->getErrors();
		if(isset($errorType[0])){
			$errormsg = $emailValidator->getMessageTemplates();
			echo '<div class="error"><span class="english">Email : '.str_replace('%value%', $email, $errormsg[$errorType[0]]).'</span></div>'; 
			exit;
		}
	}
}
