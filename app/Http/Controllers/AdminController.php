<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use app\http\requests;
use phpDocumentor\Reflection\Types\Nullable;

session_start();
class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin.dashboard');
        }
        else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
        // $this->AuthLogin();
        return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');

    }
    public function dashboard(Request $request){
        $admin_email = $request -> admin_email;
        $admin_password = md5($request -> admin_password);

        $result = DB::table('tbl_admin') ->where('admin_email',$admin_email) ->where('admin_password', $admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return redirect::to('/dashboard');
        }
        else{
            Session::put('message','Tài khoản hoặc Mật khẩu sai');
            return redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',Null);
        return redirect::to('/admin');
    }
}
