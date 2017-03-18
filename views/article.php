<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Мой первый блог</title>
</head>
<body>
<div class="container">
    <h1>Мой первый блог</h1>
    <div>
        <div class="article">
            <h3>
                <?=$article['title']?>
            </h3>
            <em>опубликовано:<?=$article['date']?></em>
            <p><?=$article['content']?></p>
        </div>
        <footer>
            <p>Мой первый блог<br>Copyright &copy; 2017</p>
        </footer>
    </div>
</div>
</body>
</html>