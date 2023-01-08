<?php
require_once("menu.php");
?>

<h3>過去の出来事データ</h3>
<ul>
  <li>Wikipedia記事
    <ul>
      <li>英語: <a href="https://en.wikipedia.org/wiki/1">1</a> ~ current year and <a href="https://en.wikipedia.org/wiki/January_1">Jan. 1st</a> ~ <a href="https://en.wikipedia.org/wiki/December_31">Dec. 31st</a>の各記事にある「Event」パラグラフにリストされているもの</li>
      <li>Japanese: <a href="https://ja.wikipedia.org/wiki/1年">1年</a> ~ 現在の年 and <a href="https://ja.wikipedia.org/wiki/1月1日">1月1日</a> ~ <a href="https://ja.wikipedia.org/wiki/12月31日">12月31日</a>の各記事にある「できごと」パラグラフにリストされているもの</li>
    </ul><br />
  </li>
  <li>Tweets
    <ul>
      <li>歴史関係のハッシュタグを用いたクローリング</li>
      <li>クローリング方法に関する詳細は次の論文を参照されたい -- <a href="https://dl.acm.org/citation.cfm?id=3197057">paper</a></li>
    </ul><br />
  </li>
  <li>固有表現: AIDAの適用結果を用いた</li>
  <li>固有表現のメタデータ: DBpedia</li>
</ul>

<?php
require_once("foot_css.php");
?>

