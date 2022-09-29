<?php
require_once '../scripts/template.php';

$firm = template(
	'../views/firm.php',
	[]
);

$layout = template('../layout.php', ['content' => $firm]);

echo ($layout);
