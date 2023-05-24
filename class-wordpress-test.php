<?php
/**
 * WPCS Testing.
 *
 * @package WordPress
 * @author Krupal Panchal
 */

/**
 * Class Testing a WordPress Coding standard.
 */
class WordPress_Test {

	/**
	 * Name var
	 *
	 * @var string $name Name
	 */
	public string $name = 'John';

	/**
	 * Age var
	 *
	 * @var string $age Age
	 */
	public int $age = 26;

	/**
	 * Instantiate the object.
	 */
	public function __construct() {}

	/**
	 * Method to check if age valid or not.
	 *
	 * @param int $age Age.
	 *
	 * @return bool
	 */
	public function is_age_valid( $age ) : bool {

		if ( $age > 25 ) {
			return true;
		} else {
			return false;
		}

	}
}
