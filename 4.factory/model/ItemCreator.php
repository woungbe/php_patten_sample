<?php 


/**
 * 생성하는 애를 존재하기 !!
 */
abstract class ImteCreactor {

    // 생성자에 일정한 흐름이 존재 !! - 구현은 하위에서.
    public function create(){ 
        $this->requestItemInfo();
        $this->createItemLog();
        $item = $this->createItem();
        return $item;
    }

    abstract public function requestItemInfo();

    abstract public function createItemLog();

    abstract public function createItem();    

}

?>