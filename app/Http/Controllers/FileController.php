<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request){
            
        $request->validate([
           'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf,doc,docx|max:10048'
        ]);

        // Testam daca clientul trimis e la userul curent
        $id_user = $request->user()->id;
        $id_client = $request->all()['client_id'];
        $category = $request->all()['category'];

        $client = $request->user()->clients->where('id', $id_client)->first();

        // Daca userul nu are clientul cerut
        // Returnam eroare
        if(!$client) {
            return response('Eroare la client.', 404);
        }
        
        // Daca fisierul exista
        // Il incarcam in uploads si in baza de date
        if(!$request->file()) {
            return response('Eroare la fisier.', 404);
        }

        $fileUpload = new File;

        $file_name = time().'_'.$request->file->getClientOriginalName();
        $relative_path = 'files/' . $id_user . "/" . $id_client;

        $path = $request->file('file')->storeAs(
            $relative_path, $file_name
        );

        if (!Storage::exists($path)) {
            return response('Eroare la stocare.', 404);
        }

        $fileUpload->name = $file_name;
        $fileUpload->path = $path;
        $fileUpload->id_user = $id_user;
        $fileUpload->id_client = $id_client;
        $fileUpload->category = $category;
        $fileUpload->save();

        return response()->json(['success'=>'Fisierul a fost incarcat cu success!', 'file' => $fileUpload]);
   }


    public function show(Request $request, $id)
    {

        // TODO: De testat daca e totul ok

        if(isset($request->all()['category'])) {
            $category = $request->all()['category'];

            $files = File::where([
                'id_user' => $request->user()['id'],
                'id_client' => $id,
                'category' => $category
            ])->get();
            
            return response()->json($files);
        }

        $files = File::where([
            'id_user' => $request->user()['id'],
            'id_client' => $id,
        ])->get();
        
        return response()->json($files);
    }


    /**
     * Destroy
     *
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        // Testam daca clientul trimis e la userul curent
        $id_user = $request->user()->id;
        $id_client = $request->all()['client_id'];
        $id_fisier = $id;

        $client = $request->user()->clients->where('id', $id_client)->first();

        // Daca userul nu are clientul cerut
        // Returnam eroare
        if(!$client) {
            return response('Eroare la client.', 404);
        }

        $fisier = File::where([
            'id_user' => $id_user,
            'id_client' => $id_client,
            'id' => $id_fisier
        ])->first();

        if(!$fisier) {
            return response('Fisierul nu exista.', 404);
        }

        Storage::delete($fisier->path);

        if (Storage::exists($fisier->path)) {
            return response('Eroare la stergere.', 404);
        }

        $fisier->delete();

        return response('Fisierul a fost sters cu success.', 200);
    }



    public function download(Request $request, $id)
    {
        // Testam daca clientul trimis e la userul curent
        $id_user = $request->user()->id;
        $id_client = $request->all()['client_id'];
        $id_fisier = $id;

        $client = $request->user()->clients->where('id', $id_client)->first();

        // Daca userul nu are clientul cerut
        // Returnam eroare
        if(!$client) {
            return response('Eroare la client.', 404);
        }

        $fisier = File::where([
            'id_user' => $id_user,
            'id_client' => $id_client,
            'id' => $id_fisier
        ])->first();

        if(!$fisier) {
            return response('Fisierul nu exista.', 404);
        }

        if (!Storage::exists($fisier->path)) {
            return response('Fisierul nu exista pe disk.', 404);
        }

        return Storage::download($fisier->path);
    }
}
