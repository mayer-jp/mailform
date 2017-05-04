<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP:メールフォームCGIのテンプレート</title>
</head>
<body>

<h1>PHP:メールフォームCGIのテンプレート</h1>

<p>メールフォームのCGIテンプレートをPHPで作成しました。<br>
利用は無料、カスタマイズ自由、著作権フリーです。作成者への連絡も不要です。ご自由にお使いください。<br>
ただし当プログラムのご利用により、サーバーなどに不具合が生じても一切の責任は負えませんので、あらかじめご了承下さい。</p>

<p>チェック機能は全欄空白とメルアドの「@」不備だけなので、JavaScriptやjQueryを組み込んでお使いください。</p>

<form action="form_chk.php" method="post">
<!-- ※「name」部分をいじると動かなくなるかも。慎重にカスタマイズしてください。 -->
<!-- ※入力欄を増やしたい場合は「name」部分を変えて、form_chk.php、form_send.phpも修正します。 -->
<table border="1" width="600">
<tr>
	<td width="120">名前</td>
	<td><input type="text" name="send_name" size="40" maxlength="100"></td>
</tr>
<tr>
	<td>メールアドレス</td>
	<td><input type="text" name="send_address" size="40" maxlength="100"></td>
</tr>
<tr>
	<td>内容</td>
	<td><textarea name="send_msg" cols="50" rows="10" maxlength="400"></textarea></td>
</tr>
</table>
<br>

<button type="submit" name="form_chk">確認する</button>

</form>

</body>
</html>