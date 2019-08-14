<?php
    class JsonFileAccessModel extends Config {
        public function __construct() {
            $this->fileName = 'files/new.json';
        }

        private function connect() {            
            $this->file = fopen($this->fileName,'r+');
        }

        private function disconnect() {
            fclose($this->file);
        }

        public function read() {
            $this->connect();
            $text = fread($this->file,3000);
            $this->disconnect();
            return $text;            
        }

        public function write($text) {
            $this->connect();
            file_put_contents($text, '');
            $text = fread($this->file,3000);
            $this->disconnect();
        }

        public function readJson() {
            $this->connect();
            $text = fread($this->file,3000);
            $this->disconnect();
            return json_encode($this->read());
        }

        public function writeJson($jsonObject){
            $this->connect();
            file_put_contents($jsonObject, '');
            $jsonObject = fread($this->file,3000);
            json_decode($jsonObject, JSON_PRETTY_PRINT);
            $this->disconnect();
        }
    }
    
?>