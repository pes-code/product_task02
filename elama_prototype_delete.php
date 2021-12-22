<?php
$id = $_GET['id']; //$_GETはURLの/以降のデータを取得している

// データ受け取り
include('elama_functions.php'); //DB接続の関数を引っ張ってきている

// DB接続
$pdo = connect_to_db();

// SQL実行(DELETE処理)
//$sql = 'DELETE FROM elama_prototype_table WHERE id=:id'; //物理削除すなわち根本的にデータを消去する
$sql = 'UPDATE elama_prototype_table SET is_deleted=1, updated_at=now() WHERE id=:id'; //論理削除すなわちデータ自体は残っているが削除扱い(停止状態のようなもの)になる　※このデータがたまりすぎるとSQLのしょりが遅くなる

//bind変数を設定
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

//実行
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:elama_prototype_read.php");
exit();
