<?php
class Codetable extends CI_Controller
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();

	/*load database libray manually*/
	$this->load->database();

	/*load Model*/
	$this->load->model('Mytablemodel');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('inserttodatabase');

		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['first_name']=$this->input->post('first_name');
			$data['last_name']=$this->input->post('last_name');
			$data['email']=$this->input->post('email');
			$response=$this->Crud_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}

}
?>
