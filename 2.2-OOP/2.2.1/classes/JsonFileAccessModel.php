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
            if(fopen($this->file,'w+') !== FALSE);
            if(fwrite($this->file,$text)!== FALSE) echo 'Done';
            $this->disconnect();
        }

        public function readJson() {
            return json_encode($this->read());
        }

        public function writeJson($jsonObject){
            if(fopen($this->file,'w+') !== FALSE);
            if(fwrite($this->file,json_decode($jsonObject,JSON_PRETTY_PRINT))!== FALSE) echo 'Done';
            $this->disconnect();
        }
    }
    
?>