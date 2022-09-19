<?php

class Graph
{
    private $nodes = array();
    private $visited = array();

    public function __construct(array $nodes)
    {
        $this->nodes = $nodes; 
    }

    public function getVisited(){
        return $this->visited;
    }

    public function getShortestPath(Node $startNode, Node $endNode)
    {
        $arr = [];
        array_push($arr, array($startNode));
        
        $this->visited = [$startNode];
        
        while (count($arr) > 0)
        {
            $path = array_shift($arr); 
            $node = $path[sizeof($path) - 1];
            
            if ($node === $endNode)
            {
                return $path;
            }

            $neighbours = $node->getNeighbours();
                
            
            foreach ($neighbours as $neighbour)
            {
                if (!in_array($neighbour,  $this->visited))
                {
                    array_push($this->visited,$neighbour);
    
                    $new_path = $path;
                    array_push($new_path, $neighbour);
                    array_push($arr, $new_path);
                }
            };
        }
    }

}

class Node
{
    private $name;
    private $neighbours = array();
    
    public function __construct(string $name, array $neighbours)
    {
        $this->name = $name;
        $this->neighbours = $neighbours;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNeighbours()
    {
        return $this->neighbours;
    }
    
    public function setNeighbours(array $neighbours)
    {
        $this->neighbours = $neighbours;
    }
}

$a = new Node("a", array());
$b = new Node("b", array());
$c = new Node("c", array());
$d = new Node("d", array());

$a->setNeighbours(array($b, $c, $d));
$b->setNeighbours(array($a, $c));
$c->setNeighbours(array($a, $b));
$d->setNeighbours(array($a));

$NODES = array($a, $b, $c, $d);

$graph = new Graph($NODES);

$path = $graph->getShortestPath($d, $b);

for($i = 0;$i < count($path); $i++)
{
    echo $path[$i]->getName() . "\n";
}

?>