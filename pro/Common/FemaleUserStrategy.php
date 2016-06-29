<?php

namespace Common;

class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "bikini";
    }

    function showCategory()
    {
        echo "female";
    }
}
