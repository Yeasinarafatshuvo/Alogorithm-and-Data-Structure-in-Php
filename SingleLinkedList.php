<?php
class Node{
    public $data;
    public $next;
    
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        
    }
}


class SinglyLinkedList{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insert($data)
    {
        $newNode = new Node($data);
        
        if($this->head === null){
            $this->head = $newNode;
        }else{
            $current = $this->head;
            while($current->next !== null){
                $current = $current->next;
            }

            $current->next = $newNode;

        }
    }

    public function remove($data) {
        if ($this->head === null) {
            return;
        }
        //: If the data of the head node matches, we update the head pointer ($this->head) to point to the next node in the list ($this->head->next).
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }
        $current = $this->head;
        while ($current->next !== null) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return;
            }
            $current = $current->next;
        }
    }
    

    public function display()
    {
        $current = $this->head;
        while($current !== null){
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }
}


$list = new SinglyLinkedList();
$list->insert(1);
$list->insert(2);
$list->insert(3);

$list->display();
echo "\n";
$list->remove(2);

$list->display();


?>
