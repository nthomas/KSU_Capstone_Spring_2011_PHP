<?php
    require_once 'ApiFunction.class.php';

  /**
     * Logs a specified user into the Sugar CRM API
     * 
     * @author Nick Thomas
     * @package api
     */
class Api_GetEntriesCount extends Api_ApiFunction
{

    private $_sessionId;
    private $_moduleName;
    private $_query;
    private $_deleted;


    public function __construct()
    {
        parent::__construct();
    }

    public function setSessionId($session_id)
    {
	    $this->_sessionId = $session_id;
    }

    public function setModuleName($module_name)
    {
	    $this->_moduleName = $module_name;
    }

    public function setQuery($query)
    {
	    $this->_query = $query;
    }

    public function setDeleted($deleted)
    {
	    $this->_deleted = $deleted;
    }

    protected function buildParameters()
    {
	    return array(
		    'session' => $this->_sessionId,
		    'module_name' => $this->_moduleName,
		    'query' => $this->_query,
		    'deleted' => $this->_deleted,
	    );
    }
}
?>
