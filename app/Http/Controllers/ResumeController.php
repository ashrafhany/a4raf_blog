<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function show()
    {
        $resume = Resume::first();

        if (!$resume) {
            abort(404);
        }

        return view('resume.show', compact('resume'));
    }
}
