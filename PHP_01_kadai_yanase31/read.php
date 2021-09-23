<!-- CSS読み込み -->
<link rel="stylesheet" href="CSS/style.css">


<?php
// ファイルを開く
$openFile = fopen("data/data.csv", 'r');
?>

<h1>プロレスに関するアンケート結果</h1>

<!-- テーブル作成 -->

<table>
    <tr class="hyoudai">
        <td>お名前</td>
        <td>Email</td>
        <td>好きな団体</td>
        <td>好きなプロレスラー</td>
        <td>ベストバウト</td>
    </tr>


<?php
while(!feof($openFile)){
    $csv = fgets($openFile);
    $str = explode(",", $csv);
?>

<tr>
    <td><?php echo $str[0]; ?></td>
    <td><?php echo $str[1]; ?></td>
    <td><?php echo $str[2]; ?></td>
    <td><?php echo $str[3]; ?></td>
    <td><?php echo $str[4]; ?></td>
</tr>

<?php
}

fclose($openFile);

?>

</table>





