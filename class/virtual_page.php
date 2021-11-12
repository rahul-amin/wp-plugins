
$x_virtual_page = new rpf_virtual_page();

class rpf_virtual_page {

    function __construct() {
        $this->create_page();
    }


    function create_page()
    {
         add_action('template_redirect', function(){
            //get_header();
            global $wp;
            if($wp->request == 'zwimrlogin')
            {
                echo $this->Mybodytext();
            }elseif ($wp->request == 'zwimrloginapi'){
                status_header('200');
                header('Content-Type: application/json');
                header('Access-Control-Allow-Origin: *');
                echo 'this is a zwimr api';
            }else{
                return;
            }

            //get_footer();
            exit();
        });
        // add_filter('the_title', function(){ return "Virtual Page Title"; });
    }

    function Mybodytext()
    {
        return <<<dsflhdasfpdashfldsfhds
<!DOCTYPE html>
<html class="no-js">
<head>
<body class="home ">
<h1>this is a virtual page </h1>
</body>
</html>

dsflhdasfpdashfldsfhds;

    }

}
