<?php

class Car{
    private $id;
    private $id_exrtra;
    private $id_color;
    private $id_model;

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
    public function getIdExrtra()
    {
        return $this->id_exrtra;
    }

    /**
     * @param mixed $id_exrtra
     */
    public function setIdExrtra($id_exrtra)
    {
        $this->id_exrtra = $id_exrtra;
    }

    /**
     * @return mixed
     */
    public function getIdColor()
    {
        return $this->id_color;
    }

    /**
     * @param mixed $id_color
     */
    public function setIdColor($id_color)
    {
        $this->id_color = $id_color;
    }

    /**
     * @return mixed
     */
    public function getIdModel()
    {
        return $this->id_model;
    }

    /**
     * @param mixed $id_model
     */
    public function setIdModel($id_model)
    {
        $this->id_model = $id_model;
    }

}
