<?php

namespace Modules\User\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Jobs\SendContactEmail;

class JobController extends Controller
{
    public function processQueue()
    {
        $emailJob = new SendContactEmail()->delay(Carbon::now()->addMinutes(1));
        dispatch($emailJob);
    }
}
