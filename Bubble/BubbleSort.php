<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/15
 * Time: 21:26
 */
class BubbleSort{
    /**
     * 非递归
     *
     * 冒泡排序算法过程:
     * 1.比较相连两个元素,如果第一个比第二个大,交换位置
     * 2.n个数,需要观察n-1次
     * 3.每一个数number,需要与其余n-1个数比较,但实际只需要排序n-1-$i,如5,4,3,2,1就5经过4=5-1-0次排序4,3,2,1,5,而4只经过3=5-1-1次排序3,2,1,4,5
     * 4.直到排序次数走完,一个乱序就可排为升序或降序了
     * 平均时间复杂度最优n,最差n^2
     */
    /**
     * @param array $data
     * @return array
     */
    public function arrayBubbleSort(array $data){
        $count = count($data);
        for($i=0; $i<$count; $i++){
            for($j=0; $j<$count-1-$i; $j++){
//        for($j=0; $j<$count-1; $j++){
                if($data[$j] > $data[$j+1]){
                    $tmp        = $data[$j];
                    $data[$j]   = $data[$j+1];
                    $data[$j+1] = $tmp;
                }
            }
        }

        return $data;
    }

    /**
     * 字符串排序也和数组一样,字符串数组形式访问字符
     * @param string|string $str
     * @return string
     */
    public function stringBubbleSort(string $str)
    {
        $count = strlen($str);
        for($i=0; $i<$count; $i++){
            for($j=0; $j<$count-1-$i; $j++){
                if($str[$j] > $str[$j+1]){
                    $tmp       = $str[$j];
                    $str[$j]   = $str[$j+1];
                    $str[$j+1] = $tmp;
                }
            }
        }

        return $str;
    }
}

$arr = [5, 4, 5, 3, 8, 10, 3, 2, 4, 7];
$str = 'lhsgdfeswqt';
$sort = new BubbleSort();
var_dump($sort->arrayBubbleSort($arr));
var_dump($sort->stringBubbleSort($str));