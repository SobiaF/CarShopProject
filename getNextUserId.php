<?php
public function getUserId()
{
    static $userId = 1;
    return $userId++;
}
