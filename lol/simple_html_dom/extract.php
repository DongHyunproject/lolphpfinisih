<?php
include_once 'simple_html_dom.php';


echo file_get_html( 'https://www.google.com/search?q=%EB%A6%AC%EA%B7%B8+%EC%98%A4%EB%B8%8C+%EB%A0%88%EC%A0%84%EB%93%9C&source=lnms&tbm=nws&sa=X&ved=2ahUKEwjri8SftbXyAhXUc3AKHQyIBL0Q_AUoA3oECAEQBQ&biw=1098&bih=706' )->plaintext;


?>


