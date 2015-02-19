<?php
// index.php
 
$link = mysql_connect('localhost', 'myuser', 'mypassword');
mysql_select_db('blog_db', $link);
 
$result = mysql_query('SELECT id, title FROM post', $link);
 
$posts = array();
while ($row = mysql_fetch_assoc($result)) {
    $posts[] = $row;
}
 
mysql_close($link);
 
// incluye el código HTML de la vista
require 'templates/list.php';