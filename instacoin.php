



<html>
<head> <title>NamasteHackers</title>
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
</style></head><title></title><body><center><b><center>
<html><head>
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
</head>
<body style='font-family: Yatra One;'>
 </style>
 </head>
 <title>NamasteHackers</title>
 <body>
 <center>
     <?php
error_reporting(0);
echo "<font color='red' size='5'><bold><hr class='hr-19'>INSTA-UP COIN CHECKER @NamasteGangNetwork<hr class='hr-19'><bold>";
if(isset($_GET['submit'])){
	#header('refresh: 2');
	$uid=$_GET['oid'];
 
    
  function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



  $x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$url1='https://instaup.marsapi.com/get_likes/user/coins';



$x4='saam';
$data0='market=Bazaar&user_id='.$uid.'&iad='.$x40.'&user_name='.$x4;

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);


$headers1=['market: Bazaar',
'access: '.$access,
'lng: en',
'api_key: ABCXYZ123TEST',
"Nagent: null/02:00:00:00:00:00/'.$ts.'/$x16/null/$x40",
'cnt: unknown',
'version: 51',
'pkg: f2c6d7a5b030a1542f7eb589d5013340',
'aid: '.$x40,
'Content-Type: application/x-www-form-urlencoded',
'Host: instaup.marsapi.com',
'Connection: Keep-Alive',
'Accept-Encoding: gzip',
'User-Agent: okhttp/3.12.1',
'X-Forwarded-For: '.$ipz.''];


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
	   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	$c= curl_exec ($ch);
	
	curl_close ($ch);

    
echo "<div class='success'><center>
<font color='blue'><hr>Message:-$c<hr></font></center></div>";



}
	
	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>

<input type='text' name='oid'  class='text' placeholder='Enter insta-up id' required><br><br>";
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