<?php
//var_dump($_POST);
//exit();

include('elama_functions.php');

//POSTデータをチェックする// 入力項目のチェック
if (
    !isset($_POST['medical']) || $_POST['medical'] == '' ||
    !isset($_POST['other']) || $_POST['other'] == '' //||
    //   !isset($_POST['name']) || $_POST['name'] == '' ||
    //   !isset($_POST['date']) || $_POST['date'] == '' ||
    // !isset($_POST['id']) || $_POST['id'] == ''
) {
    exit('paramError'); //上記のいずれかでもなければエラー表示して処理を終了する
}

//上記の条件が正常であればデータを取得する。
$medical = $_POST['medical'];
$other = $_POST['other'];
$name = $_POST['name'];
$date = $_POST['date'];
$id = $_POST['id'];

// DB接続

$pdo = connect_to_db();

// SQL実行(データを引っ張ってくる処理)
$sql = 'UPDATE elama_prototype_table SET medical=:medical, other=:other, name=:name, date=:date, updated_at=now() WHERE id=:id';

//bind変数を設定
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':medical', $medical, PDO::PARAM_STR);
$stmt->bindValue(':other', $other, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':id', $date, PDO::PARAM_STR);

//実行
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:elama_prototype_read.php");
exit();
