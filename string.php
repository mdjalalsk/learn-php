<?php
$text="Bangladesh is our country.";
echo($text);
echo"<br/>";
echo strlen($text);
echo"<br/>";
echo str_word_count($text);
echo"<br/>";
echo strrev($text);
echo"<br/>";
echo strpos($text,"our");
echo"<br/>";
echo str_replace( "Bangladesh","Pakistan","$text");