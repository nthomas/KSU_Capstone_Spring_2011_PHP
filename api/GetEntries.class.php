<?php
    require_once 'ApiFunction.class.php';

    /**
     * Retrieves a list of SugarBeans based on the specified IDs
     *
     * @author Nathan Osysko
     * @package api
     */
     class Api_GetEntries extends Api_ApiFunction
     {
        /**
         * Session ID
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
         * IDs
         *
         * @var array
         */
        private $_ids = array();

        /**
         * Select Fields
         *
         * @var array
         */
        private $_selectFields = array();

        /**
         * Link Name To Fields Array
         *
         * @var array
         */
        private $_linkNameToFields = array();

        /**
         * Constructor
         */
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * Set the session id
         *
         * @param string $sessionid
         */
        final public function setSessionId($sessionid)
        {
            $this->_sessionId = $sessionid;
        }

        /**
         * Set the module name
         *
         * @param string $modulename
         */
        final public function setModuleName($modulename)
        {
            $this->_moduleName = $modulename;
        }

        /**
         * Set the ids
         *
         * @param array $ids
         */
        final public function setIds($ids)
        {
            $this->_ids = $ids;
        }

        /**
         * Set select fields
         *
         * @param array $selectfields
         */
        final public function setSelectFields($selectfields)
        {
            $this->_selectFields = $selectfields;
        }

        /**
         * Set link name to fields array
         *
         * @param array $linknametofields
         */
        final public function setLinkNameToFieldsArray($linknametofields)
        {
            $this->_linkNameToFields = $linknametofields;
        }

        /**
         * Builds the parameter array
         *
         * @return $parameters
         */
        protected function buildParameters()
        {
            if(empty($this->_sessionId)){
                throw new Exception('Session ID not set');
            }

            if(empty($this->_moduleNames)){
                throw new Exception('Module Names not set');
            }
                                                                                        
            if(empty($this->_ids)){       
                throw new Exception('IDs not set')
            }                                                                                                   
            $parameters = array(
                'session' => '$this->_sessionId',
                'module_name' => '$this->_moduleName',
                'ids' => '$this->_ids',
            );

            if(!empty($this->_selectFields)){
                $parameters['select_fields'] = $this->_selectFields;
            }
            
            if(!empty($this->_linkNameToFields)){
                $parameters['link_name_to_fields_array'] = $this->_linkNameToFields;
            }

            return $parameters;
        }
    }
?>
