<?php
	class FizzbuzzTest extends PHPUnit_Framework_TestCase {
		
		
		public function testOneShouldReturnOne(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("1", $fizzbuzz->count(1));
		}
		public function testTwoShouldReturnTwo(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("2", $fizzbuzz->count(2));
		}
		public function testThreeShouldReturnFizz(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("Fizz", $fizzbuzz->count(3));
		}
		public function testFiveShouldReturnBuzz(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("Buzz", $fizzbuzz->count(5));
		}
		public function testElevenShouldReturnEleven(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("11", $fizzbuzz->count(11));
		}
		public function testFifteenShouldReturnFizzBuzz(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("FizzBuzz", $fizzbuzz->count(15));
		}
		public function testEighteenShouldReturnFizz(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("Fizz", $fizzbuzz->count(18));
		}
		public function testTwentyShouldReturnBuzz(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("Buzz", $fizzbuzz->count(20));
		}
		public function testTwentytwoShouldReturnTwentytwo(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("22", $fizzbuzz->count(22));
		}
		public function testThirtyShouldReturnFizzBuzz(){
			$fizzbuzz = new Fizzbuzz();
			$this->assertEquals("FizzBuzz", $fizzbuzz->count(30));
		}
	}
?>