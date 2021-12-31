<?php 
 
 /**
  * 대충 어떤 식으로 하는건데 예제 정도 구현에서는 이걸 왜 쓰나 싶을꺼임 
  * 사용방법은 두 가지 정도로 요약됨 
  *
  */
  /**
   * 대충 어떤 식으로 하는건데 예제 정도 구현에서는 이걸 왜 쓰나 싶을꺼임 
   * 사용방법은 다음과 같음 
   * 1.core가 있는데 뭔가 더 추가해야될 때...  
   * : core를 고치면 난리나지... 그래서 하나 더 만들어서 부른다음 사용함 
   * : contraller 에서 직접해도 되긴하는데 자주 사용할꺼라면 하나 만들어주는게 나음
   * : 추가하는 방식은, attr, return , 내부처리 등등 다양하게 사용됨 .   
   * : 중간 연결 통로 해당하는 input, output, function 등 다양하게 처리할 수 있는거임 
   * 작은 단위보단 큰 단위에서 사용되는 편이 많음 
   * 그리고 php 에서는 Interface 를 사용안해도 됐음 . 
   */

include_once "./module/adapterImpl.php";
$model = new adapterImpl();
echo $model->dbInsert("val");



?>