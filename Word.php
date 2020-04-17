<?php


class Word
{
    protected $storeOne;
    protected $storeTwo;

    public function __construct()
    {
        $this->storeOne = new Stack();
        $this->storeTwo = new Stack();
    }

    function write($message) {
        $this->storeOne->push($message);
    }

    function controlZ() {
        $itemPop = $this->storeOne->pop();
        $this->storeTwo->push($itemPop);
    }

    function controlI() {
        $item = $this->storeTwo->pop();
        $this->storeOne->push($item);
    }

    /**
     * @return mixed
     */
    public function getStoreOne()
    {
        return $this->storeOne;
    }

    public function getResultEnd() {
        return $this->storeOne->top();
    }


}