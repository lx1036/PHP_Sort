<?php

/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/23
 * Time: 18:14
 */
class InsertSort
{
    /**
     * 插入排序具体算法描述
     * 1.从第一个元素开始，该元素可以认为已经被排序
     * 2.取出下一个元素，在已经排序的元素序列中从后向前扫描
     * 3.如果该元素（已排序）大于新元素，将该元素移到下一位置
     * 4.重复步骤3，直到找到已排序的元素小于或者等于新元素的位置
     * 5.将新元素插入到该位置后
     * 6.重复步骤2~5
     *
     * @param array $data
     * @return array
     */
    public function arrayInsertSort(array $data)
    {
        $count = count($data);
        for($i=0; $i<$count-1; $i++){
            for($j=$i+1; $j>0; $j--){
                if($data[$j] > $data[$j-1]){
                    break;
                }
                $this->swap($data[$j-1], $data[$j]);
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

$arr       = [5, 4, 5, 3, 8, 10, 3, 2, 4, 7];
$arr2      = array_rand(range(1, 1000), 500);
shuffle($arr2);
$insert    = new InsertSort();

$time1     = microtime(true);
//$insertArr = $insert->arrayInsertSort($arr);
$insertArr = $insert->arrayInsertSort($arr2);//315.321922302ms
$time2     = microtime(true);

//var_dump($insertArr);
echo (($time2 - $time1)*1000).'ms'.PHP_EOL;
