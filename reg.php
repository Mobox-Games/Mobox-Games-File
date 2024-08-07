<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Регистрация</title>
  <link rel="stylesheet" href="/styles.css">
</head>
<body>
  <header class="header">
    <a class="header-logo" href="/">
      <img
        class="header-logo-image"
        src="./images/Picsart_24-08-06_07-44-11-568.png"
      />
    </a>
    <nav class="header-menu">
      <ul class="header-menu-list">
        <li class="header-menu-item">
          <a class="header-menu-link" href="index.php">Главная</a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-link" href="about.php">Дискорд</a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-link" href="W RAZROBOTKE\index.php">Файлы</a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-link" href="https://t.me/+zp8VIA996Ts3ZjEy">Помощь</a>
        </li>
      </ul>
    </nav>
    </header>
    
    <!-- Form -->
<div class="box-outer">
    <form method="post" action="/lib/reg.php">
        <h2 class="heading">Регистрация</h2>

        <label>Логин</label>
        <input type="text" name="login" class="input-control" placeholder="Your first name">

        <label>Имя</label>
        <input type="text" name="username" class="input-control" placeholder="Your last name">

        <label>Email Address</label>
        <input type="text" name="email" class="input-control" placeholder="Your email address">

        <label>Пароль</label>
        <input type="password" name="password" class="input-control">

        <input type="submit" name="submit" class="button" value="Зарегистрироваться">
    </form>
    <hr>
</div>
<!-- Form End -->

</body>

<style>
    /* Outer box styles */
.box-outer {
    border: 1px solid #ccc;
    background-color: #000000;
    margin-bottom: 1rem;
    padding: 1rem;
    border-radius: .12rem;
}
/* Heading styles */
.heading {
    margin-bottom: 1rem;
}
/* Input control styles */
.input-control {
    transition: border .1s linear 0s, box-shadow .1s, width .25s, color .2s;
    border: 1px solid #ced4da;
    box-shadow: 0 1px 3px rgb(50 50 93 / 10%), 0 1px 0 rgb(0 0 0 / 2%);
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: .969rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    background-color: #FFF;
    background-clip: padding-box;
    appearance: none;
    border-radius: .12rem;
    margin-bottom: 1rem;
}
.input-control:focus {
    border-color: #9fd4fc;
    box-shadow: 0 0 0 4px rgb(0 149 255 / 15%);
    background-color: #fffffa;
    outline: 0;
}
/* Button styles */
.button {
    color: #FFFFFF;
    box-shadow: 0 1px 3px rgb(50 50 93 / 10%), 0 1px 0 rgb(0 0 0 / 2%);
    border: 0;
    padding: .5rem;
    border-radius: .12rem;
}
.button:focus {
    background: linear-gradient(#5EA534, #519327);
}
</style>
