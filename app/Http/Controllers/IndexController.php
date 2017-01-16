<?php
namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    private $post;

    public function __construct(Posts $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->orderBy('id', 'desc')->paginate(5);

        return view('index.index', compact('posts'));
    }

    public function show($id)
    {
        $id = str_replace('-', ' ', $id);
        $post = $this->post->where(DB::raw('LOWER(titulo_index)'), '=', $id)->first();

        return view('index.show', compact('post'));
    }

    public function postContato(Request $request)
    {
        Mail::to('hanacmoliveira@gmail.com')->send(new SendEmail($request));

        return redirect()->route('index.index')->with('msg_email', 'E-mail enviado com sucesso! Em breve retornaremos seu contato');
    }

    
}