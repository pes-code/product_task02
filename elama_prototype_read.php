<?php
include('elama_functions.php');

// DB接続
$pdo = connect_to_db();

//////////////////////////////////
//$dbn = 'mysql:dbname=gsacy_d01_01;charset=utf8mb4;port=3306;host=localhost';
//$user = 'root';
//$pwd = '';
//
//try {
//    $pdo = new PDO($dbn, $user, $pwd);
//} catch (PDOException $e) {
//    echo json_encode(["db error" => "{$e->getMessage()}"]);
//    exit();
//}
//////////////////////////////////

// SQL作成&実行
$sql = 'SELECT * FROM elama_prototype_table WHERE is_deleted=0 ORDER BY date ASC';
$stmt = $pdo->prepare($sql);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// SQL実行の処理
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//var_dump($result);
//echo '</pre>';

$output = "";
foreach ($result as $record) {
    $output .= "
    <tr>
      <td>{$record["place"]}</td>
      <td>{$record["important"]}</td>
       <td>{$record["nutrition"]}</td>
    <td>{$record["medical"]}</td>
      <td>{$record["other"]}</td>
       <td>{$record["date"]}</td>
       <td>{$record["name"]}</td>
       <td>
       <a href='elama_prototype_edit.php?id={$record["id"]}'>変更</a>
       </td>
         <td>
       <a href='elama_prototype_delete.php?id={$record["id"]}'>削除</a>
       </td>
    </tr>
  ";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>

<body>
    <fieldset>
        <legend>確認画面</legend>
        <a href="elama_prototype_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>最期を過ごしたい場所</th>
                    <th>私が大切にしたいこと</th>
                    <th>自分で食べることができなくなったり、医師により回復不能と判断されたときの栄養手段で希望すること</th>
                    <th>医師が回復不能と判断したときに、私がして欲しい医療行為</th>
                    <th>その他の希望</th>
                    <th>記入日</th>
                    <th>氏名</th>
                </tr>
            </thead>
            <tbody>
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>