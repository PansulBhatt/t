<?php



class KTrie
{
	function __construct()
	{
		$this->root = new KTrieNode('');
	}
 
	function addWord($word)
	{
		$wordArray = str_split($word);
		$this->root->addSuffix($wordArray);
	}
 
	function hasWord($word)
	{
		$wordArray = str_split($word);
		return $this->root->hasSuffix($wordArray);
	}
 
	function printStructure()
	{
		$this->root->printStructure(0);
	}
 
	function printWords()
	{
		$this->root->printWords('');
	}
}
 
class KTrieNode
{
	function __construct($s){ $this->value = $s; }
 
	function addSuffix($suffixArray)
	{
		if(!empty($suffixArray))
		{
			$firstChar = $suffixArray[0];
			$remnant = array_slice($suffixArray, 1);
 
			$childNode = $this->getChild($firstChar);
			if($childNode === FALSE)
			{
				$childNode = $this->addChild($firstChar);
			}
			$childNode->addSuffix($remnant);
		}
		else
		{
			$this->finishesWord = TRUE;
		}
	}
 
	function hasSuffix($suffixArray)
	{
		if(!empty($suffixArray))
		{
			$firstChar = $suffixArray[0];
 
			$childNode = $this->getChild($firstChar);
			if($childNode == FALSE)
			{
				return FALSE;
			}	
			else
			{
				$remnant = array_slice($suffixArray, 1);
				return $childNode->hasSuffix($remnant);
			}
		}
		else 
		{
			return TRUE;
		}
	}		
 
	function getChild($childString)
	{
                $ch=$this;
		if(is_array($ch))
		{
			foreach ($ch as $child)
			{
				if($child->value === $childString)
				{
					return $child;
				}
			}
		}
		return FALSE;
	}
 
	function addChild($childString)
	{
                $ch=$this->children();
		if(is_array($ch))
		{
			foreach($ch as $child)
			{
				if($child->value === $childString)
				{
					return $child;
				}
			}
		}
 
		$child = new KTrieNode($childString);
		$this->children[] = $child;
 
		return $child;
	}
 
	function printStructure($level)
	{
		for($i=0; $i<$level; $i++)
		{
			echo ".";
		}
		echo $this->value.'<br/>';
		if(is_array($this->children()))
		{
			foreach($this->children() as $child)
			{
				$child->printStructure($level + 1);
			}
		}
	}
 
	function printWords($prefix)
	{
		if($this->finishesWord)
		{
			echo $prefix.$this->value.'<br/>';
		}
 
		if(is_array($this->children))
		{
			foreach($this->children as $child)
			{
				$child->printWords($prefix.$this->value);
			}
		}
	}
}
?>
