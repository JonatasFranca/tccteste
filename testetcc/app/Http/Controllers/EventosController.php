<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Auth;
use Session;
use Input;
use App\User;
use Redirect;
use App\Http\Requests;
use App\Eventos;
use App\Matriculas;
use App\Http\Requests\EventosRequest;
class EventosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' =>'show']);
    }

    public function index()

    {
        if (Auth::user()-> id == 8){
        $eventos = Eventos::all();
        $matricula = Matriculas::all();
            $user = User::all();
        return view('eventos.index', ['eventos' => $eventos,'matricula' => $matricula,'user' => $user]);
        }
        else return view('eventos.erroadmin');

    }
    public function erroadmin()
    {
        return view('eventos.erroadmin');
    }

    public function show()
    {
        $matricula = Matriculas::all();
        $eventos = Eventos::all();

        return view('eventos.show', ['eventos' => $eventos,'matricula'=>$matricula]);
    }

    public function create()
    {
        if (Auth::user()-> id == 8) {
            return view('eventos.create');
        }
        else return view('eventos.erroadmin');
    }

    public function store(EventosRequest $request)
    {
        if (Auth::user()-> id == 8) {

            $input= $request->all();

            Eventos::create($input);

            $image = $request->file('image');



            $input['imagename'] = $request->nomeeventos.'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('css/image');

            $image->move($destinationPath, $input['imagename']);


            $pdf = $request->file('pdf');



            $input['pdfname'] = $request->nomeeventos.'.'.$pdf->getClientOriginalExtension();

            $destinationPath = public_path('css/download');

            $pdf->move($destinationPath, $input['pdfname']);


            return redirect()->route('eventos');
        }
        else return view('eventos.erroadmin');
    }

    public function destroy($id)
    {
        if (Auth::user()-> id == 8) {
            Eventos::find($id)->delete();
            return redirect()->route('eventos');
        }
        else return view('eventos.erroadmin');
    }

    public function edit($id)
    {
        if (Auth::user()-> id == 8) {
            $eventos = Eventos::find($id);
            return view('eventos.edit', compact('eventos'));
        }
        else return view('eventos.erroadmin');
    }

    public function update(EventosRequest $request, $id)
    {
        if (Auth::user()-> id == 8) {

            $produto = Eventos::find($id)->update($request->all());

            $image = $request->file('image');



            $input['imagename'] = $request->nomeeventos.'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('css/image');

            $image->move($destinationPath, $input['imagename']);

            $pdf = $request->file('pdf');



            $input['pdfname'] = $request->nomeeventos.'.'.$pdf->getClientOriginalExtension();

            $destinationPath = public_path('css/download');

            $pdf->move($destinationPath, $input['pdfname']);
            
            
            return redirect()->route('eventos');
        }
        else return view('eventos.erroadmin');

    }
    
    public function gerargraficos()
    {
        if (Auth::user()->id == 8) {
            $eventos = Eventos::all();
            $matricula = Matriculas::all();
            $user = User::all();
            return view('eventos.graficos', ['eventos' => $eventos, 'matricula' => $matricula, 'user' => $user]);
        } else return view('eventos.erroadmin');
    }

public function sendEmail(Request $request)
    {
        $data = $request->only('name', 'email','evento','data');

        Mail::send('emails.contact',$data, function($msj) use ($data){
            $msj->subject('Email de Contato');
            $msj->to($data['email']);

        });
        
        Session::flash('mensage','Mensagem enviado coretamente');
        return Redirect::to('matricula/lista');
    }

}