<?php
function str_replace_first($from, $to, $content)
{
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $content, 1);
}

echo str_replace_first('abc', '123', 'abcdef abcdef abcdef');