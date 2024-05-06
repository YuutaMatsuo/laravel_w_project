<?php

namespace App\Services\module;

// お題と回答をまとめたクラス
class Topic
{
    private $id;
    private $theme;
    private $title;
    private $conjunction;
    private $answer;
    private $createrName = "名無しさん";

    // コンストラクタ
    public function __construct($id, $title, $theme, $conjunction)
    {
        $this->id = $id;
        $this->title = $title;
        $this->theme = $theme;
        $this->conjunction = $conjunction;
    }

    // getter/setter
    public function getId()
    {
        return $this->id;
    }

    public function getTheme()
    {
        return $this->theme;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getConjunction()
    {
        return $this->conjunction;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    public function getAnswer()
    {
        return $this->answer;
    }

    public function setCreaterName($createrName)
    {
        $this->createrName = $createrName;
    }

    public function getCreaterName()
    {
        return $this->createrName;
    }
}
