<?php
$url = 'http://example.com/3.php';
$header = array(
    'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
    'User-Agent: PERFECT-SAMPLE',
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'content' => http_build_query(
            array(
                'to' => 'foo@example.com',
                'subject' => 'spam mail',
                'body' => 'プログラムによるスパム投稿です',
            )
        ),
        'header' => implode(
            "rn",
            $header
        ),
    )
);

$result = file_get_contents($url, false, stream_context_create($options));
echo $result;