<?php
$db = new PDO('sqlite:demo-pwl-a/database/database.sqlite');
foreach($db->query('SELECT name FROM sqlite_master WHERE type=\'table\'')->fetchAll() as $t) {
    echo $t['name'] . "\n";
}
