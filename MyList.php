<?php


class MyList
{
    public $array;
    public $size;

    public function __construct($arr = null, $size )
    {
        if (is_array($arr)) {
            $this->array = $arr;
        } else {
            $this->array = [];
        }
        $this->size = $size;
    }

    public function add($item)
    {
        if ($this->isFull()) {
            echo "full";
            exit();
        }
        array_push($this->array, $item);
    }

    public function getItem($index)
    {
        if (array_key_exists($index, $this->array)) {
            return $this->array[$index];
        } else {
            echo "khong ton tai phan tu o vi tri $index";
            exit();
        }
    }

    public function removeItem($index)
    {
        if (array_key_exists($index, $this->array)) {
            array_splice($this->array, $index, 1);
        } else {
            echo "khong ton tai phan tu o vi tri $index";
            exit();
        }
    }

    public function getList()
    {
        return $this->array;
    }

    public function isFull()
    {
        return count($this->array) == $this->size;
    }

    public function isEmpty()
    {
        return count($this->array) == 0;
    }

    public function sort()
    {
        return sort($this->array);
    }

    public function reset()
    {
        $this->array = null;
        $this-> size= null;
    }

    public function size()
    {
        return count($this->array);
    }

}