<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Mail;

class CommentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $comments = Comment::where('id_client',$request->id_client);

        return response()->json($comments->get());
    }

    /**
     * Display a single resource
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $id = $request->all()['id'];
        $comment = $request->user()->clients()->comments->where('id', $request->id)->first();;
        
        return $comment;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
            'content' => ['required'],
            'id_client' => ['required']
        ])->validate();

        $complete_request = $request->all();

        // TODO: De testat aici daca clientul apartine userului

        $comment = Comment::create($complete_request);

        if($request->sendEmail) {
            $client = $request->user()->clients->where('id', $request->id_client)->first();

            $html = '
            <div>
            Buna ziua!<br/>
            Va anuntam ca ati primit urmatoarea notificare prin platforma energoDOCS de la <b>' . $request->user()->denumire_firma . 
            '</b>:</br><br/><b>'. $request->title . '</b></br>' . $request->content . '</br></br>' .
            'Va multumim! </br>';
    
            $payload['to'] = $client->email_client;
            $payload['subject'] = '[energoDOCS] NOTIFICARE de la ' . $request->user()->denumire_firma . ' - ' . $request->title;
            $payload['cc'] = $request->user()->email;

    
            $mail = Mail::html($html, function ($message) use ($payload) {
    
                $message->to($payload['to'])
                    ->subject($payload['subject'])
                    ->cc($payload['cc'])
                    ->from("noreply@energodocs.ro");
            });
        }

        return response()->json($comment);
    }

    /**
     * Destroy
     *
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $clients = $request->user()->clients()->comments->where('id', $id)->first()->delete();

        return response()->json("Deleted");
    }
}
