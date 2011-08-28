<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Controller Class
 *
 * Load the Doctrine entity manager.
 *
 * @author  Joseph Wynn
 */
class MY_Controller extends CI_Controller {
    
    /**
     * Doctrine entity manager
     *
     * @var EntityManager
     */
    protected $em;

    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('doctrine');
        $this->em = $this->doctrine->em;
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
