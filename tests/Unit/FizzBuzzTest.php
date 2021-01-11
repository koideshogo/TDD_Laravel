<?php

namespace Tests\Unit;

use App\Http\Controllers\FizzBuzzController;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** 
     * @test
     * 
    */
    public function test_1を渡したら文字列1を返すして返す ()
    {
        $FizzBuzz = new FizzBuzzController;
        //前準備
        //実行
        //検証
        parent::setUp();
        $this->assertEquals('1', $FizzBuzz->convert(1));
    }

    public function test_2を渡したら文字列2を返すして返す ()
    {
        $FizzBuzz = new FizzBuzzController;
        //前準備
        //実行
        //検証
        $this->assertEquals('2', $FizzBuzz->convert(2));
    }


    public function test_3を渡したら文字列Fizzを返すして返す ()
    {
        $FizzBuzz = new FizzBuzzController;
        //前準備
        //実行
        //検証
        $this->assertEquals('Fizz', $FizzBuzz->convert(3));
    }
    
}
