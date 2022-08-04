<?php 
class Stack {
	 protected $stack;
     protected $limit;

	 public function __construct($limit = 10, $initial = array())
	{
		$this->stack = $initial;
		$this->limit = $limit;
	}

	public function push($item)
	{
		if(count($this->stack) < $this->limit)
		{
			// add item start of the array
			array_unshift($this->stack, $item);
		}else{
			echo "stack is full";
		}

	}

	public function pop()
	{
		if($this->isEmpty())
		{
			echo "stack is empty";
		}else{
			return array_shift($this->stack);
		}
	}

	public function isEmpty()
	{
		return empty($this->stack);
	}

  //check current element of the stack
	public function top()
	{
		return current($this->stack);
	}


}


$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
echo $stack->pop();
echo "<br>";
echo $stack->top();

?>
