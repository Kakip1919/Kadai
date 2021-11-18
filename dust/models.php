<?php


class Word_Count
{
    private $word_txt = '';
    private $marks_count = 0;
    private $marks_half_size = 0;
    private $period_count = 0;
    private $period_half_size = 0;
    private $row_count = 0;
    private $space_word_count = 0;
    private $space_full_width = 0;
    private $text_count = 0;
    public function __construct($word_txt)
    {
        $this->word_txt = $word_txt;
        $this->space_full_width = substr_count($this->word_text, "　");
        $this->marks_count = substr_count($this->word_txt, "。");
        $this->marks_half_size = substr_count($this->word_txt, ".");
        $this->period_count = substr_count($this->word_text, "、");
        $this->period_half_size = substr_count($this->word_text, ",");
        $this->row_count = substr_count($this->word_text, "\n");
        $this->space_word_count = substr_count($this->word_text, " ");
        $this->text_count = mb_strlen($this->word_text, 'UTF-8');
    }
        //全角の丸判定
        function marks_count_func()
        {
            return $this->marks_count;
        }

        //半角の。数判定
        function marks_half_size_func()
        {
            return $this->marks_half_size;
        }

        //句読点、全角の数判定
        function period_count_func()
        {
            return $this->period_count;
        }

        //半角の、数判定
        function period_half_size_func()
        {
            return $this->period_half_size;
        }

        //句読点合算
        function final_marks_count_func()
        {
            return $this->period_count + $this->marks_half_size + $this->period_half_size;
        }

        //行数
        function row_count_func()
        {
            return $this->row_count;
        }

        //行数をマルチバイトに変換
        function row_half_size_func($row_count)
        {
            return $this->row_count * 2;
        }

        //初期値に１を足したいため
        function row_count_one_func($row_count)
        {
            return $this->row_count + 1;
        }

        //半角スペースの文字数
        function space_word_count_func()
        {
            return $this->space_word_count;
        }

        //全角のスペース数判定
        function space_full_width_func()
        {

            return $this->space_full_width;
        }

        //文字数
        function text_count_func()
        {
            return $this->text_count;
        }

        //半角スペース全角スペース込みの文字数
        function all_text_count_func($text_count, $row_half_size)
        {

            return $this->text_count - $this->row_half_size;
        }


        function final_text_count_func($text_count, $space_word_count, $space_full_width, $row_half_size)
        {
            return $this->text_count - $this->space_word_count - $this->space_full_width - $this->row_half_size;
        }

        //スペースや改行などを省いた最終的な文字数
        function paragraph_count_func()
        {
            $paragraph_array = explode("\n", $this->word_text);
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
