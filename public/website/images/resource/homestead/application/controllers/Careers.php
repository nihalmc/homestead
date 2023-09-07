<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*$this->load->model('dbget');
		$data["srvs"] = $this->dbget->gethomepageservices();
		$data["galls"] = $this->dbget->gethomepagegallery();*/
		$this->load->view('header');
		$this->load->view('careers');

		$this->load->view('footer');
	}
	public function add()
	{
		  if(isset($_POST['g-recaptcha-response']))
  			{
                     $captcha=$_POST['g-recaptcha-response'];
  
  
                    if(!$captcha)
					{ echo"captcha not verified";

		           }
				   else

				   {

					   	echo $_POST["name"];
			echo $_POST["email"];
				echo $_POST["mobile"];




				$message = "
				<html>
				<head>
				<title>Career Form ". $_POST["name"]."</title>
				</head>
				<body>
				<h2> Email </h2>
				<p>".$_POST["email"]." </p>
				<p>Name: ".$_POST["name"]." </p>
			
				<p>Mobile: ".$_POST["mobile"]." </p>
				
				</body>
				</html>
				";

//use PHPMailer\PHPMailer\Exception;
$tmpName = $_FILES['upload']['tmp_name'];
$fileType = $_FILES['upload']['type'];
$fileName = $_FILES['upload']['name']; 

 $file = fopen($tmpName,'rb');
  $data = fread($file,filesize($tmpName));
  fclose($file);





      
        $boundary = md5(time());
		$data = chunk_split(base64_encode($data));

        $header = 'From: '.$_POST["name"].' <'.$_POST["email"].'>' . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed;boundary=\"" . $boundary . "\"\r\n";

        $output = "--".$boundary."\r\n";
        $output .= "Content-Type: {$fileType}; name=\"{$fileName}\";\r\n";
        $output .= "Content-Transfer-Encoding: base64\n\n";
        $output .= $data."\r\n\r\n";
        $output .= "--".$boundary."\r\n";
        $output .= "Content-type: text/html; charset=\"utf-8\"\r\n";
        $output .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $output .= $message."\r\n\r\n";
        $output .= "--".$boundary."--\r\n\r\n";
	
	
 
 
	
	

        $mailto="athil@arkive.in";
       
    
        $subject = "career from ". $_POST["name"];
		
		
      
	mail($mailto,$subject,$output,$header); 
	redirect("Careers/add");

				   }
			  }

	
	}
}
?>