<?php
require_once '../scripts/template.php';

$about = template(
	'../views/about.php',
	[]
);

$layout = template('../layout.php', ['content' => $about]);

echo ($layout);
