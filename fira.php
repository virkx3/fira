

<html>
<head> <title>NamasteGangNetwork</title>
<meta name="viewport" content="width=device-width"><style>
.hr-19 {
  border: none;
  height: 10px;
  background: linear-gradient(-135deg, #fff 5px, transparent 0) 0 5px, linear-gradient(135deg, #fff 5px, #8c8c8c 0) 0 5px;
  background-color: #fff;
  background-position: left bottom;
  background-repeat: repeat-x;
  background-size: 10px 10px;
}
input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=text]:placeholder {
  color: #cccccc;
}input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #FF0040;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
input.sub {
  visibility: hidden;
}

</style></head><title></title><body><center><b><center>
<html><head>
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
</head>
<body style='font-family: Yatra One;'>
 </style>
 </head>
 <title>NamasteGangNetwork</title>
 <body>
 <center>
     <?php
error_reporting(0);
$encryption_key='Cg5@Vj&6vej#*012Vj9m2/)&Cj9M)3@d';

function rando($length) {
  $characters = '1234567890abcdefghijklmnopqrstuvwxyz';

  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}


$toggler=mt_rand(1,2);
$toggler=2;
if($toggler==1){
$ver='2.0314623878';
$rw='com.firalike.app';
$xrw='Y29tLmZpcmFsaWtlLmFwcA==';
$vvx='10.1';
$vvv='101';
$app_public_key='6F6F579C43E5015B3CF84A3A3D11E604E1DB5573';
$app_signature='B74AF49DC93ED1B4E0E3D20A61FE2A37C5AD31EF';
$market_name='zarinpal';
}
elseif($toggler==2){
$ver='1.3289667321';
$rw='fasaroid.fira.com';
$xrw='ZmFzYXJvaWQuZmlyYS5jb20=';
$vvx='10.5';
$vvv='105';
$app_public_key='35A3E2771D01BB8FE1170306DCC7793F34C19FFE';
$app_signature='8051C081EA1EF39E7048ACAEF407FD3CA8A04F77';
$market_name='cafebazaar';
}

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);

$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';



$x8=rando(8);
$x4=rando(4);
$y4=rando(4);
$z4=rando(4);
$x12=rando(12);
$ui=$x8.'-'.$x4.'-'.$y4.'-'.$z4.'-'.$x12;

$secure=$ui.'.a092777d0ff271fa54cf11a08be13732f4165969c4a76f9d15bfe580775a1051828cb013b1f7f87df081a3a20cd390741ee5b863c360e3e1bb8d331a1bbbbbe2';//ok
$secure=sha1($secure);

$lk=rando(6);
$lk='%%'.$lk;


$pm=$lk.$ver;
$pm=md5($pm);

echo "<font color='red' size='5'><bold><hr class='hr-19'>Fira Follower @NamasteGangNetwork<hr class='hr-19'><bold>";


if(isset($_POST['submit'])){
	#header('refresh: 2');
	$touser=$_POST['uname'];
	$inscoo=$_POST['inscoo'];

$user_pkx=$_POST['pkx'];

//$i17 = preg_replace('/\s+/', '', $fbid);
//  system("clear");


  $touser = preg_replace('/\s+/', '', $touser);
  $user_pkx = preg_replace('/\s+/', '', $user_pkx);

  $url1="https://i.instagram.com/api/v1/users/$user_pkx/info/";

  $headers1=['Accept: */*', 
  'Connection: close', 
  'Proxy-Connection: keep-alive', 
  'Content-type: application/x-www-form-urlencoded; charset=UTF-8', 
  'Accept-Encoding: gzip, deflate', 
  'Accept-Language: en;q=1, ru;q=0.9, ar;q=0.8', 
  'X-IG-Connection-Type: WiFi', 
  'X-IG-Capabilities: AQ==', 
  'User-Agent: Instagram 10.15.0 Android (28/9; 411dpi; 1080x2220; samsung; SM-A650G; SM-A650G; Snapdragon 450; en_US)', 
  $inscoo, 
  'Host: i.instagram.com',
  'X-Forwarded-For: '.$ipz.''];
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
          $output1= curl_exec ($ch);
  
  curl_close ($ch);
  
   $o=explode('interop_messaging_user_fbid":',$output1)[1];
   $i17=explode(',',$o)[0];
  $i17 = preg_replace('/\s+/', '', $i17);
  //$i17 = preg_replace('/\s+/', '', $fbid);
//  system("clear");






$url3='https://firafollower.xyz/api/v3/account.php';


$data4='{"app_signature":"'.$app_signature.'","language_code":"en","full_name":"'.$name.'","user_pk":"'.$user_pkx.'","requested_with":"'.$rw.'","version_code":"'.$vvv.'","fbid":"'.$i17.'","app_public_key":"'.$app_public_key.'","login":"","market_name":"'.$market_name.'","username":"'.$name.'"}';


$odata4 = openssl_encrypt($data4, 'aes-256-cbc', $encryption_key);



$bhlo=$app_signature.'en'.$name.$user_pkx.$rw.$vvv.$i17.$app_public_key.$market_name.$name;
$bhlo=sha1($bhlo);
$pslo='app_signaturelanguage_codefull_nameuser_pkrequested_withversion_codefbidapp_public_keyloginmarket_nameusername';
$pslo=md5($pslo);




$headers1=['X-Market: '.$market_name.'', 
'X-Version2: 1',
'ps: '.$pslo, 
'X-Requested-With: '.$xrw, 
'bh: '.$bhlo, 
'X-Lan: en', 
'X-Version: '.$vvv, 
'secure: '.$secure, 
'ui: '.$ui, 
'X-Access: FiraFollower', 
'X-Version-Build: '.$vvx, 
'pm: '.$pm, 
'lk: '.$lk, 
'Content-Type: application/json; charset=utf-8', 
'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10)', 
'Host: firafollower.xyz', 
'Connection: Keep-Alive', 
'Accept-Encoding: gzip',
'X-Forwarded-For: '.$ipz.''];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url3);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$odata4);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $output1= curl_exec ($ch);

