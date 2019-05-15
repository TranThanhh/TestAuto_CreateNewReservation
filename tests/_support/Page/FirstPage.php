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
    * @var string
    */
    public static $sortID="((//th[@class=\"id t-first\"])/a)[2]";
    /**
     * @var string
     */
    public static $IDDes="//img[@alt=\"[Asc]\"]";
    /**
     * @var string
     */
    public static $IDAsc="//img[@alt=\"[Desc]\"]";
    /**
     * @var string
     */
    public static $sortType="((//th[@class=\"type t-last\"])/a)[2]";
    /**
     * @var string
     */
    public static $TypeDes="//img[@alt=\"[Asc]\"]";
    /**
     * @var string
     */
    public static $TypeAsc="//img[@alt=\"[Desc]\"]";
    /**
     * @var string
     */
    public static $sortTableID="((//th[@class=\"tableID t-first\"])/a)[2]";
    /**
     * @var string
     */
    public static $tableIDDesc="//img[@alt=\"[Asc]\"]";
    /**
     * @var string
     */
    public static $tableIDAsc="//img[@alt=\"[Desc]\"]";
    /**
     * @var string
     */
    public static $sortNum="((//th[@class=\"numberofperson\"])/a)[2]";
    /**
     * @var string
     */
    public static $numDesc="//img[@alt=\"[Asc]\"]";
    /**
     * @var string
     */
    public static $numAsc="//img[@alt=\"[Desc]\"]";
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
