<?php

class View
{
	public $pageTitle;
	public $result;
	public $extBlocks;
	public $menuBlock;
	public $headerBlock;
	public $footeBlock;
	public $bodyBlock;
	public $mainBlock;
	
	public function __construct()
	{
		$this->result = array();
		$this->extBlocks = array();
	}
	
	public function addResults($key,$value)
	{
		$this->result[$key] = $value;
	
	}
	
	public function compileResults()
	{
		if(count($this->result) > 0)
			{
				foreach($this->result as $key=>$r){
						if($r != "")
						{
							$this->{$key} = $r;
						
						}
					
				}
		}
	
	}
	public function extraBlock($blockname,$file)
	{
		$this->extBlocks[]= array($blockname,$file);
	}
	
	public function compileBlocks()
	{

		if(count($this->extBlocks) > 0)
		{
			foreach($this->extBlocks as $block)
			{
					
						$this->assignBlocks($block[0],$block[1]);
			}
	
		}
	}
	
	public function assignBlocks($blockname,$file)
	{
		ob_start();
		require ROOT . DS . 'app/views'. DS . $file .'.php';
		$this->{$blockname} = ob_get_clean();
				
	}
	

	public function render($mainBlock,$renderMenu = true)
	{
			
			$this->compileResults();
			$this->compileBlocks();
		
			if($renderMenu)
			{
				$this->assignBlocks('menuBlock','menu');

			}
			$this->assignBlocks('mainBlock',$mainBlock);
			$this->assignBlocks('headerBlock','header');
			$this->assignBlocks('footerBlock','footer');
			$this->assignBlocks('bodyBlock','body');
		
			
			require ROOT . DS . 'app/views' . DS . 'layout.php';
		
	}
}