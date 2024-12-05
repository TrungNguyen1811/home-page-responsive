<?php
class Breadcrumb {
    private $items = []; 

    public function addItem($name, $link = null) {
        $this->items[] = [
            'name' => $name,
            'link' => $link,
        ];
    }

    public function getItems() {
        return $this->items;
    }
}
?>