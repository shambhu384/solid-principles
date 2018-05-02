<?php

require 'Blog.php';
require 'HtmlFormatter.php';

$blog = new Blog('Design pattern', 'Best practice to design you application');
$blog->render(new HtmlFormatter);
