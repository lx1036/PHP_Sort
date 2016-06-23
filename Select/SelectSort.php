<?php

/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/23
 * Time: 17:50
 */
class SelectSort
{

    public function arraySelectSort(array $data)
    {
        $count = count($data);
        for($i=0; $i<$count - 1; $i++){
            $min = $i;
            for($j=$i+1; $j<$count; $j++){
                if($data[$min] > $data[$j]){
                    $min = $j;
                }
            }
            
            if($min != $i){
                $this->swap($data[$min], $data[$i]);
            }
        }

        return $data;
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

$arr       = [5, 4, 5, 3, 8, 10, 3, 2, 4, 7];
$select    = new SelectSort();

$time1     = microtime(true);
$selectArr = $select->arraySelectSort($arr);
$time2 = microtime(true);

var_dump($selectArr);
echo (($time2 - $time1)*1000).'ms'.PHP_EOL;

