<?php
function TriangleArea ($base, $height) {
    return $base * $height / 2;
}
Function SquareArea ($base, $height) {
    return $base * $height;
}
function TrapezoidArea ($upperbase, $lowerbase, $height) {
    return $upperbase * $lowerbase * $height / 2;
}

echo TriangleArea (4, 6) . "\n";
echo SquareArea (4, 6) . "\n";
echo TrapezoidArea (4, 6, 3);