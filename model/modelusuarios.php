<?php
class Modelo{

  private $usuarios;
  private $db;

  
  

  public function __construct(){
      $this->usuarios=array();
      $this->db=new PDO('mysql:host=containers-us-west-49.railway.app;port=6089;dbname=railway',"root","IBAOn08BrJ34rSAG0Ybu");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM usuarios";



      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->usuarios[]=$tabla;
      }
      return $this->usuarios;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO usuarios (nombre,usuario,email)VALUES(?,?,?)";

      $this->db->prepare($query)->execute(array($data->nombre,$data->usuario,$data->email));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
  
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
