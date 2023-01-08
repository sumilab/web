<?php
require_once("menu.php");
?>

<h3>Commemorative mention</h3>
<p>This chatbot can respond to mentions of the form:</p>
<ul>
  <li><code>mm/dd/yyyy</code> such as <code>2/14/1966</code> and <code>June-2-1324</code></li>
  <li><code>yyyy</code> such as <code>1944</code> and <code>0243</code></li>
  <li><code>mm/dd</code> or <code>dd/mm</code> such as <code>jun 2</code>, <code>25 sept.</code> and <code>decem 2</code></li>
  <li><code>otd</code>, <code>on this day</code>. (These texts are equal to the day and month when you reply to chatbot)</li>
</ul>

<h3>Language</h3>
    <p>It is able to specify in which language the chatbot tweets. <code>in &lt;language&gt;</code> format does this. For example, if the chatbot takes <code>otd in Japanese</code> reply, then it outputs a past event on the same month and day in Japanese.</p>

<h3>Entity</h3>
<p>It is able to filter output events by hashtags. The chatbot regards hashtags as entities and then analyze their metadata.</p>

<h3>URL</h3>
Underconstruction.

<h3>Figure・Picture</h3>
Underconstruction.

<?php
require_once("foot_css.php");
?>

