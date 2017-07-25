<?php
 // Tutorial: http://blogjak.com/?A7WG
// 482697935644832514 Coklat
// 8328682700413450881 Danatunai
// 8071207005090667471 Bloglaundry
// 5156676174768913851 PPH
// 4252636256666591002 Parfumlaundry


$blogID='5156676174768913851';
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
