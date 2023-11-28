<?php
//include_once('curl.php');

class IdclassAPI extends Curl {

    public function __construct(
        public $curl,
        public readonly string $url = 'localhost'
    ) {
        $this->curl = new Curl($url);
    }

    public function login($login, $password) {
        $this->curl->setUrl($this->url . '/login.fcgi');
        $this->curl->setMethod(Curl::REQUEST_METHOD_POST);
        $this->curl->setBody([
            'login' => $login,
            'password' => $password
        ]);

        return $this->curl->sendCurl();
    }
}
