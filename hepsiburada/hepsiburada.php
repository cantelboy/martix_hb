<?php


class Hepsiburada
{
    protected $token;
    protected $username;
    protected $password;
    protected $api_url_mpop = 'https://mpop.hepsiburada.com';//token / urun gonderme / Urun status sorgulama /
    protected $api_url_listing = "https://listing-external.hepsiburada.com";//Listing / Urun Güncelleme / Satış Açma / Kapama
    protected $ch;
    protected $headers = [];

    function __construct($conf)
    {
        $ch = curl_init();
        $cookie = '/tmp';
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $this->ch = $ch;
        if ($this->checkConfig($conf)) {
            $basic = base64_encode($this->username . ':' . $this->password);
            $this->headers[] = "Authorization: Bearer " . $basic;
            $this->headers[] = "Content-Type: application/json";
        }
    }


    //Urun gonderme
    public function productsImport($product)
    {
        $this->headers = [];
        $this->headers[] = "Authorization: Bearer " . $this->token;
        $this->headers[] = "Content-Type: multipart/form-data";
        $file = $this->save($product, time() . '_' . rand(), 'json');
        $post = array('file' => new CURLFILE($file));
        $result = $this->request($this->api_url_mpop . '/product/api/products/import', '', $post);
        unlink($file);
        return $result;
    }

    //urun durumu
    public function getProductStatus($trackingId)
    {
        $this->headers = [];
        $this->headers[] = "Authorization: Bearer " . $this->token;
        $this->headers[] = "Content-Type: application/json";
        $url = $this->api_url_mpop . "/product/api/products/status/" . $trackingId;
        return $this->request($url);
    }
 
 
    // listing
    public function getListingAll()
    {
        $this->headers = [];
        $basic = base64_encode($this->username . ':' . $this->password);
        $this->headers[] = "Authorization: Basic " . $basic;
        $url = $this->api_url_listing . "/listings/merchantid/" . $this->apiKey;
        return $this->request($url);
    }


    //Upload methodu
    public function invertoryUpload($product)
    {
        $this->headers = [];
        $basic = base64_encode($this->username . ':' . $this->password);
        $this->headers[] = "Authorization: Basic " . $basic;
        $url = $this->api_url_listing . "/listings/merchantid/" . $this->apiKey . "/inventory-uploads";
        return $this->request($url, false, $product);
    }
    //Sale status
    public function saleStatus($sku,$status)
    {
        
        $this->headers = [];
        $basic = base64_encode($this->username . ':' . $this->password);
        $this->headers[] = "Authorization: Basic " . $basic;
        $url = $this->api_url_listing . "/listings/merchantid/" . $this->apiKey . "/sku/".$sku."/".$status;
        print_r($url);
        return $this->request($url,true);
    }

    private function checkConfig($conf)
    {
        //
        if (empty($conf['auth_user']) ||
            empty($conf['auth_pass']) ||
            empty($conf['api_key'])) {
            $this->errors = "Hepsiburada Ayarları Girilmedi";
        } else {
            $this->username = $conf['auth_user'];
            $this->password = $conf['auth_pass'];
            $this->apiKey = $conf['api_key'];
            $this->token();
            return true;
        }
    }
    private function save($xmlString,$sourceName,$extension){
        $folder = './product';
        if (is_dir($folder) || mkdir($folder, 0777, true)) {
            if ($fh = fopen($folder. '/' . $sourceName . ".".$extension, "w+")) {
                fwrite($fh, $xmlString);
                fclose($fh);
                return $folder. '/' . $sourceName . ".".$extension;
            } else {
                echo "Cant create file: " . $folder . '/' . $sourceName . ".".$extension;
            }
        }
    }

    private function token()
    {
        $data['username'] = $this->username;
        $data['password'] = $this->password;
        $data['authenticationType'] = 'INTEGRATOR';
        $this->headers = [];
        $this->headers[] = "Content-Type: application/json";
        $this->headers[] = "enabled: true";
        $result = json_decode($this->request($this->api_url_mpop . '/api/authenticate', '', json_encode($data)));

        if (!empty($result->id_token)) {
            $this->token = $result->id_token;
        } else {
            $this->errors = "Hepsiburada Ayarları hatalı";
        }

    }

    private function request($url, $post_data = '', $json = false)
    {
        $post = false;
        if (@$post_data || @$json) {
            curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "POST");
            $post = true;
        } else {
            curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "GET");
        }
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->headers);
        if (!empty($json)) {
            curl_setopt($this->ch, CURLOPT_POSTFIELDS, $json);
        } else if (@$post) {
            curl_setopt($this->ch, CURLOPT_POST, $post);
        }
        curl_setopt($this->ch, CURLOPT_URL, $url);
        $content = curl_exec($this->ch);
        $info = curl_getinfo($this->ch);
        $this->location = $info['url'];
        $this->info = $info;
        return $content;
    }
}



