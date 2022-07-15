<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
    // $url = "http://66.45.237.70/api.php";
    // $number=$supplier->mobile;
    // $text="আপনার রিসেলার একাউন্ট সচল হয়েছে। রিসেল করতে লগইন করুন www.eibbuy.com রিসেল করে প্রতিদিন ১০০ টাকা আয় করতে লিংকে ক্লিক করে ফেসবুক গ্রুপে জয়েন করুন। https://www.facebook.com/groups/exportimportbangladesh";
    // $data= array(
    // 'username'=>"01531173930",
    // 'password'=>"5X6HC8M3",
    // 'number'=>"$number",
    // 'message'=>$text
    // );

    // $ch = curl_init(); // Initialize cURL
    // curl_setopt($ch, CURLOPT_URL,$url);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $smsresult = curl_exec($ch);

}
