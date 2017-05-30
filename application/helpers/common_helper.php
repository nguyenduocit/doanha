<?php
    function public_url($url ='')
    {
        return base_url('public/'.$url);
    }


    function pre($data, $exit = true)
    {
        echo"<pre>";
        print_r($data);

        if($exit)
        {
            die;
        }
    }

    

    function safe_title($str = '')
    {
        $str = html_entity_decode($str, ENT_QUOTES, "UTF-8");
        $filter_in = array('#(a|à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#', '#(A|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#', '#(e|è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#', '#(E|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#', '#(i|ì|í|ị|ỉ)#', '#(I|ĩ|Ì|Í|Ị|Ỉ|Ĩ)#', '#(o|ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#', '#(O|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#', '#(u|ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#', '#(U|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#', '#(y|ỳ|ý|ỵ|ỷ|ỹ)#', '#(Y|Ỳ|Ý|Ỵ|Ỷ|Ỹ)#', '#(d|đ)#', '#(D|Đ)#');
        $filter_out = array('a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y', 'd', 'D');
        $text = preg_replace($filter_in, $filter_out, $str);
        $text = preg_replace('/[^a-zA-Z0-9]/', ' ', $text);
        $text = trim(preg_replace('/ /', '-', trim(strtolower($text))));
        $text = preg_replace('/--/', '-', $text);
        $text = preg_replace('/--/', '-', $text);
        return preg_replace('/--/', '-', $text);
    }


    function the_excerpt($text)
    {
        $sanitized = htmlentities($text,ENT_COMPAT,'UTF-8');
        if(strlen($sanitized)> 300)
        {
            $cutstring = substr($sanitized,0,300);
            $word = substr($sanitized,0,strrpos($cutstring,' '));
            return $word ;
        }
        else
        {
            return $text;
        }

    }

    if( ! function_exists('_debug') ) 
    {
        function _debug($data , $flag = true) {

            echo '<pre style="background: #000; color: #fff; width: 100%; overflow: auto">';
            echo '<div>Your IP: ' . $_SERVER['REMOTE_ADDR'] . '</div>';

            $debug_backtrace = debug_backtrace();
            $debug = array_shift($debug_backtrace);

            echo '<div>File: ' . $debug['file'] . '</div>';
            echo '<div>Line: ' . $debug['line'] . '</div>';

            if(is_array($data) || is_object($data)) {
                print_r($data);
            }
            else {
                var_dump($data);
            }
            echo '</pre>';

            if ($flag = false)
            {
                die();
            }
        }
    }


?>