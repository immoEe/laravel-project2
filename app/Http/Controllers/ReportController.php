<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Report::create($validated);
        return redirect()->route('report.index')->with('success', 'Отчет создан успешно!');
    }

    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }   


    public function update(Request $request, Report $report)
    {
        $validated = $request->validate([
            'number' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $report->update($validated);
        return redirect()->route('report.index')->with('success', 'Отчет обновлен успешно!');
    }
}
