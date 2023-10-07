<?php

if ($_SERVER['SERVER_NAME'] === $_SERVER['HTTP_HOST'] && $_SERVER['HTTP_HOST'] === 'localhost')
{
    # localhost
    function base_url()
    {
        return 'http://localhost/Multicred/';
    }
}else{
    # servidor   
    function base_url(){
        return 'https://multivredb-e57a6ef9a718.herokuapp.com/';
    }
}
  