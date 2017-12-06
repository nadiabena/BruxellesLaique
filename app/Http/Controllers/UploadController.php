<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Storage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UploadRequest;

use App\ListeDocuments;
use App\Personne;

use Illuminate\Support\Facades\Input;
use File;

//use App\Http\Controllers\Storage;

use Storage;
use Response;

class UploadController extends Controller{

    public function uploadForm(){
        return view('upload_form');
    }

    public function uploadSubmit(UploadRequest $request){    // Request $request
        //echo asset('storage/file.txt');


        if($request->hasFile('documents')){
            foreach ($request->documents as $key => $document) {
                $filename = $document->store('documents');
                
                //$path = $request->document->path();
                //dd($filename);

                //$file = $request->file('documents');
                //dd('test: '.$file[0]->path());
                //dd('test: '.$document->path());
                
                $id_personne  = Input::get('id_personne');

                /*$path = */
                //dd("path: ".$document);

                //$path = $request->file('document')->store('documents'); //?????????????

                ListeDocuments::create([
                    /*'filename' => $filename*/
                    'id_personne' => $id_personne,
                    'intitule_document' => $request->get('intitule'),
                    'document' => 'documents/'.$document->getClientOriginalName() //le nom du fichier
                ]);

                //dd('***** '.$document->getRealPath());

                $file = Input::file('documents');
                //dd($file[0].' *** ');
                //$file[0]->move(public_path().'/documents/',$document->getClientOriginalName());
                //$i = "/documents/".$document->getClientOriginalName();
                //dd('i: '.$i);
                //$path = $document->store($i);
                $path = $file[$key]->move(public_path().'\documents',$document->getClientOriginalName());
                //dd('test : '.$path);

                //$file = $request->file('document');
                //dd('File:'.$_FILE[$document]);
                //$fichier = $request->get('document');
                //dd('test '.$fichier);

                //Display File Real Path
                //$file->getRealPath();

                //Move Uploaded File
                //$destinationPath = 'public/documents';

                //dd('$request->hasFile($document) '.$request->hasFile($document));
                //dd('je passe..'. $document->path());

                //$path = Storage::putFile($destinationPath, $document);
                //dd('path: '.$path);
                //Storage::disk('local')->put($document->getClientOriginalName(), File::get($document)); //getFilename()

                //$path = $document->store($destinationPath);

                /*Storage::disk('public')->move(
                                                'tmp/posts/' . $__fn, 
                                                'images/'. Auth::id() . '/posts/' . $__fn);*/

                //$file->move($destinationPath,$file->getClientOriginalName());

            }

		//dd($request);       

        //echo 'requestUri:' .$request->requestUri;
        //dd($request->get('id'));

        //Request::file($document->getClientOriginalName())->move('documents', $document->getClientOriginalName());  //Store the document

        return redirect('personnes')->with('success','Upload successful!');
    }else{
        return redirect('personnes')->with('success','Upload KO!');
    }

    }
}

