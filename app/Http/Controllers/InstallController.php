<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallController extends Controller
{
    public function handleinstallApp(Request $request)
    {
        // Access the environment variable
        $clientId = env('CLIENT_ID'); 
        $redirectUri = env('REDIRECT_URI'); 
        $scopes = env('SCOPES');
        
        // Generate the install URL
        $installUrl = "https://app.hubspot.com/oauth/authorize?client_id={$clientId}&redirect_uri={$redirectUri}&scope=" . urlencode($scopes);


        // Install URL
        // $installUrl = `https://app.hubspot.com/oauth/authorize?client_id=${clientId}&redirect_uri=${redirectUri}&scope=${encodeURIComponent(
        //     scopes
        //   )}`;

        return redirect($installUrl);
    }
}
