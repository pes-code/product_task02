<?php
include('elama_functions.php');

// POSTデータ確認
if ( //データがない||データが空っぽだった場合は処理をエラーメッセージを出して終了するという記述
    !isset($_POST['place']) || $_POST['place'] == '' ||
    !isset($_POST['important']) || $_POST['important'] == '' ||
    !isset($_POST['nutrition']) || $_POST['nutrition'] == '' ||
    !isset($_POST['medical']) || $_POST['medical'] == '' ||
    !isset($_POST['other']) || $_POST['other'] == '' ||
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['date']) || $_POST['date'] == ''
) {
    exit('Error!!');
}

$place = $_POST['place'];
$important = $_POST['important'];
$nutrition = $_POST['nutrition'];
$medical = $_POST['medical'];
$other = $_POST['other'];
$name = $_POST['name'];
$date = $_POST['date'];

// DB接続//各種項目設定
$pdo = connect_to_db();

////////////////////////////
//$dbn = 'mysql:dbname=gsacy_d01_01;charset=utf8mb4;port=3306;host=localhost'; //どこのデータベース先かを表示している。
//$user = 'root';
//$pwd = '';
//
//try {
//    $pdo = new PDO($dbn, $user, $pwd);
//} catch (PDOException $e) {
//    echo json_encode(["db error" => "{$e->getMessage()}"]); //接続に失敗した際はdb errorがメッセージとして表示される。
//    exit();
//}
//////////////////////////


// SQL作成&実行
$sql = 'INSERT INTO elama_prototype_table (id, place, important, nutrition, medical, other, name, date, created_at, updated_at) VALUES (NULL, :place, :important, :nutrition, :medical, :other, :name, :date, now(), now())';
$stmt = $pdo->prepare($sql);

// バインド変数を設定//悪意あるコード入力をただの文字列に変換して防御する。
$stmt->bindValue(':place', $place, PDO::PARAM_STR);
$stmt->bindValue(':important', $important, PDO::PARAM_STR);
$stmt->bindValue(':nutrition', $nutrition, PDO::PARAM_STR);
$stmt->bindValue(':medical', $medical, PDO::PARAM_STR);
$stmt->bindValue(':other', $other, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header('Location:elama_prototype_input.php');
exit();
