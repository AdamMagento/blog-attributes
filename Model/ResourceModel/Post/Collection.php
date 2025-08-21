<?php

declare(strict_types=1);

namespace Adam\BlogAtt\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Adam\BlogAtt\Model\Post;
use Adam\BlogAtt\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}
