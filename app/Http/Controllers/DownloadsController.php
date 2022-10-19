<?php
namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Report;

class DownloadsController extends Controller
    {
        public function reportDownload()
     {
         $reports = Report::latest()->paginate(6);
         return view('pages.downloads.index', compact('reports'));
     }

    }
