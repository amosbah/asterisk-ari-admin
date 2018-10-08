<?php
Doo::loadCore('db/DooModel');

class PsRegistrationsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var enum 'yes','no').
     */
    public $auth_rejection_permanent;

    /**
     * @var varchar Max length is 255.
     */
    public $client_uri;

    /**
     * @var varchar Max length is 40.
     */
    public $contact_user;

    /**
     * @var int Max length is 11.
     */
    public $expiration;

    /**
     * @var int Max length is 11.
     */
    public $max_retries;

    /**
     * @var varchar Max length is 40.
     */
    public $outbound_auth;

    /**
     * @var varchar Max length is 40.
     */
    public $outbound_proxy;

    /**
     * @var int Max length is 11.
     */
    public $retry_interval;

    /**
     * @var int Max length is 11.
     */
    public $forbidden_retry_interval;

    /**
     * @var varchar Max length is 255.
     */
    public $server_uri;

    /**
     * @var varchar Max length is 40.
     */
    public $transport;

    /**
     * @var enum 'yes','no').
     */
    public $support_path;

    /**
     * @var int Max length is 11.
     */
    public $fatal_retry_interval;

    /**
     * @var enum 'yes','no').
     */
    public $line;

    /**
     * @var varchar Max length is 40.
     */
    public $endpoint;

    public $_table = 'ps_registrations';
    public $_primarykey = 'id';
    public $_fields = array('id','auth_rejection_permanent','client_uri','contact_user','expiration','max_retries','outbound_auth','outbound_proxy','retry_interval','forbidden_retry_interval','server_uri','transport','support_path','fatal_retry_interval','line','endpoint');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'auth_rejection_permanent' => array(
                        array( 'optional' ),
                ),

                'client_uri' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'contact_user' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'expiration' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'max_retries' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'outbound_auth' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'outbound_proxy' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'retry_interval' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'forbidden_retry_interval' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'server_uri' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'transport' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'support_path' => array(
                        array( 'optional' ),
                ),

                'fatal_retry_interval' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'line' => array(
                        array( 'optional' ),
                ),

                'endpoint' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                )
            );
    }

}