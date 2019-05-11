<?php
namespace Page;

class SecondPage
{
    // include url of current page
    public static $URL = '';
    /**
     * @var string
     */
    public  static $tableID="//input[@id=\"tableID\"]";
    /**
     * @var string
     */
    public  static $numPerson="//input[@id=\"numberofperson\"]";
    /**
     * @var string
     */
    public static $date="//input[@id=\"date\"]";
    /**
     * @var string
     */
    public static $descript="//textarea[@id=\"description\"]";
    /**
     * @var string
     */
    public static $startTime="//input[@id=\"startTime\"]";
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
