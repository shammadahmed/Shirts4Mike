<?php

namespace Shirts4Mike\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Shirts4Mike\Http\Controllers\Controller;
use Shirts4Mike\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactFormRequest  $request
     * @return Response
     */
    public function store(ContactFormRequest $request)
    {
        Mail::send('emails.contact', [
            'name'         => $request->get('name'),
            'email'        => $request->get('email'),
            'user_message' => $request->get('message')
        ], function($message)
        {
            $message->from('wj@wjgilmore.com')
                    ->to('wj@wjgilmore.com', 'Admin')
                    ->subject('TODOParrot Feedback');
        });

        return view('contact.success');
    }
}
