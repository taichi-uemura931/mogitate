<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
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
        <div class="products__content">
            <div class="products__heading">
                <h2>商品一覧</h2>
                <form action="/products/register" method="post">
                @csrf
                    <button class="form_button-submit" type="submit">+ 商品を追加</button>
                </form>
            </div>

            <div class="search">
                <form action="search" method="POST">
                @csrf
                    <input type="text" name="input" value="{{$products}}" >
                    <input type="submit" value="検索">
                </form>
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

            <div class ="products_card">
                <article class="banana_card">
                    @foreach ($products as $product)
                    <figure class="card_thumbnail">
                        <img src="{{$product->image}}">
                    </figure>
                    <p class="card_text">{{$product->name}}</p>
                    <p class="card_text_number">￥{{$product->price}}</p>
                    @endforeach
                </article>
            </div>
        </div>
    </main>
</body>
</html>

