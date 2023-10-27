<?php
namespace TiendaNube;

/**
 * Wrapper for rmccue/requests using dynamic methods for better testability.
 */
class Requests {
    
    public function request($url, $headers = [], $data = [], $type = \WpOrg\Requests\Requests::GET, $options = []){
        return \WpOrg\Requests\Requests::request($url, $headers, $data, $type, $options);
    }

    public function post($url, $headers = [], $data = [], $options = []) {
        return \WpOrg\Requests\Requests::post($url, $headers, $data, $options);
    }

}
