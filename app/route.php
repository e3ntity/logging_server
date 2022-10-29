<?php

$app->post('/{namespace}', function($req, $res, $arg) {
    $namespace = $arg['namespace'];
    $data = $req->getParsedBody();

    $text = $data['text'];

    if (!$namespace || strlen($namespace) < 1 || !ctype_alnum($namespace))
        return $res->withStatus(400);

    if (!isset($data['text']))
        return $res->withStatus(400);

    if (!isset($data['accessKey']))
        return $res->withStatus(401);

    if ($data['accessKey'] !== $this->settings['accessCode'])
        return $res->withStatus(403);

    $loggingString = date("Y-m-d H:i:s") . " - " . $text . PHP_EOL;

    try {
        file_put_contents(LOGS . $namespace . ".txt", $loggingString, FILE_APPEND | LOCK_EX);
    } catch (Exception $err) {
        return $res->withStatus(500);
    }

    return $res->withStatus(200);
})->setName('index');

