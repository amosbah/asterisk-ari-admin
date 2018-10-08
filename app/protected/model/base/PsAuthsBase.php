<?php
Doo::loadCore('db/DooModel');

class PsAuthsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var enum 'md5','userpass').
     */
    public $auth_type;

    /**
     * @var int Max length is 11.
     */
    public $nonce_lifetime;

    /**
     * @var varchar Max length is 40.
     */
    public $md5_cred;

    /**
     * @var varchar Max length is 80.
     */
    public $password;

    /**
     * @var varchar Max length is 40.
     */
    public $realm;

    /**
     * @var varchar Max length is 40.
     */
    public $username;

    public $_table = 'ps_auths';
    public $_primarykey = 'id';
    public $_fields = array('id','auth_type','nonce_lifetime','md5_cred','password','realm','username');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'auth_type' => array(
                        array( 'optional' ),
                ),

                'nonce_lifetime' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'md5_cred' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'password' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'realm' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'username' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                )
            );
    }

}