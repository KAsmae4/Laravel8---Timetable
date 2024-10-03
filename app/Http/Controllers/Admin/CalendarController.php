<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lesson;
use App\Services\CalendarService;

class CalendarController extends Controller
{
    public function index(CalendarService $calendarService)
    {
        // Fetch lessons with salle information
        $lessons = Lesson::all();

        // Get week days and generate calendar data
        $weekDays     = Lesson::WEEK_DAYS;
        $calendarData = $calendarService->generateCalendarData($weekDays, $lessons);

        return view('admin.calendar', compact('weekDays', 'calendarData'));
    }
}
