<?php

    $t=time();
    $dir = 'dump/dump'.$t.'.sql';

    include_once("db.php");

    echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";

    exec("mysqldump --user={$usr} --password={$pwd} --host={$host} {$db} --result-file={$dir} 2>&1", $output);

    var_dump($output);

?>