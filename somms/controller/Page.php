<?php
/**
 * Page Class
 *
 * @category  Database Access
 * @package   MysqliDb,Page
 * @author    Achuth
 * @author    Anand
 * @copyright Copyright (c) 2017-2018
 * @version   1.0-master
 */

 class Page{
	
	/**
     * Static instance of self
     * @var MysqliDb
     */
    protected static $_instance;
    /**
     * MySQLi instance
     * @var mysqli
     */
    protected $_mysqli;
    /**
     * The SQL query to be prepared and executed
     * @var string
     */
    protected $_query;
	
	public function __construct($db){
		$this->db = $db;
		
	}
	
	function getPage($seo){
		$_query = "Select * from pages WHERE page_seo = '".$seo."'";
		$res = $this->db->query($_query);
		return $res;
	}
	
}


?>