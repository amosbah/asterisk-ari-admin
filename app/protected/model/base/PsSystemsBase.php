<?php
Doo::loadCore('db/DooModel');

class PsSystemsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $timer_t1;

    /**
     * @var int Max length is 11.
     */
    public $timer_b;

    /**
     * @var enum 'yes','no').
     */
    public $compact_headers;

    /**
     * @var int Max length is 11.
     */
    public $threadpool_initial_size;

    /**
     * @var int Max length is 11.
     */
    public $threadpool_auto_increment;

    /**
     * @var int Max length is 11.
     */
    public $threadpool_idle_timeout;

    /**
     * @var int Max length is 11.
     */
    public $threadpool_max_size;

    /**
     * @var enum 'yes','no').
     */
    public $disable_tcp_switch;

    public $_table = 'ps_systems';
    public $_primarykey = 'id';
    public $_fields = array('id','timer_t1','timer_b','compact_headers','threadpool_initial_size','threadpool_auto_increment','threadpool_idle_timeout','threadpool_max_size','disable_tcp_switch');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'timer_t1' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'timer_b' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'compact_headers' => array(
                        array( 'optional' ),
                ),

                'threadpool_initial_size' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'threadpool_auto_increment' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'threadpool_idle_timeout' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'threadpool_max_size' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'disable_tcp_switch' => array(
                        array( 'optional' ),
                )
            );
    }

}