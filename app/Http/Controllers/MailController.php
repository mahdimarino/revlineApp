<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'subject',
            'phone',
            'areyou',
            'research',
            'howsoon',
            'goals',
            'yesno',
          
        ]);
        $data['research'] = is_array($data['research']) ? implode(", ", $data['research']) : '';

        $clientName = $data['name'];

        Mail::to("websupport@revlinemarketing.com")
            ->send(new SendEmail($data['subject'], $data, $clientName));
        return back()->with('message', 'Your request has been submitted successfully.');

    }
}
