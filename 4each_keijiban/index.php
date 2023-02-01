<! DOCTYPE html> 
<html lang=“ja”>
<head>
 <meta charset=“UTF-8”>
    
    
<title>4eachblog掲示板</title>
<link rel="stylesheet"type="text/css"href="style1.css">
</head>
    
<body>
    <header>
        <div class="logo">
             <img src="4eachblog_logo.jpg">
        </div>
        <div class="nav">
            <ul>
           　　 <li>トップ</li>
           　　 <li>プロフィール</li>
            　　<li>4eachについて</li>
            　　<li>登録フォーム</li>
            　　<li>問い合わせ</li>
            　　<li>その他</li>
       　　 </ul>
    　　</div>
     </header>
       
    <main>
        <div class="main-container"></div>
        <div class="left">
          <h1>プログラミングに役立つ掲示板</h1>
           <form method="post" action="insert.php">
    <div>
        <P1>入力フォーム</P1><br><br>

        <label>ハンドルネーム</label>
        <br>
        <input type="text" class="text" size="35"name="handlename"></div>
    
    <div>
        <label> タイトル</label>
        <br>
        <input type="text" class="text" size="35" name="title">
    </div>
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" cros="7" name="comments"></textarea>
        </div>
        
        <div>
        <input type="submit"  class="submit" value="送信する">
        </div>
            </form>
       <?PHP
    mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select*from 4each_keijiban");
    
while($row = $stmt->fetch()){
    echo"<div class='gray_box1'>";
    echo"<h2>".$row['title']."</h2>";
    echo"<div class='contects'>";
    echo $row['comments'];
    echo"<div class='handlename'>posted by".$row['handlename']."</div>";
    echo"</div>";
    echo"</div>";
    }
?>
        </div>
        <div class="right">
          <h3>人気の記事</h3>
          <ul>
            <li>PHPススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタtop5</li>
            <li>HTMLの基礎</li>
        　</ul>
            <h3>オススメリンク</h3>
        　<ul>
            <li>インターノウス株式会社</li>
            <li>XAMPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        　</ul>
            <h3>カテゴリ</h3>
        　<ul>
            <li>HTML</li>
            <li>PHP</li>
             <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
        </div>
    </main>
    <footer>
      copyright(C)internous|4each blog the which provides A to Z about programming.
    </footer>
    </body>
</html>