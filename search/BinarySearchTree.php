<?php

class Node
{
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




class BinarySearchTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert($data)
    {
        $newNode = new Node($data);
        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }

    private function insertNode($node, $newNode)
    {
        if ($newNode->data['fname'] < $node->data['fname']) {
            if ($node->left === null) {
                $node->left = $newNode;
            } else {
                $this->insertNode($node->left, $newNode);
            }
        } else {
            if ($node->right === null) {
                $node->right = $newNode;
            } else {
                $this->insertNode($node->right, $newNode);
            }
        }
    }

    public function search($node, $fname, $lname)
    {
        if ($node === null) {
            return [];
        }

        $results = [];
        if (($fname === '' || stripos($node->data['fname'], $fname) !== false) &&
            ($lname === '' || stripos($node->data['lname'], $lname) !== false)
        ) {
            $results[] = $node->data;
        }

        $results = array_merge($results, $this->search($node->left, $fname, $lname));
        $results = array_merge($results, $this->search($node->right, $fname, $lname));

        return $results;
    }
}