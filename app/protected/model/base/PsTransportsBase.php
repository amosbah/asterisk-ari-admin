<?php
Doo::loadCore('db/DooModel');

class PsTransportsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $async_operations;

    /**
     * @var varchar Max length is 40.
     */
    public $bind;

    /**
     * @var varchar Max length is 200.
     */
    public $ca_list_file;

    /**
     * @var varchar Max length is 200.
     */
    public $cert_file;

    /**
     * @var varchar Max length is 200.
     */
    public $cipher;

    /**
     * @var varchar Max length is 40.
     */
    public $domain;

    /**
     * @var varchar Max length is 40.
     */
    public $external_media_address;

    /**
     * @var varchar Max length is 40.
     */
    public $external_signaling_address;

    /**
     * @var int Max length is 11.
     */
    public $external_signaling_port;

    /**
     * @var enum 'default','unspecified','tlsv1','sslv2','sslv3','sslv23').
     */
    public $method;

    /**
     * @var varchar Max length is 40.
     */
    public $local_net;

    /**
     * @var varchar Max length is 40.
     */
    public $password;

    /**
     * @var varchar Max length is 200.
     */
    public $priv_key_file;

    /**
     * @var enum 'udp','tcp','tls','ws','wss').
     */
    public $protocol;

    /**
     * @var enum 'yes','no').
     */
    public $require_client_cert;

    /**
     * @var enum 'yes','no').
     */
    public $verify_client;

    /**
     * @var enum 'yes','no').
     */
    public $verify_server;

    /**
     * @var varchar Max length is 10.
     */
    public $tos;

    /**
     * @var int Max length is 11.
     */
    public $cos;

    /**
     * @var enum 'yes','no').
     */
    public $allow_reload;

    /**
     * @var enum 'yes','no').
     */
    public $symmetric_transport;

    public $_table = 'ps_transports';
    public $_primarykey = 'id';
    public $_fields = array('id','async_operations','bind','ca_list_file','cert_file','cipher','domain','external_media_address','external_signaling_address','external_signaling_port','method','local_net','password','priv_key_file','protocol','require_client_cert','verify_client','verify_server','tos','cos','allow_reload','symmetric_transport');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'async_operations' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'bind' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'ca_list_file' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'cert_file' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'cipher' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'domain' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'external_media_address' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'external_signaling_address' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'external_signaling_port' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'method' => array(
                        array( 'optional' ),
                ),

                'local_net' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'password' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'priv_key_file' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'protocol' => array(
                        array( 'optional' ),
                ),

                'require_client_cert' => array(
                        array( 'optional' ),
                ),

                'verify_client' => array(
                        array( 'optional' ),
                ),

                'verify_server' => array(
                        array( 'optional' ),
                ),

                'tos' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'cos' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'allow_reload' => array(
                        array( 'optional' ),
                ),

                'symmetric_transport' => array(
                        array( 'optional' ),
                )
            );
    }

}