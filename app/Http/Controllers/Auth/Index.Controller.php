<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
class IndexController extends Controller{
    public function index(){
        return view('Index.index');
    }
}