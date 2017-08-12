<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('datacontrol');
	}
	public function sendmail()
	{
		$config = Array(
        'protocol'  => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => '465',
        'smtp_user' => 'ahadali96@gmail.com',
        'smtp_pass' => 'aadee1996',
        'mailtype'  => 'html',
        'starttls'  => true,
        'newline'   => "\r\n"
    );

$this->load->library('email', $config);
$this->email->from('ahadali96@gmail.com', 'Ahad Ali');
$this->email->to('ahadali96@gmail.com');
$this->email->subject('testing email');
$this->email->message('This shows the email worked');
$this->email->send();
echo $this->email->print_debugger();
	}
	public function index()
	{
		$this->load->view('imageform');
	}
	public function galleryshow()
	{
		$data['list'] = $this->datacontrol->getimages();
		 $this->load->view('gallery',$data);
		
	}
	public function create()
	{
		$this->datacontrol->createtable();
		echo "table altered";
	}
	
	function doupload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']	= '1000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		}
		else
		{
			$data = $this->upload->data();
			$file_name = $data['file_name'];

			$myarray = array('imagename' => $file_name);
			$this->db->insert('images',$myarray);
			echo "image uploaded successfully";
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */