<?php namespace App\Controllers;

use App\Models\ModeloAnimal;

class RegistroControlador extends BaseController
{
	public function index()
	{
		return view('vistaRegistro');
	}

    //--------------------------------------------------------------------
    

    public function registrar(){

        $nombre=$this->request->getPost("nombre");
        $edad=$this->request->getPost("edad");
        $tipoanimal=$this->request->getPost("tipoanimal");
        $descripcion=$this->request->getPost("descripcion");
        $foto=$this->request->getPost("foto");
        $comida=$this->request->getPost("comida");


        $datosEnvio=array(

			"nombre" => $nombre,
			"edad" => $edad,
      "tipoanimal" => $tipoanimal,
      "descripcion" => $descripcion,
      "foto" => $foto,
      "comida" => $comida

        );
        
        $modeloanimal = new ModeloAnimal();


        try{
            $modeloanimal->insert($datosEnvio);

            $mensaje = "Animal registrado con éxito";

            return redirect()->to(base_url("public/mascotas"))->with('mensaje',$mensaje);
   
           }catch(\Exception $e){
   
           echo($e->getMessage());
           
           }
      
    }

    public function consultar(){

		
		$modeloanimal= new ModeloAnimal();

		

		try{
			 

			$animalesConsultados=$modeloanimal->findAll();

	

			$datosParaVista = array("animales"=>$animalesConsultados);


			return view('vistaListado',$datosParaVista);

		}catch(\Exception $e){
	     echo($e->getMessage());
		}


    }
    
    public function eliminar($ideliminar){
  

      $modeloanimal = new ModeloAnimal();

      try{
      $modeloanimal->where('id',$ideliminar)->delete();
      $mensaje = "Animal eliminado con éxito";
      return redirect()->to(base_url("public/mascotas/listar"))->with('mensaje',$mensaje);
      }catch(\Exception $e){
        echo($e->getMessage());
      }
    }

    public function editar($ideditar){

        $nombre=$this->request->getPost("nomedit");

        $edad=$this->request->getPost("edadedit");
      
        $descripcion=$this->request->getPost("desedit");

        $urlimagen=$this->request->getPost("urlimagenedit");

        $tipoanimal = $this->request->getPost("tipoanimaledit");

        $comida = $this->request->getPost("comidaedit");
        

        $datosEvio = array(
            "nombre"=>$nombre,
            "descripcion"=>$descripcion,
            "edad" => $edad,
            "tipoanimal" => $tipoanimal,
            "foto" => $urlimagen,
            "comida" => $comida
        );

        $modeloanimal = new ModeloAnimal();
      
        try{
            $modeloanimal->update($ideditar,$datosEvio);

            $mensaje = "Animal editado con éxito";
            return redirect()->to(base_url("public/mascotas/listar"))->with('mensaje',$mensaje);
   
           }catch(\Exception $e){
   
           echo($e->getMessage());
           
           }
    }

}
