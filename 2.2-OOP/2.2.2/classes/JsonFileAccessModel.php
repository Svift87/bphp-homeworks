<?php
    class JsonFileAccessModel extends Config {
        protected $fileName;
        protected $file;
        public function __construct($fileName)
        {
            $this->fileName = Config::DATABASE_PATH . $fileName . '.json';
        }
        private function connect()
        {
            $this->file = fopen($this->fileName, 'r+');
        }
        private function disconnect()
        {
            fclose($this->file);
        }
        public function read()
        {
            $this->connect();
            $text = fread($this->file, filesize($this->fileName));
            $this->disconnect();
            return $text;
        }
        public function write($text)
        {
            $this->connect();
            fopen($this->fileName, 'w+');
            fwrite($this->file, $text);
            $this->disconnect();
        }
        public function readJson()
        {
            return json_decode($this->read());
        }
        public function writeJson($jsonObject)
        {
            $this->write(json_encode($jsonObject, JSON_PRETTY_PRINT));
        }
    }
?>