<?php
Doo::loadCore('db/DooModel');

class AstConfigBase extends DooModel{

    /**
     * @var int Max length is 8.
     */
    public $id;

    /**
     * @var int Max length is 8.
     */
    public $cat_metric;

    /**
     * @var int Max length is 8.
     */
    public $var_metric;

    /**
     * @var varchar Max length is 128.
     */
    public $filename;

    /**
     * @var varchar Max length is 128.
     */
    public $category;

    /**
     * @var varchar Max length is 128.
     */
    public $var_name;

    /**
     * @var varchar Max length is 128.
     */
    public $var_val;

    /**
     * @var int Max length is 11.
     */
    public $commented;

    public $_table = 'ast_config';
    public $_primarykey = 'id';
    public $_fields = array('id','cat_metric','var_metric','filename','category','var_name','var_val','commented');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 8 ),
                        array( 'optional' ),
                ),

                'cat_metric' => array(
                        array( 'integer' ),
                        array( 'maxlength', 8 ),
                        array( 'optional' ),
                ),

                'var_metric' => array(
                        array( 'integer' ),
                        array( 'maxlength', 8 ),
                        array( 'optional' ),
                ),

                'filename' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'category' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'var_name' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'var_val' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'commented' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                )
            );
    }

}