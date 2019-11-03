<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscriptionController extends Controller
{
    public function store(Request $request){
        $save = new Subscription;
        $save->email = $request->input('subscriptionemail');
        $save->save();

        return redirect()->back();
    }
    public function deletesubscriber(Request $request){
        $del = Subscription::find($request->sid)->delete();
        return response()->json(['message'=>'Deleted']);
    }
}
