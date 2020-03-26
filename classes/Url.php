<?php

namespace classes;

class Url
{
    public function __construct($word)
    {
        $this->word = $word;
    }
    public function getSearchWord($word)
    {
        $this->word = $word;
        return $word;
    }
}
