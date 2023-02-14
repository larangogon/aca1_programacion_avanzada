<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEvents;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        $events = Event::all(['id','name', 'country']);

        return view('main.index', [
            'events' => $events
        ]);
    }

    public function store(RequestEvents $request): RedirectResponse
    {
        $user = User::where(['identification_card' => $request->input('identification_card')])->first();

        if($user->age < 16){
            return redirect('events')->with(['success' => 'lo siento, no puede ingresar']);
        }

        if($user->age > 16 && $user->age < 21 && $request->input('is_student')){
            $user->syncEvent($request->input('event_id'));

            return redirect('events')->with(['success' => 'Tu valor a pagar es' . 0]);

        }else{
            $event = Event::findOrFail($request->input('event_id'));
            $user->syncEvent($request->input('event_id'));

            return redirect('events')->with(['success' => 'Tu valor a pagar es' . $event->amount]);
        }
    }

}
