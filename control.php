<?php

//foreach ($_REQUEST as $var => $val){$$var = mysql_escape_string($val);}
                    
    $usuario    = $_REQUEST['user'];     
    $password   = $_REQUEST['password'];

    if($usuario == 'admin' && $password == '123456'){

        $data['validacion'] =   'admin';
    
    }elseif($usuario == 'bibliotecario' && $password == '123456'){

        $data['validacion'] =   'bibliotecario';

    }elseif($usuario == 'socio' && $password == '123456'){

        $data['validacion'] =   'socio';

    }elseif($usuario == 'usuario' && $password == '123456'){

        $data['validacion'] =   'usuario';

    }else{

        $data['validacion'] = 'error';

    }
      
        echo json_encode($data);
      ###################

?>