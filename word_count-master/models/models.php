<?php


class Word_Count
{   //全角の丸判定
    function marks_count_func($word_text)
    {
        $marks_count = substr_count($word_text, "。");
        return $marks_count;
    }

    //半角の。数判定
    function marks_half_size_func($word_text)
    {
        $marks_half_size = substr_count($word_text, ".");
        return $marks_half_size;
    }

    //句読点、全角の数判定
    function period_count_func($word_text)
    {
        $period_count = substr_count($word_text, "、");
        return $period_count;
    }

    //半角の、数判定
    function period_half_size_func($word_text)
    {
        $period_half_size = substr_count($word_text, ",");
        return $period_half_size;
    }

    //句読点合算
    function final_marks_count_func($marks_count, $period_count, $marks_half_size, $period_half_size)
    {
        $marks_count += $period_count + $marks_half_size + $period_half_size;
        return $marks_count;
    }

    //行数
    function row_count_func($word_text)
    {
        $row_count = substr_count($word_text, "\n");
        return $row_count;
    }

    //行数をマルチバイトに変換
    function row_half_size_func($row_count)
    {
        $row_half_size = $row_count * 2;
        return $row_half_size;
    }

    //初期値に１を足したいため
    function row_count_one_func($row_count)
    {
        $row_count += 1;
        return $row_count;
    }

    //半角スペースの文字数
    function space_word_count_func($word_text)
    {
        $space_word_count = substr_count($word_text, " ");
        return $space_word_count;
    }

    //全角のスペース数判定
    function space_full_width_func($word_text)
    {
        $space_full_width = substr_count($word_text, "　");
        return $space_full_width;
    }

    //文字数
    function text_count_func($word_text)
    {
        $text_count = mb_strlen($word_text, 'UTF-8');
        return $text_count;
    }

    //半角スペース全角スペース込みの文字数
    function all_text_count_func($text_count, $row_half_size)
    {
        $all_text_count = $text_count - $row_half_size;
        return $all_text_count;
    }

    //段落
    function paragraph_array_func($word_text)
    {
        $paragraph_array = explode("\n", $word_text);
        return $paragraph_array;
    }


    function final_text_count_func($text_count, $space_word_count, $space_full_width, $row_half_size)
    {
        $final_text_count = $text_count - $space_word_count - $space_full_width - $row_half_size;
        return $final_text_count;
    }

    //スペースや改行などを省いた最終的な文字数
    function paragraph_count_func($paragraph_array)
    {
        //段落の初期値}
        $paragraph_count = 1;
        //分岐のフラグ
        $flag = False;
        //段落判定　配列を繰り返して文章だったらフラグをTrue, 空白が１つで、flagがTrueなら段落+1 flagをFalseにする
        foreach ($paragraph_array as $value) {
            //配列に分割した文字列を１行毎に判定するために変数代入
            $backspace_count = mb_strlen($value, "UTF-8");
            //判定した文字列が２文字より多いなら=>文章　という判定ロジックでflagをTrueに
            if ($backspace_count > 2) {
                $flag = True;
            } //上記のフラグがTrueになった状態で 改行を取得した場合　段落に + 1 してflagをFalseにすることで連続改行取得を回避
            elseif ($backspace_count == 1 && $flag == True) {
                $paragraph_count++;
                $flag = False;

            }
        }
        return $paragraph_count;
    }
}