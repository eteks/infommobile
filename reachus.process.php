<?php include("db/config.php");

$action     = (isset($_REQUEST['action']) && !empty($_REQUEST['action']) ? trim($_REQUEST['action']):"");
$option     = (isset($_REQUEST['option']) && !empty($_REQUEST['option']) ? trim($_REQUEST['option']):"");
$atm_name   = (isset($_REQUEST['atm_name']) && !empty($_REQUEST['atm_name']) ? trim($_REQUEST['atm_name']):""); 
$atm_email  = (isset($_REQUEST['atm_email']) && !empty($_REQUEST['atm_email']) ? trim($_REQUEST['atm_email']):""); 
$atm_addr   = (isset($_REQUEST['atm_addr']) && !empty($_REQUEST['atm_addr']) ? trim($_REQUEST['atm_addr']):""); 
$atm_busexpect   = (isset($_REQUEST['atm_busexpect']) && !empty($_REQUEST['atm_busexpect']) ? trim($_REQUEST['atm_busexpect']):""); 

$file_attached       = false;
if(isset($_FILES['atm_file'])) //check uploaded file
{

    $file_tmp_name 	  = $_FILES['atm_file']['tmp_name'];
    $file_name 		  = $_FILES['atm_file']['name'];
    $file_size 		  = $_FILES['atm_file']['size'];
    $file_type 		  = $_FILES['atm_file']['type'];
    $file_error 	  = $_FILES['atm_file']['error'];
    //read from the uploaded file & base64_encode content for the mail
    $handle               = fopen($file_tmp_name, "r");
    $content              = fread($handle, $file_size);
    fclose($handle);
    $encoded_content      = chunk_split(base64_encode($content));
    //now we know we have the file for attachment, set $file_attached to true
    $file_attached = true;
    $atm_busexpect = 'Find the attachment';
}                


$atm_compname     = (isset($_REQUEST['atm_compname']) && !empty($_REQUEST['atm_compname']) ? trim($_REQUEST['atm_compname']):"");
$atm_sector       = (isset($_REQUEST['atm_sector']) && !empty($_REQUEST['atm_sector']) ? trim($_REQUEST['atm_sector']):"");
$atm_industry     = (isset($_REQUEST['atm_industry']) && !empty($_REQUEST['atm_industry']) ? trim($_REQUEST['atm_industry']):"");
$atm_empstr       = (isset($_REQUEST['atm_empstr']) && !empty($_REQUEST['atm_empstr']) ? trim($_REQUEST['atm_empstr']):"");
$atm_website      = (isset($_REQUEST['atm_website']) && !empty($_REQUEST['atm_website']) ? trim($_REQUEST['atm_website']):"");
$atm_hardware     = (isset($_REQUEST['atm_hardware']) && !empty($_REQUEST['atm_hardware']) ? $_REQUEST['atm_hardware']:"");
$atm_software     = (isset($_REQUEST['atm_software']) && !empty($_REQUEST['atm_software']) ? $_REQUEST['atm_software']:"");
$atm_networking   = (isset($_REQUEST['atm_networking']) && !empty($_REQUEST['atm_networking']) ? $_REQUEST['atm_networking']:"");
// $admin_email      ='info@atomicka.com';
$admin_email      ='muthu@etekchnoservices.com';
$subject          ='Reach us';
/*$atm_hardware_col='';
$atm_software_col='';
$atm_networking_col='';

if(!empty($atm_hardware) && $atm_hardware!=null)
{
    foreach($atm_hardware as $atm_hardware_data)
    {
        $dlmt = (!empty($atm_hardware_col) ? ",":"");
        if(!empty($atm_hardware_data))
        $atm_hardware_col .= $dlmt.$atm_hardware_data;
    }
}

if(!empty($atm_software) && $atm_hardware!=null)
{
    foreach($atm_software as $atm_software_data)
    {
        $dlmt = (!empty($atm_software_col) ? ",":"");
        if(!empty($atm_software_data))
        $atm_software_col .= $dlmt.$atm_software_data;
    }
}

if(!empty($atm_networking) && $atm_hardware!=null)
{
    foreach($atm_networking as $atm_networking_data)
    {
        $dlmt = (!empty($atm_networking_col) ? ",":"");
        if(!empty($atm_networking_data))
        $atm_networking_col .= $dlmt.$atm_networking_data;
    }
}
*/

