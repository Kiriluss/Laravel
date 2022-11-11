<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;

	use Illuminate\Http\Request;
	
	class Test extends Controller
	{
		public function form(Request $request)
		{
			$method = $request->method();
			if ($method=='POST') {
				$request->input('text');
				$data = $request->except(['login', 'password']);
				$name = $request->input('user.name');
				$name = $request->input('user.surname');
				

				return view('test.form',['data'=>$data]);
			}
			else{
				return view('test.form');
			}
		}
		public function formupdate(Request $request,$id,$ib)
		{
			$nam = $request->input('text');
			return view('test.form',['id'=>$id,'ib'=>$ib,'nam'=>$nam]);
		}
		public function show(Request $request)
		{
			$request->session();
		}
	}
?>
