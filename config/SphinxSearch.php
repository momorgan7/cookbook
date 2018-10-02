<?php
return array(
    'host'    => '127.0.0.1',
    'port'    => 9312,
    'timeout' => 30,
    'indexes' => array(
        'recipe_name' => array('table' => 'recipe', 'column' => 'name'),
    ),
    'mysql_server' => array(
        'host' => '127.0.0.1',
        'port' => 9306
    )
);
