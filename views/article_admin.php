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
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>Название
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
            </label>
            <br>
            <label>Дата
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
            </label>
            <br>
            <label>Cодержимое
                <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
            </label>
            <br>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2017</p>
    </footer>
</div>
</body>
</html>