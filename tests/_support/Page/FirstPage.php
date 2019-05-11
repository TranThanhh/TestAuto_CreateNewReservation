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
     * @var string
     */
    public static $addOrEditButton="//input[@class=\"t-beaneditor-submit\"]";
    /**
     * @var string
     */
    public static $clearButton="//a[@href=\"reservationform.clear\"]";
    /**
     * @var string
     */
    public static $editButton="((//td[@class=\"edit\"])/a)[3]";
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
