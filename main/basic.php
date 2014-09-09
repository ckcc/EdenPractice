<?php

include('../eden.php');

class My_First_Class extends Eden_Class {
    /* Constants
    -------------------------------*/
    const THE_SPEECH = 'Hello.';
    /* Public Properties
    -------------------------------*/
    /* Protected Properties
    -------------------------------*/
    protected $number;
    /* Private Properties
    -------------------------------*/
    /* Magic
    -------------------------------*/
    /**
	 * Constructor Function. Sets the $number property to a defined parameter.
	 * Sets $number to 0 by default.
	 *
	 * @param number
	 * @return number
	 */
    public function __construct($number = 0) {
    	$this->number = $number;
    	$this->giveTheSpeech();
    }
    
    /* Public Methods
    -------------------------------*/
    
    /**
	 * Returns the $number property.
	 *
	 * @return number
	 */
    public function getNumber() {
    	return $this->number;
    }

    /* Protected Methods
    -------------------------------*/

    /**
	 * Prints out the speech.
	 *
	 */
    protected function giveTheSpeech() {
    	$numberClause = ' The number is ' . $this->number . '.';
    	$statement = self::THE_SPEECH . $numberClause;
    	eden('debug')->output($statement);
    }
    
    /* Private Methods
    -------------------------------*/
}