<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function message($message)
    {   $word='あいさつ';
    
        if($message=='morning') {
            $word='朝のあいさつ';
            $message='おはようございます';
        }
        elseif($message=='afternoon') {
            $word='昼のあいさつ';
            $message='こんにちは';
        }
        elseif($message=='evening'){
            $word='夕方のあいさつ';
            $message='こんばんは';
        }
        elseif($message=='night'){
            $word='夜のあいさつ';
            $message='おやすみ';
        }
        return view('greeting.message',['word'=>$word, 'message'=>$message]);
    }

    public function freeword($freeword)
    {   $word2='自由なメッセージ';

        if($freeword=='freeword'){
            $word2='自由なメッセージ';
            $freeword=$word2;
        }
        return view('greeting.freeword',['freeword'=>$freeword, 'word2'=>$word2]);
        }

    public function random()
    {   $word3='ランダムなメッセージ';

        $number = array('おはよう','こんにちは','こんばんは','おやすみ');
        shuffle($number);

        $random=$number[0];
        $word3='ランダムなメッセージ';

        return view('greeting.random',['number'=>$number,'random'=>$random,'word3'=>$word3]);
    }
}