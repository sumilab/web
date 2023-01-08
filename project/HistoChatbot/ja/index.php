<?php
require_once("menu.php");
?>

<h3 style='text-align:center'>歴史チャットボット</h3>

    <p>歴史チャットボットは、ウィキペディアとツイッターに蓄積された歴史に関係するコンテンツを自動的に収集し、多くのユーザーに拡散することや歴史を楽しいと思えるようなツイートをすることが目的です。</p>
    <p>この目的を実現するために、現在、以下のモードが稼働しています。</p>
 <ul>
    <li>過去の同じ月日に起きた出来事の共有</li>
    <li>ユーザーが指定した月日に起きた過去の出来事の共有 </li>
    <li>ユーザーが指定した固有名詞に関係する過去の出来事の共有 </li>
    <li>ユーザーの文章に類似する文章で記述された過去の出来事の共有 </li>
    <li>歴史関係のリツイートによる拡散</li>
 </ul>

<p>最後の歴史関係の拡散のためのリツイートのために、2クラス分類器を利用しています。</p>
<p>本チャットボットは、英語、フランス語、ドイツ語、ポーランド語、中国語、日本語の6言語に対応しています。</p>
<p>現在試験稼働中ですが、本チャットボットはWikipediaの内容から歴史クイズを自動で作成しています。この答えはユーザーがリプライしたときや、クイズツイートをした1時間後に提示しています。</a>
    <p>そのほかの詳細情報は澄川靖信(ysumikawa [at] acm.org)かJatowt, Adam(jatowt [at] acm.org)までメールでお問い合わせください。</p>


<a class="twitter-timeline tw-align-right" data-width="220" data-height="600" href="https://twitter.com/HistoChatbot?ref_src=twsrc%5Etfw">Tweets by HistoChatbot</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php
require_once("foot_css.php");
?>

