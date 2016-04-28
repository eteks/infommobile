<?php

include("db/config.php");

$action = (isset($_REQUEST['action']) && !empty($_REQUEST['action']) ? trim($_REQUEST['action']) : "");
$atm_j_name = (isset($_REQUEST['atm_j_name']) && !empty($_REQUEST['atm_j_name']) ? trim($_REQUEST['atm_j_name']) : "");
$atm_j_email = (isset($_REQUEST['atm_j_email']) && !empty($_REQUEST['atm_j_email']) ? trim($_REQUEST['atm_j_email']) : "");
$atm_j_mobilenum = (isset($_REQUEST['atm_j_mobilenum']) && !empty($_REQUEST['atm_j_mobilenum']) ? trim($_REQUEST['atm_j_mobilenum']) : "");
$file_attached = false;
if (isset($_FILES['atm_j_file'])) { //check uploaded file

    $file_tmp_name = $_FILES['atm_j_file']['tmp_name'];
    $file_name = $_FILES['atm_j_file']['name'];
    $file_size = $_FILES['atm_j_file']['size'];
    $file_type = $_FILES['atm_j_file']['type'];
    $file_error = $_FILES['atm_j_file']['error'];
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));
    //now we know we have the file for attachment, set $file_attached to true
    $file_attached = true;
}
$admin_email = 'muthu@etekchnoservices.com';
$subject = 'Join us';
if ($action == 'post') {
    $content = <<<APPCOMP
    <!DOCTYPE html><html><body><table cellpadding='0'  cellspacing='0' border='0' width='75%' align='center'>
    <tr><td style="font-weight:bold;" valign="top">Name</td><td valign="top"> : </td><td valign="top">{$atm_j_name}</td></tr>
    <tr><td height="5"></td></tr>
	<tr><td style="font-weight:bold;" valign="top">Email</td><td valign="top"> : </td><td valign="top">{$atm_j_email}</td></tr>    
    <tr><td height="5"></td></tr>
	<tr><td style="font-weight:bold;" valign="top">Phone Number</td><td valign="top"> : </td><td valign="top">{$atm_j_mobilenum}</td></tr>    
    </body></html></table>       
APPCOMP;

    if ($file_attached == true) { //continue if we have the file
        $boundary = md5("sanwebe");

        //header
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From:" . $atm_j_email . "\r\n";
        $headers .= "Reply-To: " . $atm_j_email . "" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

        //plain text 
        $body = "--$boundary\r\n";
        $body .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        //$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($content));

        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
        $body .= $encoded_content;
    } else {
        $headers = 'From: ' . $atm_j_email . "\r\n" . 'Reply-To:' . $atm_j_email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $body = $content;
    }

    $send_mail = mail($admin_email, $subject, $body, $headers);


    if (!$send_mail) {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type' => 'error', 'text' => 'Could not send mail!'));
        die($output);
    } else {
        $output = json_encode(array('type' => 'message', 'text' => 'Successfully Posted'));
        die($output);
    }
}
?>

