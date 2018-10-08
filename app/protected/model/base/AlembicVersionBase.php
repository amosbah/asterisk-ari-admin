<?php
Doo::loadCore('db/DooModel');

class AlembicVersionBase extends DooModel{

    /**
     * @var varchar Max length is 32.
     */
    public $version_num;

    public $_table = 'alembic_version';
    public $_primarykey = 'version_num';
    public $_fields = array('version_num');

    public function getVRules() {
        return array(
                'version_num' => array(
                        array( 'maxlength', 32 ),
                        array( 'notnull' ),
                )
            );
    }

}