<?php
$blogID='xxxxxxxxxxx';
$requestURL="http://www.blogger.com/feeds/{$blogID}/posts/default";
$xml=simplexml_load_file($requestURL);
?>
<html>
<body>
<?php
foreach($xml->entry as $post)
{
echo '<div>';
echo '<h2>'.$post->title.'</h2>'; // post title
echo '<p>Published: '.$post->published.'</p>'; // date published
echo '<p>'.$post->content.'</p>'; // post content
echo '</div>';
}
?>
</body>
</html>
