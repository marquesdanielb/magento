<?php declare(strict_types=1);

namespace Custom\Hreflang\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Hreflang extends Template
{
    /**
     * @param Context $context
     * @param RequestInterface $request
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    
    public function getHreflangTags(): array
    {
        $store = $this->_storeManager->getStore();

        //$stores = $this->_storeManager->getStores();
        $storeLanguage = str_replace('_', '-', $store->getCode());
        $baseUrl = $store->getBaseUrl();
        $hreflangTags[] = [
            'language' => $storeLanguage,
            'url' => $baseUrl
        ];

        return $hreflangTags;
    }
}
