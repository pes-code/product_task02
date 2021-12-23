<?php
//var_dump($_GET);
//exit();

include('elama_functions.php'); //DB接続の関数を引っ張ってきている

$id = $_GET['id'];

$pdo = connect_to_db();

$sql = 'SELECT * FROM elama_prototype_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
</head>

<body>
    <form action="elama_prototype_update.php" method="POST">
        <fieldset>
            <legend>編集画面</legend>
            <a href="elama_prototype_read.php">一覧画面</a>

            <fieldset class="hope_contents">
                <div class="hope_title">
                    <h2>希望表明書</h2>
                </div>
                <div class="hope_text">
                    <p>私は、人生の最終段階を迎えたときに備え、医療に対する具体的な要望を以下に記しました。<br>
                        自分らしい最期を生きるための「私の希望」です。</p>
                </div>

                <div class="medical_hope">
                    <h4>1．医師が回復不能と判断したときに、私がして欲しい医療行為</h4>
                    <input type="checkbox" id="" name="medical[]" value="胸骨圧迫">胸骨圧迫
                    <input type="checkbox" id="" name="medical[]" value="強心薬･昇圧剤">強心薬･昇圧剤
                    <input type="checkbox" id="" name="medical[]" value="気管挿管">気管挿管
                    <input type="checkbox" id="" name="medical[]" value="人工呼吸器">人工呼吸器
                    <input type="checkbox" id="" name="medical[]" value="気管切開">気管切開
                    <input type="checkbox" id="" name="medical[]" value="酸素吸入">酸素吸入
                    <input type="checkbox" id="" name="medical[]" value="人工透析">人工透析
                    <input type="checkbox" id="" name="medical[]" value="輸血">輸血
                    <input type="checkbox" id="" name="medical[]" value="輸液">輸液
                    <input type="checkbox" id="" name="medical[]" value="中心静脈栄養">中心静脈栄養
                    <input type="checkbox" id="" name="medical[]" value="経鼻チューブ栄養">経鼻チューブ栄養
                    <input type="checkbox" id="" name="medical[]" value="胃ろう">胃ろう
                    <input type="checkbox" id="" name="medical[]" value="口から入るものを食べる分だけ食べさせて欲しい">口から入るものを食べる分だけ食べさせて欲しい
                    <input type="checkbox" id="" name="medical[]" value="家族や大切な人が到着するまで胸骨圧迫">家族や大切な人が到着するまで胸骨圧迫
                    <input type="checkbox" id="" name="medical[]" value="緩和医療">緩和医療
                    <input type="checkbox" id="" name="medical[]" value="">その他<input type="text" id="" name="">
                </div>

                <div class="other_hope">
                    <h4>2．その他の希望</h4>
                    <input type="textaria" id="" name="other">
                </div>
            </fieldset>
            <div class="">
                <div class="">
                    <p>以上、私の要望を忠実に果たしてくださった方々に深く感謝申し上げるとともに、<br>
                        その方々が私の要望に従って下さった行為一切の責任は私自身にあることを付記いたします。</p>
                </div>
                <div class="sign">
                    <!--【案】以下は電子直筆システム的なものを利用する-->
                    <label>記入日</label><input type="date" id="" name="date">
                    <label>本人署名</label><input type="text" id="" name="name">
                    <!-- <label>記入日</label><input type="date" id="" name="date">
                        <label>見届人署名</label><input type="text" id="" name="name"> <label>続柄</label><input type="text" id="" name="">
                        <label>記入日</label><input type="date" id="" name="date">
                        <label>担当医署名</label><input type="text" id="" name="name"> <label>施設名</label><input type="text" id="" name=""> -->
                </div>
                <div class="">
                    <input type="submit" id="" name="" value="登録">
                </div>
            </div>
        </fieldset>
    </form>
    </fieldset>
    <input type="hidden" name="id" value="<?= $record['id'] ?>">
    <!--idを引っ張ってくるコード/hiddenは見えないinputタグ-->
    </fieldset>
    </form>

</body>

</html>