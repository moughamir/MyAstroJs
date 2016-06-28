<?php
	class Compteur
	{
		const TABLE = 'compteurs';
		public $name;
		public $value;
		public $names = array('flag5','flag7','flag15','flag30');
		private $bdd;

		public function __construct($name = null){
			$this->bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
			$this->name = $name;
			$this->value = $this->getValue();
		}
		/*
		*  Function get Value
		*
		*  Return value of the current counter.
		*  return : null / int
		*/
		public function getValue()
		{
			if(!$this->name){
				return;
			}
			return $this->bdd->get_var('SELECT `value` FROM '.self::TABLE.' WHERE name="'.$this->name.'"');
		}

		/*
		*  Function get
		*
		*  Return value of ALL counter.
		*  return : array
		*/
		public function get(){
			$responseArray = array();
			foreach($this->names as $compt){
				$this->name = $compt;
				$responseArray[$compt] = $this->getValue();
			}
			return $responseArray;
		}

		/*
		*  Function updateValue
		*
		*  Update value of the current counter.
		*  return : null / int
		*/
		public function updateValue()
		{
			return $this->bdd->update(
							self::TABLE,
							array('value'	=> $this->getNewValue()),
							array('name'	=> $this->name)
						);
		}

		/*
		*  Function getMaxValue
		*
		*  Get max value of the current counter.
		*  return : int
		*/
		public function getMaxValue()
		{
			return (int)substr($this->name,4); // ie : flag15 => 15
		}

		/*
		*  Function getNewValue
		*
		*  Get the new value of current counter depending of max value.
		*  return : int
		*/
		public function getNewValue()
		{
			return ($this->value >= $this->getMaxValue()) ? 1 : $this->value +1 ;
		}

		/*
		*  Function process
		*
		*  Update all counter with their new values.
		*  return : void
		*/
		public function process()
		{
			foreach($this->names as $compt){
				$this->name = $compt;
				$this->value = $this->getValue();
				$this->updateValue();
			}
		}
	}
?>