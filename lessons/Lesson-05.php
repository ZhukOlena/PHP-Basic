<!doctype html>
<html>
<head>

</head>
<body>

<form action="Lesson-05.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="your name">
    <input type="password" name="password" placeholder="parol"><br>
    <h2>чоловічий</h2>
    <input type="radio" name="sex" value="f" >
    <h2>жіночий</h2>
    <input type="radio" name="sex" value="m" >
    <p>
        Виберіть свій варіант
    </p>
    <h3>Варіант 1</h3>
    <input type="checkbox" name="txt[]" value="a">
    <h3>Варіант 2</h3>
    <input type="checkbox" name="txt[]" value="b">
    <h3>Варіант 3</h3>
    <input type="checkbox" name="txt[]" value="c">
    <input type="submit">

</form>
</body>
</html>

<?php

print_r($_POST);
exit();

if (isset($_POST['name'])) {
    $ooo = $_POST['name'];
    print 'Name: '.$ooo.'<br>';
}

if (isset($_POST['password'])) {
    $pass = $_POST['password'];
    print 'Pass: '.$pass.'<br>';
}
