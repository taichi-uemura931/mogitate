<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/products.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/products">
                mogitate
            </a>
        </div>
    </header>

    <main>
        <div class="products__content">
            <div class="products__heading">
                <h2>商品一覧</h2>
                <a href="register.blade.php" class="add_button">+ 商品を追加</a>
            </div>

            <div class="search">
                <input type="search" class="search_form" name="q" placeholder="商品名で検索"/>
                <button>検索</button>
            </div>

            <div class="sort">
                <form action="" method="POST">
                    <?php echo "ソートさせたい文字列を入れてください(1024文字まで)"; ?>
                    <br>
                    <!-- 入力フォームとボタンを作成 -->
                    <input type="text" name="content">
                    <input type="submit" name="昇順" value="昇順ソート">
                    <input type="submit" name="降順" value="降順ソート">
                </form>
            </div>
        </div>
    </main>
</body>
</html>

