<?php
Doo::loadCore('db/DooModel');

class PsAorsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $contact;

    /**
     * @var int Max length is 11.
     */
    public $default_expiration;

    /**
     * @var varchar Max length is 80.
     */
    public $mailboxes;

    /**
     * @var int Max length is 11.
     */
    public $max_contacts;

    /**
     * @var int Max length is 11.
     */
    public $minimum_expiration;

    /**
     * @var enum 'yes','no').
     */
    public $remove_existing;

    /**
     * @var int Max length is 11.
     */
    public $qualify_frequency;

    /**
     * @var enum 'yes','no').
     */
    public $authenticate_qualify;

    /**
     * @var int Max length is 11.
     */
    public $maximum_expiration;

    /**
     * @var varchar Max length is 40.
     */
    public $outbound_proxy;

    /**
     * @var enum 'yes','no').
     */
    public $support_path;

    /**
     * @var float
     */
    public $qualify_timeout;

    /**
     * @var varchar Max length is 40.
     */
    public $voicemail_extension;

    public $_table = 'ps_aors';
    public $_primarykey = 'id';
    public $_fields = array('id','contact','default_expiration','mailboxes','max_contacts','minimum_expiration','remove_existing','qualify_frequency','authenticate_qualify','maximum_expiration','outbound_proxy','support_path','qualify_timeout','voicemail_extension');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'contact' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'default_expiration' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'mailboxes' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'max_contacts' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'minimum_expiration' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'remove_existing' => array(
                        array( 'optional' ),
                ),

                'qualify_frequency' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'authenticate_qualify' => array(
                        array( 'optional' ),
                ),

                'maximum_expiration' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'outbound_proxy' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'support_path' => array(
                        array( 'optional' ),
                ),

                'qualify_timeout' => array(
                        array( 'float' ),
                        array( 'optional' ),
                ),

                'voicemail_extension' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                )
            );
    }

}