<?php

namespace App\Http\Controllers;

use App\Models\Mailsetting;
use App\Models\Site;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mail = Mailsetting::first();
        $site = Site::first();
        return view('admin.setting.mail.index', compact('mail', 'site'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mailsetting $mailsetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mailsetting $mailsetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mail_transport' => 'required',
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password' => 'required',
            'mail_encryption' => 'required',
            'mail_address' => 'required',
            'mail_name' => 'required',
        ]);

        $mail = Mailsetting::find($id);
        $mail->mail_transport = $request->mail_transport;
        $mail->mail_host = $request->mail_host;
        $mail->mail_port = $request->mail_port;
        $mail->mail_username = $request->mail_username;
        $mail->mail_password = $request->mail_password;
        $mail->mail_encryption = $request->mail_encryption;
        $mail->mail_address = $request->mail_address;
        $mail->mail_name = $request->mail_name;
        $mail->save();

        return back()->withToastSuccess('Berhasil mengubah konfigurasi email');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mailsetting $mailsetting)
    {
        //
    }
}
