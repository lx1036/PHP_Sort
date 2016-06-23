<?php

/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/23
 * Time: 18:14
 */
class InsertSort
{
    public function arrayInsertSort(array $data)
    {
        $count = count($data);
        for($i=1; $i<$count; $i++){
            $tmp = $data[$i];
            for($j=$i-1; $j>=0; $j--){
                if($tmp < $data[$j]){

                }
            }
        }
    }

    /**
     * 交换变量值
     * @param $var1
     * @param $var2
     */
    public function swap(&$var1, &$var2)
    {
        $tmp = $var1;
        $var1 = $var2;
        $var2 = $tmp;
    }

}