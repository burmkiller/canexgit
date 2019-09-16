<?php


namespace App\Paypal;


use App\User;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class ExecutePayment extends Paypal
{
    public function execute(Request $request,$price)
    {
        $paymentId = $request->paymentId;
        $payment = Payment::get($paymentId, $this->_api_context);

//     dd($payment);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);

        $transaction = new Transaction();
        $amount = new Amount();

        $amount->setCurrency('USD');
        $amount->setTotal($price);
        $transaction->setAmount($amount);

        $transaction->setAmount($amount);
        $execution->addTransaction($transaction);
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState()=="approved"){
            $user = User::find(session("user_id"));
            $expired_at=null;
            if ($user->expired_at==null || $user->expired_at< now())
            {
                $expired_at = now()->addMonths($this->getExpiredDate($user->package));
            }

            if ($user->expired_at>now())
            {
                $expired_at =$user->expired_at->addMonths($this->getExpiredDate($user->package));
            }
            $user->update([
                "paid_amount"=>$result->getTransactions()[0]->getAmount()->total,
                "payment_status"=>"Completed",
                "expired_at"=>$expired_at
            ]);
            session()->flash("success","Ok It's fine");
            return redirect("/");
        }
        session()->flash("error","Oops something wrong");
        return redirect("/");
    }


    private function getExpiredDate($package)
    {
        switch ($package){
            case "one":return 1;
            case "two":return 4;
            default:return 16;
        }
    }
}
