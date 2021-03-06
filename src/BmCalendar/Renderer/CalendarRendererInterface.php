<?php
/**
  * BmCalendar Module (https://github.com/SCLInternet/BmCalendar)
  *
  * @link https://github.com/SCLInternet/BmCalendar for the canonical source repository
  * @license http://opensource.org/licenses/MIT The MIT License (MIT)
  */

namespace BmCalendar\Renderer;

use BmCalendar\Calendar;

/**
 * Interface for rendering a Calendar.
 *
 * @author Tom Oram <tom@scl.co.uk>
 */
interface CalendarRendererInterface
{
    /**
     * Set the calendar to be renderer.
     *
     * @param  Calendar $calendar
     * @return self
     */
    public function setCalendar(Calendar $calendar);

    /**
     * Set which day to display as the starting day of the week.
     *
     * @param  int  $startDay
     * @return self
     */
    public function setStartDay($day);

    /**
     * Render a month table.
     *
     * @param  int $yearNo
     * @param  int $monthNo
     * @return string
     */
    public function renderMonth($year, $month);
}
