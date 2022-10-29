<?php
namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManualAuthController extends Controller
{
    public function ask()
    {
        return view('product.manualAuth.login');
    }

    public function signin(Request $request)
    {
       // $this->formValidateLogin($request)->validate();
        $informations = AdminRepos::getAllAdmin();
        $username = $request->input('username');
        $password = $request->input('password');
        foreach ($informations as $i) {
            if (($i->username) == $username && ($i->password) == sha1($password)) {
                Session::put('username', $request->input('username'));
                return redirect()->route('product.index');
            }
        }
        return redirect()->action('ManualAuthController@ask')
            ->withErrors(['msg' => 'Username or password is incorrect!']);
    }


    public function signout()
    {
        if (Session::has('username')) {
            Session::forget('username');
        }
        return redirect()->action('ManualAuthController@ask');
    }

    private function formValidateLogin($request)
    {
        return Validator::make(
            $request->all(),
            [

                'username', 'password' => ['required',

                    function ($attribute, $value, $fail) {//closure
                        $informations = AdminRepos::getAllAdmin();
                        $a = true;

                        foreach ($informations as $i) {
                            if (($value == $i->username) && (sha1($value) == $i->password)) {
                                break;
                            } else {
                                $a = false;
                            }
                        }
                        if ($a = false)
                            return redirect()
                                ->action('AdminController@index')
                                ->withErrors(['msg' => 'Cannot update admin with ID: '.$id_a.'!']);
                    }
                ]/*,
                'password' => ['required',
                    function ($attribute, $value, $fail) {
                        $informations = AdminRepos::getAllAdmin();
                        $a = 0;
                        foreach ($informations as $i) {
                            if (sha1($value) == $i->password) {
                                $a = 0;
                                break;
                            } else {
                                $a += 1;
                            }
                        }
                        if ($a != 0) {
                            $fail('Password is not correct');
                        }
                    }
                ]*/
            ]
        );
    }
}
