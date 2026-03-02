<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\GiftCardBalance\Business\Deleter;

use Generated\Shared\Transfer\GiftCardBalanceLogCollectionDeleteCriteriaTransfer;
use Spryker\Zed\GiftCardBalance\Persistence\GiftCardBalanceEntityManagerInterface;

class GiftCardBalanceLogDeleter implements GiftCardBalanceLogDeleterInterface
{
    public function __construct(protected GiftCardBalanceEntityManagerInterface $giftCardBalanceEntityManager)
    {
    }

    public function deleteGiftCardBalanceLogCollection(
        GiftCardBalanceLogCollectionDeleteCriteriaTransfer $giftCardBalanceLogCollectionDeleteCriteriaTransfer
    ): void {
        $salesOrderIds = $giftCardBalanceLogCollectionDeleteCriteriaTransfer->getSalesOrderIds();
        if ($salesOrderIds) {
            $this->giftCardBalanceEntityManager->deleteGiftCardBalanceLogsBySalesOrderIds($salesOrderIds);
        }
    }
}
