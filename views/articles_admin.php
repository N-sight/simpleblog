<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Мой первый блог</title>
</head>
<body>
<div class="container">
    <h1>Мой первый блог</h1>
    <div>
        <a href="index.php?action=add">Добавить новую статью</a>
        <table class="admin-table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($articles as $a):?> <!-- элемент альтернативного синтаксиса -->
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Вы уверены?')" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
        <footer>
            <p>Мой первый блог<br>Copyright &copy; 2017</p>
            <a href="../index.php">На главную</a>
        </footer>
    </div>
</div>
</body>
</html>