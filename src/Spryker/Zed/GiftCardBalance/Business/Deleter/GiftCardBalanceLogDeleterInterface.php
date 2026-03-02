<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\GiftCardBalance\Business\Deleter;

use Generated\Shared\Transfer\GiftCardBalanceLogCollectionDeleteCriteriaTransfer;

interface GiftCardBalanceLogDeleterInterface
{
    public function deleteGiftCardBalanceLogCollection(
        GiftCardBalanceLogCollectionDeleteCriteriaTransfer $giftCardBalanceLogCollectionDeleteCriteriaTransfer
    ): void;
}
