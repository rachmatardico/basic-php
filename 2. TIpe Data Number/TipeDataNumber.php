<?php 
// Integer
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number :";
var_dump(1_241_241_241);

// FLoat
echo "Floating point : ";
var_dump(1.234);

// E notation
echo "Floating point dengan E notation : (1.7 x 1000) :";
var_dump(1.7e3);

echo "Floating point dengan E notation minus : (1.7 x 0.001) :";
var_dump(1.7e3);

echo "Underscore di floating point :";
var_dump(1_123.123);

// Integer Overflow
echo "Integer Overflow 32 bit : ";
var_dump(2147483648);

echo "Integer Overflow 64 bit : ";
var_dump(9223372036854775808);