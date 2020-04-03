<?php

include "simple_html_dom.php";
class MakeUrl
{
    public function __construct($word)
    {
        $this->word = $word;
    }
    public $word;

    public function getSiteContent()
    {
        $word = $this->word;

        $url = "https://modaphoto.ru/dizajn-nogtej/";

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1); // Позволяет сохранить ответ сервера в переменную а не выводить на экран.
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, 1); // Позволяет переходить по редиректам.

        $contents = curl_exec($curl_handle);
        curl_close($curl_handle);
        preg_match_all('/<img[^>]+>/i', $contents, $result);
        $img = array();

        foreach ($result[0] as $img_tag) {
            preg_match_all('/(src|alt)=("[^"]*")/i', $img_tag, $img[]);
        }

        foreach ($img as $pict) {
            $a[] = str_replace('src=', '', $pict[0]);
        }
        foreach ($a as $pict) {
            $b['src'][] = str_replace('alt=', '', $pict[0]);
            $b['alt'][] = str_replace('alt=', '', $pict[1]);
        }
        
        for ($i=0;$i<count($b);$i++) {
            if(strpos($b['alt'][$i], $word) !== false){
            print("<center>".$word."</center>");            
            print("<center><image class='image' src=" . $b['src'][$i] . "> </center>");
            print("<center>".$b['alt'][$i]."</center>");
            }
        }
    }
}
