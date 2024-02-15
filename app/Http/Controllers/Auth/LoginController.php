<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Govorganizationdetail;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LoginController extends Controller

{

    /*

    |--------------------------------------------------------------------------

    | Login Controller

    |--------------------------------------------------------------------------

    |

    | This controller handles authenticating users for the application and

    | redirecting them to your home screen. The controller uses a trait

    | to conveniently provide its functionality to your applications.

    |

    */



    use AuthenticatesUsers;



    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    //  protected $redirectTo = '/home';

     //protected $redirectTo2 = '/home2';

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');
        //$this->middleware('guest')->except('logout2');

    }



    /**

     * Create a new controller instance.

     *

     * @return RedirectResponse

     */

     public function login(Request $request)
     {
         $this->validate($request, [
             'username' => 'required',
             'password' => 'required',
         ]);
     
         $credentials = $request->only('username', 'password');
     
         if (auth()->attempt($credentials)) {
             $user = auth()->user();
             
             switch ($user->type) {
                 case 'admin':
                     return redirect()->route('home');
                     break;
                 case 'manager':
                     return redirect()->route('govofficial.home');
                     break;
                 default:
                     return redirect()->route('userHome');
                     break;
             }
         }
     
         return redirect()->route('login')
             ->withErrors(['username' => 'Invalid credentials'])
             ->withInput($request->except('password')); // Except password for security reasons
     }
     
    public function logout(){
        Auth::logout();
        Session::flush();

        return redirect("login");

    }

}