if($action=='industry')
{
    $sql1 = "SELECT indus_pk,indus_name FROM industrymst_atm WHERE indus_status='A' AND indus_sector_fk='".$atm_sector."' order by indus_name asc";
    $select_ins = mysql_query($sql1);    
    if(mysql_num_rows($select_ins)>0)
        echo '<option value="">--Select Industry--</option>';
    while($fetch = mysql_fetch_array($select_ins))
        echo "<option value='".$fetch['indus_pk']."'>".$fetch['indus_name']."</option>";  
}
if($action=='post')
{
    if($option=='personal')
    {
    
     $content = <<<APPCOMP
    <!DOCTYPE html><html><body><table cellpadding='0'  cellspacing='0' border='0' width='75%' align='center'>
    <tr><td style="font-weight:bold;" valign="top" colspan="2"><h3>Personal Details</h3></td></tr>  
    <tr><td height="10"></td></tr>    
    <tr><td style="font-weight:bold;" valign="top">Name</td><td valign="top"> : </td><td valign="top">{$atm_name}</td></tr>
    <tr><td height="5"></td></tr>
    <tr><td style="font-weight:bold;" valign="top">Email</td><td valign="top"> : </td><td valign="top">{$atm_email}</td></tr>    
    <tr><td height="5"></td></tr>
    <tr><td style="font-weight:bold;" valign="top">Address</td><td valign="top"> : </td><td valign="top">{$atm_addr}</td></tr>  
    <tr><td height="5"></td></tr>
    <tr><td style="font-weight:bold;" valign="top">Specification</td><td valign="top"> : </td><td valign="top">{$atm_busexpect}</td></tr>    
    </body></html></table>       
APPCOMP;
    }
    else
    {
        function sector($atm_sector)
        {
          if(!empty($atm_sector))  
          {
          $select = mysql_query("SELECT sect_name FROM sectormst_atm WHERE sect_status='A' AND sect_pk=$atm_sector");
            if(mysql_num_rows($select)>0)
              $fetch = mysql_fetch_array($select);
              $result = $fetch['sect_name'];
          }
          else
              $result="";
                 return $result;
        }

    function industry($atm_industry,$atm_sector)
    {
      if(!empty($atm_sector) && !empty($atm_industry))  
      {  
      $select = mysql_query("SELECT indus_name FROM industrymst_atm WHERE indus_status='A' AND indus_sector_fk=$atm_sector AND indus_pk=$atm_industry ");
        if(mysql_num_rows($select)>0)
           $fetch = mysql_fetch_array($select);
           $result = $fetch['indus_name'];
      }
      else
          $result="";
              return $result;
    }


    $dispsector   = sector($atm_sector);
    $dispindustry = industry($atm_industry,$atm_sector);

      $content = <<<APPCOMP
        <!DOCTYPE html><html><body><table cellpadding='0'  cellspacing='0' border='0' width='75%' align='center'>
        <tr><td style="font-weight:bold;" valign="top" colspan="2"><h3>Personal Details</h3></td></tr>  
        <tr><td height="10"></td></tr>             
        <tr><td style="font-weight:bold;" valign="top">Name</td><td valign="top"> : </td><td valign="top">{$atm_name}</td></tr>
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Email</td><td valign="top"> : </td><td valign="top">{$atm_email}</td></tr>    
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Address</td><td valign="top"> : </td><td valign="top">{$atm_addr}</td></tr>  
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Specification</td><td valign="top"> : </td><td valign="top">{$atm_busexpect}</td></tr> 
        <tr><td height="10"></td></tr>
        <tr><td style="font-weight:bold;" valign="top" colspan="2"><h3>Business Details</h3></td></tr>  
        <tr><td height="10"></td></tr>    
        <tr><td style="font-weight:bold;" valign="top">Company Name</td><td valign="top"> : </td><td valign="top">{$atm_compname}</td></tr>
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Sector</td><td valign="top"> : </td><td valign="top">{$dispsector}</td></tr>
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Industry</td><td valign="top"> : </td><td valign="top">{$dispindustry}</td></tr>
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Website URL</td><td valign="top"> : </td><td valign="top">{$atm_website}</td></tr>
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Employee Strength</td><td valign="top"> : </td><td valign="top">{$atm_empstr}</td></tr>
        <tr><td height="10"></td></tr>  
        <tr><td style="font-weight:bold;" valign="top" colspan="2"><h3>Consultation Expected For</h3></td></tr>  
        <tr><td height="10"></td></tr>    
        <tr><td style="font-weight:bold;" valign="top">Hardware</td><td valign="top"> : </td><td valign="top">{$atm_hardware}</td></tr>
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Software</td><td valign="top"> : </td><td valign="top">{$atm_software}</td></tr>
        <tr><td height="5"></td></tr>
        <tr><td style="font-weight:bold;" valign="top">Networking</td><td valign="top"> : </td><td valign="top">{$atm_networking}</td></tr>
        </body></html></table>    
APPCOMP;
    }
   
    if($file_attached==true) //continue if we have the file
	{
            $boundary = md5("sanwebe"); 

            //header
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "From:".$atm_email."\r\n"; 
            $headers .= "Reply-To: ".$atm_email."" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 

            //plain text 
            $body = "--$boundary\r\n";
            $body .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
            $body .= chunk_split(base64_encode($content));

            //attachment
            $body .= "--$boundary\r\n";
            $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
            $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
            $body .= $encoded_content; 

        }else{
                $headers  = 'From: '.$atm_email. "\r\n" .'Reply-To:'.$atm_email. "\r\n" .'X-Mailer: PHP/' . phpversion();
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $body = $content;
        }

    $send_mail = mail($admin_email, $subject, $body, $headers);
   

    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Successfully Posted'));
        die($output);
    }    
    
}


?>

