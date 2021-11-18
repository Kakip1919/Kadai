
<!DOCTYPE HTML>
<html lang="jp">
<head>
    <title>西暦を和暦に,和暦を西暦に変換！</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../Comn/style.css">

    <script type="text/javascript" src="../Comn/index.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
</head>
<body>

<div class="pt-3">
    <h1 class="text-center border-bottom border-dark" style="padding:30px;" >和暦を西暦に、西暦を和暦に変換！</h1>
</div>

    <a href="/kadai/Home/controller/TOP.php" class="back">URL集に戻る</a>
    <h3 class="text-center today_date">今日は西暦{$smarty.now|date_format:"%Y/%m/%d"}日です</h3>
{*    <div class="js-tab-panel">*}
    <div class="container2">
{*            <div class="js-tab active_tab">*}
{*                西暦⇒和暦*}
{*            </div>*}
{*            <div class="js-tab inactive_tab">*}
{*                和暦→西暦*}
{*            </div>*}
    </div>

    <div class="square_background">
    {if $flag eq 1}
    <h2 class="text-center today_subtitle">{$subtitle}</h2>
    <h2 class="text-center result_cal">{$cal_result}</h2>
    {/if}
    </div>
    {if $wareki_flag eq 1}
        <h3 class="text-center">{$wareki_subtitle}{$wareki_result}</h3>
    {/if}
{*        <div class="js-panel active_content">*}
    <div class="py-5 text-center">
        <h5 class="text-center">{$validation}</h5>
    <form  action="/kadai/koyomi/controller/controller.php" method="get">
        <div class="head_title">西暦
        <label>
            <input maxlength="4" type="tel" name="seireki" class="year_text_field" placeholder="2000">
        </label>
        年
        <label>
            <input type="tel" name="month" class="text_field " maxlength="2" placeholder="1" width="30">
        </label>
        月
        <label>
            <input type="tel" name="day" class="text_field " maxlength="2" placeholder="1">
        </label>
        日
        <input type="submit" value="変換する" class="button">
        </div>
    </form>
    </div>
<div class="block"></div>
<h3 class="text-center">日付・年数表現　とは</h3>
<div class="container border-box">
    <h5 class="sentence"><b>・</b> 元号の後に年数を続ける。ただし1年は「○○元年」とするのが普通（特に縦書きの場合）。また、横書き固定長の場合、1桁の年数は月数や日数と同様、0または空白を詰めて、（「02年」「 2年」のように）2桁とする。</h5>
    <br>
    <h5 class="sentence"><b>・</b> 大化以前および大宝以前の元号の空白期間は、天皇の名を元号の代わりに使うのが慣例である。たとえば、十七条憲法が公布された西暦604年は「推古（天皇）12年」のように表す。</h5>
    <br>
    <h5 class="sentence"><b>・</b> 明治以降の元号を表す表現としては、漢字1字の略記（明・大・昭・平・令）や英字1字の略記（M・T・S・H・R）も使われる。これらの略記は JIS X 0301 で規定されている。なお、明治の前の元号は慶応、その前は元治であるが、それらの略記はJISには含まれておらず、期間がごく短いこともあいまって実際に使われることはほぼない。</h5>
    <br>
    <h5 class="sentence"><b>・</b> 数十年先の未来の年数表現に元号を用いた場合、（今後の改元などは想定できないことから）3桁以上にもなりうる。たとえば、平成の元号を用いて西暦2100年を表現した場合、平成112年とせざるを得なかった。</h5>
</div>

<div class="sub_sentence ">
    <div class="block_head"></div>
        <h2 class="text-center mini_heading">令和⇒西暦の計算方法</h2>
    <div class="sentence_block">
        <p>令和〇〇年から１８を足すことで西暦に変換できます。</p>
        <p>例：令和元年 (1) + 18 + 2000 = 2019年</p>
        <p>大事なことは、「18を足した下二桁」です。</p>
    </div>
    <h2 class="text-center mini_heading">西暦⇒令和の計算方法</h2>
    <div class="sentence_block">
        <p>西暦から18を引くことで令和に変換できます。</p>
        <p>例：2019 - 18 = 令和1年</p>
        <p>2021年の場合、2021 - 18 = 3で、令和3年になります。</p>
        <p>大事なことは、「西暦から18を引くこと」です。</p>
    </div>
    <h2 class="text-center mini_heading">平成⇒西暦の計算方法</h2>
    <div class="sentence_block">
        <p>平成〇〇年から12を引くことで西暦に変換できます。</p>
        <p>例１：平成31年 - 12 = 2019年</p>
        <p>例２：平成20年 - 12 = 2008年</p>
        <p>大事なことは、「平成から12を引くこと」です。</p>

    </div>
    <h2 class="text-center mini_heading">西暦⇒平成の計算方法</h2>
    <div class="sentence_block">
        <p>西暦から12を足した数(2015なら⇒15+12)の下二桁が平成の年になります。</p>
        <p>例１：2005年 + 12 = 平成17年</p>
        <p>例２：1990年 + 12 = 平成12年</p>
        <p>大事なことは「西暦に12を足した下二桁」です。</p>
    </div>
    <h2 class="text-center mini_heading">昭和⇒西暦の計算方法</h2>
    <div class="sentence_block">
        <p>昭和〇〇年 + 25を足した数の下二桁が西暦になります</p>
        <p>例１：昭和5年 + 25 = 1930年</p>
        <p>例２：昭和41年 + 25 = 1966年</p>
        <p>大事なことは、「昭和に２５を足すこと」です。</p>
    </div>
    <h2 class="text-center mini_heading">西暦⇒昭和の計算方法</h2>
    <div class="sentence_block">
        <p>西暦から25を引いた数(1962なら⇒62-25)の下二桁が昭和になります。</p>
        <p>例１：1934年 - 25 = 昭和9年</p>
        <p>例２：1989年 - 25 = 昭和64年/平成元年</p>
        <p>大事なことは、「西暦から12を引いた下二桁」です。</p>
    </div>
</div>

<div class="js-panel inactive_content">
    <div class="py-5 text-center">
        <h5 class="text-center">{$wareki_valida}</h5>
        <form action="/kadai/koyomi/controller/controller.php" method="get">
            <select name="example" class=form-select" aria-label="Default select example">
                <option name="reiwa" value="reiwa">令和</option>
                <option name="heisei" value="heisei">平成</option>
                <option name="showa" value="showa">昭和</option>
            </select>
        </form>
    </div>
</div>
</body>
</html>



{*    {section name=bar start=1926 loop=2026}*}
{*        {assign var = i value=$smarty.section.bar.index}*}
{*        <div class='inline'><a href='?seireki={$i}'javascript:form.submit()><h5> {$i}年 </h5></a></div>*}
{*    {/section}*}



{*{section name=bar start=1 loop=64}*}
{*    {assign var = i value=$smarty.section.bar.index}*}
{*    <div class='inline'><a href='?example=showa&wareki={$i}'javascript:form.submit()><h5> 昭和{$i}年 </h5></a></div>*}
{*{/section}*}
{*{section name=bar start=1 loop=31}*}
{*    {assign var = i value=$smarty.section.bar.index}*}
{*    <div class='inline'><a href='?example=heisei&wareki={$i}'javascript:form.submit()><h5> 平成{$i}年 </h5></a></div>*}
{*{/section}*}
{*{section name=bar start=1 loop=31}*}
{*{assign var = i value=$smarty.section.bar.index}*}
{*<div class='inline'><a href='?example=reiwa&wareki={$i}'javascript:form.submit()><h5> 令和{$i}年 </h5></a></div>*}
{*{/section}*}
