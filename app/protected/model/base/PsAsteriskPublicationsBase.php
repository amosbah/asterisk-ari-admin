<?php
Doo::loadCore('db/DooModel');

class PsAsteriskPublicationsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $devicestate_publish;

    /**
     * @var varchar Max length is 40.
     */
    public $mailboxstate_publish;

    /**
     * @var enum 'yes','no').
     */
    public $device_state;

    /**
     * @var varchar Max length is 256.
     */
    public $device_state_filter;

    /**
     * @var enum 'yes','no').
     */
    public $mailbox_state;

    /**
     * @var varchar Max length is 256.
     */
    public $mailbox_state_filter;

    public $_table = 'ps_asterisk_publications';
    public $_primarykey = 'id';
    public $_fields = array('id','devicestate_publish','mailboxstate_publish','device_state','device_state_filter','mailbox_state','mailbox_state_filter');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'devicestate_publish' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'mailboxstate_publish' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'device_state' => array(
                        array( 'optional' ),
                ),

                'device_state_filter' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                ),

                'mailbox_state' => array(
                        array( 'optional' ),
                ),

                'mailbox_state_filter' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                )
            );
    }

}