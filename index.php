<?php
require_once './hepsiburada/hepsiburada.php';

$conf = [
'auth_user' => 'mytoprint_dev',
'auth_pass' => 'hL3xLMvqMjkdZp!',
'api_key' => 'abf942a4-7ff5-4518-8c9a-6da0dde76c68',
];

$product = new Hepsiburada($conf);//Hepsiburada sınıfının başlatılması.

//Urun gönderimi data. Hepsi burada örnek data
// $data = array (
//     0 => 
//     array (
//       'categoryId' => 18021982,
//       'merchant' => 'abf942a4-7ff5-4518-8c9a-6da0dde76c68',
//       'attributes' => 
//       array (
//         'merchantSku' => 'SAMPLE-SKU-INT-001',
//         'VaryantGroupID' => 'Hepsiburada00',
//         'Barcode' => '1234567891234',
//         'UrunAdi' => 'Roth Tyler',
//         'price' => '200',
//         'stock' => '20',
//         'UrunAciklamasi' => 'Duis enim duis magna ex veniam elit id Lorem cillum minim nisi id aliquip. Laboris magna id est et deserunt adipisicing tempor eu ea officia ipsum deserunt. Irure occaecat sit aliquip elit ipsum sint dolore quis est amet aute pariatur cupidatat fugiat. Cillum pariatur pariatur occaecat sint. Aliqua qui in exercitation nulla aliquip id ipsum aliquip ad ut excepteur culpa consequat aliquip. Nisi ut ex tempor enim adipisicing anim irure pariatur.
//   ',
//         'Marka' => 'Nike',
//         'GarantiSuresi' => 24,
//         'kg' => '1',
//         'tax_vat_rate' => '5',
//         'Image1' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image2' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image3' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image4' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image5' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'renk_variant_property' => 'Siyah',
//         'ebatlar_variant_property' => 'Büyük Ebat',
//       ),
//     ),
//     1 => 
//     array (
//       'categoryId' => 18021982,
//       'merchant' => 'abf942a4-7ff5-4518-8c9a-6da0dde76c68',
//       'attributes' => 
//       array (
//         'merchantSku' => 'SAMPLE-SKU-INT-002',
//         'VaryantGroupID' => 'Hepsiburada11',
//         'Barcode' => '987654321987',
//         'UrunAdi' => 'Roth Tyler',
//         'price' => '200',
//         'stock' => '20',
//         'UrunAciklamasi' => 'Duis enim duis magna ex veniam elit id Lorem cillum minim nisi id aliquip. Laboris magna id est et deserunt adipisicing tempor eu ea officia ipsum deserunt. Irure occaecat sit aliquip elit ipsum sint dolore quis est amet aute pariatur cupidatat fugiat. Cillum pariatur pariatur occaecat sint. Aliqua qui in exercitation nulla aliquip id ipsum aliquip ad ut excepteur culpa consequat aliquip. Nisi ut ex tempor enim adipisicing anim irure pariatur.
//   ',
//         'Marka' => 'Nike',
//         'GarantiSuresi' => 24,
//         'kg' => '1',
//         'tax_vat_rate' => '5',
//         'Image1' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image2' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image3' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image4' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image5' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'renk_variant_property' => 'Siyah',
//         'ebatlar_variant_property' => 'Büyük Ebat',
//       ),
//     ),
//     2 => 
//     array (
//       'categoryId' => 18021982,
//       'merchant' => 'abf942a4-7ff5-4518-8c9a-6da0dde76c68',
//       'attributes' => 
//       array (
//         'merchantSku' => 'SAMPLE-SKU-INT-003',
//         'VaryantGroupID' => 'Hepsiburada22',
//         'Barcode' => '12547896523145',
//         'UrunAdi' => 'Roth Tyler',
//         'price' => '210',
//         'stock' => '21',
//         'UrunAciklamasi' => 'Duis enim duis magna ex veniam elit id Lorem cillum minim nisi id aliquip. Laboris magna id est et deserunt adipisicing tempor eu ea officia ipsum deserunt. Irure occaecat sit aliquip elit ipsum sint dolore quis est amet aute pariatur cupidatat fugiat. Cillum pariatur pariatur occaecat sint. Aliqua qui in exercitation nulla aliquip id ipsum aliquip ad ut excepteur culpa consequat aliquip. Nisi ut ex tempor enim adipisicing anim irure pariatur.
//   ',
//         'Marka' => 'Nike',
//         'GarantiSuresi' => 24,
//         'kg' => '1',
//         'tax_vat_rate' => '5',
//         'Image1' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image2' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image3' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image4' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image5' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'renk_variant_property' => 'Kırmızı',
//         'ebatlar_variant_property' => 'Küçük Ebat',
//       ),
//     ),
//     3 => 
//     array (
//       'categoryId' => 18021982,
//       'merchant' => 'abf942a4-7ff5-4518-8c9a-6da0dde76c68',
//       'attributes' => 
//       array (
//         'merchantSku' => 'SAMPLE-SKU-INT-004',
//         'VaryantGroupID' => 'Hepsiburada33',
//         'Barcode' => '3578945612578',
//         'UrunAdi' => 'Roth Tyler',
//         'price' => '210',
//         'stock' => '30',
//         'UrunAciklamasi' => 'Duis enim duis magna ex veniam elit id Lorem cillum minim nisi id aliquip. Laboris magna id est et deserunt adipisicing tempor eu ea officia ipsum deserunt. Irure occaecat sit aliquip elit ipsum sint dolore quis est amet aute pariatur cupidatat fugiat. Cillum pariatur pariatur occaecat sint. Aliqua qui in exercitation nulla aliquip id ipsum aliquip ad ut excepteur culpa consequat aliquip. Nisi ut ex tempor enim adipisicing anim irure pariatur.
//   ',
//         'Marka' => 'Nike',
//         'GarantiSuresi' => 24,
//         'kg' => '1',
//         'tax_vat_rate' => '5',
//         'Image1' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image2' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image3' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image4' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image5' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'renk_variant_property' => 'Mavi',
//         'ebatlar_variant_property' => 'Büyük Ebat',
//       ),
//     ),
//     4 => 
//     array (
//       'categoryId' => 18021982,
//       'merchant' => 'abf942a4-7ff5-4518-8c9a-6da0dde76c68',
//       'attributes' => 
//       array (
//         'merchantSku' => 'SAMPLE-SKU-INT-005',
//         'VaryantGroupID' => 'Hepsiburada44',
//         'Barcode' => '45698712365472',
//         'UrunAdi' => 'Roth Tyler',
//         'price' => '300',
//         'stock' => '40',
//         'UrunAciklamasi' => 'Duis enim duis magna ex veniam elit id Lorem cillum minim nisi id aliquip. Laboris magna id est et deserunt adipisicing tempor eu ea officia ipsum deserunt. Irure occaecat sit aliquip elit ipsum sint dolore quis est amet aute pariatur cupidatat fugiat. Cillum pariatur pariatur occaecat sint. Aliqua qui in exercitation nulla aliquip id ipsum aliquip ad ut excepteur culpa consequat aliquip. Nisi ut ex tempor enim adipisicing anim irure pariatur.
//   ',
//         'Marka' => 'Nike',
//         'GarantiSuresi' => 24,
//         'kg' => '1',
//         'tax_vat_rate' => '5',
//         'Image1' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image2' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image3' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image4' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'Image5' => 'https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg',
//         'renk_variant_property' => 'Siyah',
//         'ebatlar_variant_property' => 'Büyük Ebat',
//       ),
//     ),
// );
//Ornek ürün excell
$data = array (
  0 => 
  array (
    'categoryId' => 18021982,
    'merchant' => 'abf942a4-7ff5-4518-8c9a-6da0dde76c68',
    'attributes' => 
    array (
      'merchantSku' => 'PF.RB-02 PBK',
      'Barcode' => '8682125641102PRF21',
      'UrunAdi' => 'PERFLEX ECO  BAGAJ (DÜZ) 370 LT SİYAH',
      'price' => '1300000',
      'stock' => '16',
      'UrunAciklamasi' => '• Renginin korunmasına amacıyla UV ışınlarına dayanıklı hafif ABS plastikten yapılmıştır• Siyah, gümüş ve beyaz renkleri mevcuttur. Bosphorus modeli sadece gri/siyah renkte mevcuttur• Yüksek hızlarda bile sessiz ve aerodinamiktir• Araç hatlarına kusursuz şekilde uyum sağlar• Hafif yapısı ve yüksek hacmiyle yüklenmeyi kolaylaştırır• Yüksek imalat kalitesine sahiptir Sağlam ve dayanıklıdır• Her hava koşuluna dayanıklı ve su geçirmezdir• Güvenlik kilitleme sistemi, güvenlik adına ürün kilitlenene kadar anahtarın çıkarılmamasını sağlar• Merkezi kilit sistemine sahiptir• Çift taraftan açılabilme (Sadece Bağaziçi modelinde) özelliğne sahiptir• % 100 Türk Malıdır.**** Made from UV resistant lightweight ABS plastic to help maintain the color*  Available in black, silver and white colors. The Bosphorus model is only available in gray / black.*  Silent & aerodynamic even at high speeds*Blends in seamlessly with the lines of vehicle*Lightweight construction makes easier to load even with the big footprint*  High-quality construction & build quality. Sturdy and durable*  Weather resistant & waterproof*  Safety locking system ensures that the key cannot be removed until the box is lockedØ  Central locking system*Dual side opening (Only on Bosporus model).*  100% Made in Turkey',
      'Marka' => 'PERFLEX',
      'GarantiSuresi' => 12,
      'kg' => '250',
      'tax_vat_rate' => '18',
      'Image1' => 'https://perflex.matrixotoerp.com/uploads/PERFLEX2/Products_images/8041622603525.jpg',
      'Image2' => 'https://perflex.matrixotoerp.com/uploads/PERFLEX2/Products_images/11479379126922.jpg',
    ),
  ),
 
);

