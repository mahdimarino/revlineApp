<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrackingPixelController extends Controller
{
    
     public function click(Request $request)
     {
        // Log the click details
        $logData = [
            'timestamp' => now(),
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'referrer' => $request->header('referer', 'Direct'),
        ];

        Log::info('Ad click tracked', $logData);

        // Redirect to your website
        return redirect('https://revlinemarketing.com/');
     }
}
