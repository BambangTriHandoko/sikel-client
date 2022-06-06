<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\GeoModel;
 
class Integrategeo extends ResourceController
{
    use ResponseTrait;
    // get all product
    public function index()
    {
        $model = new GeoModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single product
    public function show($id = null)
    {
        $model = new GeoModel();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Maaf API wilayah tidak ditemukan di Kota Tasikmalaya... ');
        }
    }
    //............................................
    }