<?php 
class Queue {
	 protected $queue;
     protected $limit;

	 public function __construct($limit = 10, $initial = array())
	{
		$this->queue = $initial;
		$this->limit = $limit;
	}

	public function enqueue($item)
	{
		if(count($this->queue) < $this->limit)
		{
			// add item start of the array
			array_unshift($this->queue, $item);
		}else{
			echo "queue is full";
		}

	}

	public function dequeue()
	{
		if($this->isEmpty())
		{
			echo "queue is empty";
		}else{
			return array_pop($this->queue);
		}
	}

	public function isEmpty()
	{
		return empty($this->queue);
	}

	public function top()
	{
		return $this->queue[count($this->queue) -1];
	}


}


$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
echo $queue->dequeue();
echo "<br>";
echo $queue->top();
echo "<br>";
echo $queue->dequeue();
echo "<br>";
echo $queue->top();
echo "<br>";
echo $queue->dequeue();
echo "<br>";
echo $queue->dequeue();
echo "<br>";
echo $queue->dequeue();


?>
