<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\GiftCardBalance\Communication;

use Spryker\Zed\GiftCardBalance\Communication\Table\GiftCardBalanceTable;
use Spryker\Zed\GiftCardBalance\Dependency\Service\GiftCardBalanceToUtilDateTimeServiceInterface;
use Spryker\Zed\GiftCardBalance\GiftCardBalanceDependencyProvider;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method \Spryker\Zed\GiftCardBalance\Persistence\GiftCardBalanceQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\GiftCardBalance\GiftCardBalanceConfig getConfig()
 * @method \Spryker\Zed\GiftCardBalance\Business\GiftCardBalanceFacadeInterface getFacade()
 * @method \Spryker\Zed\GiftCardBalance\Persistence\GiftCardBalanceEntityManagerInterface getEntityManager()
 */
class GiftCardBalanceCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @param int|null $idGiftCard
     *
     * @return \Spryker\Zed\Gui\Communication\Table\AbstractTable
     */
    public function createGiftCardBalanceTable($idGiftCard = null)
    {
        return new GiftCardBalanceTable(
            $this->getQueryContainer(),
            $this->getMoneyFacade(),
            $this->getUtilDateTimeService(),
            $idGiftCard,
        );
    }

    /**
     * @return \Spryker\Zed\GiftCardBalance\Dependency\Facade\GiftCardBalanceToMoneyFacadeInterface
     */
    protected function getMoneyFacade()
    {
        return $this->getProvidedDependency(GiftCardBalanceDependencyProvider::FACADE_MONEY);
    }

    /**
     * @return \Spryker\Zed\GiftCardBalance\Dependency\Service\GiftCardBalanceToUtilDateTimeServiceInterface
     */
    public function getUtilDateTimeService(): GiftCardBalanceToUtilDateTimeServiceInterface
    {
        return $this->getProvidedDependency(GiftCardBalanceDependencyProvider::SERVICE_UTIL_DATE_TIME);
    }
}
