<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CKEditorController extends Controller
{
    public function upload(Request $request)
    { //ongebruikte upload functie voor CKEditor, het wilt maar de upload formulier niet zien
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName(); //originele naam opvragen
            $fileName = pathinfo($originName, PATHINFO_FILENAME); //opslaan in variabele
            $extension = $request->file('upload')->getClientOriginalExtension(); //extentie opslaan in een variabele
            $fileName = $fileName.'_'.time().'.'.$extension; //naam bestand veranderen naar tijdstip plus extentie
            $request->file('upload')->move(public_path('images/'), $fileName); //verplaatsen naar map images
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Foto succesvol ingevoegd!';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
