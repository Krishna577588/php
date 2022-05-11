<br>
<br>
<title>ᎻᴀᴄᴋᴇʀㅤᏴᴏʏ</title></style></head><title></title><body style='background-color: white;'><meta name="viewport" content="width=device-width, initial-scale=1.0"><style>body{ text-align:center;}.text, select { width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;}
.btn { width: 100%; background-color: #45a049; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;}
.btn:hover { background-color: #;}
div { border-radius: 5px; background-color: #f2f2f2; padding: 20px;}.telegram{ padding:5px; background:dodgerblue; width:50%; border:2px solid white; border-radius:10px; font-weight:bolder; color:white; font-size:15;}.telegram:hover{ cursor:pointer; transection:1s;}</style> <h2><center><font color='purple' size='4'>CAPITALGROPUPFUND REFER SCRIPT</h2>
<?php


 


error_reporting(0);
if(isset($_GET['submit'])){
	#header('refresh: 2');
$mob=$_GET['mob'];
$refer=$_GET['refer'];
$cap=$_GET['cap'];
$p=array("Mi","Redmi","Poco","Xiomi","Vivo","Oppo","Realme","iqoo","Asus");
$pname = $p[mt_rand(0,8)];
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];

$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
function rando($length) {
    $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
////
function randoo($length) {
    $characters = '1234567890';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$name=''.$fname.''.$lname.''.$no.'';
$imei=rando(13);
$kkk=randoo(10);
$device=rando(2);
$bhau=rando(32);
$bb=rando(142);
$asim=rando(64);
$dev=bin2hex(openssl_random_pseudo_bytes(11));
$device_id=substr(md5($mob),0,16);
$teamname=substr(md5($mob),0,7);


$sdf = rando(strlen("mlvpcckufp5ommpaamd2pcoll0"));
$sign2 = rando(strlen("8217d1f99d4f2c96f58af100b82a07a8"));
$tsp=round(microtime(true)*1000);
$sign6= md5('1000001'.$tsp.'{"playerName":"'.$mob.'"}');

$ip = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
//redeem

function number($length){
$str='';
for ($i = 0; $i < $length; $i++){
$str.=mt_rand(0,9);
}
return $str;
}
$kl=number(2);


$url='https://kakcho.xyz/api/v1/auth/loginuser/';	

$data='{"isTwitterInstalled":false,"isHeloInstalled":false,"screenWidth":1080,"screenHeight":2340,"isShareChatInstalled":false,"isLikeeInstalled":false,"isWeLikeInstalled":false,"ram_size":"3002","isNewsDogInstalled":false,"isTikTokInstalled":false,"isKwaiInstalled":false,"isRoposoInstalled":false,"isInstagramInstalled":false,"phone_number":"'.$mob.'","model":"Xiaomi","brand":"Android","isFacebookInstalled":false,"isSamosaInstalled":false}';

$headers[]='Kakcho-Access-ID: ';
$headers[]='Kakcho-API-Key: ';
$headers[]='version: 114';
$headers[]='Content-Type: application/json; ';
$headers[]='Content-Length: '.strlen($data).'';
$headers[]='Host: kakcho.xyz';
$headers[]='Connection: Keep-Alive';
$headers[]='User-Agent: okhttp/4.9.1';
$headers[]='X-Forwarded-For: '.$ip.'';








$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_HEADER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$output=curl_exec($ch);
$json=json_decode($output,true);
curl_close($ch);
$msg=$json['message'];
$access=$json['API-ACCESS-ID'];
 echo "<div class='error'><center><font color='red' size='2'>$output</font></div></center>";

if($msg=="user created successfully."){
echo "<div class='error'><center><font color='green' size='2'>Successfully Registered !!</font></div></center><br>";


$url1='https://kakcho.xyz/api/v1/auth/loginuser/';	

$data1='{"gender":"M","name":"'.$fname.'","referrer_id":"'.$refer.'"}';

$headers1[]='Kakcho-Access-ID: '.$access.'';
$headers1[]='Kakcho-API-Key: ';
$headers1[]='version: 114';
$headers1[]='Content-Type: application/json; charset=UTF-8';
$headers1[]='Content-Length: '.strlen($data1).'';
$headers1[]='Host: kakcho.xyz';
$headers1[]='Connection: Keep-Alive';
$headers1[]='User-Agent: okhttp/4.9.1';
$headers1[]='X-Forwarded-For: '.$ip.'';








$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch,CURLOPT_POSTFIELDS,$data1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output1=curl_exec($ch);
$json=json_decode($output1,true);
curl_close($ch);
$msg1=$json['message'];

if($msg1=="data saved successfully"){




$url2='https://kakcho.xyz/api/v1/auth/loginuser/';	

$data2='{"isTwitterInstalled":false,"isHeloInstalled":false,"screenWidth":1080,"screenHeight":2340,"isShareChatInstalled":false,"isLikeeInstalled":false,"isWeLikeInstalled":false,"ram_size":"3002","isNewsDogInstalled":false,"isTikTokInstalled":false,"isKwaiInstalled":false,"isRoposoInstalled":false,"isInstagramInstalled":false,"phone_number":"'.$mob.'","model":"Xiaomi","brand":"Android","isFacebookInstalled":false,"isSamosaInstalled":false}';

$headers2[]='Kakcho-Access-ID: ';
$headers2[]='Kakcho-API-Key: ';
$headers2[]='version: 114';
$headers2[]='Content-Type: application/json; charset=UTF-8';
$headers2[]='Content-Length: '.strlen($data2).'';
$headers2[]='Host: kakcho.xyz';
$headers2[]='Connection: Keep-Alive';
$headers2[]='User-Agent: okhttp/4.9.1';
$headers2[]='X-Forwarded-For: '.$ip.'';








$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url2);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data2);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers2);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output2=curl_exec($ch);
$json=json_decode($output2,true);
curl_close($ch);
$msg2=$json['message'];
$access2=$json['API-ACCESS-ID'];

echo "<div class='error'><center><font color='red' size='2'>$output2</font></div></center>";
if($msg2=="OTP Sent Successfully."){
echo "<div class='error'><center><font color='green' size='2'>OTP Sent Successfully !!</font></div></center>";


echo"<form action='otp.php' method='GET'>

<input type='hidden' name='access2' value='$access2'>


<input type='hidden' name='mob' value='$mob'>



<input type='hidden' name='refer' value='$refer'>

<input type='hidden' name='sdf' value='$sdf'>

<input type='hidden' name='ip' value='$ip'>

<input type='Number' name='otp' class='text' placeholder='Enter Your Otp' required><br/>

	 <input type='submit' class='btn' name='submit' value='ꜱᴜʙᴍɪᴛ'>";


}else{
echo "<div class='error'><center><font color='red' size='2'>$msg2</font></div></center>";
	echo "<meta http-equiv='refresh' content=1;url=https://telegram.dog/hackerboyscript>	";}
}else{
echo "<div class='error'><center><font color='red' size='2'>$msg1</font></div></center>";
	echo "<meta http-equiv='refresh' content=1;url=https://telegram.dog/hackerboyscript>	";}	
}else{
echo "<div class='error'><center><font color='red' size='2'>Something Wrong Or Number Already Registered !!</font></div></center>";
	echo "<meta http-equiv='refresh' content=10000;url=https://telegram.dog/hackerboyscript>	";}


}

	
if(!isset($_GET['submit'])){
	
	 
	
	echo"<form mehod='get' action=''>
	
	<input type='text' name='mob' class='text' placeholder='Enter Your Unregistered Number' required><br/>

<input type='text' name='refer' class='text' placeholder='Enter Your Refer Code' required><br/>


<input type='submit' class='btn' name='submit' value='ꜱᴜʙᴍɪᴛ'>
";
}


 $file5 = file_get_contents("Krishna.txt");
  $total = strlen($file5)  ;
  $mul = '3';
  $tot = $total*$mul;

echo"<br><div <hr><font  
 color='green'font size='4'>Total Refer Done : $tot</div>";




 

	
?>
<hr><center><script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@hackerboyscript";document.getElementsByTagName("head")[0].appendChild(script);})();</script><a href="tg://resolve?domain=hackerboyscript" target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:20px;max-width:285px;background:blue;box-shadow:1px 1px 5px blue;color:white;border-radius:50px;' title='Join Now'><i></i> Join Our Telegram Channel<small><span class='telegramim_count' data-for='@hackerboyscript'>...</span> Participants</small></a> <center></header>

<hr><br><center><font color='black' size='6'>ᎻᴀᴄᴋᴇʀㅤᏴᴏʏ</font></a></center>