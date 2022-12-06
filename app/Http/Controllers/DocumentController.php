<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $documents = Document::all();
        return response()->json($documents);
    }

    public function generate(Request $request, $id)
    {
        
        // Tragem toate field-urile din request
        $fields = $request->all()['client'];
        $fieldsUser = $request->all()['user'];

        // Tragem din baza de date path-ul fisierului dupa id
        $document = Document::find($id);

        if($document == null) {
            return response('Documentul nu exista', 404);
        }

        // Incarcam fisierul
        $path = $document->path;

        // TODO: de modificat aici linkul
        $document = new \PhpOffice\PhpWord\TemplateProcessor(storage_path()."//documente_generare//".$path);

        // Iteram prin toate campurile si le adaugam in document
        foreach($fields as $key => $value) {

            $document->setValue(strtoupper($key), htmlspecialchars($value?$value:"-"));

        }

        foreach($fieldsUser as $key => $value) {

            $document->setValue(strtoupper($key), htmlspecialchars($value?$value:"-"));

        }

        $document->setValue("PROSUMATOR", htmlspecialchars($fields['nume_client']." ".$fields['prenume_client']));
        $document->setValue("DOM_SAU_SEDIU", "domiciliul");
        $document->setValue("DATA_CURENTA", date("d.m.Y"));
        $document->setValue("NR_DOSAR", $fields['id']);
        $document->setValue("AN_DOSAR", date('Y'));

        $putere_totala = intval($fields['nr_panouri']) * floatval($fields['putere_panou']) / 1000;
        $document->setValue("PUTERE_TOTALA", $putere_totala);

        $putere_invertor = intval($fields['putere_invertor']);
        $document->setValue("PUTERE_INVERTOR_w", $putere_invertor);
        $max_debitat = 0;
        if($putere_totala >= $putere_invertor){
            $max_debitat = $putere_invertor;
        }
        else{
            $max_debitat = $putere_totala;
        }

        $document->setValue("MAX_DEBITAT", $max_debitat);

        $offsetdate = strtotime("+30 days");
        $expire_date = date("d.m.Y", $offsetdate);
        $document->setValue('DATA_EXPIRARE',$expire_date);



        // Salvam intr-un fisier temporar
        $temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
        $document->saveAs($temp_file);
      
        // print_r($fields);
        // Intoarcem raspunsul BLOB
        return response()->download($temp_file);
    }


}
