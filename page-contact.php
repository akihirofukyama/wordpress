<?php
/*
Template Name: お問い合わせ
Template Post Type: post,page
*/
?>
<?php get_header(); ?>
<div class="contact">
  <form class="form" method="post">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="user_name" />
    </div>
    <div>
      <label for="mail">E-mail:</label>
      <input type="email" id="mail" name="user_mail" />
    </div>
    <div>
      <label for="tel">Tell:</label>
      <input type="tel" id="tel" name="user_name" />
    </div>
    <div>
      <label for="msg">Message:</label>
      <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button-submit">
      <button class="button" type="submit">Button</button>
    </div>
  </form>
</div>
<?php get_footer(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estra magazine</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <header class="article-nav">
    <a href="" class="article-logo">
      estra magazine
      <br />
      <span class="magazine-subtitle">
        学習方法を提案するメディア
      </span>
    </a>
  </header>
  <div class="single-eyecatch eyecatch page-eyecatch">
    <img src="./img/sample.jpg" alt="">
    <div class="page-title">
      <h1 class="page-title__h1">contact</h1>
      <p class=></p>
    </div>
  </div>
  <div class="contact">
    <form class="form" method="post">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name" />
      </div>
      <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="user_mail" />
      </div>
      <div>
        <label for="tel">Tell:</label>
        <input type="tel" id="tel" name="user_name" />
      </div>
      <div>
        <label for="msg">Message:</label>
        <textarea id="msg" name="user_message"></textarea>
      </div>
      <div class="button-submit">
        <button class="button" type="submit">Button</button>
      </div>
    </form>
  </div>
  <footer id="footer">
    <div class="footer-nav__title">
      <a href="" class="article-logo">
        estra magazine
        <br />
        <span class="magazine-subtitle">
          学習方法を提案するメディア
        </span>
      </a>
    </div>
    <div class="footer-sns flex">
      <a href="" class="sns-icon first"><i class="fab fa-twitter"></i></a>
      <a href="" class="sns-icon"><i class="fab fa-facebook"></i></a>
      <a href="" class="sns-icon"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="footer-content flex">
      <div class="footer-about">
        <h3>About</h3>
        <ul>
          <li>
            <a href="">お問い合わせ</a>
          </li>
          <li><a href="https://estra.jp">運営会社</a></li>
          <li><a href="https://coachtech.site">COACHTECH</a></li>
        </ul>
      </div>
    </div>
    <small>Copyright estra magazine 2020 All Rights Reserved.</small>
  </footer>
</body>

</html>