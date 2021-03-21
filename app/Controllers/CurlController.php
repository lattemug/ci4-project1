if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CurlController extends BaseController {

public function __construct() {
parent::__construct();
}

public function curPostRequest()
{
/* Endpoint */
$url = 'http://localhost:8081';

/* eCurl */
$curl = curl_init($url);

/* Data
$data = [
'nim'=>'12',
'nama'=>'dd',
'prodi' => 'rt',
'email => 'eee@g.com'
'alamat' => 'ggg'
];


/* Set JSON data to POST */
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

/* Define content type */
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Content-Type:application/json',
'App-Key: JJEK8L4',
'App-Secret: 2zqAzq6'
));

/* Return json */
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

/* make request */
$result = curl_exec($curl);

/* close curl */
curl_close($curl);
}

public function http_request($url) {
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, $url);

// set user agent
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// tutup curl
curl_close($ch);

// mengembalikan hasil curl
return $output;
}
}
}