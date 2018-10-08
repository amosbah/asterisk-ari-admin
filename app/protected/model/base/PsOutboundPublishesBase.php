<?php
Doo::loadCore('db/DooModel');

class PsOutboundPublishesBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $expiration;

    /**
     * @var varchar Max length is 40.
     */
    public $outbound_auth;

    /**
     * @var varchar Max length is 256.
     */
    public $outbound_proxy;

    /**
     * @var varchar Max length is 256.
     */
    public $server_uri;

    /**
     * @var varchar Max length is 256.
     */
    public $from_uri;

    /**
     * @var varchar Max length is 256.
     */
    public $to_uri;

    /**
     * @var varchar Max length is 40.
     */
    public $event;

    /**
     * @var int Max length is 11.
     */
    public $max_auth_attempts;

    /**
     * @var varchar Max length is 40.
     */
    public $transport;

    /**
     * @var enum 'yes','no').
     */
    public $multi_user;

    /**
     * @var varchar Max length is 40.
     */
    public $@body;

    /**
     * @var varchar Max length is 256.
     */
    public $@context;

    /**
     * @var varchar Max length is 256.
     */
    public $@exten;

    public $_table = 'ps_outbound_publishes';
    public $_primarykey = 'id';
    public $_fields = array('id','expiration','outbound_auth','outbound_proxy','server_uri','from_uri','to_uri','event','max_auth_attempts','transport','multi_user','@body','@context','@exten');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'expiration' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'outbound_auth' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'outbound_proxy' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                ),

                'server_uri' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                ),

                'from_uri' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                ),

                'to_uri' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                ),

                'event' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'max_auth_attempts' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'transport' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'multi_user' => array(
                        array( 'optional' ),
                ),

                '@body' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                '@context' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                ),

                '@exten' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                )
            );
    }

}