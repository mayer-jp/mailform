<?php
//書き込み内容のフォームを受け取る
$send_name=htmlspecialchars($_POST['send_name'], ENT_QUOTES);
$send_address=htmlspecialchars($_POST['send_address'], ENT_QUOTES);
$send_msg=htmlspecialchars($_POST['send_msg'], ENT_QUOTES);
//入力欄を増やしたらここも同じように増やします。

//名前、メールアドレス、内容がすべて空欄ならエラー画面に遷移
if(!$send_name || !$send_address || !$send_msg){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location:form_error.php");
	exit();
//メールアドレスに「@」がなくてもエラー画面に遷移
}elseif(strpos($send_address,'@')===false){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location:form_error.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面｜PHP:メールフォームCGIのテンプレート</title>
</head>
<body>

<h1>メールフォーム　確認画面</h1>

<form action="form_send.php" method="post">
<!-- 入力欄を増やしたらここも同じように増やします -->
<table border="1" width="600">
<tr>
	<td width="120">名前</td>
	<td><?php print $send_name; ?></td>
</tr>
<tr>
	<td>メールアドレス</td>
	<td><?php print $send_address; ?></td>
</tr>
<tr>
	<td>内容</td>
	<td><?php print nl2br($send_msg); ?></td>
</tr>
</table>
<br>

<!-- ここで送信プログラムに渡しています -->
<input type="hidden" name="send_name" value="<?php print $send_name; ?>">
<input type="hidden" name="send_address" value="<?php print $send_address; ?>">
<input type="hidden" name="send_msg" value="<?php print $send_msg; ?>">
<!-- 入力欄を増やしたらここも同じように増やします -->

<button type="button" onClick="history.back()">戻る</button>　　<button type="submit" name="form_end">送信する</button>

</form>

</body>
</html>