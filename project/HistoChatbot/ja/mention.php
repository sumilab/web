<?php
require_once("menu.php");
?>

<h3>指定の日に起きた過去の出来事の聞き方</h3>
<p>本チャットボットは以下のフォーマットで尋ねると、その日に起きた過去の出来事をリプライします。</p>
<ul>
  <li><code>mm/dd/yyyy</code> 例: <code>2/14/1966</code>、 <code>June-2-1324</code></li>
  <li><code>yyyy</code> 例: <code>1944年</code>、 <code>243年</code></li>
  <li><code>mm/dd</code>、 <code>dd/mm</code> 例: <code>9月2日</code>、<code>25 sept.</code> and <code>decem 2</code></li>
  <li><code>otd</code>、 <code>on this day</code>、 <code>今日は何の日</code>. (メンションした月日に限って、上記の方法の代わりとしてこのようなテキストも受け付けています。</li>
</ul>

<h3>言語の指定方法</h3>
p>明示的にチャットボットが出力する言語を指定できます。指定方法は<code>&lt;language&gt;語</code>とします。例えば<code>今日は何の日 英語</code>と尋ねると、過去の同じ月日に起きた出来事を英語で教えてくれます。</p>


<h3>固有表現</h3>
作成中

<h3>URL</h3>
作成中

<h3>図・写真</h3>
作成中


<?php
require_once("foot_css.php");
?>

