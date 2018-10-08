<?php
Doo::loadCore('db/DooModel');

class PsResourceListBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 2048.
     */
    public $list_item;

    /**
     * @var varchar Max length is 40.
     */
    public $event;

    /**
     * @var enum 'yes','no').
     */
    public $full_state;

    /**
     * @var int Max length is 11.
     */
    public $notification_batch_interval;

    public $_table = 'ps_resource_list';
    public $_primarykey = 'id';
    public $_fields = array('id','list_item','event','full_state','notification_batch_interval');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'list_item' => array(
                        array( 'maxlength', 2048 ),
                        array( 'optional' ),
                ),

                'event' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'full_state' => array(
                        array( 'optional' ),
                ),

                'notification_batch_interval' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                )
            );
    }

}