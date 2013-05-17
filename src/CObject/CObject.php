<?php
/**
 * Holding a instance of CTube to enable use of $this in subclasses and provide some helpers.
 *
 * @package Tube
 */
class CObject {

	/**
	 * Members
	 */
	protected $tube;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $tube reference.
	 */
	protected function __construct($tube=null) {
	  if(!$tube) {
	    $tube = CTube::Instance();
	  }
	  $this->tube       = &$tube;
    $this->config   = &$tube->config;
    $this->request  = &$tube->request;
    $this->data     = &$tube->data;
    $this->db       = &$tube->db;
    $this->views    = &$tube->views;
    $this->session  = &$tube->session;
    $this->user     = &$tube->user;
	}


	/**
	 * Wrapper for same method in CTube. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->tube->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CTube. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->tube->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CTube. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->tube->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CTube. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->tube->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CTube. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->tube->CreateUrl($urlOrController, $method, $arguments);
  }


}