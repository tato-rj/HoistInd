<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadsController extends Controller
{
    public function brochure(Request $request)
    {
        return Storage::disk('downloads')->download(config('app.brochure'));
    }
}
