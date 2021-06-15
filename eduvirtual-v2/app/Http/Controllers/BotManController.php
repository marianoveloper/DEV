<?php
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\Operations;
use App\Conversations\Interactives;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

       /** $botman->hears('{message}', function($botman, $message) {

           * if ($message == 'hi') {
            *    $this->askName($botman);
            *}else{
            *    $botman->reply("write 'hi' for testing...");
           * }

        *}); */

        $botman->listen();
    }




    /*public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
    }
**/
    public function startInteractive(BotMan $bot){

        $bot->startConversation(new Interactives());
    }
public function startOperations(Botman $bot){
    $bot->startConversation(new Operations());
}

}
