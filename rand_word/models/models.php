<?php
//["num" => "numbers", "alpha" => "alphabet", "alpha_small" => "alphabet_small", "hyphen" => "hyphen", "under_bar" => "under_bar",
//        "slash" => "slash", "asterisk" => "asterisk", "plus" => "plus", "dot" => "dot", "comma" => "comma", "ex" => "exclamation", "doll" => "doll", "sharp" => "sharp",
//        "per" => "percent", "ampersand" => "ampersand", "left" => "left_bracket", "right" => "right_bracket", "tilde" => "tilde", "pipe" => "pipe",
//        "word_create" => "word_create_count", "word_count" => "word_count_number"];
//   ["numbers", "alphabet", "alphabet_small", "hyphen", "under_bar",
//    "slash", "asterisk", "plus",  "dot", "comma",  "exclamation", "doll", "sharp", "percent",
//    "ampersand","left_bracket","right_bracket", "tilde", "pipe","word_create_count", "word_count_number"];
class Word_gene{
    private $post_property;
    private $eizi_array = ["1234567890", "ABCDEFGHRJKLMNOPQRSTUVWXYZ", "abcdefghijklmnopqrstuvwxyz"];
    private $kigo_array =[];
    function __construct($POST)
    {
        $this->post_property = $POST;
        $this->kigo_array = ["-", "_", "/", "*", "+", ".", ",", "!", "$", "#", "%", "&", "(", ")", "~", "|"];
    }

    function count(){
        return $_POST["word_create_count"];
    }

    function shuffled_word($word){
        $shuffled_word = [];
        $length = $_POST["word_count_number"];
        for($i = 0; $i < $_POST["word_create_count"]; $i++){
            $shuffled = str_shuffle($word);
            $shuffled_word[] = substr($shuffled, 0, $length);
        }return $shuffled_word;
    }

    function word_generate()
    {
        $word = "";
        foreach ($this->post_property as $post) {
            if ($post == "num_on") {
                $word = $word . $this->eizi_array[0];
            }
            if ($post == "eizi_bg") {
                $word = $word . $this->eizi_array[1];
            }
            if ($post == "eizi_sm") {
                $word = $word . $this->eizi_array[2];
            }
            if ($post == "hyphen") {
                $word = $word . $this->kigo_array[0];
            }
            if ($post == "under") {
                $word = $word . $this->kigo_array[1];
            }
            if ($post == "slash") {
                $word = $word . $this->kigo_array[2];
            }
            if ($post == "aste") {
                $word = $word . $this->kigo_array[3];
            }
            if ($post == "plus") {
                $word = $word . $this->kigo_array[4];
            }
            if ($post == "dot") {
                $word = $word . $this->kigo_array[5];
            }
            if ($post == "com") {
                $word = $word . $this->kigo_array[6];
            }
            if ($post == "ex") {
                $word = $word . $this->kigo_array[7];
            }
            if ($post == "doll") {
                $word = $word . $this->kigo_array[8];
            }
            if ($post == "sharp") {
                $word = $word . $this->kigo_array[9];
            }
            if ($post == "per") {
                $word = $word . $this->kigo_array[10];
            }
            if ($post == "amper") {
                $word = $word . $this->kigo_array[11];
            }
            if ($post == "left") {
                $word = $word . $this->kigo_array[12];
            }
            if ($post == "right") {
                $word = $word . $this->kigo_array[13];
            }
            if ($post == "tilde") {
                $word = $word . $this->kigo_array[14];
            }
            if ($post == "pipe") {
                $word = $word . $this->kigo_array[15];
            }
        }
        return $word;
    }
}