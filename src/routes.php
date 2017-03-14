<?php
// Routes

use questapp\models\Quest;
use questapp\models\UserQuest;

$app->get('/quest-create', function ($request, $response, $args) {
    return $this->renderer->render($response, 'quest-create.phtml', $args);
});

$app->post('/quest-saved', function ($request, $response, $args) {
    $params = $request->getParsedBody();

    $quest = new Quest([
        'name' => $params['name'],
        'description' => $params['description'],
        'latitude' => $params['latitude'],
        'longitude' => $params['longitude'],
        'experience_point' => $params['experience_point'],
    ]);

    $quest->save();

    return $this->renderer->render($response, 'quest-saved.phtml', $args);
});

//$app->get('/map', function ($request, $response, $args) {
//    return $this->renderer->render($response, 'quest-accepted.phtml', [
//        'quest' => $quest
//    ]);
//});

$app->get('/all-quest', function ($request, $response, $args) {
    $quests = (object)Quest::all()->toArray();

    /* @var $response Slim\Http\Response */
    $response = $this->response;

    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET')
        ->withJSON($quests);
});

$app->get('/quest-list', function ($request, $response, $args) {
    $userQuests = UserQuest::all()->toArray();
    $ids = [];

    foreach ($userQuests as $uq){
        $ids[] = $uq['quest_id'];
    }

    $quests = (object)Quest::select()->whereNotIn('id', $ids)->get()->toArray();

    return $this->response->withJSON($quests);
});

$app->get('/quest', function ($request, $response, $args) {

    $params = $request->getQueryParams();

    $quest = Quest::find($params['quest_id']);

    return $this->renderer->render($response, 'quest.phtml', [
        'quest' => $quest
    ]);
});

$app->get('/quest-accepted', function ($request, $response, $args) {

    $params = $request->getQueryParams();

    $quest = Quest::find($params['quest_id']);

    $userQuest = new UserQuest([
        'quest_id' => $params['quest_id'],
        'user_id' => 2,
        'started_at' => date("Y-m-d H:i:s", time()),
        'finished_at' => null,
        'experience_point_gathered' => $quest->experience_point
    ]);

    $userQuest->save();

    return $this->renderer->render($response, 'quest-accepted.phtml', [
        'quest' => $quest
    ]);
});

$app->get('/achievements', function ($request, $response, $args) {
    $userQuests = UserQuest::all();

    $xpSummary = 0;
    foreach($userQuests as $userQuest)
    {
        $xpSummary += $userQuest->experience_point_gathered;
    }

    return $this->renderer->render($response, 'achievements.phtml', [
        'userQuests' => $userQuests,
        'xpSummary' => $xpSummary
    ]);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
