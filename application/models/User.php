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
 * @author  Joseph Wynn <joseph@wildlyinaccurate.com>
 */
class User
{

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
		$this->password = $this->hashPassword($password);
	}

	/**
	 * Encrypt a Password
	 *
	 * @static
	 * @access	public
	 * @param	string	$password
	 * @return	void
	 */
	public function hashPassword($password)
	{
		if ( ! $this->username)
		{
			throw new \Exception('The username must be set before the password can be hashed.');
		}

		return hash('sha256', $password . $this->username);
	}

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
}
