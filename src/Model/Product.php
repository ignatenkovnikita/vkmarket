<?php

namespace Asil\VkMarket\Model;

/**
 * Class Product
 * Описывает продукт в API ВК
 */
class Product
{
    private $name;
    private $description;
    private $categoryId;
    private $price;
    private $deleted;

    private $oldPrice;
    private $url;
    private $dimensionWidth;
    private $dimensionHeight;
    private $dimensionLength;
    private $weight;

    private $vkItemId = null;
    private $vkItemMainPhotoId = null;
    private $vkItemAdditionalPhotoIds = [];

    private $vkItemViewsCount = 0;
    private $vkItemUserlikes = 0;

    private $album;

    /**
     * Product constructor.
     *
     * @param string $name название товара
     * @param string $description описание товара
     * @param int $categoryId идентификатор категории товара
     * @param string $price цена товара
     * @param boolean $deleted статус товара (1 — товар не доступен, 0 — товар доступен)
     */
    public function __construct($name, $description, $categoryId, $price, $deleted = false)
    {
        $this->name = $name;
        $this->description = $description;
        $this->categoryId = $categoryId;
        $this->price = $price;
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getOldPrice()
    {
        return $this->oldPrice;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getDimensionWidth()
    {
        return $this->dimensionWidth;
    }

    /**
     * @return mixed
     */
    public function getDimensionHeight()
    {
        return $this->dimensionHeight;
    }

    /**
     * @return mixed
     */
    public function getDimensionLength()
    {
        return $this->dimensionLength;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    public function getAvailability()
    {
        return $this->deleted;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param string $oldPrice
     */
    public function setOldPrice($oldPrice)
    {
        $this->oldPrice = $oldPrice;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @param string $dimensionWidth
     */
    public function setDimensionWidth($dimensionWidth)
    {
        $this->dimensionWidth = $dimensionWidth;
    }
    /**
     * @param string $dimensionHeight
     */
    public function setDimensionHeight($dimensionHeight)
    {
        $this->dimensionHeight = $dimensionHeight;
    }
    /**
     * @param string $dimensionLength
     */
    public function setDimensionLength($dimensionLength)
    {
        $this->dimensionLength = $dimensionLength;
    }
    /**
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param boolean $deleted
     */
    public function setAvailability($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return null
     */
    public function getVkItemId()
    {
        return $this->vkItemId;
    }

    /**
     * @param null $vkItemId
     */
    public function setVkItemId($vkItemId)
    {
        $this->vkItemId = $vkItemId;
    }

    public function getVkItemMainPhotoId()
    {
        return $this->vkItemMainPhotoId;
    }

    /**
     * @param array $vkMainPhotoId
     */
    public function setVkItemMainPhotoId($vkMainPhotoId)
    {
        $this->vkItemMainPhotoId = $vkMainPhotoId;
    }

    /**
     * @return array
     */
    public function getVkItemAdditionalPhotoIds()
    {
        return $this->vkItemAdditionalPhotoIds;
    }

    /**
     * @param array $vkAdditionalPhotoIds
     */
    public function setVkItemAdditionalPhotoIds($vkAdditionalPhotoIds)
    {
        $this->vkItemAdditionalPhotoIds[] = $vkAdditionalPhotoIds;
    }

    /**
     * @return int
     */
    public function setVkItemViewsCount($count)
    {
        $this->vkItemViewsCount = $count;
    }

    public function getVkItemViewsCount()
    {
        return $this->vkItemViewsCount;
    }

    /**
     * @return int
     */
    public function setVkItemUserlikes($likes)
    {
        $this->vkItemUserlikes = $likes;
    }

    public function getVkItemUserlikes()
    {
        return $this->vkItemUserlikes;
    }
}