$data = json_encode($data);
//ürün gönderme methodu.
$productResult = $product->productsImport($data);

echo '<pre>';
print_r($productResult);

//trackId ile ürün status sorgulama
$productResult = json_decode($productResult);

$productCheck = $product->getProductStatus($productResult->data->trackingId);

//echo '<pre>';
print_r($productCheck);

//Urun adet ve fiyat güncelleme listing kategoresinde olan onaylanmış ürünü güncelleme

$data2 = [
        'listing' => [
                'HepsiburadaSku' => 'AYKNO1T0CCF4GC3-40',
                'MerchantSku' => '2614',
                'Price' => number_format(35, 2, ",", ""),
                'AvailableStock' => 11,
                'DispatchTime' => '3',
        ]
];
//data 
function array_to_xml( $data, &$xml_data ) {
    foreach( $data as $key => $value ) {
        if( is_array($value) ) {
            if( is_numeric($key) ){
                $key = 'item'.$key; //dealing with <0/>..<n/> issues
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        } else {
            $xml_data->addChild("$key",htmlspecialchars("$value"));
        }
     }
}




$xml = new SimpleXMLElement('<listings/>');
array_to_xml($data2,$xml);
$productUpdate = $product->invertoryUpload($xml->asXML());


echo '<pre>';
print_r($xml->asXML());


//Satışa açama

$saleActive = $product->saleStatus('AYKNO1T0CCF4GC3-40','activate');

//Satışa kapama

$saleDeactivate = $product->saleStatus('AYKNO1T0CCF4GC3-40','deactivate');

echo '<pre>';
print_r($saleActive);