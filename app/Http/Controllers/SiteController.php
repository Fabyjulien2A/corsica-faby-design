<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function services() {
        return view('services');
    }

    public function realisations() {
        return view('realisations');
    }

    public function contact() {
        return view('contact');
    }

    public function sendContact(Request $request) {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:5',
        ]);

        // 1. Envoi du message à toi (le pro)
        Mail::raw(
            "Nom : {$request->nom}\nEmail : {$request->email}\n\nMessage :\n{$request->message}",
            function ($message) use ($request) {
                $message->to('corsicafabydesign@gmail.com') // ton adresse
                        ->from($request->email, $request->nom)
                        ->subject('Nouveau message via le formulaire de contact');
            }
        );

        // 2. Accusé de réception envoyé à l'utilisateur
        // 2. Accusé de réception envoyé à l'utilisateur
Mail::send('emails.accuse', ['nom' => $request->nom], function ($message) use ($request) {
    $message->to($request->email)
            ->from('corsicafabydesign@gmail.com', 'Corsica Faby Design')
            ->subject('Confirmation de réception de votre message');
});


        return back()->with('success', 'Merci pour votre message ! Je vous répondrai rapidement.');
    }
}
