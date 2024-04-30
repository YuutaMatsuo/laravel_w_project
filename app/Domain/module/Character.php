<?php

// PlayerとCpuに共通する処理をまとめたクラス
class Character
{
    private $id;
    private $name;
    private $text;

    public function __construct($id)
    {
        $this->id = $id;
        $this->name = '名無しさん';
    }


    // getter/setter
    public function getId()
    {
        return $this->id;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
