<?php

    class Sample
    {

        public $name;

        function setName($name)
        {
            $this->name = $name;
        }

        function getName(): string
        {
            return $this->name;
        }
    }