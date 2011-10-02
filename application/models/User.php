<?php

namespace models;

use \Doctrine\Common\Collections\ArrayCollection;

/**
 * User Model
 *
 * This is a sample model to demonstrate how to use the AnnotationDriver
 *
 * @Entity
 * @Table(name="user")
 * @author Joseph Wynn
 */
class User
{
    /**
     * Encryption key used as for password hashing
     * @static
     */
    private static $encryption_key = '5p(TWrzR}KN|3nGV+6D#8Evkdx:]K"]azW*!A7:P5<84;{6kB)c6>D{="]RP/CC';

	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Column(type="string", length=32, unique=true, nullable=false)
	 */
	protected $username;

	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $password;

	/**
	 * @Column(type="string", length=255, unique=true, nullable=false)
	 */
	protected $email;

	/**
	 * Encrypt the password before we store it
	 *
	 * @access	public
	 * @param	string	$password
	 * @return	void
	 */
	public function setPassword($password)
	{
		$encrypted_password = self::encryptPassword($password);

		$this->password = $encrypted_password;
	}

	/**
	 * Encrypt a Password
	 *
	 * @static
	 * @access	public
	 * @param	string	$password
	 * @return	void
	 */
	public static function encryptPassword($password)
	{
		return sha1($password . self::$encryption_key);
	}
	
	// Begin generic set/get method stubs
	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getUsername()
	{
		return $this->username;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	// End method stubs
}
