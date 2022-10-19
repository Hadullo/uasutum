<?php
namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()    {
        $reports = Report::latest()->paginate(4);
        return view('dashboard.reports.index', compact('reports'));
    }

    //Creating a Report
    public function create()
    {
       return view('dashboard.reports.create');
    }

     //Uploading and Saving a Report Record

     public function store(Request  $request)
    {
        $request->validate([

            'title' => "required",
            'rpfile' => 'required|mimes:doc,docx,pdf',
            'body' => "required"
        ]);

        $title = $request->input('title');
        $slug = Str::slug($title,'-');
        $user_id = Auth::user()->id;
        $body = $request->input('body');


        //Reports File Upload
        $reportFilePath = 'storage/' . $request->file('rpfile')->store('reportFiles','public');

        $report = new Report();
        $report->title = $title;
        $report->slug = $slug;
        $report->user_id = $user_id;
        $report->body = $body;
        $report->reportFilePath = $reportFilePath;
        $report->save();

        return redirect()->back()->with('status', 'Report Created Successfully');
    }

    //Edit Report  Details

    public function edit(Report $report)
   {

        return view('dashboard.reports.edit', compact('report'));
   }

      //The Update method
      public function update(Request  $request, Report $report)
    {


        $request->validate([

            'title' => "required",
            'rpfile' => 'required|mimes:doc,docx,pdf',
            'body' => "required"
        ]);

        $title = $request->input('title');
        $slug = Str::slug($title,'-');
        $body = $request->input('body');

        //Reports File Upload
        $reportFilePath = 'storage/' . $request->file('rpfile')->store('reportFiles','public');


        $report->title = $title;
        $report->slug = $slug;
        $report->body = $body;
        $report->reportFilePath = $reportFilePath;
        $report->save();

        return redirect()->back()->with('status', 'Edited Report Details Successfully Saved');
    }



   public function delete(Report $report)
   {
        $report->delete();
        return redirect()->back()->with('status', 'Record has been Successfully Deleted');

   }

}
