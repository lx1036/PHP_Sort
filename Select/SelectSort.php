<?php

/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/23
 * Time: 17:50
 */
class SelectSort
{
    /**
     * 1.首先在未排序序列中找到最小（大）元素,存放到排序序列的起始位置
     * 2.再从剩余未排序元素中继续寻找最小（大）元素,放到已排序序列的末尾
     * 3.以此类推,直到所有元素均排序完毕
     *
     * @param array $data
     * @return array
     */
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
        $tmp  = $var1;
        $var1 = $var2;
        $var2 = $tmp;
    }

}

$arr2      = array_rand(range(1, 1000), 500);
shuffle($arr2);
$arr       = [5, 4, 5, 3, 8, 10, 3, 2, 4, 7];

$select    = new SelectSort();

$time1     = microtime(true);
//$selectArr = $select->arraySelectSort($arr);
$selectArr = $select->arraySelectSort($arr2);//44.0230369568ms
$time2 = microtime(true);

//var_dump($selectArr);
echo (($time2 - $time1)*1000).'ms'.PHP_EOL;

