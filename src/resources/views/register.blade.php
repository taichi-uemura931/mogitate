<?php
if(!empty($_POST['inputName'])){
  try{
    $sql  = 'INSERT INTO sortable(name) VALUES(:ONAMAE)';
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':ONAMAE', $_POST['inputName'], PDO::PARAM_STR);
    $stmt->execute();

    header('location: http://localhost:8080/');
    exit();
  } catch (PDOException $e) {
      echo 'データベースにアクセスできません！'.$e->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/sanitize.css">
</head>
<body>
    <header class="header">
        <div class="header__logo">
            mogitate
        </div>
    </header>
    <main>
        <h2>商品登録</h2>

        <div class="register_content">
            <form class="form" action="products.blade.php" method="post">
            @csrf
                <span class="form__label--item">商品名</span>
                <span class="form__label--required">必須</span></br>
                <input type="text" name="inputName">
        </div>

            
    </main>
</body>
</html>