<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prototype</title>
</head>

<body>
    <form action="elama_prototype_create.php" method="POST">>
        <fieldset>
            <h2>入力画面</h2>
            <form>
                <fieldset class="hope_contents">
                    <style>
                        .hope_title {
                            display: flex;
                            justify-content: center;
                        }

                        .hope_text {
                            display: flex;
                            justify-content: center;
                        }
                    </style>
                    <div class="hope_title">
                        <h2>希望表明書</h2>
                    </div>
                    <div class="hope_text">
                        <p>私は、人生の最終段階を迎えたときに備え、医療に対する具体的な要望を以下に記しました。自分らしい最期を生きるための「私の希望」です。</p>
                    </div>

                    <!--        <style>
                        .medical_hope_item {
                            display: flex;
                            justify-content: center;
                            align-content: center;
                            flex-direction: column;
                        }

                        .medical_hope_item1 {
                            display: flex;
                            justify-content: center;
                        }

                        .medical_hope_item label {
                            width: 25%;
                        }

                        .medical_hope_item2 {
                            display: flex;
                            justify-content: center;

                        }

                        .medical_hope_item3 {
                            display: flex;
                            justify-content: center;

                        }

                        .medical_hope_item4 {
                            display: flex;
                            justify-content: left;
                            width: 93%;
                        }

                        .medical_hope_item {
                            display: flex;
                            justify-content: left;
                            align-content: center;
                            flex-direction: column;
                        }
                    </style>        -->
                    <div class="medical_hope">
                        <div class="medical_hope_text">
                            <h4>1．医師が回復不能と判断したときに、私がして欲しい医療行為</h4>
                        </div>
                        <div class="medical_hope_item">
                            <!---------------------------------------------------------------------------->
                            <div class="medical_hope_item1">
                                <div class="item_box1">
                                    <input type="checkbox" id="" name="medical[]" value="胸骨圧迫"><label class="item1">胸骨圧迫</label>
                                    <span class="text1">【胸骨圧迫】
                                        <br>心臓が止まった際に胸を強く押す、いわゆる心臓マッサージと言われる行為です。
                                        <br>［メリット］
                                        <br>・全身（特に脳）に血液を送り込むためには早期から容易に行なえる行為ではあります。
                                        <br>［デメリット］
                                        <br>・容易で迅速に行えるとはいえ、確実に全身に血液を送り込める方法ではありません。
                                        <br>・心拍が再開したとしても、心停止時間が長かったり、高齢である場合は脳のダメージが大きく、正常な意識に戻らない場合もあります。
                                        <br>・極めて強い力で胸を押すため肋骨を折ってしまう可能性や肺を傷つける可能性が高いです。
                                    </span>
                                </div>
                                <div class="item_box2">
                                    <input type="checkbox" id="" name="medical[]" value="強心薬･昇圧剤"><label class="item2">強心薬･昇圧剤</label>
                                    <span class="text2">【強心薬･昇圧剤】
                                        <br>心臓が止まった際に心臓を動かすため、あるいは血圧が下がった際に血圧を上げるために薬剤を使用します。
                                        <br>［メリット］
                                        <br>・強力な作用を持つ薬剤ですので胸骨圧迫と併行すると心拍を再開させる可能性が高まります。
                                        <br>※個人差はあります。
                                        <br>［デメリット］
                                        <br>・多量な使用や長期的な使用は身体に負担をかけてしまいます。
                                        <br>※心臓の動きや血圧が安定してくれば徐々に使用量を減量し、中断します。再び心停止や血圧低下があった場合は再使用します。</span>
                                </div>
                                <div class="item_box3">
                                    <input type="checkbox" id="" name="medical[]" value="気管挿管"><label class="item3">気管挿管</label>
                                    <span class="text3">【気管挿管】<br>口から気道（肺へ繋がる空気の通り道）にかけて太いチューブを挿入して気道を確保する行為です。
                                        <br>［メリット］
                                        <br>・肺へ確実に酸素を送り込むことができるようになります。
                                        <br>［デメリット］
                                        <br>・治療とは言え、身体にとっては異物です。喉に痛みや強い違和感を感じる可能性が高いです。
                                        <br>※鎮痛剤･鎮静剤を使って痛みや違和感を和らげることはできますが、個人差はあります。
                                        <br>・チューブ自体が気道を傷つけてしまう危険性や気胸を起こす危険性もあります。
                                        <br>・接着性の強いテープや器具を使ってチューブを口元に固定します。テープや器具で口周りの皮膚を傷つける可能性があります。
                                        <br>・長期的に行なうと肺炎や気道損傷、気胸を引き起こす危険性が高まるため、気管切開を行うことを検討する必要があります。
                                        <br>・口から食事や薬を飲むことができないため
                                    </span>
                                </div>
                                <div class="item_box4">
                                    <input type="checkbox" id="" name="medical[]" value="人工心肺"><label class=" item4">人工心肺</label>
                                    <span class="text4">太ももの付け根（或いは首）にある血管に太いチューブを挿入して機械で心臓や肺の代わりに身体に血液と酸素を送る行為です。
                                        <br>［メリット］
                                        <br>・心臓や肺の負担を和らげることができます。
                                        <br>［デメリット］
                                        <br>・心臓や肺の代わりを100％担えるわけではありません。
                                        <br>・太いチューブを周囲の皮膚に縫い付けるため皮膚を傷つける可能性が高いです。
                                        <br>・チューブが折れ曲がったり、抜けてしまう事を防ぐためにも自由な体勢を取ることができません。長期間同じ体勢で過ごすことになり、背中やお尻、踵などに褥瘡ができてしまう可能性もあります。
                                        <br>・その他にも以下のような合併症の危険性も伴います。<br>・血栓<br>・出血<br>・褥瘡
                                    </span>
                                </div>
                            </div>

                            <style>
                                .text1 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item1:hover+.text1 {
                                    display: block;
                                }

                                .text2 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item2:hover+.text2 {
                                    display: block;
                                }

                                .text3 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item3:hover+.text3 {
                                    display: block;
                                }

                                .text4 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item4:hover+.text4 {
                                    display: block;
                                }
                            </style>
                            <!---------------------------------------------------------------------------->

                            <div class="medical_hope_item2">
                                <div class="item_box5">
                                    <input type="checkbox" id="" name="medical[]" value="人工呼吸器"><label class=" item5">人工呼吸器</label>
                                    <span class="text5">自力で十分な呼吸ができない場合に、機械を使って肺に酸素を送り込む行為です。気管挿管と併行する必要があります。
                                        <br>チューブを挿入せずに人工呼吸を行なう非侵襲型人工呼吸器（NPPV）もありまずが、適応が限られます。
                                        <br>［メリット］
                                        <br>肺に確実に酸素を送り込むことができます。
                                        <br>［デメリット］
                                        <br>・人間の自然な呼吸（陰圧換気）と異なり、肺に酸素を押し込む（陽圧換気）ため強い苦痛が伴う場合があります。
                                        <br>・過度な圧力が加わると気胸を引き起こす危険性もあります。
                                        <br>※鎮痛剤･鎮静剤を使って痛みや違和感を和らげることはできますが、個人差はあります。
                                        <br>強い作用のある鎮痛剤･鎮静剤を併用するため多量な使用や長期的な使用は腎臓や肝臓を痛める危険性が場合があります。
                                        <br>・気管挿管と同様に、チューブを固定するためのテープや器具で皮膚を傷つける可能性が高いです。
                                        <br>・長期的な使用が必要な場合は気管切開を行なう事を検討する必要があります。（気管挿管の説明をご参照ください。）
                                    </span>
                                </div>
                                <div class="item_box6">
                                    <input type="checkbox" id="" name="medical[]" value="気管切開"><label class=" item6">気管切開</label>
                                    <span class="text6">喉に穴を空けて気道にかけてチューブを挿入します。
                                        <br>［メリット］
                                        <br>・気管挿管に比べ、比較的に喉の違和感などの苦痛が軽減されます。
                                        <br>・強い副作用のある鎮痛剤･鎮静剤を使用する必要もなくなります。
                                        <br>・肺炎を起こす危険性も減ります。
                                        <br>［デメリット］
                                        <br>・外見上、喉元にチューブが挿入されているのが顕著です。痛々しさを感じるご家族もいらっしゃいます。
                                        <br>・喉にチューブがある違和感はあります。
                                        <br>・気管挿管同様に声を出すことはできません。
                                        <br>※声を出せる特殊なチューブもありますが、人工呼吸器の併行が必要な場合は適応できません。
                                    </span>
                                </div>
                                <div class="item_box7">
                                    <input type="checkbox" id="" name="medical[]" value="酸素吸入"><label class=" item7">酸素吸入</label>
                                    <span class="text7"><br>
                                        ［メリット］<br>
                                        <br>
                                        ［デメリット］<br></span>
                                </div>
                                <div class="item_box8">
                                    <input type="checkbox" id="" name="medical[]" value="人工透析"><label class=" item8">人工透析</label>
                                    <span class="text8"><br>
                                        ［メリット］<br>
                                        <br>
                                        ［デメリット］<br></span>
                                </div>
                            </div>

                            <style>
                                .text5 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item5:hover+.text5 {
                                    display: block;
                                }

                                .text6 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item6:hover+.text6 {
                                    display: block;
                                }

                                .text7 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item7:hover+.text7 {
                                    display: block;
                                }

                                .text8 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item8:hover+.text8 {
                                    display: block;
                                }
                            </style>
                            <!---------------------------------------------------------------------------->
                            <div class="medical_hope_item3">
                                <div class="item_box9">
                                    <input type="checkbox" id="" name="medical[]" value="輸血"><label class=" item9">輸血</label>
                                    <span class="text9"><br>
                                        ［メリット］<br>
                                        <br>
                                        ［デメリット］<br></span>
                                </div>
                                <div class="item_box10">
                                    <input type="checkbox" id="" name="medical[]" value="輸液"><label class=" item10">輸液</label>
                                    <span class="text10"><br>
                                        ［メリット］<br>
                                        <br>
                                        ［デメリット］<br></span>
                                </div>
                                <div class="item_box11">
                                    <input type="checkbox" id="" name="medical[]" value="中心静脈栄養"><label class=" item11">中心静脈栄養</label>
                                    <span class="text11"><br>
                                        ［メリット］<br>
                                        <br>
                                        ［デメリット］<br></span>
                                </div>
                                <div class="item_box12">
                                    <input type="checkbox" id="" name="medical[]" value="経鼻チューブ栄養"><label class=" item12">経鼻チューブ栄養</label>
                                    <span class="text12"><br>
                                        ［メリット］<br>
                                        <br>
                                        ［デメリット］<br></span>
                                </div>
                            </div>

                            <style>
                                .text9 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item9:hover+.text9 {
                                    display: block;
                                }

                                .text10 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item10:hover+.text10 {
                                    display: block;
                                }

                                .text11 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item11:hover+.text11 {
                                    display: block;
                                }

                                .text12 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item12:hover+.text12 {
                                    display: block;
                                }
                            </style>
                            <!---------------------------------------------------------------------------->

                            <div class="item_box13">
                                <input type="checkbox" id="" name="medical[]" value="胃ろう"><label class=" item13">胃ろう</label>
                                <span class="text13"><br>
                                    ［メリット］<br>
                                    <br>
                                    ［デメリット］<br></span>
                            </div>
                            <div class="item_box14">
                                <input type="checkbox" id="" name="medical[]" value="緩和医療"><label class=" item14">緩和医療</label>
                                <span class="text14"><br>
                                    ［メリット］<br>
                                    <br>
                                    ［デメリット］<br></span>
                            </div>

                            <style>
                                .text13 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item13:hover+.text13 {
                                    display: block;
                                }

                                .text14 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item14:hover+.text14 {
                                    display: block;
                                }
                            </style>
                            <!------------------------------------------------------------------------->
                            <div class="item_box15">
                                <input type="checkbox" id="" name="medical[]" value="口から入るものを食べる分だけ食べさせて欲しい"><label class=" item15">口から入るものを食べる分だけ食べさせて欲しい</label>
                                <span class="text15"></span>
                            </div>
                            <div class="item_box16">
                                <input type="checkbox" id="" name="medical[]" value="家族や大切な人が到着するまで胸骨圧迫"><label class=" item16">家族や大切な人が到着するまで胸骨圧迫</label>
                                <span class="text16"></span>
                            </div>

                            <style>
                                .text15 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item15:hover+.text15 {
                                    display: block;
                                }

                                .text16 {
                                    display: none;
                                    width: 500px;
                                    position: absolute;
                                    top: 50%;
                                    left: 250px;
                                    padding: 16px;
                                    border-radius: 5px;
                                    background: #33cc99;
                                    color: #fff;
                                    font-weight: bold;
                                }

                                .item16:hover+.text16 {
                                    display: block;
                                }
                            </style>
                        </div>

                        <div class="other_hope">
                            <h4>2．その他の希望</h4><input type="textaria" id="" name="other">
                        </div>
                </fieldset>
                <div class="">
                    <div class="">
                        <p>以上、私の要望を忠実に果たしてくださった方々に深く感謝申し上げるとともに、<br>その方々が私の要望に従って下さった行為一切の責任は私自身にあることを付記いたします。</p>
                    </div>
                    <div class="sign">
                        <!--【案】以下は電子直筆システム的なものを利用する-->
                        <label>記入日</label><input type="date" id="" name="date"><label>本人署名</label><input type="text" id="" name="name">
                        <!--<label>記入日</label><input type="date" id="" name="date"><label>見届人署名</label><input type="text" id="" name="name"><label>続柄</label><input type="text" id="" name=""><label>記入日</label><input type="date" id="" name="date"><label>担当医署名</label><input type="text" id="" name="name"><label>施設名</label><input type="text" id="" name="">-->
                    </div>
                    <div class=""><input type="submit" id="" name="" value="登録"></div>
                </div>
        </fieldset>
    </form>
    </fieldset>
    </form><a href="elama_prototype_read.php">確認画面</a>
</body>

</html>