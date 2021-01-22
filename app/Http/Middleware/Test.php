<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::check()){

            if(Auth::user()->usertype=='Admin'){

                dd('php501 class entry');

               /* return redirect()->route('hr.dashboard');*/


            }elseif (Auth::user()->usertype=='User'){

                dd('You Login Asp.net 502 class entry');
                /*return redirect()->route('Account.dashboard');*/

            }


       }else{

            return redirect('/login');
            /*return redirect()->back();*/


        }


        return $next($request);
    }


}
