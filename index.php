<?php
 // Tutorial: http://blogjak.com/?A7WG
// 482697935644832xxx Coklat
// 8328682700413450xxx Danatunai
// 8071207005090667xxx Bloglaundry
// 5156676174768913xxx PPH
// 4252636256666591xxx Parfumlaundry


$blogID='5156676174768913xxx';
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
