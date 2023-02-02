
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

    

?>


