<form action="/kadai/mylunch/controller/UI_controller.php?page=1" method="post">
{if isset($get_post_city) or isset($get_post_lunch)}
    <h3>id:{$id},city:{$get_post_city},lunch:{$get_post_lunch}を追加しました。</h3>
{else}
    追加できませんでした
{/if}
    <input type="submit" value="OK">
</form>