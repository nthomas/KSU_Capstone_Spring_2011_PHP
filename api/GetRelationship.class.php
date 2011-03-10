<?php
    require_once 'ApiFunction.class.php';

  /**
     * Retrieves a collection of beans that are related to the specefied
     * bean and, optionally, returns relationship data
     * 
     * @author Nick Thomas
     * @package api
     */

class Api_GetRelationship extends Api_ApiFunction
{
        /**
         * Session Id
         * 
         * @var string
         */
	private $_sessionId;

        /**
         * Module Name
         * 
         * @var string
         */
	private $_moduleName;

        /**
         * Module Ids
         * 
         * @var string
         */
	private $_moduleIds;

        /**
         * Link Field Name
         * 
         * @var string
         */
	private $_linkFieldName;

        /**
         * Related Module Query
         * 
         * @var string
         */
	private $_relatedModuleQuery;

        /**
         * Related Fields
         * 
         * @var array
         */
	private $_relatedFields = array();

        /**
         * Related Module Link Name To Fields Array
         * 
         * @var array
         */
	private $_relatedModuleLinkNameToFieldsArray = array();

        /**
         * Deleted
         * 
         * @var integer
         */
	private $_deleted;

        /**
         * Constructor
         * 
         */
	public function __construct()
	{
		parent::__construct();
	}
	
        /**
         * Set the sessionId
         * 
         * @param string $session_id
         */
	public function setSessionId($session_id)
	{
		$this->_sessionId = $session_id;
	}
	
        /**
         * Set the Module Name
         * 
         * @param string $module_name
         */
	public function setModuleName($module_name)
	{
		$this->_moduleName = $module_name;
	}
	
        /**
         * Set the Module Id
         * 
         * @param string $module_ids
         */
	public function setModuleIds($module_ids)
	{
		$this->_moduleIds = $module_ids;
	}
	
        /**
         * Set the Link Field Name
         * 
         * @param string $link_field_name
         */
	public function setLinkFieldName($link_field_name)
	{
		$this->_linkFieldName = $link_field_name;
	}
	
        /**
         * Set the Related Module Query
         * 
         * @param string $related_module_query
         */
	public function setRelatedModuleQuery($related_module_query)
	{
		$this->_relatedModuleQuery = $module_ids;
	}
	
        /**
         * Set the Related fields
         * 
         * @param array $related_fields
         */
	public function setRelatedFields($related_fields)
	{
		$this->_relatedFields = $related_fields;
	}
	
        /**
         * Set the Related Module Link Name To Fields Array
         * 
         * @param array $related_module_link_name_to_fields_array
         */
	public function setRelatedModuleLinkNameToFieldsArray($related_module_link_name_to_fields_array)
	{
		$this->_relatedModuleLinkNameToFieldsArray = $related_module_link_name_to_fields_array;
	}
	
        /**
         * Set Deleted
         * 
         * @param string $deleted
         */
	public function setDeleted($deleted)
	{
		$this->_deleted = $deleted;
	}
	
	/**
         * Builds the parameter array
         * 
         * @return array
         */
	protected function buildParameters()
	{
		return array(
			'session' => $this->_sessionId,
			'module_name' => $this->_moduleName,
			'module_ids' => $this->_moduleIds,
			'link_field_name' => $this->_linkFieldName,
			'related_module_query' => $this->_relatedModuleQuery,
			'related_fields' => $this->_relatedFields,
			'related_module_link_name_to_fields_array' => $this->_relatedModuleLinkNameToFieldsArray,
			'deleted' => $this->_deleted,
		);
	}
}
?>
