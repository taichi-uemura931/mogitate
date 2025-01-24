<h1># mogitate</h1></br>

<h2>環境構築</h2>
<ol type="1">
  <p><b>Dockerビルド</b></p>
  <li>git@github.com:taichi-uemura931/mogitate.git</li>
  <li>DockerDesktopアプリを立ち上げる</li>
  <li>docker-compose up -d --build</li>
</ol></br>
<ol>
  <p><b>Laravel環境構築</b></p>
  <li>docker-compose exec php bash</li>
  <li>composer install</li>
  <li>「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成</li>
  <li>.envに以下の環境変数を追加</li>
DB_CONNECTION=mysql</br>
DB_HOST=mysql</br>
DB_PORT=3306</br>
DB_DATABASE=laravel_db</br>
DB_USERNAME=laravel_user</br>
DB_PASSWORD=laravel_pass</br>
  <li>アプリケーションキーの作成</li>
php artisan key:generate
  <li>マイグレーションの実行</li>
php artisan migrate
  <li>シーディングの実行</li>
php artisan db:seed
</ol></br>

<h2>使用技術</h2>
<ul>
  <li>PHP8.3.0</li>
  <li>Laravel8.83.27</li>
  <li>MySQL8.0.26</li>
</ul>

<h2>ER図</h2>
<img width="850" src="https://github.com/user-attachments/assets/f24c2f37-eed0-4388-a6d1-29f9eb6736aa"></br>

<h2>URL</h2>
開発環境: https://localhost</br>
phpMyAdmin:：http://localhost:8080/
