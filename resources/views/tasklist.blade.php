<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="/images/headlogo.png">
        <title>"ラーメンリスト"</title>
    </head>
    <link href="/css/common.css" rel="stylesheet">
    <h3 class="txt">今、行きたいラーメンは？</h3>
</html>

<div class="form">
    <form action="/task" method="POST" >
        <?= csrf_field() ?>
                <input type="text" name="task_name"placeholder="店名">
                <input type="text" name="g"placeholder="麺の量">
                <input type="submit" value="追加">
    </form>
</div>

    <div class="task">
        <table class="table">
        <tr>
            <th>店名</th>
            <th>グラム</th>
            <th>
                <form class ="sort"caction="/tasklist" method="GET">
                    <input type="text"  style="width:4em;height:1em" name="searchkey" placeholder="グラム数">
                    <input type="submit" value="g">
                </form>
            </th>
        </tr>
            <?php foreach($tasks as $task): ?>
        <tr>
            <td>
                <?=$task->name?>
            </td>
            <td>
                <?=$task->g?>g
            </td>
            <td>
                        <form action="/task/delete" method="POST">
                            <?=csrf_field()?>
                            <input type="hidden" name="id" value="<?=$task->id?>">
                            <input type="submit" value="削除">
                        </form>
            </td>
        </tr>
        <?php endforeach; ?>
        </table>
    </div>
