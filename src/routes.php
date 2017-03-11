<?php
// Routes

$app->get('/quest', function ($request, $response, $args) {

    $quest = $this->get('quests')[1];

    return $this->response->withJSON($quest);
});

$app->get('/create-quest', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'create-quest.phtml', $args);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
