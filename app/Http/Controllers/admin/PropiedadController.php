<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\Pro_Adicional;
use App\Models\Pro_Incluye;
use DB;
class PropiedadController extends Controller
{
    public function activos(){
        $propiedades = Propiedad::where('estado','ACTIVO')->get();

        return view('admin.propiedades.activos')->with(compact('propiedades'));
    }
    public function completados(){
        $propiedades = Propiedad::where('estado','COMPLETADO')->get();

        return view('admin.propiedades.completados')->with(compact('propiedades'));
    }
    public function create()
    {
        return view('admin.propiedades.create');
    }

    public function store(Request $request){


        try{
            
            $propiedad = new Propiedad();
            $propiedad->nombre=$request->nombre;
            $propiedad->descripcion=$request->descripcion;
            $propiedad->descripcion_cliente=$request->descripcion_cliente;
            $propiedad->tipo_casa=$request->tipo_casa;
            $propiedad->tipo_operacion=$request->tipo_operacion;
            $propiedad->habitaciones=$request->cocheras;
            $propiedad->banios=$request->banios;
            $propiedad->banios_visita=$request->banios_visita;
            $propiedad->area_terreno=$request->area_terreno;
            $propiedad->area_construido=$request->area_construido;
            $propiedad->area_ocupado=$request->area_ocupado;
            $propiedad->n_piso=$request->n_piso;
            $propiedad->precio_alquiler_d=$request->precio_alquiler_d;
            $propiedad->precio_alquiler_s=$request->precio_alquiler_s;
            $propiedad->anio_construccion=$request->anio_construccion;
            $propiedad->pais=$request->pais;
            $propiedad->departamento=$request->departamento;
            $propiedad->provincia=$request->provincia;
            $propiedad->distrito=$request->distrito;
            $propiedad->direccion=$request->direccion;
            $propiedad->urbanizacion=$request->urbanizacion;
            $propiedad->referencia=$request->referencia;
            $propiedad->longitud=$request->longitud;
            $propiedad->latitud=$request->latitud;
            $propiedad->zonificacion=$request->zonificacion;
            $propiedad->frente=$request->frente;
            $propiedad->lat_derecho=$request->lat_derecho;
            $propiedad->lat_izquierdo=$request->lat_izquierdo;
            $propiedad->fondo=$request->fondo;
            $propiedad->save();
        
            //---------------------------------------------------------------//
            
            $pro_incluye = new Pro_Incluye();
            $pro_incluye->id_propiedad=$propiedad->id;
            $pro_incluye->comedor=$request->comedor;
            $pro_incluye->salon_juegos=$request->salon_juegos;
            $pro_incluye->area_parrillas=$request->area_parrillas;
            $pro_incluye->comedor_diario=$request->comedor_diario;
            $pro_incluye->lavanderia=$request->lavanderia;
            $pro_incluye->patio_trasero=$request->patio_trasero;
            $pro_incluye->cocina=$request->cocina;
            $pro_incluye->dor_servicio=$request->dor_servicio;
            $pro_incluye->alma_alimentos=$request->alma_alimentos;
            $pro_incluye->bar=$request->bar;
            $pro_incluye->sala_estar=$request->sala_estar;
            $pro_incluye->piscina=$request->piscina;
            $pro_incluye->alma_general=$request->alma_general;
            $pro_incluye->hall_ingreso=$request->hall_ingreso;
            $pro_incluye->salas=$request->salas;
            $pro_incluye->escritorio=$request->escritorio;
            $pro_incluye->cuarto_servicio=$request->cuarto_servicio;
            $pro_incluye->jardin_interior=$request->jardin_interior;
            $pro_incluye->patio=$request->patio;
            $pro_incluye->sotano=$request->sotano;
            $pro_incluye->closet=$request->closet;
            $pro_incluye->aire_acondicionado=$request->aire_acondicionado;
            $pro_incluye->terraza=$request->terraza;
            $pro_incluye->jardin=$request->jardin;
            $pro_incluye->chimenea=$request->chimenea;
            $pro_incluye->jacuzzi=$request->jacuzzi;
            $pro_incluye->sauna=$request->sauna;
            $pro_incluye->gimnasio=$request->gimnasio;
            $pro_incluye->guardiania=$request->guardiania;
            $pro_incluye->permi_mascotas=$request->permi_mascotas;
            $pro_incluye->no_mascotas=$request->no_mascotas;
            $pro_incluye->club_playa=$request->club_playa;
            $pro_incluye->club_house=$request->club_house;
            $pro_incluye->area_deportiva=$request->area_deportiva;
            $pro_incluye->ascensor=$request->ascensor;
            $pro_incluye->banio_visita=$request->banio_visita;
            $pro_incluye->save();
        
            //---------------------------------------------------------------//
            
            $pro_adicional = new Pro_Adicional();
            $pro_adicional->id_propiedad=$propiedad->id;
            $pro_adicional->agua=$request->agua;
            $pro_adicional->fibra=$request->fibra;
            $pro_adicional->desague=$request->desague;
            $pro_adicional->energia=$request->energia;
            $pro_adicional->gas=$request->gas;
            $pro_adicional->inscrito=$request->inscrito;
            $pro_adicional->listo=$request->listo;
            $pro_adicional->libre=$request->libre;
            $pro_adicional->oficina=$request->oficina;
            $pro_adicional->financiamiento=$request->financiamiento;
            $pro_adicional->loza=$request->loza;
            $pro_adicional->vias=$request->vias;
            $pro_adicional->empresas=$request->empresas;
            $pro_adicional->patio=$request->patio;
            $pro_adicional->portones=$request->portones;
            $pro_adicional->save();
            //---------------------------------------------------------------//
            
            
            DB::commit();
            return redirect()->route('activos.index')->with('mensaje','Propiedad registrada correctamente!');
        }
            catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE REGISTRÓ LA PROPIEDAD');
        }
    }

    public function edit($id){
        $propiedad = Propiedad::find($id);

        return view('admin.propiedades.edit')->with(compact('propiedad'));
    }

    public function update(Request $request, $id){

    }

    public function delete($id)
    {
        
    }
    public function destacar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->destacado = 'SI';
        $propiedad->save();
        return redirect()->route('activos.index')->with('mensaje','Propiedad destacada');
    }
    public function replegar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->destacado = 'NO';
        $propiedad->save();
        return redirect()->route('activos.index')->with('mensaje','Propiedad replegada');
    }
    public function completar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->estado = 'COMPLETADO';
        $propiedad->save();
        return redirect()->route('activos.index')->with('mensaje','Propiedad pasó a la lista de completados');
    }
    public function activar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->estado = 'ACTIVO';
        $propiedad->save();
        return redirect()->route('completados.index')->with('mensaje','Propiedad pasó a la lista de activos');
    }

}
