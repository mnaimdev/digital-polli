<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventManagementController extends Controller
{
    public function index()
    {
        try {
            $events = Event::orderBy('id', 'DESC')->get();

            return view('admin-views.event.index', [
                'events'  => $events,
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function create()
    {
        try {
            return view('admin-views.event.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function store(Request $request)
    {
        try {
            return $request->all();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
