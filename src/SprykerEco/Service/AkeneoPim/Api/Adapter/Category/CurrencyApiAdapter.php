<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter\Category;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface;

class CurrencyApiAdapter implements ApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $akeneoPimClient
     */
    public function __construct(AkeneoPimClientInterface $akeneoPimClient)
    {
        $this->akeneoPimClient = $akeneoPimClient;
    }

    /**
     * @inheritdoc
     */
    public function get($code)
    {
        return $this->akeneoPimClient
            ->getCurrencyApi()
            ->get($code);
    }

    /**
     * @inheritdoc
     */
    public function listPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->akeneoPimClient
            ->getCurrencyApi()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * @inheritdoc
     */
    public function all($pageSize = 10, array $queryParameters = [])
    {
        return $this->akeneoPimClient
            ->getCurrencyApi()
            ->all($pageSize, $queryParameters);
    }
}
