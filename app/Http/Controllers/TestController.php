<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;

	class TestController extends Controller
	{
		public function form(Request $request)
		{
			$email = $request->input('email');
			$Sobacka   = '@';
			$pos = strpos($email, $Sobacka);

			if ($pos === false) {
				echo "Строка '$Sobacka' не найдена в строке '$email'";
			} 
			else {
				echo "Строка '$Sobacka' найдена в строке '$email'";
				echo " в позиции $pos";
}
			return view('test.testcontroller',['email'=>$email]);
			
		}
		
	}

