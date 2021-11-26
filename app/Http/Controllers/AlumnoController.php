<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareBoolReturnTypeException;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function mostrar(){
        $users = DB::select('select * from tbl_alumno');
        return view('mostrarvista',compact('users'));
        //return $users;
    }

    public function borrar($id){
        DB::table("tbl_alumno")-> where ('id','=',$id)->delete();
        return redirect('alumno/mostrar');
        //return $users;
    }

    public function modificar($id){
        //metodo 1 de reocger el user a modificar
        $user = DB::table("tbl_alumno")-> where ('id','=',$id)->first();
        //metodo 2 de reocger el user a modificar
        $user1 = DB::select('select * from tbl_alumno where id='.$id);
        return view('form_actualizar',compact('user'));
        //return $users;
    }
    public function actualizar(Request $request){
        $datos_form = $request -> except('_token','_method');
        $id = $datos_form['id'];
        $datos_form = $request -> except('_token','_method','id');
        DB::table("tbl_alumno")->where('id','=',$id)->update($datos_form);
        return redirect('alumno/mostrar');
    }

    public function crear(){
        return view('form_crear');
        //return $users;
    }
    public function generar(Request $request){
        $datos_form = $request -> except('_token','_method');
        DB::table("tbl_alumno")->insert($datos_form);
        //También lo podemos hacer mediante una array asociativo
        //DB::table("tbl_alumno")->insertGetId(['nombre_alu'=>$datos_frm['nombre_alu'],'apellido_alu'=>$datos_frm['apellido_alu'],'edad_alu'=>$datos_frm['edad_alu']]);
        return redirect('alumno/mostrar');
    }
    public function login(){
        return view('login');
    }
    public function login_post(Request $request){
        $datos_form = $request -> except('_token','_method');
        $email=$datos_form['correo'];
        $pass=$datos_form['password'];
        $users = DB::table('tbl_admin')->where('correo','=',$email)->where('password','=',$pass)->count();
        if ($users == 1) {
            //Generar session
            $request->session()->put('nombre',$request->correo);
            return redirect('alumno/mostrar');
        }else{
            return redirect('alumno/');
        }
        
    }

    public function logout(Request $request){
        $request -> session()->forget('nombre');
        //Con este metodo eliminamos todo de 0
        $request -> session()->flush();
        return redirect('alumno/');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
