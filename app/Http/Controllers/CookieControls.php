<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
    use Illuminate\Http\Response;

	class CookieContorls extends Controller
	{
        public function setCookie(Request $request){
            $now = time();
            if (!isset($_COOKIE['timeago'])) {
            setcookie('timeago', time());
            }
            else {
            $_COOKIE['timeago'] = $now - $_COOKIE['timeago'];
            }
            echo $_COOKIE['timeago'];
         }
    }

?>
