<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SearchController extends Controller
{
    public function search()
    {
        //$process = new Process(['python', ''. public_path() .'/script/count.py']);

        $text = "eek bau"; // input masuk sini
        $process = new Process(['python', ''. public_path() .'/script/test.py',"{$text}"]); // ngelempar input


        
        //$process = new Process("python3 /Path/To/analyse_string.py \"{$text}\"");
        $process->run();

        
        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}
