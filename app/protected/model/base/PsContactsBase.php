<?php
Doo::loadCore('db/DooModel');

class PsContactsBase extends DooModel{

    /**
     * @var varchar Max length is 255.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $uri;

    /**
     * @var bigint Max length is 20.
     */
    public $expiration_time;

    /**
     * @var int Max length is 11.
     */
    public $qualify_frequency;

    /**
     * @var varchar Max length is 40.
     */
    public $outbound_proxy;

    /**
     * @var text
     */
    public $path;

    /**
     * @var varchar Max length is 255.
     */
    public $user_agent;

    /**
     * @var float
     */
    public $qualify_timeout;

    /**
     * @var varchar Max length is 20.
     */
    public $reg_server;

    /**
     * @var enum 'yes','no').
     */
    public $authenticate_qualify;

    /**
     * @var varchar Max length is 40.
     */
    public $via_addr;

    /**
     * @var int Max length is 11.
     */
    public $via_port;

    /**
     * @var varchar Max length is 255.
     */
    public $call_id;

    /**
     * @var varchar Max length is 40.
     */
    public $endpoint;

    public $_table = 'ps_contacts';
    public $_primarykey = '';
    public $_fields = array('id','uri','expiration_time','qualify_frequency','outbound_proxy','path','user_agent','qualify_timeout','reg_server','authenticate_qualify','via_addr','via_port','call_id','endpoint');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'uri' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'expiration_time' => array(
                        array( 'integer' ),
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'qualify_frequency' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'outbound_proxy' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'path' => array(
                        array( 'optional' ),
                ),

                'user_agent' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'qualify_timeout' => array(
                        array( 'float' ),
                        array( 'optional' ),
                ),

                'reg_server' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'authenticate_qualify' => array(
                        array( 'optional' ),
                ),

                'via_addr' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'via_port' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'call_id' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'endpoint' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                )
            );
    }

}