curl_close ($ch);
$output1=gzdecode($output1);
 echo $output1=openssl_decrypt($output1, 'aes-256-cbc', $encryption_key);
 
$json2=json_decode($output1,true);




$user_token=$json2['data']['user_token'];
$xkey=$user_token.$ver;
$xkey=md5($xkey);





$dataxxx='{"app_signature":"'.$app_signature.'","language_code":"en","full_name":"'.$name.'","user_pk":"'.$user_pkx.'","requested_with":"'.$rw.'","version_code":"'.$vvv.'","app_public_key":"'.$app_public_key.'","user_token":"'.$user_token.'","m":"'.$market_name.'","market_name":"'.$market_name.'","username":"'.$name.'"}';

$odata3 = openssl_encrypt($dataxxx, 'aes-256-cbc', $encryption_key);


$bhlo=$app_signature.'en'.$name.$user_pkx.$rw.$vvv.$app_public_key.$user_token.$market_name.$market_name.$name;
$bhlo=sha1($bhlo);
$pslo='app_signaturelanguage_codefull_nameuser_pkrequested_withversion_codeapp_public_keyuser_tokenmmarket_nameusername';
$pslo=md5($pslo);

$headers1=['X-Market: '.$market_name.'', 
'X-Version2: 1',
'ps: '.$pslo, 
'X-Requested-With: '.$xrw, 
'bh: '.$bhlo, 
'X-Lan: en', 
'X-Version: '.$vvv, 
'secure: '.$secure, 
'ui: '.$ui, 
'X-Access: FiraFollower', 
'X-Version-Build: '.$vvx, 
'pm: '.$pm, 
'lk: '.$lk, 
'Content-Type: application/json; charset=utf-8', 
'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10)', 
'Host: firafollower.xyz', 
'Connection: Keep-Alive', 
'Accept-Encoding: gzip',
'X-Forwarded-For: '.$ipz.''];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url3);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$odata3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $output1= curl_exec ($ch);

curl_close ($ch);
$output1=gzdecode($output1);
$output1=openssl_decrypt($output1, 'aes-256-cbc', $encryption_key);

$json2=json_decode($output1,true);
$fc=$json2['data']['follow_coin'];
$lc=$json2['data']['like_comment_coin'];
$user_token=$json2['data']['user_token'];

$xkey=$user_token.$ver;

$xkey=md5($xkey);




echo "<div class='success'><center>
<font color='blue'><hr>"."Like Coin- : ".$lc."<br>"."Follow Coin- : ".$fc.PHP_EOL."<hr></font></center></div><br>";



