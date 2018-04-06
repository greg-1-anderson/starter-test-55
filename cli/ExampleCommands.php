<?php

namespace ExampleCli;

class ExampleCommands extends \Robo\Tasks
{
    /**
     * @command multiply
     * @return string
     */
    public function multiply($a, $b)
    {
        $model = new \StarterTest55\Example($a);
        $result = $model->multiply($b);

        $this->io()->text("$a times $b is $result");
    }
}
