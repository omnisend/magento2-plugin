<?php

namespace Omnisend\Omnisend\Model\RequestBodyBuilder;

use Magento\Framework\ObjectManagerInterface;

class ProductFactory implements RequestBodyBuilderFactoryInterface
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @return RequestBodyBuilderInterface
     */
    public function create()
    {
        return $this->objectManager->create(Product::class);
    }
}
