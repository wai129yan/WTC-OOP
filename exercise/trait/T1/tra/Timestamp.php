<?php 

trait Timestamp
{
    public function getCreatedAt()
    {
        return date('Y-m-d H:i:s');
    }
}