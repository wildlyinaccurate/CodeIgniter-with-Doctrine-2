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
	 * The User currently logged in
	 */
	public static $current;

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
		$CI =& get_instance();

		$salt = $CI->config->item('encryption_key');
		$encrypted_password = sha1($password . $salt);

		return $encrypted_password;
	}

	/**
	 * Authenticate this User by setting self::current to $this
	 *
	 * @return	User
	 */
	public function authenticate()
	{
		self::$current = $this;
		return $this;
	}

	/**
	 * Find a User account by username or email
	 *
	 * @static
	 * @access	public
	 * @param	string	$identifier
	 * @return	User|FALSE
	 */
	public static function findUser($identifier)
	{
		$CI =& get_instance();

		$user = $CI->em->createQuery("SELECT u FROM models\User u WHERE u.username = '{$identifier}' OR u.email = '{$identifier}'")
					   ->getResult();

		return $user ? $user[0] : FALSE;
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