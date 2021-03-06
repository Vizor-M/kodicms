<?php defined('SYSPATH') or die('No direct access allowed.');

abstract class DataSource_Hybrid_Field_Source extends DataSource_Hybrid_Field {

	protected $_section = NULL;

	public function __construct( array $data = NULL )
	{
		parent::__construct( $data );
		$this->family = DataSource_Hybrid_Field::FAMILY_SOURCE;
	}
	
	public function onCreateDocument( DataSource_Hybrid_Document $doc) 
	{
		$this->onUpdateDocument($doc, $doc);
	}
	
	public function section() 
	{
		if($this->_section === NULL)
		{
			$this->_section = Datasource_Data_Manager::load($this->from_ds);
		}

		return $this->_section;
	}
}