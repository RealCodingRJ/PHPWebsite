<?php

    class Sample
    {

        public string $name;

        function setName($name): void
        {
            $this->name = $name;
        }

        function getName(): string
        {
            return $this->name;
        }
    }
