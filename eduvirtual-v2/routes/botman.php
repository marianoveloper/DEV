<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi|Hola', function ($bot) {
    $bot->reply($bot->getUser()->getId());
    $bot->reply('Hola como estas!');
});

$botman->hears('interactivo',BotManController::class.'@startInteractive');
//$botman->hears('matematicas',BotmanController::class.'@StartOperations');
