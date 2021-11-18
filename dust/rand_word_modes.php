<?php

class Word_generate
{
    private $num = "";
    private $alpha = "";
    private $alpha_small = "";
    private $hyphen = "";
    private $under_bar = "";
    private $slash = "";
    private $asterisk = "";
    private $plus = "";
    private $dot = "";
    private $comma = "";
    private $exclamation = "";
    private $doll = "";
    private $sharp = "";
    private $percent = "";
    private $ampersand = "";
    private $left_bracket = "";
    private $right_bracket = "";
    private $tilde = "";
    private $pipe = "";
    private $word_create_count = "";
    private $word_count_number = "";
    private $number = "1234567890";
    private $eizi_omoji = "ABCDEFGHRJKLMNOPQRSTUVWXYZ";
    private $eizi_komoji = "abcdefghijklmnopqrstuvwxyz";
    private $word = "";
    private $kigo1 = "-";
    private $kigo2 = "_";
    private $kigo3 = "/";
    private $kigo4 = "*";
    private $kigo5 = "+";
    private $kigo6 = ".";
    private $kigo7 = ",";
    private $kigo8 = "!";
    private $kigo9 = "$";
    private $kigo10 = "#";
    private $kigo11 = "%";
    private $kigo12 = "&";
    private $kigo13 = "(";
    private $kigo14 = ")";
    private $kigo15 = "~";
    private $kigo16 = "|";
    private $length = 0;
    private $word_length = 8;

    function __construct($num, $alpha, $alpha_small, $hyphen, $under_bar, $slash, $asterisk, $plus, $dot, $comma, $exclamation, $doll, $sharp, $percent, $ampersand, $left_bracket, $right_bracket, $tilde, $pipe, $word_create_count, $word_count_number)
    {
        $this->num = $num;
        $this->alpha = $alpha;
        $this->alpha_small = $alpha_small;
        $this->hyphen = $hyphen;
        $this->under_bar = $under_bar;
        $this->slash = $slash;
        $this->asterisk = $asterisk;
        $this->plus = $plus;
        $this->dot = $dot;
        $this->comma = $comma;
        $this->exclamation = $exclamation;
        $this->doll = $doll;
        $this->sharp = $sharp;
        $this->percent = $percent;
        $this->ampersand = $ampersand;
        $this->left_bracket = $left_bracket;
        $this->right_bracket = $right_bracket;
        $this->tilde = $tilde;
        $this->pipe = $pipe;
        $this->word_create_count = $word_create_count;
        $this->word_count_number = $word_count_number;
    }

    function num_func()
    {
        if ($this->num == "on") {
            return $this->word . $this->number;
        }
    }

    function alpha_func()
    {
        if ($this->alpha == "on") {
            return $this->word . $this->eizi_omoji;
        }
    }

    function alpha_small_func()
    {
        if ($this->alpha_small == "on") {
            return $this->word . $this->eizi_komoji;
        }
    }

    function hyphen_func()
    {
        if ($this->hyphen == "on") {
            return $this->word . $this->kigo1;
        }
    }

    function under_bar_func()
    {
        if ($this->under_bar == "on") {
            return $this->word . $this->kigo2;
        }
    }

    function slash_func()
    {
        if ($this->slash == "on") {
            return $this->word . $this->kigo3;
        }
    }

    function asterisk_func()
    {
        if ($this->asterisk == "on") {
            return $this->word . $this->kigo4;
        }
    }

    function plus_func()
    {
        if ($this->plus == "on") {
            return $this->word . $this->kigo5;
        }
    }

    function dot_func()
    {
        if ($this->dot == "on") {
            return $this->word . $this->kigo6;
        }
    }

    function comma_func()
    {
        if ($this->comma == "on") {
            return $this->word . $this->kigo7;
        }
    }

    function exclamation_func()
    {
        if ($this->exclamation == "on") {
            return $this->word . $this->kigo8;
        }
    }

    function doll_func()
    {
        if ($this->doll == "on") {
            return $this->word . $this->kigo9;
        }
    }

    function sharp_func()
    {
        if ($this->sharp == "on") {
            return $this->word . $this->kigo10;
        }
    }

    function percent_func()
    {
        if ($this->percent == "on") {
            return $this->word . $this->kigo11;
        }
    }

    function ampersand_func()
    {
        if ($this->ampersand == "on") {
            return $this->word . $this->kigo12;
        }
    }

    function left_bracket_func()
    {
        if ($this->left_bracket == "on") {
            return $this->word . $this->kigo13;
        }
    }

    function right_bracket_func()
    {
        if ($this->right_bracket == "on") {
            return $this->word . $this->kigo14;
        }
    }

    function tilde_func()
    {
        if ($this->tilde == "on") {
            return $this->word . $this->kigo15;
        }
    }

    function pipe_func()
    {
        if ($this->pipe == "on") {
            return $this->word . $this->kigo16;
        }
    }

    function word_count_number_func()
    {
        return $this->word_count_number = strlen($this->word);
    }

    function word_random_gene_func()
    {
        for ($i = 0; $i < $this->word_create_count; $i++) {
            $this->word = str_shuffle($this->word);
            $this->word = substr($this->word, 0, $this->word_count_number);
            while($i >= 0){
                return $this->word."\n";
            }
        }
    }
}
