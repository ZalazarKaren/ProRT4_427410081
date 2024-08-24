<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuarios_crud_controller extends Controller{

	public function index(){
		$userModel = new usuario_Model();
		 $data['users']=$userModel ->orderBy('id_usuario', 'DESC')->findAll(); 
		 $dato ['titulo']='Todos los usuarios';
        echo view('front/head_view',$dato);
        echo view('front/navbar');
         echo view('back/usuario/crud_usuarios',$data);
          echo view('front/footer');
	}

	// carga la vista de formulario "nuevo usuario"
	public function agregar(){
		$userModel =new usuario_Model();
		$data ['user_obj']=$userModel ->orderBy('id_usuario', 'DESC')->findAll();
		$dato['titulo']='Alta Usuario';
		echo view ('front/head_view', $dato);
		echo view('front/navbar');
		echo view ('back/usuario/agregarUsuario', $data);
		echo view('front/footer');

	}

// guarda los datos del nuevo usuario
	public function guardar(){
		$userModel= new usuario_Model();
		$input = $this->validate([
			'nombre' =>'required|min_length[3]',
			'apellido'=>'required|min_length[3]|max_length[25]',
			'email' =>'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
			'usuario'=>'required|min_length[3]',
			'pass'=> 'required|min_length[3]|max_length[10]',
		]);
		$userModel= new usuario_Model();
		if(!$input){
			$data['titulo']='Moficacion';
			echo view('front/head_view', $data);
			echo view('front/navbar');
			echo view('back/usuario/crud_usuarios',['validation'=>$this->validator]);
		}else{
			$data = [
				'nombre'=>$this->request->getVar('nombre'),
				'apellido'=> $this->request->getVar('apellido'),
				'usuario'=> $this->request->getVar('usuario'),
				'email'=>$this->request->getVar('email'),
				'pass'=>password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
			];
			$userModel->insert($data);
			return $this->response->redirect(base_url('crud_usuarios'));
		}
	}
		//editar o Actualizardatos de un usuario
		public function update(){
			$userModel =new usuario_Model();
			$id =$this->request->getVar('id_usuario');
			$data=[
				'nombre'=>$this->request->getVar('nombre'),
				'apellido'=> $this->request->getVar('apellido'),
				'usuario'=> $this->request->getVar('usuario'),
				'email'=>$this->request->getVar('email'),
				'pass'=>password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
				'perfil_id'=> $this->request->getVar('perfil_id'),
				'baja'=>$this->request->getVar('baja'),

			];
			$userModel->update($id,$data);
			return $this->response->redirect(base_url('crud_usuarios'));
		}


		public function delate($id = null){
			$userModel =new usuario_Model();
			$data ['usuario']=$userModel->where('id_usuario', $id)->delate($id);
			return $this->response->redirect(base_url('crud_usuarios'));
}

// borar logico de usuarios
					public function deletelogico($id = null){
						$userModel =new usuario_Model();
						$data ['baja']= $userModel ->where('id_usuario', $id)->first();
						$data['baja']='SI';
						$userModel->update($id, $data);
						return $this->response->redirect(base_url('crud_usuarios'));
	}

	public function singleUser($id=null){
		$userModel =new usuario_Model();
		$data ['old']=$userModel ->where('id_usuario', $id)->first();
		$dato['titulo']='crud_usuarios';

		echo view ('front/head_view', $dato);
		echo view('front/navbar');
		echo view ('back/usuario/modificaUsuario', $data);
		echo view('front/footer');

	}
	
}