
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;

class pdf extends Dompdf 
{
	public function _construct() 
	{
	   parent:: _construct();
	}

	public function ci()
	{
	   return get_instance();
	}
	
	public function load_view($view, $data = [], $filename = laporan.pdf)
	{
	   $html = $this ->ci()->load->view($view, $data);
	   $this->loadHtml($html);
	   $this-> render();
	   $this->stream($filename,['Attachment' => 0 ]); //jika 1 -> file akan di download
    }
    
    
}

?>