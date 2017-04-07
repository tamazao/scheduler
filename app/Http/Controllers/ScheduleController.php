<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($meetingID)
  {
    if ( \Auth::check() )
    {
      $user = \Auth::user();
      return view('schedules.create', ['meetingID' => $meetingID]);

    }
    else
    {
      return view('auth.login');
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    if (\Auth::check() )
    {
      $schedule = new \App\schedule;
      $schedule->fill($request->all());
      $schedule->save();
      return redirect()->back()->with('message','Schedule Added');
    }

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
    $target = \App\schedule::find($id);
    $target->delete();
    return redirect()->back()->with('message','Schedule Removed');
  }

}

?>
