<?php

class TreeNode{

    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree{
    protected $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert($data)
    {
        $newNode = new TreeNode($data);

        if($this->root == null)
        {
            $this->root = $newNode;
        }
        else
        {
            $this->insertNode($this->root, $newNode);
        }
    }

    protected function insertNode(&$node, &$newNode)
    {
        if($node === null){
            $node = $newNode;
        } else{
            
            if($newNode->data < $node->data){
                $this->insertNode($node->left, $newNode);
            } else{
                $this->insertNode($node->right, $newNode);
            }
        }

    }

    public function search($data)
    {
        return $this->searchNode($this->root, $data);
    }
    
    protected function searchNode($node, $data) {
        if ($node === null) {
            return false;
        } else if ($data == $node->data) {
            return true;
        } else if ($data < $node->data) {
            return $this->searchNode($node->left, $data);
        } else {
            return $this->searchNode($node->right, $data);
        }
    }

    //for print full tree i have take it as in order
    public function printTree() {
        $this->inOrderTraversal($this->root);
    }

    protected function inOrderTraversal($node) {
        if ($node !== null) {
            $this->inOrderTraversal($node->left);
            echo $node->data . " ";
            $this->inOrderTraversal($node->right);
        }
    }
}

$tree = new BinaryTree();
$tree->insert(5);
$tree->insert(3);
$tree->insert(7);
$tree->insert(1);
$tree->insert(4);

$tree->printTree();
var_dump($tree->search(7)); // Output: bool(true)
var_dump($tree->search(8)); // Output: bool(false)

?>
