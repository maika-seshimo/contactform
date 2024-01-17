<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>お問合せフォーム内容確認</title>
    <link rel="stylesheet"type="text/css" href="style2.css">
</head>
<boby>
    <meta charset="UTF-8">
    <h1>お問合せ内容確認</h1>
    <div class="confirm">
    <p>お問合せ内容はこちらで宜しいでしょうか？
        <br>よろしければ「送信する」ボタンを押してください。
    </P>
    <p>名前<br>
        <?php echo $_POST['name'];?>
    </p>
    <p>メールアドレス<br>
        <?php echo $_POST['mail'];?>
    </p>
    <p>年齢<br>
        <?php echo $_POST['age'];?>
    </p>
    <p>コメント<br>
        <?php echo $_POST['comments'];?>
    </p>

    <form action="index.html">
        <input type="submit" class="button1" value="戻って修正する" />
        //最後の/何？
    </form>    

    <form action="insert.php" method="post">
        <input type="submit" class="button2" value="登録する" />
        //最後の/何？
        <input type="hidden" value="<?php echo$_POST['name'];?>" name="name">
        <input type="hidden" value="<?php echo$_POST['mail'];?>" name="mail">
        <input type="hidden" value="<?php echo$_POST['age'];?>" name="age">
        <input type="hidden" value="<?php echo$_POST['comments'];?>" name="comments">
        //hidden にするとWeb上に表示されない
    </form>
    </div>
</body>
<footer></footer>
</html>
