<?php

declare(strict_types=1);

namespace Adam\BlogAtt\Model;

use Magento\Framework\Model\AbstractModel;
use Adam\BlogAtt\Model\ResourceModel\Post as PostResource;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(PostResource::class);
    }
}
