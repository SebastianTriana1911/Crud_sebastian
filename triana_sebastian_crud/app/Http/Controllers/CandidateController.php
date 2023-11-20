<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CandidateRequest;
use App\Http\Requests\StoreCandidate;
use App\Http\Requests\UpdateCandidate;
use App\Models\Candidates;

class CandidateController extends Controller{
    
    public function index(){
        $candidates = Candidates::all();
        return view("candidates.index", ["candidates" => $candidates]);
    }

    public function show($id){
        $candidate = Candidates::find($id);

        return view("candidates.show", ["candidate" => $candidate]);
    }

    public function create(){
        return view("candidates.create");
    }

    public function store(StoreCandidate $request){
        $candidate=Candidates::create($request->all());
        // $candidate = new Candidates();

        // $candidate -> user_id = $request -> user_id;
        // $candidate -> selection_status = $request -> selection_status;
        // $candidate -> points = $request -> points;

        // $candidate -> save();

        return redirect()->route("candidates.index");
    }

    public function edit($id){
        $candidates = Candidates::find($id);

        return view("candidates.edit", ["candidates" => $candidates]);
    }

    public function update(UpdateCandidate $request, $id){
        $candidate = Candidates::find($id);

        $candidate -> user_id = $request -> user_id;
        $candidate -> selection_status = $request -> selection_status;
        $candidate -> points = $request -> points;

        $candidate -> save();

        return redirect()->route("candidates.index");
    }

    public function destroy($id){
        $candidate = Candidates::find($id);

        $candidate -> delete();

        return redirect()->route("candidates.index");
    }
}
