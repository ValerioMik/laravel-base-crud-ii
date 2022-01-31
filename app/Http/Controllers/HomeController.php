<?php


namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class HomeController extends Controller
{
    public function home(){
        
        $comics = Comic::all();
        return view('pages.home', compact('comics'));
    }

    public function show($id) {

        $comic = Comic:: findOrFail($id);
        return view('pages.show', compact('comic'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'pages'=> 'Required',
            'release_date' => 'required|date'
        ]);

        $movie = Comic::create($data);

        return redirect() -> route('home');
    }

    public function edit($id){

        $comic = Comic::findOrFail($id);
        return view('pages.edit',compact('comic'));
    }

    public function update(Request $request,$id){
        
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'pages'=> 'Required',
            'release_date' => 'required|date'
        ]);
        $comic = Comic::findOrFail($id);
        $comic -> update($data);
        return redirect() -> route('show' , $comic->id);

    }

    public function delete($id){
        $comic = Comic::findOrFail($id);
        $comic -> delete();
        return redirect() -> route('home');
    }
}
