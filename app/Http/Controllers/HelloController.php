<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function message($message)
    {   
        $word = 'あいさつ';
    
        if($message == 'morning') {
            $word = '朝のあいさつ';
            $message = 'おはようございます';
        }
        elseif($message == 'afternoon') {
            $word = '昼のあいさつ';
            $message = 'こんにちは';
        }
        elseif($message == 'evening'){
            $word = '夕方のあいさつ';
            $message = 'こんばんは';
        }
        elseif($message == 'night'){
            $word = '夜のあいさつ';
            $message = 'おやすみ';
        }
        return view('greeting.message',['word'=>$word, 'message'=>$message]);
    }

    public function word($freeword)
    {   
        $word='自由なメッセージ';
        ($freeword == 'freeword'){
            $freeword = $word;
        }
        return view('greeting.freeword',['freeword'=>$freeword, 'word'=>$word,'自由なメッセージ'=>$自由なメッセージ]);
    }

    public function random()
    {   
        $word = 'ランダムなメッセージ';

        $number = array('おはよう','こんにちは','こんばんは','おやすみ');
        shuffle($number);

        $random = $number[0];
        $word = 'ランダムなメッセージ';

        return view('greeting.random',['random'=>$random,'word'=>$word]);
    }
}