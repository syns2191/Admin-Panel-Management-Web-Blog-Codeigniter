<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Upload extends CI_Controller {
		private $datauser;
		function __construct() {
			parent::__construct();
			$this->load->helper(array('url','file'));
		}
		
		
		function gambar_upload() {
			$targetFolder = '/login/assets/uploads/';
			if (!empty($_FILES)) {
				$tempFile = $_FILES['file']['tmp_name'];
				$fileName = $_FILES['file']['name'];
				$fileType = $_FILES['file']['type'];
				$fileSize = $_FILES['file']['size'];
				$targetPath =  $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
				$targetFile = $targetPath . $fileName ;

				move_uploaded_file($tempFile, $targetFile);
				$url = base_url('assets/uploads').'/'.$fileName;
				$this->db->insert('img_dropzone',array('nama' => $fileName, 'tipe' => $fileType, 'ukuran' => $fileSize,'url'=>$url));
				echo json_encode(array('url'=>$url));
			}
		}
	}
?>