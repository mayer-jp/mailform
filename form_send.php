<?php
/*
このファイルは送信のためのプログラムです。
このファイルを経由して、完了画面にリダイレクトします。
*/

//書き込み内容のフォームを受け取る
$send_name=htmlspecialchars($_POST['send_name'], ENT_QUOTES);
$send_address=htmlspecialchars($_POST['send_address'], ENT_QUOTES);
$send_msg=htmlspecialchars($_POST['send_msg'], ENT_QUOTES);
//入力欄を増やしたらここも同じように増やします。

//送信した日の日時取得
$datetime=date('Y-m-d H:i:s');

//送信内容（メールのヘッダ部分）
//メルアドはどちらも自分のアドレスに設定します。
$mail_title='【お問い合わせ】';//メールのタイトル
$email='ここを変える@hoge.com';//※※※送信先のメールアドレス（ここに内容が送られてきます）
$header='From: ここも変える@hoge.net';//※※※差出人のメールアドレス（動かないメルアドだと動作しないので注意）

//送信内容（メールの本文）
//入力欄を増やした場合は、「依頼主」部分をコピーし名前を変えて、同じように下に追加していけばOK。
$detail='要件：'.$send_msg.'

依頼主：'.$send_name.'
依頼主のメルアド：'.$send_address.'
送信日時：'.$datetime;

mb_internal_encoding('UTF-8');
mail($email,mb_encode_mimeheader($mail_title,'JIS','B'),mb_convert_encoding($detail,'JIS'),$header);

//完了画面にリダイレクト
header("HTTP/1.1 301 Moved Permanently");
header("Location:form_end.php");
exit();
?>