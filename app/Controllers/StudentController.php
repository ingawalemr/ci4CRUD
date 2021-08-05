<?php

namespace App\Controllers;
use App\Models\StudentsModel;
use CodeIgniter\Controller;

class StudentController extends BaseController
{
	public function index()
	{
		$model = new StudentsModel;
		$data = [];
		$data['students'] = $model->findAll();
		return view('list', $data);
	}

	public function create()
	{
		$session = \Config\Services::session();
		helper('form');
		$data = [];
		if ($this->request->getMethod() == 'post') {
			$input = $this->validate([
				# code validation 
				'name' => 'trim|required',
				'dob' => 'trim|required',
				'doj' => 'trim|required',
				'email' => 'trim|required|valid_email',
				'mobile' => 'trim|required|numeric|max_length[10]|min_length[10]',
			]);

			if ($input == 'true') {
				# code validation success.Save to DB
				$model = new StudentsModel;
				$model->save([
						'name' => $this->request->getPost('name'),
						'dob' => $this->request->getPost('dob'),
						'doj' => $this->request->getPost('doj'),
						'email' => $this->request->getPost('email'),
						'mobile' => $this->request->getPost('mobile'),
						'address' => $this->request->getPost('address'),
						]);

				$session->setFlashdata('success', 'Record is added successfully');
				return redirect()->to('/StudentController/index');

			} else {
				# validation code error...
				$data['validation'] = $this->validator;
			}
		}
		 return view('create', $data);
	}

	public function edit($id)
	{
		$session = \Config\Services::session();
		helper('form');
		$data = [];

		$model = new StudentsModel;
		$data['student'] = $model->where('id', $id)->first();		//print_r($student);
		// if (empty($student)) {
		// 	$session->setFlashdata('fail', 'Record not found');
		// 	return redirect()->to('/StudentController/index');
		// }

		if ($this->request->getMethod() == 'post') {
			$input = $this->validate([
				# code validation 
				'name' => 'trim|required',
				'dob' => 'trim|required',
				'doj' => 'trim|required',
				'email' => 'trim|required|valid_email',
				'mobile' => 'trim|required|numeric|max_length[10]|min_length[10]',
			]);

			if ($input == 'true') {
				# code validation success.Save to DB
				$model = new StudentsModel;
				$model->update($id, [
						'name' => $this->request->getPost('name'),
						'dob' => $this->request->getPost('dob'),
						'doj' => $this->request->getPost('doj'),
						'email' => $this->request->getPost('email'),
						'email' => $this->request->getPost('email'),
						'mobile' => $this->request->getPost('mobile'),
						'address' => $this->request->getPost('address'),
						]);

				$session->setFlashdata('success', 'Record Updated successfully');
				return redirect()->to('/StudentController/index');

			} else {
				# validation code error...
				$data['validation'] = $this->validator;
			}
		}
		 return view('edit', $data);			
	}

	public function delete($id)
	{
		$session = \Config\Services::session();

		$model = new StudentsModel(); // select * from table where id=$id;
		$student = $model->where('id', $id)->first();		//print_r($book);
		if (empty($student)) {
			$session->setFlashdata('fail', 'Record not found');
			return redirect()->to('/StudentController/index');
		}

		$model = new StudentsModel;
		$model->delete($id);
		$session->setFlashdata('delete', 'Record is deleted successfully');
		return redirect()->to('/StudentController/index');
	}

	// public function htmlToPDF()
	// {
 //         $data=array();
 //        $model = new StudentsModel;
	// 	$data['students'] = $model->where('id', $id)->first();
	// 	$dompdf = new \Dompdf\Dompdf();
 //        $dompdf->loadHtml(view('pdffile', $data));
 //        $dompdf->setPaper('A4', 'landscape');
 //        $dompdf->render();
 //        $dompdf->stream();
       
 //    }   
}
