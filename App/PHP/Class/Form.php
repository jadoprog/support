<?php

class Form
{
    private array $data;

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    public function input($name, $data)
    {
        echo '<input type="' . $this->getData($data, 'type') . '" name="' . $name . '" value="' . $this->getValue($name) . '" class="' . $this->getData($data, 'class') . '" placeholder="' . $this->getData($data, 'placeholder') . '">';
    }
    public function submit($value = 'Evoyer'){
        echo '<button type="submit">' . $value .'</button>';
    }

    private function getData($data, $index)
    {
        return $data[$index] ?? null;
    }

    private function getValue($index)
    {
        return $this->data[$index] ?? null;
    }
}
