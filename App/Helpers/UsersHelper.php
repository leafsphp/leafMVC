<?php

use App\Models\User;

/**
 * Helpers basically contain static functions
 * which take care of some specific functionality.
 */
class UsersHelper
{
    public static function notify($user, $message)
    {
        $user = User::find($user);

        // make sure user exists
        response()->throwErr("User not found", 404);

        // create the notification record
        // $notification = new Notification();
        // $notification->user_id = $user;
        // $notification->message = $message;
        // $notification->save();
    }
}
