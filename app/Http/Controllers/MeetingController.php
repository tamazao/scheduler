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
      return view('meetings.list',  ['meetings'=> $user->meetings, 'schedules' => $user->schedules]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('meetings.create');
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
    return redirect()->back()->with('message','Meeting Added');
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
