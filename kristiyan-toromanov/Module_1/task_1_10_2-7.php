<?php

//Task 1_10_2(a):

$graph = [
    "nodes" => ["a", "b", "c", "d"],
    "vertices" => [0 => ["a", "b"], 1 => ["a", "c"], 2 => ["a", "d"], 3 => ["b", "c"]],
    "visited" => []
];


/*Returning an array of node names - the nodes that could be directly visited from the passed node.*/

function getNeighbours(array $graph, String $node): array
{
    $neighbours = array();
    for($i = 0; $i < count($graph["vertices"]); $i++)
    {
        if($graph["vertices"][$i][0] == $node)
        {
            array_push($neighbours, $graph["vertices"][$i][1]);
        }
    }
    return $neighbours;
}

/*Marking that this node has been visited in a separate array.*/

function visit(array $graph, String $node): void
{
    for($i = 0; $i < count($graph["nodes"]); $i++)
    {
        if($graph["nodes"][$i] == $node)
        {
            array_push($graph["visited"], $node);
        }
    }
}

/*Return 'true' if the passed node has already been visited, else return 'false'.*/

function isVisited(array $graph, String $node): bool
{
    if(array_search($node, $graph["visited"]) === false)
    {
        return false;
    }
    else
    {
        return true;
    }
}

/*Task 1_10_2(b): Print all paths between $startNode and $endNode. */

function printAllPaths(array $graph, String $startNode, String $endNode): void
{
    visit($graph, $startNode);

    $neighbours = getNeighbours($graph, $startNode);

    if($startNode == $endNode)
    {
        echo implode(" -> ", $graph["visited"]) . "\n";
        return;
    }
    else
    {
        for($i = 0; $i < count($neighbours); $i++)
        {
            if(!isVisited($graph, $neighbours[$i]))
            {
                printAllPaths($graph, $neighbours[$i], $endNode);
            }
        }
    }
}

$graph["visited"] = [];

printAllPaths($graph, "a", "b");

/*Task 1_10_3: Print the shortest path (in terms of number of vestices) between $startNode and $endNode. 
Task 1_10_7: Implementing BFS with an iterative implementation.*/

function printShortestPath(array $graph, String $startNode, String $endNode): void
{
    //Creating an array of arrays that will hold our possible paths.
    $possiblePaths = [];

    //Entering the startNode of our search as the beginning of the possible paths.
    array_push($possiblePaths, array($startNode));

    $graph['visited'] = [$startNode];

    while(count($possiblePaths) > 0)
    {
        $path = array_shift($possiblePaths);
        $node = $path[sizeof($path) - 1];

        //Checking to see if the first node we visit after the startingNode is the endNode, which would make it the shortest path.
        if($node === $endNode) 
        {
            echo implode(" -> ", $path) . "\n";
            return;
        }

        //Creating a new array, that will hold the neighbors of the nodes, so that we can revisit them later.
        $neighbours = [];

        //Checking if the other nodes we visit are the endNode and if not - adding them to the neighbors array.
        for($i = 0; $i < count($graph['vertices']); $i++)
        {
            if($graph['vertices'][$i][0] === $node)
            {
                array_push($neighbours, $graph['vertices'][$i][1]);
            }
            else if($graph['vertices'][$i][1] === $node)
            {
                array_push($neighbours, $graph['vertices'][$i][0]);
            }
        }

        //Checking if the elements that are not in the nighbours array have been visited and if so - marking them as visited.
        foreach($neighbours as $neighbour)
        {
            if(!in_array($neighbour,  $graph['visited']))
            {
                array_push($graph['visited'], $neighbour);

                //Building a new path, which appends the neighbour and then enqueues it.
                $newPath = $path;
                array_push($newPath, $neighbour);
                array_push($possiblePaths, $newPath);
            }
        };
    }
}

$graph["visited"] = array();

echo "The shortest path is: ";
printShortestPath($graph, "a", "b");

/*Task 1_10_4: Implement a DFS(recursive implementation)*/

function dfs(array &$graph, string $startNode)
{
    //Marking the beginning node.
    visit($graph, $startNode);

    //Obtaining the neighbours of that node.
    $neighbours = getNeighbours($graph, $startNode);

    foreach($neighbours as $val)
    {
        if (!isVisited($graph, $val))
        {
            //Calling the dfs function on the neighbour of the node, if it has not been visited yet.
            dfs($graph, $val);
        }
    }
}

$graph["visited"] = array();
dfs($graph, "a");

echo "Visited \n";
print_r($graph["visited"]);

/*Task 1_10_5: Implement a DFS(iterative implementation)*/

function dfsI(array &$graph, string $startNode)
{
    //Creating an array to hold the nodes.
    $nodes = array($startNode);

    while(count($nodes) > 0)
    {
        //Getting the current value and removing it from the holding array.
        $val = array_pop($nodes);

        //Mark the current node's value as visited, if it has not yet been visited.
        if(!isVisited($graph, $val))
        {
            visit($graph, $val);

            //Getting the node's neighbours.
            $neighbours = getNeighbours($graph, $startNode);

            //Adding all of the nodes into the nodes array, so they can also be checked.
            foreach($neighbours as $value)
            {
                if(!isVisited($graph, $value))
                {
                    array_push($nodes, $value);
                }
            }
        }
    }
}

$graph["visited"] = array();
dfsI($graph, "a");

echo "Visited \n";
print_r($graph["visited"]);

/*Task 1_10_6: Implement a BFS(recursive implementation)*/

function bfs(array &$graph, string $startNode)
{
    //Creating an array of arrays, which will hold our possible paths.
    $possiblePaths = [];

    //Adding the starNode as the first node to be visited.
    array_push($possiblePaths, array($startNode));

    $graph['visited'] = [$startNode];

    echo bfsR($graph, $possiblePaths, $startNode);
}

//Creating the recursive bfs function.
function bfsR(array $graph, array $paths, String $endNode)
{
    if(sizeof($paths) === 0)
    {
        return '';
    }

    $path = array_shift($paths);
    $node = $path[sizeof($path) - 1];

    if($node === $endNode)
    {
        return implode(" -> ", $path) . "\n";
    }

    $neighbours = [];

    for($i = 0; $i < count($graph['vertices']); $i++)
    {
        if($graph['vertices'][$i][0] === $node)
        {
            array_push($neighbours, $graph['vertices'][$i][1]);
        }
        else if($graph['vertices'][$i][1] === $node)
        {
            array_push($neighbours, $graph['vertices'][$i][0]);
        }
    }

    foreach($neighbours as $neighbour)
    {
        if (!in_array($neighbour,  $graph['visited']))
        {
            array_push($graph['visited'], $neighbour);

            $newPath = $path;
            array_push($newPath, $neighbour);
            array_push($paths, $newPath);
        }
    };

    return bfsR($graph, $paths, $endNode);
}

/*I would like to make a note, 1_10_6 took me the longest to deal wiht, as I was not able to find any viable recursive
implementation for BFS. From what I was able to find online and from consulting with other programmers, they informed me that
implementing recursion for BFS seemed rather redundant and unfitting, which is why there was so little of it and it was this
lengthy to complete in a satisfactory manner.*/
