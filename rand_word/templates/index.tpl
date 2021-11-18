<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Comn/style.css">
</head>
<body>
<div class="container">

    <a href="/kadai/Home/controller/TOP.php" class="back">URL集に戻る</a>

    <section>
        <div class="form_box">
            <p>オプションを選んでください</p>
            <form action="/kadai/rand_word/controller/controller.php" method="post">
                <div class="check">
                    <label for="scales">
                        <input type="checkbox" id="scales" name="num[]" value="num_on" checked>
                        数字
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="eizi_bg">
                        英字(大文字)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="eizi_sm">
                        英字(小文字)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="hyphen">
                        -(ハイフン)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="under">
                        _(アンダーバー)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="slash">
                        /(スラッシュ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="aste">
                        *(アスタリスク)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="plus">
                        +(プラス)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="dot">
                        .(ドット)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="com">
                        ,(カンマ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="ex">
                        !(エクスクラメーション)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="doll">
                        $(ドル)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="sharp">
                        #(シャープ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="per">
                        %(パーセント)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="amper">
                        &(アンパサンド)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="left">
                        ((左かっこ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="right">
                        )(右かっこ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="tilde">
                        ~(チルダ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="pipe">
                        |(パイプ)
                    </label>
                    <label for="">
                        文字数：
                        <input type="number" name="word_count_number" value="3">
                    </label>
                    <label for="">
                        生成数：
                        <input type="number" name="word_create_count" value="3">
                    </label>
                    <input class="submit_button" type="submit" value="送信">

                    {section name=bar start=0 loop=$count}
                        {assign var = i value=$smarty.section.bar.index}
                        <ul>
                            <li>{$shuffled[$i]}</li>
                        </ul>
                    {/section}
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>
