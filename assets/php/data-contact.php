<?php

  //header('Location: /#send', true, 301);
  //header('Location: /thanks-page.html', true, 301);

  function send() {
    $sendto   = "morality.relativus@gmail.com";
    $useremail = isset($_POST['email']) ? $_POST['email'] : '';
    $userphone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $usercomment = isset($_POST['comment']) ? $_POST['comment'] : '';

    //$subject  = "New message from Ovcharov landing (contact form)";
    $subject  = "New message from Ovcharov landing";
    $headers  = "From: " . strip_tags($usermail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #000;padding-bottom:10px;'>Ovcharov message</h2>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>E-mail:</strong> ".$useremail."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>Phone:</strong> ".$userphone."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>Comment:</strong> ".$usercomment."</p>\r\n";
    $msg .= "</body></html>";

    if(@mail($sendto, $subject, $msg, $headers)) {
    } else {
    }
  }

  try {
    send();
  } catch (Exception $e) {

  }

?>
