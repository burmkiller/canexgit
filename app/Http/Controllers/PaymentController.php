<?php

namespace App\Http\Controllers;

use App\Paypal\CreatePayment;
use App\Paypal\ExecutePayment;
use App\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create(Request $request)
    {

        if(\request()->path()=="register-revive")
        {
            $this->validate($request,['package'=>"required|in:one,two,three",]);
            auth()->user()->update([
                "package"=>$request->package,
                "package_description"=>getPackageDescription($request->package)
            ]);
            session()->put("user_id",auth()->user()->id);
        }

        $payment = new CreatePayment();
        $user = User::find(session("user_id"));
        $description =$user->package_description;
        if (session()->has("price") && isset($description)){
            return $payment->create(session("price"),$description);
        }
        session()->flash("error","Oops Something Wrong, Payment failed");
        return redirect("/");
    }

    public function execute(Request $request)
    {
        $payment=new ExecutePayment();
        if (session()->has("user_id") && isset($request->PayerID) && isset($request->token))
        {
            $user = User::find(session("user_id"));
            $user->update(["payment_status"=>"Waiting"]);
            if (session()->has("price")){
                return  $payment->execute($request,session("price"));
            }
            session()->flash("error","Oops Something Wrong, Payment failed");
            return redirect("/");
        }
        session()->flash("error","Oops Something Wrong, Payment failed");
        return redirect("/");

    }

    public function cancel(Request $request){
        session()->forget("price");
        $user = User::find(session("user_id"));
        $user->update([
            "payment_status"=>"Canceled"
        ]);
        session()->forget("user_id");

        session()->flash("error","You've canceled your payment");
        return redirect("/");
    }
}
