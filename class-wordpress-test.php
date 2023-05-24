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
	public string $name = 'Peter';

	/**
	 * Age var
	 *
	 * @var string $age Age
	 */
	public int $age = 26;

	/**
	 * @var string $status Status.
	 */
	public string $status = '';

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
			$this->status = 'Valid';
			return true;
		} else {
			return false;
		}

	}
}
