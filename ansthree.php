<?php
	class Node
	{ 
		public  $value;
		public  $parent;
		public function __construct($value,$parent)
		{   
		    $this->value = $value; 
			$this->parent = $parent;
			$this->left = null; 
			$this->right = null;       
		}
	};

	function getLca($root, $node1, $node2)
	{
		if ($root ==null) 
		{
			return null;
		}
		
		if ($root->value == $node1 || $root->value == $node2)
		{ 
			return $root;
		}
		
		$left_lca = getLca($root->left, $node1, $node2) ; 
		$right_lca = getLca($root->right, $node1, $node2);
		
		if ($left_lca && $right_lca)
		{
			return $root ;
		}
		
		if($left_lca!=null)
		{
			return $left_lca;
		}
		else
		{
			return $right_lca;
		}
	}

	function lca($node1,$node2)
	{
		$tree= new Node(1,NULL);
		$tree->left= new Node(2,$tree);
		$tree->right= new Node(3,$tree);
		$tree->left->left= new Node(4,$tree->left);
		$tree->left->right= new Node(5,$tree->left);
		$tree->right->left= new Node(6,$tree->right);
		$tree->right->right= new Node(7,$tree->right);
		$tree->left->left->left= new Node(8,$tree->left->left);
		$tree->left->left->right= new Node(9,$tree->left->left);
		$lca=getLca($tree,$node1,$node2);
		return $lca->value;
	}