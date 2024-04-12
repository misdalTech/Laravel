<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function SendWhatsappMessage(Request $request)
    {
        $url = "https://whatsapp.api.com/api/send-message?token=(access token)&instanceid=(instance id)&message=(message with encoded uri)&to=(whatsapp number following with 91 country code)&url=(media url if any)&type=text or media (url is mandatory on type media)";

        $response = file_get_contents($url);

        return redirect()->back()->with('Message sent successfully!!');
    }
}
