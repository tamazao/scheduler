<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;

class CheckMeetingOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      $user = \Auth::user();
      $meeting = \App\Meeting::findOrFail($request->meeting_id);
      if($meeting->user_id == $user->id)
      {
        return $next($request);
      }
      else
      {
        throw new AuthenticationException('Meeting does not belong to user.');
      }
    }
  }
