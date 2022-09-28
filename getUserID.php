<?php
public function getUserID()
{
    static $userId = 1;
    return $userId++;
}
