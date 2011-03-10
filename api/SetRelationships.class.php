<?php
    require_once 'ApiFunction.class.php';

  /**
     * Sets multiple relationships between two SugarBeans
     * 
     * @author Nick Thomas
     * @package api
     */

class Api_SetRelationships extends Api_ApiFunction
{

    private $_sessionId;
    private $_moduleNames = array();
    private $_moduleIds = array();
    private $_linkFieldNames = array();
    private $_relatedId = array();



    public function __construct()
    {
        parent::__construct();
    }

    public function setSessionId($session_id)
    {
	    $this->_sessionId = $session_id;
    }

    public function setModuleNames($module_names)
    {
	    $this->_moduleNames = $module_names;
    }

    public function setModuleIds($module_ids)
    {
	    $this->_moduleIds = $module_ids;
    }

    public function setLinkFieldNames($link_field_names)
    {
	    $this->_linkFieldNames = $link_field_names;
    }

    public function setRelatedId($related_id)
    {
	    $this->_relatedId = $related_id;
    }

    protected function buildParameters()
    {
	    return array(
		    'session' => $this->_sessionId,
		    'module_names' => $this->_moduleNames,
		    'module_ids' => $this->_moduleIds,
		    'link_field_names' => $this->_linkFieldNames,
		    'related_id' => $this->_relatedId
	    );
    }
}
?>
