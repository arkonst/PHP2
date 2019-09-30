<?php

include_once 'Product.php';

class Notebook extends Product {
    var $processor;

    function __construct($category, $img_path, $title, $description, $processor, $price)
    {
        parent::__construct($category, $img_path, $title, $description, $price);
        $this->setProcessor($processor);
    }

    function addToList() {?>
        <div class="product">
                   <img class="product-image" src="<?=$this->getImgPath()?>" />
                   <h2 class="product-title"><?=$this->getTitle()?></h2>
                   <h6 class="product-category"><?=$this->getCategory()?></h6>
                   <p class="product-description"><?=$this->getDescription()?></p>
                   <p class="product-processor"><?=$this->getProcessor()?></p>
                   <p class="product-price"><?=$this->getPrice()?></p>
              </div>
    <?php }

    /**
     * @return mixed
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * @param mixed $processor
     */
    public function setProcessor($processor)
    {
        $this->processor = $processor;
    }
}
?>