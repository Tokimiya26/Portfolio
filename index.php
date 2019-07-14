<!doctype html>
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
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <title>Kengo's Portfolio</title>
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">
    <!-- Header -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Kengo's Portfolio</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="#works">Works</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- End Header -->

    <!-- Start Home Section -->
    <div id="home" class="home">
      <div class="container-fluid home-text text-white text-center">
        <h1>Welcome!</h1>
        <h3>Kengo's Portfolio</h3>
      </div>
    </div>
    <!-- End Home Section -->

    <!-- Start Profile Section -->
    <div id="profile" class="profile bg-light pb-5">
      <div class="container">
      <div class="col-12 text-center">
        <h3 class="heading">Profile</h3>
        <div class="heading-under-line"></div>
      </div>
      <div class="row">
        <div class="col-md-4 text-center">
          <img class="rounded-circle center-block" src="img/tokimiya.jpg">
        </div>
        <div class="col-md-8">
          <h4>KENGO FUJIMOTO</h4>
          <p>大学を卒業後、家庭日用品の営業マンとして約２年勤めておりました。</p>
          <p>現在はプログラミングに惹かれ独学を行っております。これまで主にHTML/CSS/Bootstrap/jQuery/PHP/MySQL/Wordpress/Git/Github等を学んできました。それらの知識をもとに作成した制作物が下記になります。</p>
          <p>またPHPでの開発速度を高めるためにLaravelを学習中です。</p>
        </div>
      </div>
      </div>
    </div>
    <!-- End Profile Section -->

    <!-- Start Works Section -->
    <div id="works" class="works pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h3 class="heading">Works</h3>
            <div class="heading-under-line"></div>
          </div>

          <div class="tarzan col-md-6">
            <div class="work-img" style="background-image: url('img/Tarzan-Go.png')"></div>
          </div>
          <div class="col-md-6 mb-5">
            <p class="heading-p text-center">横スクロールのゲームを作成しました。</p>
            <div class="link-btn text-center">
              <a class="btn btn-info btn-lg" href="tarzan.php">詳細</a>
            </div>
          </div>

          <div class="chrono col-md-6">
            <div class="work-img" style="background-image: url('img/Chrono.jpg')"></div>
          </div>
          <div class="col-md-6 mb-5">
            <p class="heading-p text-center">Wordpressテーマを自作しました。</p>
            <div class="link-btn text-center">
              <a class="btn btn-info btn-lg" href="chrono.php">詳細</a>
            </div>
          </div>

          <div class="comic col-md-6">
            <div class="work-img" style="background-image: url('img/YOUR-MEMORABLE-COMIC.png')"></div>
          </div>
          <div class="col-md-6 mb-5">
            <p class="heading-p text-center">漫画投稿サービスを作成しました。</p>
            <div class="link-btn text-center">
              <a class="btn btn-info btn-lg" href="comic.php">詳細</a>
            </div>
          </div>

          <div class="portfolio col-md-6">
            <div class="work-img" style="background-image: url('img/Portfolio.png')"></div>
          </div>
          <div class="col-md-6">
            <p class="heading-p text-center">現在ご覧になっているサイトです。</p>
            <div class="link-btn text-center">
              <a class="btn btn-info btn-lg" href="portfolio.php">詳細</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Works Section -->

    <!-- Start Contact Section -->
    <div id="contact" class="contact bg-light pb-5">
      <div class="container">
        <div class="col-12 text-center">
          <h3 class="heading">Contact</h3>
          <div class="heading-under-line"></div>
          <p class="heading-p">お問い合わせは下記フォームからお願い致します。<br>
            お問い合わせ内容をご入力の上、「確認画面へ」ボタンを押してください。</p>
        </div>
        <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">名前 <span class="required">必須</span></label>
                <input class="form-control" type="text" name="name" placeholder="Name" required/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">メールアドレス <span class="required">必須</span></label>
                <input class="form-control" type="text" name="email" placeholder="Email" required/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="name">件名 <span class="any">任意</span></label>
                <input class="form-control" type="text" name="subject" placeholder="Subject">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="name">お問い合わせ内容 <span class="required">必須</span></label>
                <textarea class="form-control" name="message" rows="6" placeholder="Comment" required/></textarea>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-12">
              <input class="btn btn-lg btn-danger" type="submit" value="確認画面へ">
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Contact Section -->

    <!-- Start Footer Section -->
    <footer class="text-light bg-dark">
      <div class="text-center copy">
        &copy; 2019 Tokimiya, All Rights Reserved.
      </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </body>
</html>
