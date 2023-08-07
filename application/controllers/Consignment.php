<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consignment extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function track()
	{
		// $this->load->model('')
		$formdata = $this->input->post();
		switch ($formdata['shipper']) {
			case 'DHL':
				return redirect("https://www.dhl.com/in-en/home/tracking.html?tracking-id=" . $formdata['cons_id'] . "&submit=1");
				break;
			case 'UPS':
				return redirect('https://www.ups.com/track?requester=QUIC&tracknum=' . $formdata['cons_id']);
				break;
			case 'TNT':
				return redirect('https://www.tnt.com/express/en_in/site/shipping-tools/tracking.html?searchType=con&cons=' . $formdata['cons_id']);
				break;
			case 'DBS':
				return redirect("https://www.dbschenker.com/app/tracking-public/?refNumber=". $formdata['cons_id']."&language_region=en-US_US");
				break;

			default:
				return redirect('/');
				break;
		}
		// print_r($formdata);
	}
}
