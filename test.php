<?php
class Solution {

    /**
     * @param String[] $s
     * @return String[]
     */
    function reverseString(&$s) {
        $n = count($s);
        $res = [];
        $index = 0;
        for ($i = $n - 1; $i >= 0; $i--) {
            $res[$index++] = $s[$i];
        }
        return $res;
    }
}

$str = new Solution();

$arr = ['q', 'e', 'r', 't', 'u', 'i', 'o'];
$result = $str->reverseString($arr);
echo implode("", $result);
?>
