<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ExperienceController extends Controller
{
    public function actionIndex (): Factory|View|Application
    {
        return view('experience');
    }
}
