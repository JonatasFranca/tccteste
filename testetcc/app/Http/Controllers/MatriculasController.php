<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Matriculas;
use App\Eventos;
use Auth;
use App\User;
use PDF;







use App\Http\Requests\MatriculasRequest;
class MatriculasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' =>'show']);
    }


    public function index()
    {
        $matriculas = Matriculas::orderBy('id', 'DESC')->paginate('10');
       // $eventos = Eventos::all();

        
        return view('matriculas.index',compact('matriculas'));
    }
    public function edit($id)
    {
        if (Auth::user()-> id == 8) {
            $matricula = Matriculas::find($id);
            //$eventos = Eventos::find($id);


            return view('matriculas.edit', compact('matricula'));
        }
        else return view('eventos.erroadmin');
    }
    public function update(MatriculasRequest $request, $id)
    {
        if (Auth::user()-> id == 8) {
            Matriculas::find($id)->update($request->all());
            $matricula = Matriculas::find($id);
            return view('matriculas.edit', compact('matricula'));
        }
        else return view('eventos.erroadmin');
    }
    public function lista()
    {
        $matriculas = Matriculas::orderBy('id', 'DESC')->paginate('10');
        // $eventos = Eventos::all();


        return view('matriculas.lista',compact('matriculas'));
    }
    public function details($id)
    {
        $matriculas = Matriculas::find($id);
        //$eventos = Eventos::find($id);


        return view('matriculas.details',compact('matriculas'));
    }
    public function cracha($id)
    {
        $matriculas = Matriculas::find($id);
        //$eventos = Eventos::find($id);

        $pdf = PDF::loadView('matriculas.cracha',compact('matriculas'));
        return $pdf->download('cracha.pdf');
        
    }
    public function presenca($id)
    {
        if (Auth::user()-> id == 8) {
            $matriculas = Matriculas::all();

            $eventos = Eventos::find($id);
            $user = User::all();


            return view('matriculas.presenca', compact('matriculas', 'eventos', 'user'));
        }
        else return view('eventos.erroadmin');

    }
    public function chamada($id)
    {
        if (Auth::user()-> id == 8) {
            $matriculas = Matriculas::all();

            $eventos = Eventos::find($id);
            $user = User::all();

            $pdf = PDF::loadView('matriculas.chamada',compact('matriculas','eventos','user'));
            return $pdf->download('lista_chamada.pdf');
        }
        else return view('eventos.erroadmin');

    }
    public function pdf()
    {
        

        $pdf = PDF::loadView('matriculas.chamada',compact('matriculas','eventos','user'));
        return $pdf->download('lista_chamada.pdf');
    }
    public function create($id)
    {

        $eventos = Eventos::find($id);
        return view('matriculas.create', compact('eventos'));
       
        
    }
    public function store( MatriculasRequest $request)
    {
        $input = $request->all();
        Matriculas::create($input);

        return redirect()->route('matricula.lista');
    }

}