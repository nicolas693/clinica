<?php

namespace clinica\Http\Controllers\Odontograma;

use Illuminate\Http\Request;

use clinica\Http\Requests;
use clinica\Http\Controllers\Controller;
use clinica\Models\Paciente\Paciente;
use clinica\Models\Odontograma\Problema;
use clinica\Models\Odontograma\Odontograma;

use Illuminate\Support\Facades\Schema;

class OdontogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $paciente=Paciente::where('rut','=',$id)->first();
        $odonto=Odontograma::where('Odontograma_id','=',$paciente->Odontograma_id)->first();
        $ido=$odonto->Odontograma_id;
        $indS=$ido*32;
        $indI=$ido*32 -31 ;

        $pr=Problema::where('Problema_id','<=',$indS)->where('Problema_id','>=',$indI)->get();
        $odonto=$odonto['attributes'];


        return view('Odontograma.index')->with('id',$id)->with('paciente',$paciente)->with('odonto',$odonto)->with('pr',$pr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $aa=Odontograma::max('Odontograma_id', 'desc')+1;
      $rut=$request->Odontograma_id;


      $array=array("Problema_id"=>"1");
      for($i=0;$i<32;$i++){
        Problema::create($array);
      }

      $a=Problema::orderBy('Problema_id', 'desc')->first();
      $pa=Paciente::where('rut',$rut)->firstOrFail();
      $request->Odontograma_id=$aa;


      $indice=$a->Problema_id-32;


      $request['pieza18']=1+$indice;
      $request['pieza17']=2+$indice;
      $request['pieza16']=3+$indice;
      $request['pieza15']=4+$indice;
      $request['pieza14']=5+$indice;
      $request['pieza13']=6+$indice;
      $request['pieza12']=7+$indice;
      $request['pieza11']=8+$indice;

      $request['pieza21']=9+$indice;
      $request['pieza22']=10+$indice;
      $request['pieza23']=11+$indice;
      $request['pieza24']=12+$indice;
      $request['pieza25']=13+$indice;
      $request['pieza26']=14+$indice;
      $request['pieza27']=15+$indice;
      $request['pieza28']=16+$indice;

      $request['pieza48']=17+$indice;
      $request['pieza47']=18+$indice;
      $request['pieza46']=19+$indice;
      $request['pieza45']=20+$indice;
      $request['pieza44']=21+$indice;
      $request['pieza43']=22+$indice;
      $request['pieza42']=23+$indice;
      $request['pieza41']=24+$indice;

      $request['pieza31']=25+$indice;
      $request['pieza32']=26+$indice;
      $request['pieza33']=27+$indice;
      $request['pieza34']=28+$indice;
      $request['pieza35']=29+$indice;
      $request['pieza36']=30+$indice;
      $request['pieza37']=31+$indice;
      $request['pieza38']=32+$indice;
      Odontograma::create($request->all());
      $pa->Odontograma_id=$aa;
      $pa->save();
      return redirect('/Ficha/'.$rut);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id2)
    {
        $paciente=Paciente::where('rut','=',$id)->first();
        $probN = Schema::getColumnListing('Problema');
        $prob=Problema::where('Problema_id','=',$id2)->first();
        $odonto=Odontograma::where('Odontograma_id','=',$paciente->Odontograma_id)->first();
        $odonto=$odonto['attributes'];


        foreach($odonto as $key => $odo){
          if($odonto[$key]==$id2){
            $num=$key;
          }
        }
        $num=substr($num,5);




        return view('Odontograma.show', array('id'=>$id, 'id2'=>$id2, 'paciente'=>$paciente, 'probN'=>$probN,
      'prob'=>$prob, 'num'=>$num) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
