<?php
Doo::loadCore('db/DooModel');

class PsEndpointIdIpsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $endpoint;

    /**
     * @var varchar Max length is 80.
     */
    public $match;

    /**
     * @var enum 'yes','no').
     */
    public $srv_lookups;

    /**
     * @var varchar Max length is 255.
     */
    public $match_header;

    public $_table = 'ps_endpoint_id_ips';
    public $_primarykey = 'id';
    public $_fields = array('id','endpoint','match','srv_lookups','match_header');

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

                'match' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'srv_lookups' => array(
                        array( 'optional' ),
                ),

                'match_header' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                )
            );
    }

}