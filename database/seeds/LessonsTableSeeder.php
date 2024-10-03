<?php

use App\Lesson;
use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
            [
                'id'         => 1,
                'teacher_id' => 5,
                'class_id'   => 1,
                'weekday'    => 1,
                'start_time' => '10:00',
                'end_time'   => '12:00',
                'salle'  => 'salle 1', // Adding salle
            ],
            [
                'id'         => 2,
                'teacher_id' => 6,
                'class_id'   => 1,
                'weekday'    => 1,
                'start_time' => '12:00',
                'end_time'   => '14:00',
                'salle'  => 'salle 2', // Adding salle
            ],
            [
                'id'         => 3,
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 1,
                'start_time' => '14:00',
                'end_time'   => '16:00',
                'salle'  => 'salle 3', // Adding salle
            ],
            [
                'id'         => 4,
                'teacher_id' => 3,
                'class_id'   => 2,
                'weekday'    => 1,
                'start_time' => '14:00',
                'end_time'   => '16:00',
                'salle'  => 'salle 4', // Adding salle
            ],
            [
                'id'         => 5,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 2,
                'start_time' => '08:30',
                'end_time'   => '10:30',
                'salle'  => 'salle 1', // Adding salle
            ],
            [
                'id'         => 6,
                'teacher_id' => 5,
                'class_id'   => 1,
                'weekday'    => 2,
                'start_time' => '10:00',
                'end_time'   => '12:00',
                'salle'  => 'salle 2', // Adding salle
            ],
            [
                'id'         => 7,
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 2,
                'start_time' => '12:00',
                'end_time'   => '14:00',
                'salle'  => 'salle 3', // Adding salle
            ],
            [
                'id'         => 8,
                'teacher_id' => 6,
                'class_id'   => 1,
                'weekday'    => 3,
                'start_time' => '10:00',
                'end_time'   => '12:00',
                'salle'  => 'salle 1', // Adding salle
            ],
            [
                'id'         => 9,
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 3,
                'start_time' => '12:00',
                'end_time'   => '14:00',
                'salle'  => 'salle 2', // Adding salle
            ],
            [
                'id'         => 10,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 3,
                'start_time' => '14:00',
                'end_time'   => '16:00',
                'salle'  => 'salle 3', // Adding salle
            ],
            [
                'id'         => 11,
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 4,
                'start_time' => '10:00',
                'end_time'   => '12:00',
                'salle'  => 'salle 1', // Adding salle
            ],
            [
                'id'         => 12,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 4,
                'start_time' => '12:00',
                'end_time'   => '14:00',
                'salle'  => 'salle 2', // Adding salle
            ],
            [
                'id'         => 13,
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 4,
                'start_time' => '14:00',
                'end_time'   => '16:00',
                'salle'  => 'salle 3', // Adding salle
            ],
            [
                'id'         => 14,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 5,
                'start_time' => '08:30',
                'end_time'   => '10:00',
                'salle'  => 'salle 1', // Adding salle
            ],
            [
                'id'         => 15,
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 5,
                'start_time' => '10:00',
                'end_time'   => '12:00',
                'salle'  => 'salle 2', // Adding salle
            ],
            [
                'id'         => 16,
                'teacher_id' => 6,
                'class_id'   => 1,
                'weekday'    => 5,
                'start_time' => '12:00',
                'end_time'   => '14:00',
                'salle'  => 'salle 3', // Adding salle
            ],
        ];

        Lesson::insert($lessons);
    }
}
