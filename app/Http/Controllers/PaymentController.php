<?php

namespace App\Http\Controllers;

use App\course;
use App\Payment;
use App\payment_status;
use App\user_courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect,Response,Stripe;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

             
        if($paymentDetails['data']['status'] == 'success'){
            $user = Auth::user();

            $payment = new payment;
            $payment->transaction_id = $paymentDetails['data']['id'];
            $payment->user_id = $user->id;
            $payment->amount_paid = $paymentDetails['data']['amount'];
            $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
            $payment->save();
            $payment_id = $payment->id;
            $paid_course = $paymentDetails['data']['metadata']['course_id'];
            $course = course::find($paid_course);

            // $user->enrolls()->attach($course,['payment_id'=>$payment_id]);
            $user_course = new user_courses;
            $user_course->course_id = $course->id;
            $user_course->user_id = auth()->user()->id;
            $user_course->payment_id = $payment_id;
            $user_course->payment_status_id = '1';
            $user_course->save();
            
            return redirect('/home')->with('success','Successfully enrolled');

        }
        else{
            return('We are not able to process your payment at the moment.');
        }
        // $user_courses = user_courses::all();
        // foreach($user_courses as $usercourse){
        //     if($usercourse->user_id == auth()->user()->id){
        //         return redirect('/home')->with('danger', 'You already applied for this course');
        //     }else{
        //         $user_course = new user_courses;
        //         $user_course->course_id = $id;
        //         $user_course->user_id = auth()->user()->id;
        //         $user_course->save();
        //         return redirect('/home')->with('success', 'Course successfully applied for');
        //     }
        //  }

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


    public function index()
    {
        return view('stripe');
    }
     
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $stripe = Stripe::charges()->create([
            'source' => $request->get('tokenId'),
            'currency' => 'USD',
            'amount' => $request->get('amount') * 100
        ]);
 
        return $stripe;
    }


    public function apply($id){
        $course = course::find($id);

        $payment_statuses = payment_status::all();
        $course_info = array('course_id' => $course->id, 'course_name'=>$course->name );
       
        $course_paid_info = json_encode($course_info);
        $data = [
            'course'=> $course,
            'course_paid_info' => $course_paid_info,
            'payment_statuses' => $payment_statuses,
        ];
       
        return view('programs.apply', $data);
    }
    public function storeusercourse($id){
        // $course = course::find($id);
        $user_courses = user_courses::all();
        foreach($user_courses as $usercourse){
            if($usercourse->user_id == auth()->user()->id){
                return redirect('/home')->with('danger', 'You already applied for this course');
            }else{
                $user_course = new user_courses;
                $user_course->course_id = $id;
                $user_course->user_id = auth()->user()->id;
                $user_course->save();
                return redirect('/home')->with('success', 'Course successfully applied for');
            }
         }
    }

    public function payment_history(){
        $userPayment = Auth::user()->id;
        $payments = Payment::where('user_id',$userPayment)->get();
        return view('payment.history')->with('payments', $payments);
    }
}
