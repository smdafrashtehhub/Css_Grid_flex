<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/grid-flex-site1/main.layout.css">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
    <title>Document</title>
</head>

{{---------------------------------------- body ------------------------------------------------}}
<body>

{{-------------------------------------- header --------------------------------------}}
<header class="header">
    <div class="container">
        <h1 class="logo">راحت یاد</h1>
        <nav class="nav">
            <ul>
                <li><a href="grid-flex-site1">خانه</a> </li>
                <li><a href="features">مشخصات</a></li>
                <li><a href="docs">مقاله ها</a></li>
            </ul>
        </nav>
    </div>
</header>

{{--------------------------------------- main --------------------------------------}}
@yield('main')

{{--------------------------------------- footer --------------------------------------}}
<footer>

    <div class="container">
        <div class="content">
            <h1 class="title">راحت یاب</h1>
            <p>Copyright@2023</p>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="grid-flex-site1">خانه</a> </li>
                <li><a href="features">مشخصات</a></li>
                <li><a href="docs">مقاله ها</a></li>
            </ul>
        </nav>
        <div class="footer-icons">
            <i class="icons fa fa-home"></i>
            <i class="icons fa fa-download"></i>
            <i class="icons fa fa-database"></i>
            <i class="icons fa fa-random"></i>
        </div>
    </div>

</footer>
</body>
</html>

