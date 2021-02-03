<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class SupplierLoginController extends Controller
{
    public function supplierLogin(){

        return view('frontend.supplier_login.supplier-login');
    }
    public function supplierSignup(){

        return view('frontend.supplier_login.supplier-signup');
    }

    public function supplierStore(Request $request){

        DB::transaction(function () use ($request) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'min:6|required_with:confirmation_password|same:confirmation_password',
                'confirmation_password' => 'min:6',
                'mobile' => 'required',


            ]);

            $user = new User();
            $code = rand(0000, 9999);
            $user->usertype = 'supplier';
            $user->name = $request->name;
            $user->organization = $request->organization;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = bcrypt($request->password);
            $user->code = $code;
            $user->status = '0';
            $user->save();

            $data = array(
                'email' => $request->email,
                'code' => $code

            );
            Mail::send('frontend.emails.email-verify', $data, function ($message) use ($data) {
                $message->from('nayeembd84@gmail.com', 'IBF');
                $message->to($data['email']);
                $message->subject('Please Verify Your email Address');
            });
        });

        return redirect()->route('email.verify')->with('Success','you Have successfully signup verify your email');


    }

    public function emailVerify(){

        return view('frontend.supplier_login.supplier-login-verify');
    }


    public function verifyStore(Request $request){

        $chekData=User::where('email',$request->email)->where('code',$request->code)->first();
        if($chekData){
         $chekData->status='1';
         $chekData->save();
            return redirect()->route('supplier.login')->with('Success','you Have successfully Verified Please Login');
        }else{
            return redirect()->back()->with('error','Sorry email or does not match');
        }


    }


}
