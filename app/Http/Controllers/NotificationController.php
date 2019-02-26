<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Support\Facades\Auth;
class NotificationController extends Controller
{
    public function get()
    {
        $notification =Auth::user()->unreadNotifications;
        return $notification;
    }
}
