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
//        for($j=0; $j<$count-1; $j++){//这样也可以,不过多了$i次比较
                if($data[$j] > $data[$j+1]){
                    $this->swap($data[$j], $data[$j+1]);
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
                    $this->swap($str[$j], $str[$j+1]);
                }
            }
        }

        return $str;
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

$arr   = [5, 4, 5, 3, 8, 10, 3, 2, 4, 7];
$str   = 'SegmentFault';
$arr2  = array_rand(range(1, 1000), 500);
shuffle($arr2);

$sort  = new BubbleSort();

$time1 = microtime(true);
//$bubbleArr = $sort->arrayBubbleSort($arr);
$bubbleArr = $sort->arrayBubbleSort($arr2);//316.018104553ms
$time2 = microtime(true);

//var_dump($bubbleArr);
echo (($time2 - $time1)*1000).'ms'.PHP_EOL;