<?php

$sent = mail(
    'testuser@localhost.local',
    'Test from phpdev',
    'This mail was sent with PHP mail() at ' . date('Y-m-d H:i:s') . PHP_EOL,
    ['From' => 'webdev@docker.local']
);

echo ($sent ? 'Mail sent' : 'Mail could not be sent') . PHP_EOL;
