$notify = 'index.php';
$notifyClass = '';

if(isset($_POST['submit'])){


$email = $_POST['breceleet2208@gmail.com'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
$notify = 'Email Anda salah. Silakan ketikan alamat email yang benar.';
$notifyClass = 'errordiv';
}else{

$toEmail = 'breceleet2208@gmail.com';
$emailSubject = 'Pesan website dari '.$name;
$htmlContent = '<h2> via Form Kontak Website</h2>
<h4>Nama</h4>
<p>'.$name.'</p>
<h4>Email</h4>
<p>'.$email.'</p>
<h4>Subject</h4>
<p>'.$subject.'</p>
<h4>Message</h4>
<p>'.$message.'</p>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";


    if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
    $notify = 'Pesan Anda sudah terkirim dengan sukses !';
    $notifyClass = 'succdiv';
    }else{
    $notify = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
    $notifyClass = 'errordiv';
    }
    }
    }else{
    $notify = 'Harap mengisi semua field data';
    $notifyClass = 'errordiv';
    }
    }