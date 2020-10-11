<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon;
use Spatie\GoogleCalendar\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('backend.post.index', ['posts' => Post::all()]);
        return view('backend.appointment.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $event = new Event();

        $event->quickSave('Appointment at Somewhere on April 25 10am-10:25am');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $event = new Event;

        $event->name = 'A new full day event';
        $event->startDate = Carbon\Carbon::now();
        $event->endDate = Carbon\Carbon::now()->addDay();

        $event->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * @return \Illuminate\View\View
     */
    public function createAppointment()
    {
        return view('frontend.appointment');
    }


    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function sendAppointment(SendContactRequest $request)
    {
        $event = new Event;

        $event->name = 'A new Appointment day event';
        $event->startDate = Carbon\Carbon::now();
        $event->endDate = Carbon\Carbon::now()->addDay();

        $event->save();

        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }
}
