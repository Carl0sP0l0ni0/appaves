<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ave;
use App\Models\Ornitologo;
use App\Models\Avistamiento;

class AvistamientoController extends Controller
{
    //
    public function index()
    {
        $avistamientos = Avistamiento::with('ave', 'ornitologo')->get();

       
       
        return view('avistamientos.index', compact('avistamientos'));

    }

    public function create()
    {
        return view('avistamientos.create');
    }

    public function store(Request $request)
    {

       
        $aves=Ave::create([
            'nombre_comun' => $request->nombre_comun,
            'nombre_cientifico' => $request->nombre_cientifico,
            'familia' => $request->familia,
            'especie' => $request->especie,
            'imagen' => $request->imagen,
        ]);
       

        $ornitologos = Ornitologo::create([
            'nombre' => $request->nombre,
            'codigo_profesional' => $request-> codigo_profesional,
        ]);
       


        $avistamientos=new Avistamiento();
        $avistamientos->ave_id=$aves->id;
        $avistamientos->ornitologo_id=$ornitologos->id;
        $avistamientos->fecha=$request->fecha;
        $avistamientos->ubicacion=$request->ubicacion;
        $avistamientos->save();

        /*
        $ave_id=$aves->id;
        $ornitologo_id=$ornitologos->id;
        $avistamientos=Avistamiento::create([
            'ave_id' => $request->id_aves,
            'ornitologo_id' => $request->id_ornitologos,
            'fecha' => $request->fecha,
            'ubicacion' => $request->ubicacion,
        ]);

       
        dd($avistamientos);
        
        $avistamientos->save();
       



        $aves=Ave::find($request->ave_id);
        $ornitologos=Ornitologo::find($request->ornitologo_id);
        

        $avistamientos = new Avistamiento();
        $avistamientos->ave = $request->ave_id;
        $avistamientos->ornitologo = $request->ornitologo_id;
        $avistamientos->fecha = $request->fecha;
        $avistamientos->ubicacion = $request->ubicacion;
      

        $avistamientos->save();

        $ave = Ave::find($request->ave_id);
        $ave->avistamientos()->save($avistamientos);
        dd($avistamientos);

        */
        dd($avistamientos);
        return redirect()->route('avistamientos.index');

        


        
    }
}
