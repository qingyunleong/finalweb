<?php

namespace App\Http\Controllers;

use App\Models\subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['listSubjects' => subjects::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }

    public function registersubject()
    {
        return view('registersubject');
    }
    
    public function insertSubject(Request $request)
    {
        echo json_encode($request->all());
        $subjectRegister = new subjects();
        $subjectRegister->subject_title = $request->subjectTitle;
        $subjectRegister->subject_description = $request->subjectDescription;
        $subjectRegister->subject_price = $request->subjectPrice;
        $subjectRegister->subject_totalhours = $request->subjectTotalhours;
        $subjectRegister->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function subjectUpdate($id, Request $request)
    {
        $listItem = subjects::find($id);
        $listItem->subject_title = $request->subjectTitle;
        $listItem->subject_description = $request->subjectDescription;
        $listItem->subject_price = $request->subjectPrice;
        $listItem->subject_totalhours = $request->subjectTotalhours;
        $listItem->update();
        return redirect('mainpage');
    }

    public function subjectDelete($id)
    {
        $listItem = subjects::find($id);
        $listItem->delete();
        return redirect('mainpage');
    }
}
