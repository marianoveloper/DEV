<?php

namespace App\Http\Livewire;


use App\Models\Mensaje;
use Livewire\Component;
use App\Mail\EmailConsulta;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Consulta extends Component
{
    public $name,$email,$carrera;
    public $mensaje;
    public $open=false;

    protected $rules=[

        'name'=>'required',
        'email'=>'required',
        'mensaje'=>'required|max:500',
    ];

    public function render()
    {
        return view('livewire.consulta');
    }



public function updated($propertyName){

    $this->validateOnly($propertyName);
}

   public function save(){

$rules=$this->rules;

    $this->validate($rules);

    $msj=Mensaje::create([
        'name'=>$this->name,
        'email'=>$this->email,
        'mensaje'=>$this->mensaje,
        'carrera'=>$this->carrera,
    ]);

    $this->enviarMail($msj);
    $this->reset(['open','name','email','mensaje']);
    $this->emit('alert','Se envió tu consulta');
   }

   public function enviarMail(Mensaje $msj){

    $correo=$msj->email;
    $name=$msj->name;
    $carrera=$msj->carrera;

    $subject="Consulta sobre la carrea ".$msj->carrera;
    $mensaje=$msj->mensaje;

    $mail=new EmailConsulta($subject,$name,$correo,$carrera,$mensaje);


    Mail::to('soportevirtual@uccuyo.edu.ar')->send($mail);
    //Mail::to($correo)->send($confirmation);


     return redirect()->back()
     ->with('info','La Consulta fue enviada');
}
}
