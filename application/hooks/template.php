class Template
{
    function header(){
        $local_CI =& get_instance();
        if (!isset($local_CI->session))
        {
            $local_CI->load->library('session');
        }
        $data = array();
        if( $local_CI->session->userdata('logged_in'))
        {
            $data['logged_in'] = true;
        }
        else
        {
            $data['logged_in'] = false;
        }
        $local_CI->load->view('header', $data);
    }
    
    function footer(){
        $local_CI =& get_instance();
        if (!isset($local_CI->session))
        {
            $local_CI->load->library('session');
        }
        $data = array();
        if( $local_CI->session->userdata('logged_in'))
        {
            $data['logged_in'] = true;
        }
        else
        {
            $data['logged_in'] = false;
        }
        $local_CI->load->view('footer', $data);
    }
    
}