<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3ea3574147.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
    <title>SMART - TECH - SCRIPT</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>
    <div class="limiter">
        <h1>cashbook refer script</h1>

<?php

if (!isset($_POST['submit'])) { echo "
    <form class='' action='' method='post'>
        <input type='text' class='input' name='mobile_num' placeholder='Enter Your Mobile Number' required>
        <input type='text' class='input' name='refer_code' placeholder='Enter Your Refer Code' required>
        <button type='submit' class='formBtn btn_shine' name='submit'>Submit<span class='load loading'></span></button>
    </form>";
}

if(isset($_POST['submit'])){
    error_reporting(0);

    function randomid($length){
        $char = md5('1234567890abcdefghijklmnopqrstuvwxyz');
        $charlen = strlen($char);
        $random_string = "";
        for ($i = 0; $i < $length; $i++){
            $random_string .= $char[rand(0, $charlen - 1)];
        }
        return $random_string;
    }

    function randomst($length){
        $char = "QWETTYUIOPLKJHGFDSAZXCVBNM1234567890abcdefghijklmnopqrstuvwxyz";
        $charlen = strlen($char);
        $random_string = "";
        for ($i = 0; $i < $length; $i++){
            $random_string .= $char[rand(0, $charlen - 1)];
        }
        return $random_string;
    }

    function randomno($length){
        $random_no = "";
        for($i = 0; $i < $length; $i++){
            $random_no .= mt_rand(0,9);
        }
        return $random_no;
    }

    function uniqueid($data){
        assert(strlen($data) == 64);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    $ip = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
    $cookie = randomid(strlen("e1358a0328ad77336587c5bd88769710"));
    $fcm_token = 'c'.randomst(18).'_CO:APA91'.randomst(51).'_'.randomst(57).'_'.randomst(16).'cOY0tJ-N';

    $f = array("Aadarsh","Abhay","Abhijeet","Abhimanu","Abhinav","Abhishek","Akhil","Aman","Ambuj","Amit","Anand","Anil","Ankit","Ankush","Anuj","Arjun","Ashish","Atul","Avdesh","Ayush","Bhanu","Bhavesh","Chandan","Deepak","Dev","Devbrat","Dipu","Ganesh","Gaurav","Gopal","Hariom","Harshit","Himanshu","Jatin","Kapil","Karan","Kanhiya","Krish","Krishna","Kunal","Manish","Mangal","Mohan","Mohit","Monu","Nishant","Nitish","Lav","Parmod","Parth","Praduman","Prashant","Prem","Raghu","Rahul","Raj","Rakesh","Rambhu","Ramesh","Ravi","Ravindra","Rishabh","Rishi","Rohan","Ronak","Roshan","Sachin","Sagar","Sanjit","Samar","Sameer","Sant","Sanju","Satish","Satya","Shivam","Shirshant","Shrikant","Sohan","Sonu","Sonal","Sourabh","Sudhanshu","Sudheer","Sujeet","Sumit","Sunil","Sushil","Suraj","Suresh","Umesh","Vijay","Vikram","Vinay","Vinod","Vishal","Vishu","Virat","Vivek","Yash","Yogesh");
    $l = array("Aarya","Agarwal","Ahir","Akela","Arora","Awasthi","Banerjee","Bhaduriya","Bhatt","Chakra","Chakarvarti","Chattarjee","Chaubey","Chaturvedi","Chandravanshi","Chauhan","Choudhary","Dhawal","Dhawan","Deshmukh","Dubey","Dokhle","Gandhi","Gokhil","Ghoshal","Gokul","Gond","Goswami","Gupta","Hooda","Jaat","Jain","Jatara","Jayes","Jugi","Kapoor","Kumar","Kharwar","Kesari","Kohli","Kumhaar","Kurmi","Kushwaha","Lala","Lakhani","Lohar","Lokhande","Malhotra","Marvare","Maurya","Maali","Mauryavanshi","Mehra","Mital","Modi","Naidu","Naveen","Nehru","Patani","Paatil","Pal","Pandey","Paneri","Panjiwan","Pathak","Patel","Pele","Prajapati","Prashad","Prabhu","Raghuwanshi","Raj","Rajput","Raja","Ram","Ramdin","Raydu","Rotle","Roy","Sardar","Seikh","Seth","Sharma","Singh","Singhania","Sukla","Shinghle","Surya","Survanshi","Suryavanshi","Swasthi","Talpade","Talwar","Tahrik","Tilakdhari","Tiwari","Tripathi","Trivedi","Verma","Yadav","Yaduvanshi");
    $fname = $f[mt_rand(0,100)];
    $lname = $l[mt_rand(0,100)];
    $name = "$fname $lname";
    $emailid = strtolower($fname.$lname).randomno(3)."@gmail.com";
    $mobile_num = $_POST['mobile_num'];
    $refer_code = $_POST['refer_code'];

    // openssl_encrypt
    function encrypt($data){
        define('AES_128_CBC', 'aes-128-cbc');
        $iv = "0v1nr5pxitui632h";
        $key = "179j51gl625os76a";
        $encrypt = openssl_encrypt($data, AES_128_CBC, $key, 0, $iv);
        return $encrypt;
    }

    // openssl_decrypt
    function smart_tech($data){
        define('AES_128_CBC', 'aes-128-cbc');
        $iv = "0v1nr5pxitui632h";
        $key = "179j51gl625os76a";
        $decrypt = openssl_decrypt($data, AES_128_CBC, $key, 0, $iv);
        return $decrypt;
    }

    $url = 'https://cashbook.net.in/api/v3/user/send-otp';

    $enc_data = encrypt('{"country_code":"91","isResend":"0","mobile":"'.$mobile_num.'","type":"signup"}');

    $data = '{"reqData":"'.$enc_data.'\n:MHYxbnI1cHhpdHVpNjMyaA==\n"}';

    $headers[]='Content-Type:application/json; charset=UTF-8';
    $headers[]='Content-Length:'.strlen($data).'';
    $headers[]='Host:cashbook.net.in';
    $headers[]='Connection:Keep-Alive';
    $headers[]='User-Agent:okhttp/4.9.0';
    $headers[]='Accept:application/json';
    $headers[]='X-Forwarded-For: '.$ip.'';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 0);
    $output = curl_exec($curl);
    $output = curl_exec($curl);
    $smart = explode('"', $output);
    $tech = $smart['1'];
    $st = explode(':', $tech);
    $smarttect = $st['0'];
    $resp = smart_tech($smarttect);
    $json = json_decode($resp, 1);

    if($json['message'] == "Otp sent"){
        echo"<div class='success'>OTP send successfully.</div>";
        echo"<form action='otpverify.php' method='POST'>
            <input type='hidden' name='mobile_num' value='$mobile_num' required>
            <input type='hidden' name='refer_code' value='$refer_code' required>
            <input type='hidden' name='ip' value='$ip' required>
            <input type='number' class='input' name='otp' placeholder='Enter Your OTP' required>
            <button type='submit' class='formBtn btn_shine' name='submit'>Login<span class='load loading'></span></button>
        </form>";

    }else{
        echo"<div class='error'>".$json['message']."</div>";
    }
}

?>

<a class="joinBtn btn_shine" href="https://telegram.dog/earnsmarttech" title="Join">
    <i class="fa-regular fa-paper-plane"></i><span>Join telegram channel</span>
</a><br>
<center>
    <script type="text/javascript" src="//widget.supercounters.com/ssl/online_i.js"></script><script type="text/javascript">sc_online_i(1645235,"ffffff","06767a");</script><br><noscript><a href="https://www.supercounters.com/">free online counter</a></noscript><br><br>
    <?php error_reporting(0);
    $countget = strlen(file_get_contents("count.txt"));
    $count = $countget * 1;
    echo"<div>Refer done successfully : $count</div>";
    ?>
</center>
</div>
</body>
</html>
