<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    // use WithPagination;

    public function render()
    {
        $courses = Course::orderBy('id', 'desc')->paginate(10);
        return view('livewire.course-list', compact('courses'));
    }
}
