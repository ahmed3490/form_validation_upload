<?php



if (!function_exists('sanitizeItem')) {
    /**
    * Sanatizes and given variabale   */
    /* added */
    function sanitizeItem($var, $type) {
        $flags = NULL;

        switch($type) {

            case 'url':
                $filter = FILTER_SANITIZE_URL;
            break;

            case 'int':
                $filter = FILTER_SANITIZE_NUMBER_INT;
            break;

            case 'float':
                $filter = FILTER_SANITIZE_NUMBER_FLOAT;
                $flags = FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND;
            break;

            case 'email':
                $var = substr($var, 0, 254);
                $filter = FILTER_SANITIZE_EMAIL;
            break;

            case 'string':

            default:
                $filter = FILTER_SANITIZE_STRING;
                $flags = FILTER_FLAG_NO_ENCODE_QUOTES;
            break;
        }

        $output = filter_var($var, $filter, $flags);        
        return($output);

    }
}


if (!function_exists('validateItem')) {
    function validateItem($var, $type) {

        switch($type) {

            case 'email':
                $var = substr($var, 0, 254);
                $filter = FILTER_VALIDATE_EMAIL;    
            break;

            case 'int':
                $filter = FILTER_VALIDATE_INT;
            break;

            case 'boolean':
                $filter = FILTER_VALIDATE_BOOLEAN;
            break;

            case 'ip':
                $filter = FILTER_VALIDATE_IP;
            break;

            case 'url':
                $filter = FILTER_VALIDATE_URL;
            break;

        }

        return filter_var($var, $filter);
        }

}




?>