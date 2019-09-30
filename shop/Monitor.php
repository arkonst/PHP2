<?php

include_once 'Product.php';

class Monitor extends Product {
    var $screen;

    function __construct($category, $img_path, $title, $description, $screen, $price)
    {
        parent::__construct($category, $img_path, $title, $description, $price);
        $this->setScreen($screen);
    }

    function addToList() {?>
        <div class="product">
                   <img class="product-image" src="<?=$this->getImgPath()?>" />
                   <h2 class="product-title"><?=$this->getTitle()?></h2>
                   <h6 class="product-category"><?=$this->getCategory()?></h6>
                   <p class="product-description"><?=$this->getDescription()?></p>
                   <p class="product-screen"><?=$this->getScreen()?></p>
                   <p class="product-price"><?=$this->getPrice()?></p>
              </div>
    <?php }

    /**
     * @return mixed
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * @param mixed $screen
     */
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }
}
?>