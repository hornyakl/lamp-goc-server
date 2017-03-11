<?php
// Routes

$app->get('/quest-list', function ($request, $response, $args) {
    $quest = $this->get('quests');
    return $this->response->withJSON($quest);
});

$app->get('/quest-create', function ($request, $response, $args) {
    return $this->renderer->render($response, 'quest-create.phtml', $args);
});

$app->get('/quest-saved', function ($request, $response, $args) {
    return $this->renderer->render($response, 'quest-saved.phtml', $args);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
