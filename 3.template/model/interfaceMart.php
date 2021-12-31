<?php 

/**
 * POS연동 마트데이터 가져오기 
 * 
 * 1.일단 마트에 접속해서 연결한다. 
 * 2.마트 상품을 가져온다 
 * 3.해당 DB에 넣는다. 
 * -- 당연히 중간에 각종 sort, 정리, 비교가 있겠지만 크게 봐야됨 !! 
 */

 interface mart {
    public function connection($config);
    public function getProduct($jsonType);
    public function insertDB($part);
 }
 



?>