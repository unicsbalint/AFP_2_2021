<?php

class Model{
    private $id;
    private $model_name;
    private $model_price;
    private $wheel;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getModelName()
    {
        return $this->model_name;
    }

    /**
     * @param mixed $model_name
     */
    public function setModelName($model_name)
    {
        $this->model_name = $model_name;
    }

    /**
     * @return mixed
     */
    public function getModelPrice()
    {
        return $this->model_price;
    }

    /**
     * @param mixed $model_price
     */
    public function setModelPrice($model_price)
    {
        $this->model_price = $model_price;
    }

    /**
     * @return mixed
     */
    public function getWheel()
    {
        return $this->wheel;
    }

    /**
     * @param mixed $wheel
     */
    public function setWheel($wheel)
    {
        $this->wheel = $wheel;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getInterior()
    {
        return $this->interior;
    }

    /**
     * @param mixed $interior
     */
    public function setInterior($interior)
    {
        $this->interior = $interior;
    }
    private $engine;
    private $interior;
}