<?php

namespace App\Http\Controllers;

use App\Models\annonces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnoncesController extends Controller
{

    public function show(annonces $annonce)
    {
        $user_id = auth()->user()->id;
        $annonce = annonces::where('userId', $user_id)->get();
        return view('client.client', compact('annonce'));
    }

    public function clientShow(annonces $annonce){
        $annonce = annonces::all();
        return view('seller.seller', compact('annonce'));

    }



    public function store(Request $request)
    {
        $annonce = new Annonces();
        $annonce->userId = auth()->user()->id;
        $annonce->titre = request('titre');
        $annonce->type_annances = request('type_annances');
        $annonce->type_biens = request('type_biens');
        $annonce->description = request('description');
        $annonce->prix = request('prix');
        $annonce->save();
        return redirect('/seller');
    }

    public function delete($id)
    {
        Annonces::where('id', $id)->delete();
        return back();
    }

    public function edit($id)
    {
        $annonce = Annonces::find($id);
        return view('/client.edit', compact('annonce'));
    }

    public function update(Request $request, $id)
    {
        $annonce = Annonces::find($id);
        $annonce->titre = $request->input('titre');
        $annonce->type_annances = $request->input('type_annances');
        $annonce->type_biens = $request->input('type_biens');
        $annonce->description = $request->input('description');
        $annonce->prix = $request->input('prix');
        $annonce->update();
        return redirect('/seller')->with('status', 'annonce Updated Successfully');
    }
}
