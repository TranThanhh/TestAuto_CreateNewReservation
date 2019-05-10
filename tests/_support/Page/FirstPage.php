<?php
namespace Page;

class FirstPage
{
    // include url of current page
    /**
     * @var string
     */
    public static $URL = '';
    /**
     * @var string
     */
    public  static $buttonNewReservation="//p[1]/a";
    /**
     * @var string
     */
    public  static $nextpage="//div[@class=\"t-data-grid-pager\"]/a";
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
