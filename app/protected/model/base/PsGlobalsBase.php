<?php
Doo::loadCore('db/DooModel');

class PsGlobalsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $max_forwards;

    /**
     * @var varchar Max length is 255.
     */
    public $user_agent;

    /**
     * @var varchar Max length is 40.
     */
    public $default_outbound_endpoint;

    /**
     * @var varchar Max length is 40.
     */
    public $debug;

    /**
     * @var varchar Max length is 40.
     */
    public $endpoint_identifier_order;

    /**
     * @var int Max length is 11.
     */
    public $max_initial_qualify_time;

    /**
     * @var varchar Max length is 80.
     */
    public $default_from_user;

    /**
     * @var int Max length is 11.
     */
    public $keep_alive_interval;

    /**
     * @var varchar Max length is 80.
     */
    public $regcontext;

    /**
     * @var int Max length is 11.
     */
    public $contact_expiration_check_interval;

    /**
     * @var varchar Max length is 40.
     */
    public $default_voicemail_extension;

    /**
     * @var enum 'yes','no').
     */
    public $disable_multi_domain;

    /**
     * @var int Max length is 11.
     */
    public $unidentified_request_count;

    /**
     * @var int Max length is 11.
     */
    public $unidentified_request_period;

    /**
     * @var int Max length is 11.
     */
    public $unidentified_request_prune_interval;

    /**
     * @var varchar Max length is 40.
     */
    public $default_realm;

    /**
     * @var int Max length is 11.
     */
    public $mwi_tps_queue_high;

    /**
     * @var int Max length is 11.
     */
    public $mwi_tps_queue_low;

    /**
     * @var enum 'yes','no').
     */
    public $mwi_disable_initial_unsolicited;

    /**
     * @var enum 'yes','no').
     */
    public $ignore_uri_user_options;

    public $_table = 'ps_globals';
    public $_primarykey = 'id';
    public $_fields = array('id','max_forwards','user_agent','default_outbound_endpoint','debug','endpoint_identifier_order','max_initial_qualify_time','default_from_user','keep_alive_interval','regcontext','contact_expiration_check_interval','default_voicemail_extension','disable_multi_domain','unidentified_request_count','unidentified_request_period','unidentified_request_prune_interval','default_realm','mwi_tps_queue_high','mwi_tps_queue_low','mwi_disable_initial_unsolicited','ignore_uri_user_options');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'max_forwards' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'user_agent' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'default_outbound_endpoint' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'debug' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'endpoint_identifier_order' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'max_initial_qualify_time' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'default_from_user' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'keep_alive_interval' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'regcontext' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'contact_expiration_check_interval' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'default_voicemail_extension' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'disable_multi_domain' => array(
                        array( 'optional' ),
                ),

                'unidentified_request_count' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'unidentified_request_period' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'unidentified_request_prune_interval' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'default_realm' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'mwi_tps_queue_high' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'mwi_tps_queue_low' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'mwi_disable_initial_unsolicited' => array(
                        array( 'optional' ),
                ),

                'ignore_uri_user_options' => array(
                        array( 'optional' ),
                )
            );
    }

}