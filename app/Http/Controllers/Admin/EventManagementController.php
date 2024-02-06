<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ImageHelper;

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

        $data = $request->validate([
            'name'                => 'required|unique:events,name',
            'district_id'         => 'required',
            'desc'                => 'required',
            'location'            => 'required',
            'date'                => 'required',
            'image_caption'       => 'required',
        ]);

        try {

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|file|max:2000|mimes:png,jpg,jpeg,gif,svg'
                ]);

                $fileName = ImageHelper::image($request->image, '/uploads/event/');

                $data['image'] = $fileName;
            }

            Event::create($data);

            $notification = array(
                'alert-type'        => 'success',
                'message'           => 'Created Successfully',
            );

            return redirect()->route('admin.event.index')->with($notification);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }



    public function destroy(Event $event)
    {
        try {
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function show(Event $event)
    {
        try {
            return view('admin-views.event.view', [
                'event' => $event,
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
