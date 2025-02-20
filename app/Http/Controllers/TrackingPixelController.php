<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrackingPixelController extends Controller
{
    
     public function track(Request $request)
     {
         // Log the request details (optional)
         $logData = [
             'timestamp' => now(),
             'ip' => $request->ip(),
             'user_agent' => $request->userAgent(),
             'referrer' => $request->header('referer', 'Direct'),
         ];
         Log::info('Tracking pixel accessed', $logData);
         return view('tracking.pixel');
     }
}
