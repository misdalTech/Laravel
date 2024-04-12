<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

public function sendWhatsappMessage(Request $request)
{
    // WhatsApp API URL
    $url = "https://whatsapp.api.com/api/send-message";

    // Prepare the request parameters
    $params = [
        'token' => 'your_access_token',
        'instanceid' => 'your_instance_id',
        'message' => urlencode($request->input('message')),
        'to' => '91' . $request->input('whatsapp_number'), // Assuming the input is without country code
        'url' => $request->input('media_url') ?? '', // Media URL if any
        'type' => $request->input('media_url') ? 'media' : 'text', // Determine the type based on media URL
    ];

    // Initialize Guzzle client
    $client = new Client();

    try {
        // Send the HTTP POST request to the WhatsApp API
        $response = $client->post($url, [
            'form_params' => $params,
        ]);

        // Check if the request was successful
        if ($response->getStatusCode() == 200) {
            return redirect()->back()->with('success', 'Message sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to send message. Please try again later.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}
