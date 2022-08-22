<?php

namespace Huawei\IAP\Response;

/**
 * Class SubscriptionStopResponse
 * Response returned in case of subscription stop
 * @see https://developer.huawei.com/consumer/en/doc/HMSCore-References-V5/api-cancel-subscription-0000001050746115-V5
 *
 * @package Huawei\IAP\Response
 */
class SubscriptionStopResponse extends ValidationResponse
{
    protected function parseDataModel(array $raw)
    {
        if (isset($raw['purchaseTokenData'])) {
            $this->dataModel = \json_decode($raw['purchaseTokenData'], true);
        }
    }
}
