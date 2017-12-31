<?php

function write()
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$about = $_POST['message'];

$data = array($name, $email,$phone, $dob, $about, date('l jS F Y h:i:s A'));
/*echo ("About to Attempt to open <br>");
$file = fopen("test.csv","w")or die("Unable to open file");
for ($i = 0; $i < sizeOf($data);$i++)
{
$txt = $data[$i].",";
fwrite($file, $txt);
}
fclose($file);*/
$to = "joinrhli@google.com";
$subject = $name;
$body = "";

foreach ($data as $val) {
    $body .= "/n" . $val
}

if (mail($to, $subject, $body)) {
    echo("<p>Email successfully sent!</p>");
    } else {
    echo("<p>Email delivery failed…</p>");
}

}
if(isset($_POST['submit']))
{
   write();
} 
?>
