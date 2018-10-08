<?php
Doo::loadCore('db/DooModel');

class PsSubscriptionPersistenceBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 2048.
     */
    public $packet;

    /**
     * @var varchar Max length is 128.
     */
    public $src_name;

    /**
     * @var int Max length is 11.
     */
    public $src_port;

    /**
     * @var varchar Max length is 64.
     */
    public $transport_key;

    /**
     * @var varchar Max length is 128.
     */
    public $local_name;

    /**
     * @var int Max length is 11.
     */
    public $local_port;

    /**
     * @var int Max length is 11.
     */
    public $cseq;

    /**
     * @var varchar Max length is 128.
     */
    public $tag;

    /**
     * @var varchar Max length is 40.
     */
    public $endpoint;

    /**
     * @var int Max length is 11.
     */
    public $expires;

    /**
     * @var varchar Max length is 256.
     */
    public $contact_uri;

    public $_table = 'ps_subscription_persistence';
    public $_primarykey = 'id';
    public $_fields = array('id','packet','src_name','src_port','transport_key','local_name','local_port','cseq','tag','endpoint','expires','contact_uri');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'packet' => array(
                        array( 'maxlength', 2048 ),
                        array( 'optional' ),
                ),

                'src_name' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'src_port' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'transport_key' => array(
                        array( 'maxlength', 64 ),
                        array( 'optional' ),
                ),

                'local_name' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'local_port' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'cseq' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'tag' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'endpoint' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'expires' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'contact_uri' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                )
            );
    }

}