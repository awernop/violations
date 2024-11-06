<?php

namespace App\Http\Controllers;

use App\Models\Report as ModelReport;
use Illuminate\Http\Request as HttpRequest;

class ReportController extends Controller
{
    public function index(){
        $reports=ModelReport::all();
        return view('report.index', compact('reports'));
    }

    public function destroy(ModelReport $report){
        $report->delete();
        return redirect()->back();
    }

    public function store(HttpRequest $request, ModelReport $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
            'user_id'=>'foreignId',
            'status_id'=>'foreignId',
        ]);

        $report->create($data);
        return redirect()->back();
    }

    public function show(ModelReport $report){
        return view('report.show', compact('report'));
    }

    public function update(HttpRequest $request, ModelReport $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
            'user_id'=>'foreignId',
            'status_id'=>'foreignId',
        ]);

        $report->update($data);
        return redirect()->back();
    }

    public function showUpdate(ModelReport $report){
        $reports=ModelReport::all();
        return view('report.show', compact('report'));
    }
}