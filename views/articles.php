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
    <a href="admin">Панель администратора</a>
    <div>
        <?php foreach($articles as $a):?> <!-- элемент альтернативного синтаксиса -->
        <div class="article">
            <h3>
                <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
            </h3>
            <em>опубликовано:<?=$a['date']?></em>
            <p><?=articles_intro($a['content'])?></p>
        </div>
        <?php endforeach;?>
        <footer>
            <p>Мой первый блог<br>Copyright &copy; 2017</p>
        </footer>
    </div>
</div>
</body>
</html>
