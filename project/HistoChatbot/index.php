<?php
require_once("menu.php");
?>

<h3 style='text-align:center'>History Chatbot</h3>
    <p>The purpose of HistoChatbot chatbot system is to collect and process the history-related content accumulated in Wikipedia and one that is on Twitter, and then to communicate such content automatically or in response to user tweets.</p>
    <p>In order to realize this objective, the chatbot works in the following modes:</p>
 <ul>
    <li> Share past events that occurred on the same calendar day </li>
    <li> Share past events that occurred at the date specified by the user</li>
    <li> Share content about past events of user-specified entities (events, people and organizations)</li>
    <li> Share content on past events that are similar to user tweets</li>
    <li> Share automatically tweets that are about history</li>
 </ul>

<p>In order to implement the last sharing mode we build a classifier that determines whether or not a given tweet is related to history.</p>
 
    <p>HistoChatbot works in several languages: English, Frech, German, Polish, Chinese, and Japanese.</p>
 
    <p>An interesting feature of HistoChatbot is the means for generating quiz-like questions which are automatically formed from history-related Wikipedia content. The answers for such quizzes taken from interacting Twitter users are evaluated and the correct answer is later given in response to the user tweet, or is shared after predefined time (1h).<p>
 
    <p>More information can be obtained by contacting Yasunobu (ysumikawa [at] acm.org) and Adam (jatowt [at] acm.org)</p>


<a class="twitter-timeline tw-align-right" data-width="220" data-height="600" href="https://twitter.com/HistoChatbot?ref_src=twsrc%5Etfw">Tweets by HistoChatbot</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php
require_once("foot_css.php");
?>

