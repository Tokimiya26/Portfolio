<?php
	// フォームのボタンが押されたら
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// フォームから送信されたデータを各変数に格納
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message  = $_POST["message"];
	}

	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {

		// 日本語をメールで送る場合のおまじない
    mb_language("ja");
		mb_internal_encoding("UTF-8");

    // 件名を変数itemに格納
    $item = "［通知］お問い合わせがありました";

// メール本文を変数bodyに格納
$body = <<< EOM

ポートフォリオよりお問い合わせがありました。
お問い合わせ内容は以下になります。

===================================================
【 お名前 】
{$name}

【 メールアドレス 】
{$email}

【 件名 】
{$subject}

【 内容 】
{$message}
===================================================

EOM;

		//メールを自分宛てに送る
		$to = "toki.workmemory@gmail.com";

		// 送信元の名前を変数fromNameに格納
		$fromName = "お問い合わせ";

		// ヘッダ情報を変数headerに格納する
		$header = "From: " .mb_encode_mimeheader($fromName);

		// メール送信を行う
		mb_send_mail($to, $item, $body, $header);

 		// サンクスページに画面遷移させる
		header("Location: thanks.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
	<!-- favicon設定 -->
	<link rel="shortcut icon" href="./img/favicon.ico">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

  <title>お問い合わせフォーム</title>
</head>
<body class="mail-section">
  <div>
    <div class="container-mail">
      <div class="col-12 text-center contact-form">
        <form action="confirm.php" method="post">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="hidden" name="subject" value="<?php echo $subject; ?>">
          <input type="hidden" name="message" value="<?php echo $message; ?>">
          <h1 class="contact-title">お問い合わせ 内容確認</h1>
          <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
          <div>
            <div>
              <label><お名前></label>
              <p><?php echo $name; ?></p>
            </div>
            <div>
              <label><メールアドレス></label>
              <p><?php echo $email; ?></p>
            </div>
            <div>
              <label><件名></label>
              <p><?php echo $subject; ?></p>
            </div>
            <div>
              <label><お問い合わせ内容></label>
              <p><?php echo nl2br($message); ?></p>
            </div>
          </div>
          <input class="btn btn-lg btn-info mt-3" type="button" value="内容を修正する" onclick="history.back(-1)">
          <button class="btn btn-lg btn-danger mt-3" type="submit" name="submit">送信する</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