if($fc>=100){

         $cd='follow';          

$data='{"app_signature":"'.$app_signature.'","language_code":"en","to_user":"'.$touser.'","user_pk":"'.$user_pkx.'","requested_with":"'.$rw.'","has_post":"false","version_code":"'.$vvv.'","action":"'.$cd.'","app_public_key":"'.$app_public_key.'","user_token":"'.$user_token.'","market_name":"'.$market_name.'","coin":"'.$fc.'"}';

$odata3 = openssl_encrypt($data, 'aes-256-cbc', $encryption_key);
 
$bht=$app_signature.'en'.$touser.$user_pkx.$rw.'false'.$vvv.$cd.$app_public_key.$user_token.$market_name.$fc;
 
 
$bht=sha1($bht);




$pst='app_signaturelanguage_codeto_useruser_pkrequested_withhas_postversion_codeactionapp_public_keyuser_tokenmarket_namecoin';
$pst=md5($pst);


$headers2=['X-Market: '.$market_name.'', 
'X-Version2: 1',
'ps: '.$pst, 
'X-Requested-With: '.$xrw, 
'bh: '.$bht, 
'X-Key: '.$xkey, 
'X-Lan: en', 
'X-Version: '.$vvv, 
'secure: '.$secure, 
'ui: '.$ui, 
'X-Access: FiraFollower', 
'X-Version-Build: '.$vvx, 
'pm: '.$pm, 
'lk: '.$lk, 
'Content-Type: application/json; charset=utf-8', 
'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10)', 
'Host: firafollower.xyz', 
'Connection: Keep-Alive', 
'Accept-Encoding: gzip',
'X-Forwarded-For: '.$ipz.''];


 $url1='https://firafollower.xyz/api/v3/transCoin.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$odata3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER,$headers2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $output1= curl_exec ($ch);

curl_close ($ch);
$output1=gzdecode($output1);
$output1=openssl_decrypt($output1, 'aes-256-cbc', $encryption_key);

$json2=json_decode($output1,true);

 $sts=$json2['status'];
 echo "<div class='success'><center>
 <font color='blue'><hr>"."Status- : ".$sts.PHP_EOL."<hr></font></center></div><br>";

}
if($lc>=100){

$cd='like';

                   

$data='{"app_signature":"'.$app_signature.'","language_code":"en","to_user":"'.$touser.'","user_pk":"'.$user_pkx.'","requested_with":"'.$rw.'","has_post":"false","version_code":"'.$vvv.'","action":"'.$cd.'","app_public_key":"'.$app_public_key.'","user_token":"'.$user_token.'","market_name":"'.$market_name.'","coin":"'.$lc.'"}';

$odata3 = openssl_encrypt($data, 'aes-256-cbc', $encryption_key);
 
$bht=$app_signature.'en'.$touser.$user_pkx.$rw.'false'.$vvv.$cd.$app_public_key.$user_token.$market_name.$lc;
 
 
$bht=sha1($bht);




$pst='app_signaturelanguage_codeto_useruser_pkrequested_withhas_postversion_codeactionapp_public_keyuser_tokenmarket_namecoin';
$pst=md5($pst);


$headers2=['X-Market: '.$market_name.'', 
'X-Version2: 1',
'ps: '.$pst, 
'X-Requested-With: '.$xrw, 
'bh: '.$bht, 
'X-Key: '.$xkey, 
'X-Lan: en', 
'X-Version: '.$vvv, 
'secure: '.$secure, 
'ui: '.$ui, 
'X-Access: FiraFollower', 
'X-Version-Build: '.$vvx, 
'pm: '.$pm, 
'lk: '.$lk, 
'Content-Type: application/json; charset=utf-8', 
'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10)', 
'Host: firafollower.xyz', 
'Connection: Keep-Alive', 
'Accept-Encoding: gzip',
'X-Forwarded-For: '.$ipz.''];


 $url1='https://firafollower.xyz/api/v3/transCoin.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$odata3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER,$headers2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $output1= curl_exec ($ch);

curl_close ($ch);
$output1=gzdecode($output1);
$output1=openssl_decrypt($output1, 'aes-256-cbc', $encryption_key);

$json2=json_decode($output1,true);

 $sts=$json2['status'];

 echo "<div class='success'><center>
 <font color='blue'><hr>"."Status- : ".$sts.PHP_EOL."<hr></font></center></div><br>";


	    }


      
    }

        


	if(!isset($_POST['submit'])){
echo"<form action='' method='post'>
<input type='text' name='inscoo'  class='text' placeholder='Enter Your insta cookie' required><br><br>
<input type='text' name='pkx'  class='text' placeholder='Enter Your opponent-user-pk' required><br><br>
<input type='text' name='uname'  class='text' placeholder='Enter Your fira username' required><br><br>";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>
 <div id='formFooter'>
<center><script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@namastegangnetwork";document.getElementsByTagName("head")[0].appendChild(script);})();</script>
<a href="tg://resolve?domain=namastegangnetwork" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:30px;width:399px;background:#84ff00;box-shadow:1px 1px 5px #0b5394;color:#6f00ff;border-radius:100px;" title="Join Now"><i></i> join my channel to get more script and bypass tricks<small><span class='telegramim_count' data-for='@namastegangnetwork'>...</span> participants</small></a>
</center>
<p>
<div id='formFooter'>
<center><a href='https://youtube.com/channel/UC_Y56Xs7_nFetmPnC5FdBQA' target='_blank'><img border='0' data-original-height='118' data-original-width='426' height='88' src='https://lh3.googleusercontent.com/-WV8Zar6fKtY/XY4Yv78tX3I/AAAAAAAAAJc/QesUabR4vjArNZbjmjtx9R0I_HIi_ngzwCLcBGAsYHQ/h230/clipartwiki.com-clothespin-clipart-png-1611333.png' width='200' /></a></div></center>
</center>

<div id='formFooter'>

<center><a href='https://youtube.com/channel/UC_Y56Xs7_nFetmPnC5FdBQA' target='_blank'><img border='0' data-original-height='118' data-original-width='426' height='88' src='https://lh3.googleusercontent.com/-WV8Zar6fKtY/XY4Yv78tX3I/AAAAAAAAAJc/QesUabR4vjArNZbjmjtx9R0I_HIi_ngzwCLcBGAsYHQ/h230/clipartwiki.com-clothespin-clipart-png-1611333.png' width='200' /></a></div></center>
</center>
