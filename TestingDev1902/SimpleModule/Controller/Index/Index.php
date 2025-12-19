<?php

declare(strict_types=1);

namespace TestingDev1902\SimpleModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('TestingDev1902_SimpleModule is working.');
        return $result;
    }
}
