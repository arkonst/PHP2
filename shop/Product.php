<?php

class Product {
    var $category;
    var $img_path;
    var $title;
    var $description;
    var $price;

    function __construct($category, $img_path, $title, $description, $price)
    {
        $this->setCategory($category);
        $this->setImgPath($img_path);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setPrice($price);
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @return mixed
     */
    public function getImgPath()
    {
        return $this->img_path;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
    /**
     * @param mixed $img_path
     */
    public function setImgPath($img_path)
    {
        $this->img_path = $img_path;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}



