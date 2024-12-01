<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class EventDetailsController extends Controller
{
    
    public function showEventDetails(Request $request)
    {
        
        $id = $request->id;
        $myEvent = Event::find($id);

        if ($myEvent) {
            // return view('showeventdetails',compact('myEvent'));
            return response()->json($myEvent);
        } 
    }

    public function editEventDetails(Request $request)
    {
        $id = $request->id;
        $myEvent = Event::find($id);

        if ($myEvent) {
            // return view('showeventdetails',compact('myEvent'));
            return response()->json($myEvent);
        } 

        
    }


    public function updateEventDetails(Request $request)
    {
        $id = $request->id;
        $myEvent = Event::find($id);

        if ($myEvent) {
            if ($request->hasFile('myimage_path')) {
                $imageName = time().'.'.$request->myimage_path->extension();
                $request->myimage_path->move(public_path('images'), $imageName);
                $myEvent->image_path = $imageName;
            }
            $myEvent->title = $request->title;
            $myEvent->start = $request->start;
            $myEvent->end = $request->end;
            $myEvent->description = $request->description;

            $myEvent->save();

            // return view('showeventdetails',compact('myEvent'));
            return response()->json($myEvent);
        } 
    }
    
}
