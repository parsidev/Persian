<?php
namespace Parsidev\Persian;

class Persian
{
    public function __construct()
    {

    }

    public function arabicChar($value)
    {
        $arabicChars = ["ي", "ك", "‍", "دِ", "بِ", "زِ", "ذِ", "ِشِ", "ِسِ", "‌", "ى"];
        $persianChars = ["ی", "ک", "", "د", "ب", "ز", "ذ", "ش", "س", "", "ی"];

        return str_replace($arabicChars, $persianChars, $value);
    }

    public function switchKey($value){
        $persianChar = [ "ض", "ص", "ث", "ق", "ف", "غ", "ع", "ه", "خ", "ح", "ج", "چ", "ش", "س", "ی", "ب", "ل", "ا", "ت",
            "ن", "م", "ک", "گ", "ظ", "ط", "ز", "ر", "ذ", "د", "پ", "و","؟" ];
        $englishChar = [ "q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "[", "]", "a", "s", "d", "f", "g", "h", "j",
            "k", "l", ";", "'", "z", "x", "c", "v", "b", "n", "m", ",","?" ];

        return str_replace($persianChar, $englishChar, $value);
    }

    public function arabicNumber($value){
        $arabicNumbers = ["١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩", "٠"];
        $persianNumbers = ["۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", "۰"];

        return str_replace($arabicNumbers, $persianNumbers, $value);
    }

    public function englishNumber($value){
        $englishNumbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
        $persianNumbers = ["۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", "۰"];

        return str_replace($englishNumbers, $persianNumbers, $value);
    }
}