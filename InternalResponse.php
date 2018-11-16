<?php

/**
 *
 *  a response convention for classes (work in progress)
 *
 */

trait InternalResponse {

    /**
     * @param object the data we will return to the controller
     */
    protected $data = null ;

    /**
     * @param array of errors
     */
    protected $errors = array();

    /**
     * @param int number of errors being returned
     */
    protected $hasErrors = 0 ;

    /**
     * Format the response to send back to the controller
     */
    protected function respond(){

        $result = new \stdClass();

        $result->data         = $this->data ;

        $result->errors       = $this->errors ;

        $result->hasErrors    = count($this->errors) ;

        return $result ;

    }


} // end class