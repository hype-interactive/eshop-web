<?php

namespace App\Http\Controllers;

use App\Helper\PhoneHelper;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Random;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Http\Integration\Beem\BeemSMSController;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    function index(Request $request,$id){
      if(session('user')){
        session()->put('package_id',$id);
        return redirect()->route('register-venor-form');
      }else{
        return redirect()->route('customer-login');
      }

    }

    public function register(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:users,email',
        ]);




        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();

        }



        $password_value=str::random(8);

        $vendor = new User();
        $vendor->first_name = $request->input('first_name');
        $vendor->middle_name = $request->input('middle_name');
        $vendor->last_name = $request->input('last_name');
        $vendor->phone_number = $request->input('phone_number');
        $vendor->email = $request->input('email');
        $vendor->role_id=2;
        $vendor->password=Hash::make($password_value);

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('public/photos');
            $vendor->image_url = Storage::url($imagePath);
        }
        $vendor->save();

        Subscription::create([
            'user_id'=>$vendor->id,
             'status'=>'pending',
             'plan_id'=>session('package_id'),
        ]);
         $name= $request->input('first_name');
        $amount= DB::table('packages')->where('id',session('package_id'))->value('price');
        $amount=number_format($amount,2);
        $message=" Dear $name, To activate your account, please make the payment of  $amount /= TZS  Thank you!";

        $phone_number=PhoneHelper::formatPhoneNumber($request->input('phone_number'));

        try {
            $return_data=   BeemSMSController::send($phone_number,$message,$phone_number,'');
            Log::info($return_data);
           } catch (\Throwable $th) {
               Log::error( 'payment controller:97 '. $th);
           }

        //send sms or email
        return redirect()->route('successfully-registered');

    }

}
