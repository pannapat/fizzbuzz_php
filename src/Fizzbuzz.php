<?php
	class Fizzbuzz {
		
		function returnSelf($num) { return $num.""; }
		function returnFizz($num){ return "Fizz"; }
		function returnBuzz($num){ return "Buzz"; }
		function returnFizzBuzz($num){ return "FizzBuzz"; }
		
		public function count($num){

			/*$arr = array(
				1=>"1", 2=>"2", 
				3=>"Fizz", 
				4=>"4", 
				5=>"Buzz", 6=>"Fizz", 
				7=>"7", 8=>"8", 
				9=>"Fizz", 10=>"Buzz",
				11=>"11", 
				12=>"Fizz", 
				13=>"13", 14=>"14", 
				15=>"FizzBuzz", 

				16=>"16", 17=>"17", 
				18=>"Fizz", 
				19=>"19", 
				20=>"Buzz", 21=>"Fizz", 
				22=>"22", 23=>"23", 
				24=>"Fizz", 25=>"FizzBuzz", 
				26=>"26", 
				27=>"Fizz", 
				28=>"28", 29=>"29", 
				30=>"FizzBuzz",
				
				31=>"31", 32=>"32", 
				33=>"Fizz", 
				34=>"34", 
				35=>"Buzz", 36=>"Fizz", 
				37=>"37", 38=>"38", 
				39=>"Fizz", 40=>"Buzz",
				41=>"41", 
				42=>"Fizz",
				43=>"43", 44=>"44",
				45=>"FizzBuzz"	
			);*/


			$function_arr = array(
				1 => "returnSelf",
				2 => "returnSelf",
				3 => "returnFizz",
				4 => "returnSelf",
				5 => "returnBuzz",
				6 => "returnFizz",
				7 => "returnSelf",
				8 => "returnSelf",
				9 => "returnFizz",
				10 => "returnBuzz",
				11 => "returnSelf",
				12 => "returnFizz",
				13 => "returnSelf",
				14 => "returnSelf",
				0 => "returnFizzBuzz" 
			);

			return call_user_func("FizzBuzz::".$function_arr[$num % 15], $num);
		}
	}
?>