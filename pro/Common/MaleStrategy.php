<?php

namespace Common;

class MaleStrategy implements UserStrategy
{
    function showAd()
    {
        echo "Cigar";
    }

    function showCategory()
    {
        echo "male";
    }
}
