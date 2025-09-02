<?php
function mergenew(&$nums1, $m, $nums2, $n) {
    $s = $d = 0;
    $nums3 = [];
    
    while ($s < $m && $d < $n) {
        if ($nums1[$s] != 0 && $nums2[$d] != 0) {
            if ($nums1[$s] <= $nums2[$d]) {
                $nums3[] = $nums1[$s];
                $s++;
            } else {
                $nums3[] = $nums2[$d];
                $d++;
            }
        } else {
            if ($nums1[$s] == 0) $s++;
            if ($nums2[$d] == 0) $d++;
        }
    }


    while ($d < $n) {
        if ($nums2[$d] != 0) {
            $nums3[] = $nums2[$d];
        }
        $d++;
    }

    return $nums3;
}

//example 1
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;
$nums3 = mergenew($nums1, $m, $nums2, $n);
echo "example 1:<br>";
echo "nums 1 = [ " . implode(", ", $nums1) . " ]<br>";
echo "nums 2 = [ " . implode(", ", $nums2) . " ]<br>";
echo "output = [ " . implode(", ", $nums3) . " ]<br><br>";

//example 2
$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;
$nums3 = mergenew($nums1, $m, $nums2, $n);
echo "example 2:<br>";
echo "nums 1 = [ " . implode(", ", $nums1) . " ]<br>";
echo "nums 2 = [ " . implode(", ", $nums2) . " ]<br>";
echo "output = [ " . implode(", ", $nums3) . " ]<br><br>";

//example 3
$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;
$nums3 = mergenew($nums1, $m, $nums2, $n);
echo "example 3:<br>";
echo "nums 1 = [ " . implode(", ", $nums1) . " ]<br>";
echo "nums 2 = [ " . implode(", ", $nums2) . " ]<br>";
echo "output = [ " . implode(", ", $nums3) . " ]<br><br>";
?>