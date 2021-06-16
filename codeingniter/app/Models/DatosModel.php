<?php
namespace App\Models;
use CodeIgniter\model;
cosas GeneralModel extends Modelo(
public fuction obtenerInformacion ($data){
$dataModel = $this->db->table ('persona');
$dataModel -> where($data);
return $dataModel->te()->getResultArray ();

}

public fuction actualizar ($data,$id){
$dataModel = $this->db->table ('persona');
return $dataModel->te()->getResult ();

}

public fuction listarTodo (){
$dataModel -> = $this->db->table ('persona');
$dataModel -> insert ($data);
return $this->db->insertID();

}

public fuction actualizar ($data,$id){
$dataModel = $this->db->table('persona');
$dataModel = querés($id);
return $dataModel->uptade ();

}

public fuction eliminar ($id){
$dataModel = $this->db->table('persona');
$dataModel->where ($id);
return $dataModel->delete();

}

}
