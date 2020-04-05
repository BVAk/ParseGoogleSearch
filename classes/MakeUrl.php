<?php

include "simple_html_dom.php";
class MakeUrl
{
    public function __construct($word)
    {
        $this->word = $word;
    }
    public $word;

    public function getSiteContent(String $url)
    {
        $word = $this->word;
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1); // Позволяет сохранить ответ сервера в переменную а не выводить на экран.
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, 1); // Позволяет переходить по редиректам.

        $contents = curl_exec($curl_handle);
        curl_close($curl_handle);
        preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?alt=[\'"](.*?)[\'"].*?>/i', $contents, $matches);

        for ($i = 0; $i < count($matches); $i++) {

            if (strpos($matches[2][$i], $word) !== false) {
                print("<center><image class='image' src=" . $matches[1][$i] . "> </center>");
            }
        }
    }
   }
