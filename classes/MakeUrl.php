<?php

include "simple_html_dom.php";
class MakeUrl
{
    public function __construct($word)
    {
        $this->word = $word;
    }
    public $word;
    public function getSearchWord()
    {
        $word = $this->word;
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,"http://ajax.googleapis.com/ajax/services/search/images?v=1.0&imgsz=icon&q=".$word );
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        $contents = curl_exec($curl_handle);
        curl_close($curl_handle);
        $images = self::string_extractor($contents, 'unescapedUrl":"', '",');
        $image_str = "";
        foreach ($images as $image) {
            print("<img src='" . $image . "'class='image'>");
            
        }
        
    }
    function string_extractor($string, $start, $end)
    {

        # Setup
        $cursor = 0;
        $foundString             = -1;
        $stringExtractor_results = array();

        # Extract  		
        while ($foundString != 0) {
            $ini = strpos($string, $start, $cursor);

            if ($ini >= 0) {
                $ini    += strlen($start);
                $len     = strpos($string, $end, $ini) - $ini;
                $cursor  = $ini;
                $result  = substr($string, $ini, $len);
                array_push($stringExtractor_results, $result);
                $foundString = strpos($string, $start, $cursor);
            } else {
                $foundString = 0;
            }
        }

        return $stringExtractor_results;
    }
}
