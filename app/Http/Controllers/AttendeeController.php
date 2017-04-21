<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendeeController extends Controller {

  public function __construct()
  {
    $this->middleware('auth',['only'=>['index']]);
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($schedule_id)
  {

      $schedule = \App\Schedule::find($schedule_id);
      $meeting = \App\Meeting::find($schedule->meeting_id);
      echo $schedule;
      echo $meeting;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($schedule_id)
  {
    $schedule = \App\Schedule::find($schedule_id);
    if ($schedule->MaxAttendies > $schedule->Attendees->count())
    {
        return view('attendees.create', ['schedule_id' => $schedule_id]);
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $attendee = new \App\Attendee;
      $attendee->fill($request->all());


      $attendee->save();
      return redirect()->back()->with('message','You\'ve been added');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
