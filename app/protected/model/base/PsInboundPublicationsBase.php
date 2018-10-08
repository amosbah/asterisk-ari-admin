<?php
Doo::loadCore('db/DooModel');

class PsInboundPublicationsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $endpoint;

    /**
     * @var varchar Max length is 40.
     */
    public $event_asterisk-devicestate;

    /**
     * @var varchar Max length is 40.
     */
    public $event_asterisk-mwi;

    public $_table = 'ps_inbound_publications';
    public $_primarykey = 'id';
    public $_fields = array('id','endpoint','event_asterisk-devicestate','event_asterisk-mwi');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'endpoint' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'event_asterisk-devicestate' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'event_asterisk-mwi' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                )
            );
    }

}