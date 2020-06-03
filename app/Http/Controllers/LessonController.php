<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function store(Request $request)
    {
        $lesson = Lesson::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('lesson.take', ['lesson' => $lesson->id]); 
    }

    public function take(Lesson $lesson)
    {
        $questions = $lesson->category->questions()->paginate(1);

        return view('lesson', compact('lesson', 'questions'));
    }

    public function answer(Lesson $lesson, $choice, Request $request)
    {
        $lesson->answers()->create([
            'choice_id' => $choice
        ]);

        if ($request->last_page) {
            $lesson->activity()->create([
                'user_id' => auth()->user()->id
            ]);
        }

        return redirect($request->next_page_url);
    }

    public function results(Lesson $lesson)
    {
        return view('results', compact('lesson'));
    }
}
