<?php
namespace FACTFinder\Data;

/**
 * Represents an item in suggestions.
 */
class SuggestQuery extends Item
{
    private $hitCount;
    private $type;
    private $imageUrl;
    private $refKey;

    /**
     * @param string $query The query's name - will be used as the item's label.
     * @param string $url
     * @param int $hitCount Indicates how many products this suggestions will
     *        lead to.
     * @param string $type Simple string which describes where this suggest
     *        query comes from (e.g. product name, category, log file).
     * @param string $imageUrl
     * @param string $refKey
     */
    public function __construct(
        $query,
        $url,
        $hitCount = 0,
        $type = '',
        $imageUrl = '',
        $refKey = ''
    ) {
        // Suggestions are never pre-selected.
        parent::__construct($query, $url, false);
        $this->hitCount = (int)$hitCount;
        $this->type = (string)$type;
        $this->imageUrl = (string)$imageUrl;
        $this->refKey = (string)$refKey;
    }

    /**
     * @return int Indicates how many products this suggestions will lead to.
     */
    public function getHitCount() {
        return $this->hitCount;
    }

    /**
     * @return string Indicates where this suggest query comes from (e.g.
     *         product name, category, log file).
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getImageUrl() {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getRefKey() {
        return $this->refKey;
    }
}