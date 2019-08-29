<?php

class NewTask
{
public $translator;
public $client;
public $refLang;
public $transLang;
public $deadline;

public function __construct($translator, $client, $refLang, $transLang, $deadline)
{
    $this->translator = $translator;
    $this->client = $client;
    $this->refLang = $refLang;
    $this->transLang = $transLang;
    $this->deadline = $deadline;
}


    public function getTranslator()
    {
       echo $this->translator;
    }


    public function getClient()
    {
        echo $this->client;
    }


    public function getRefLang()
    {
        echo $this->refLang;
    }


    public function getTransLang()
    {
        echo $this->transLang;
    }


    public function getDeadline()
    {
        echo $this->deadline;
    }


}

