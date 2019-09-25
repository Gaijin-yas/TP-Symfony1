<?php
/**
 * Created by PhpStorm.
 * User: sano
 * Date: 25/09/2019
 * Time: 11:42
 */

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class TP
{
    /**
     * @var
     */
    private $title;
    /**
     * @var
     * @Assert\Positive()
     */
    private $prices;
    /**
     * @var
     */
    private $content;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param mixed $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}