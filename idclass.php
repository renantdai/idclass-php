<?php

class Idclass {

    public function __construct(
        public readonly string $nameREP,
        public readonly string $session = '',
        public readonly string $url = 'localhost'
    ) {
        $this->getConfiguration();
    }

    private function getConfiguration() {
        $this->getConfigurationBD();
    }

    private function getConfigurationBD() {
        $configuration = $this->nameREP;
        $this->url = $configuration['url'];
        $this->login($configuration['login'], $configuration['password']);


        return true;
    }

    private function login ($login, $password) {
        $this->login

    }
}
