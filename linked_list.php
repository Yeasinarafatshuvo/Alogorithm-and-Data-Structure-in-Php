<?php 
//node structure
class Node{
    public $data;
    public $next;
}
class LinkedList{
    public $head;

    //constructor to create an empty LinkedList
    public function __constructor()
    {
        $this->head = null;
    }

      //display content of the list
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;
        
        if($temp != null)
        {
            echo "The List containts: ";
            while($temp != null)
            {
                echo $temp->data." ";
                $temp = $temp->next;
            }
            echo "\n";
        }
        else{
            echo "The list is empty.\n";
        }
        

    }

    //Add new element at the end of the list
      public function push_back($newElement) {
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null; 
        if($this->head == null) {
          $this->head = $newNode;
        } else {
          $temp = new Node();
          $temp = $this->head;
          while($temp->next != null) {
            $temp = $temp->next;
          }
          $temp->next = $newNode;
        }    
      }


  

}

//test the code
//create an empty LinkedList

$myList = new LinkedList();

//Add first Node.
$first = new Node();
$first->data = 10;
$first->next = null;

//linking  with head node 
$myList->head = $first;

//Add Second Node.
$second = new Node();
$second->data = 20;
$second->next = null;

//linking with the first node
$first->next = $second;

//Add Second Node.
$third = new Node();
$third->data = 30;
$third->next = null;

//linking with the second node
$second->next = $third;

//add node end of the element
$myList->push_back(40);

//print the content of list
$myList->printList();



?>

