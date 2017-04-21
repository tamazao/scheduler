<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');

  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $user = \Auth::user();
      $meetings = \App\Meeting::where('user_id', '=', $user->id)->paginate(12);
      return view('meetings.list',  ['meetings'=> $meetings
                                    ,'schedules' => $user->schedules
                                    ,'user_id' => $user->id
                                    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $user = \Auth::user();
    return view('meetings.create', ['user_id' => $user->id]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $meeting = new \App\Meeting;

    $meeting->fill($request->all());
    $meeting->user_id = $request->user_id;
    $meeting->save();
    \Session::flash('alert-success','Meeting has been added');
    return redirect()->back();
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
    $meeting = App\Meeting::find($id);
    $meeting->delete();
    return redirect()->back();
  }

}

?>
