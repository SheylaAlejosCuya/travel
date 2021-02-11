<?php

namespace App\Http\Controllers;
use App\Mail\Contacto;
use App\Mail\Reserva;
use App\Mail\Queja;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\EnviarCorreoRequest;

class CorreosController extends Controller
{
    public function contact(){
       
       $mensaje=request()->validate([
            'name' => 'required',
            'email' => 'required|email', 
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        Mail::to('ventas1@startravelperu.com')->send(new Contacto($mensaje));
        Session::flash('flash_message', 'Mensaje enviado, le responderemos en breve!');
        return redirect('contacto');   
        }



        public function reserva(){

          $vuelo=request()->validate([
              'nombre' => 'required',
              'apellido' => 'required',
              'telefono' => 'required',
              'correo' => 'required|email',
              'viaje' => 'required',
              'content' => 'required|min:3'
          ]);
     
          Mail::to('ventas1@startravelperu.com')->send(new Reserva($vuelo));
          Session::flash('flash_message', 'Vuelo solicitado!');
            return redirect('home');  

          }
          public function reclamo(EnviarCorreoRequest $request){

            $reclamo=request()->validate([
                'nombre' => 'required',
                'domicilio' => 'required',
                'documento' => 'required',
                'numeroDoc' => 'required',
                'telefono' => 'required',
                'email' => 'required|email',
                'bien' => 'required',
                'monto' => 'required',
                'DescProdu' => 'required|min:10',
                'tipReclamo' => 'required',
                'DetReclamo' => 'required|min:10',
                'PedReclamo' => 'required|min:10',
                'acuerdo' => 'required'
                
            ]);
       
            Mail::to('ventas1@startravelperu.com')->send(new Queja($reclamo));
            Session::flash('flash_message', 'Reclamo enviado.');
            return redirect('reclamo');   
            }
}
