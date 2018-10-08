<?php
Doo::loadCore('db/DooModel');

class QueueRulesBase extends DooModel{

    /**
     * @var varchar Max length is 80.
     */
    public $rule_name;

    /**
     * @var varchar Max length is 32.
     */
    public $time;

    /**
     * @var varchar Max length is 32.
     */
    public $min_penalty;

    /**
     * @var varchar Max length is 32.
     */
    public $max_penalty;

    public $_table = 'queue_rules';
    public $_primarykey = '';
    public $_fields = array('rule_name','time','min_penalty','max_penalty');

    public function getVRules() {
        return array(
                'rule_name' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'time' => array(
                        array( 'maxlength', 32 ),
                        array( 'notnull' ),
                ),

                'min_penalty' => array(
                        array( 'maxlength', 32 ),
                        array( 'notnull' ),
                ),

                'max_penalty' => array(
                        array( 'maxlength', 32 ),
                        array( 'notnull' ),
                )
            );
    }

}