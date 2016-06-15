<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/15
 * Time: 21:33
 */

class QuickSort{


    /**
     * 递归
     *
     * 快速排序过程:
     * 1.给初始值,$mid=$data[0]
     * 2.第二个值开始,与$mid比较,小的放在左边,大的放在右边
     * 3.递归,直到数组就剩一个值
     *
     * 效率低,还使用了array_merge()方法
     *
     * @param array $data
     * @return array
     */
    public function arrayQuickSort(array $data)
    {
        $count = count($data);
        if($count <= 1){
            return $data;
        }
        $mid   = $data[0];
        $left  = $right = [];

        for($i=1; $i<$count; $i++){
            if($data[$i] < $mid){
                $left[] = $data[$i];
            }else{
                $right[] = $data[$i];
            }
        }

        $left  = $this->arrayQuickSort($left);
        $right = $this->arrayQuickSort($right);

        return array_merge($left, [$mid], $right);
    }

}

//$arr = [5, 4, 5, 3, 8, 10, 3, 2, 4, 7];

$quickSort = new QuickSort();

$arr2 = array_rand(range(1, 1000), 500);
shuffle($arr2);
$time1 = microtime(true);
$quickSort->arrayQuickSort($arr2);
$time2 = microtime(true);
echo (($time2 - $time1)*1000).'ms';

//var_dump($quickSort->arrayQuickSort($arr));
