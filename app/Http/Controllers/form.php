<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;

	class form extends Controller
	{
        public function setCookie(Request $request){
            $time=time();
            $response=new Response('Hello World');
            $response->withCookie(cookie('name','fariz',$time));
            return $response;

        }
        public function getCookie(Request $request){
            $value = $request->cookie('name');
            echo $value;
        }
    }

?>
