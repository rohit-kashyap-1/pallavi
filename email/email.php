<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../admin/helpers/functions.php';



function send_simple_email($to,$from,$from_name,$subject,$email_body,$embed_media){
    try {
        $mail = new PHPMailer(true);
        $email_to=$to;
        $mail->SMTPDebug = 2;
        $mail->Host       = 'mail.rohitdev.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = "drmansi@rohitdev.in";
        $mail->Password   = 'imMW$Mm8da[N';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom($from, $from_name);
        for($i=0;$i<sizeof($email_to);$i++){
        $mail->addAddress($email_to[$i]);    
        }
        
        $mail->addReplyTo($from, $from_name);
        $mail->isHTML(true);                               
        $mail->Subject = $subject;
        $mail->Body    = $email_body;
        
        if(is_array($embed_media)){
           
            
            for($i=0;$i<sizeof($embed_media);$i++){
                $mail->AddEmbeddedImage($embed_media[$i][0],$embed_media[$i][1]);
            }
        }
        $sent = $mail->send();
        if($sent==true){
                return true;
            }else{
               return $mail->ErrorInfo; 
            }
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}



$type = $_POST['form'];
$has_error = false;
$form_error ="";
// $captcha_sum = ((int)str_replace('encode_text_rand_ix','',base64_decode($_POST['default_date']))/date('H'));
// $input_r = (int) $_POST['inx_ver'];
// if($input_r!==$captcha_sum){
// echo json_encode(array("type"=>false,"msg"=>"Incorrect Security Answer"));
// die();
// }else
if(1){
//form handling code
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$service = htmlspecialchars($_POST['service']);
//validations
if(strlen($name)<3){
$has_error  =true;
echo json_encode(array("type"=>false,"msg"=>"First Name is too short!"));
die();
}

if(validate_email($email)==false){
    $has_error  =true;
echo json_encode(array("type"=>false,"msg"=>"Invalid Email Address!"));
die();
}

if(strlen($phone)!=10  ||validate_phone($phone)==false){
    $has_error  =true;
echo json_encode(array("type"=>false,"msg"=>"Invalid Phone Number, Please Enter 10 Digit Valid phone number!"));
die();
}

if(!$has_error){
//sending email
    $email_template = file_get_contents('admin-email-teamplate.php');

    
    $content.=' Details are given below.';
    
    
    $content_data .= "<tr><th>Name: </th><td>".$name."</td></tr>";
    $content_data .= "<tr><th>Email: </th><td>".$email."</td></tr>";
    $content_data .= "<tr><th>Phone: </th><td>".$phone."</td></tr>";
    $content_data .= "<tr><th>Service: </th><td>".$service."</td></tr>";
   
    // if(isset($_POST['message'])){
    //     $message =  htmlspecialchars($_POST['message']);
    //     $content_data .= "<tr><th>Message: </th><td>".$message."</td></tr>";
    // }
    // if(isset($_POST['qualification'])){
    //     $qualification =  htmlspecialchars($_POST['qualification']);
    //     $content_data .= "<tr><th>Qualification: </th><td>".$qualification."</td></tr>";
    // }
    // if(isset($_POST['dob'])){
    //     $dob =  htmlspecialchars($_POST['dob']);
    //     $content_data .= "<tr><th>Date of Birth: </th><td>".$dob."</td></tr>";
    // }
    // if(isset($_POST['course'])){
    //     $course =  htmlspecialchars($_POST['course']);
    //     $content_data .= "<tr><th>Course: </th><td>".$course."</td></tr>";
    // }
    
    date_default_timezone_set("Asia/Kolkata");
    $content_data .= "<tr><th>Date/Time : </th><td>".date('M d, Y h:i A')."</td></tr>";
    $embed_media = array(
            array('logo_main.png','logo')
            );
        
    $email_template = str_replace("{{content}}",$content,$email_template);
    $email_template = str_replace("{{content_data}}",$content_data,$email_template);
    $email_template = str_replace("{{site_url}}","drmansichowhan.com",$email_template);  
    
    $recipients = array("rohitdevofficial@gmail.com");
    $sent = send_simple_email($recipients,"drmansi@rohitdev.in","Dr. Mansi Chowhan -  Breast Oncoplastic Surgeon","New Enquiry on website",$email_template,$embed_media);
    
    
    $html = "<div class='form_thanks p-4 text-center'>
    <img src='assets/images/checked.png' style='width:100px;margin-bottom:10px'>
    <p>Thank you, You have successfully submitted our contact form. We will respond you back as soon as possible.</p>
    </div>";
    if($sent==true){
        echo json_encode(array("type"=>true,"html"=>$html));
    }else{
        echo json_encode(array("type"=>false,"msg"=>"Sorry, We are not able to send your form right now, please try after sometime."));
    }
    
}else{
  echo json_encode(array("type"=>false,"msg"=>$form_error));
}
}



?>