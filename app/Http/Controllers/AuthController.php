<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function Laravel\Prompts\password;

class AuthController extends Controller{

    public function index(Request $request){
        return view('login');
    }

    public function forgot_password(Request $request) {
        return view('forgot_password');
    }

    public function register(Request $request){
        return view('register');
    }
}

?>