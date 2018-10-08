<?php
Doo::loadCore('db/DooModel');

class QueueMembersBase extends DooModel{

    /**
     * @var varchar Max length is 80.
     */
    public $queue_name;

    /**
     * @var varchar Max length is 80.
     */
    public $interface;

    /**
     * @var varchar Max length is 80.
     */
    public $membername;

    /**
     * @var varchar Max length is 80.
     */
    public $state_interface;

    /**
     * @var int Max length is 11.
     */
    public $penalty;

    /**
     * @var int Max length is 11.
     */
    public $paused;

    /**
     * @var int Max length is 11.
     */
    public $uniqueid;

    public $_table = 'queue_members';
    public $_primarykey = 'interface';
    public $_fields = array('queue_name','interface','membername','state_interface','penalty','paused','uniqueid');

    public function getVRules() {
        return array(
                'queue_name' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'interface' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'membername' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'state_interface' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'penalty' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'paused' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'uniqueid' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                )
            );
    }

}