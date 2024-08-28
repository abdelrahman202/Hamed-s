<?php 
if (isset($_POST['name']) && isset($_POST['email'])) {
 $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to = 'body.hamed@outlook.com';
    $subject = "Hamed's website";
    $body = '<html>
        
            <body>
            <h2>Contact - Hamed</h2>
            <hr>
            <p>Name:<br>'.$name.'</p>
            <p>Email:<br>'.$email.'</p>
            <p>Phone:<br>'.$phone.'</p>
            <p>Message:<br>'.$message.'</p>
            </body>
            </html>';
    
    $headers  = "from: ".$name." <".$email.">\r\n";
    $headers .= "reply-to: ".$email."\r\n";
    $headers .= "MIME-verson: 1.0\r\n";
    $headers .= "content-type: text/html; charset=utf-8";
    
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<center><img src="img/favicon.jpg" alt="Hameds Website" /></center>';
        echo '<br/>';
        echo '<br/>';
        echo '<br/>';
        echo '<center>Thank you for contact me, Best wishes.</center>';
    } else {
        echo 'error';
    }
}
?>