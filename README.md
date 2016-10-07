# Toolbox
‵‵‵Toolbox為各種php小程式的集合類別(Class),在開發專案時,可以藉由使用Toolbox達到解省開發時間之功效
>目前(2016-10-07)將工具分為兩類:  
>>文字類 - 以str為前綴
>>數學類 - 以math為前綴  

 <hr>
 用法(usage):
 
 1). 引用(include)
     
     include("你的路徑(the path of file u put)/_str_num_controller.php");
 
 2). 呼叫類別方法(call function):
 
     _str_num_controller::_strnum_rule($STR , NUM );
 
 3). 參數使用
 
     $STR = 你想要調整的字串
     NUM  = 最終要輸出的字串長度
     
     **注意**
     $STR 如果不輸入,那就好像甚麼都沒發生過一樣
     NUM  如果不輸入,那預設值為12
     
     
