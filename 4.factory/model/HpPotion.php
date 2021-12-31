<?php 


class HpPotion implements Item {
    public function use(){
        echo "체력회복 물약을 사용했습니다.\n";
    }
}


class HpCreator extends ImteCreactor {

    public $name;

    public function __construct(){
        $this->name = ' 체력회복물약 ';
    }
    
    public function requestItemInfo(){
        echo $this->$name. " 아이템 정보를 가져왔습니다. \n";
    }

    public function createItemLog(){
        echo $this->$name. "아이템 생성로그를 남깁니다.. \n";
    }

    public function createItem(){
        echo $this->$name. "아이템을 생성합니다. . \n";
        return new HpPotion();
    }
}



?>