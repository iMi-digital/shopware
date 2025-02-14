<?php
declare(strict_types=1);

namespace Shopware\Core\Checkout\Promotion\Aggregate\PromotionSalesChannel;

use Shopware\Core\Checkout\Promotion\PromotionEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\System\SalesChannel\SalesChannelEntity;

#[Package('buyers-experience')]
class PromotionSalesChannelEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     *
     * @deprecated tag:v6.7.0 - Will be natively typed
     */
    protected $promotionId;

    /**
     * @var string
     *
     * @deprecated tag:v6.7.0 - Will be natively typed
     */
    protected $salesChannelId;

    /**
     * @var int
     *
     * @deprecated tag:v6.7.0 - Will be natively typed
     */
    protected $priority;

    /**
     * @var PromotionEntity|null
     *
     * @deprecated tag:v6.7.0 - Will be natively typed
     */
    protected $promotion;

    /**
     * @var SalesChannelEntity|null
     *
     * @deprecated tag:v6.7.0 - Will be natively typed
     */
    protected $salesChannel;

    public function getPromotionId(): string
    {
        return $this->promotionId;
    }

    public function setPromotionId(string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getPromotion(): ?PromotionEntity
    {
        return $this->promotion;
    }

    public function setPromotion(PromotionEntity $promotion): void
    {
        $this->promotion = $promotion;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }
}
