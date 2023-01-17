<?php

namespace Ethio\Covid19Bundle;

/**
 * This file is part of Twig.
 *
 * (c) 2014 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Symfony\Component\Translation\TranslatorInterface;
use Twig_Environment;
use Twig_SimpleFilter;
use Twig_Extension;

/**
 * @author Robin van der Vleuten <robinvdvleuten@gmail.com>
 */
class Twig_Extensions_Extension_Date extends Twig_Extension
{
    public $units = array(
        'y' => 'year',
        'm' => 'month',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
        public   $before_leap_year = array(
            'September'=>array(),
            'October'=>array(),
            'November'=>array(),
            'December'=>array(),
            'January'=>array(),
            'February'=>array(),
            'March'=>array(),
            'April'=>array(),
            'May'=>array(),
            'June'=>array(),
            'July'=>array(),
            'August'=>array()
    );
    public $before_leap_year2 = array(
                1=>array(9,11),
                2=>array(10,11),
                3=>array(11,10),
                4=>array(12,10),
                5=>array(1,9),
                6=>array(2,8),
                7=>array(3,10),
                8=>array(4,9),
                9=>array(5,9),
                10=>array(6,8),
                11=>array(7,8),
                12=>array(8,7),
                13=>array(9,6)
        );

    public function getGregorianMonth($ethiopian){
        $months = array(
                1=>array(9,11,30),
                2=>array(10,11,31),
                3=>array(11,10,30),
                4=>array(12,10,31),
                5=>array(1,9,31),
                6=>array(2,8,28),
                7=>array(3,10,31),
                8=>array(4,9,30),
                9=>array(5,9,31),
                10=>array(6,8,30),
                11=>array(7,8,31),
                12=>array(8,7,31),
                13=>array(9,6,30)
        );
        return $months[$ethiopian];
    }
    public function getEthiopianMonth($ethiopian){
        $months = array(
            1=>array(5,9,31),
            2=>array(6,8,28),
            3=>array(7,10,31),
            4=>array(8,9,30),
            5=>array(9,9,31),
            6=>array(10,8,30),
            7=>array(11,8,31),
            8=>array(12,7,31),
            9=>array(1,11,30),
            10=>array(2,11,31),
            11=>array(3,10,30),
            12=>array(4,10,31)
        );
        return $months[$ethiopian];
    }
 public function getGregorianMonthDays($month){
        $months = array(
            31,28,31,30,31,30,31,31,30,31,30,31
        );
        return $months[($month-1)];
    }
    /**
     * @var TranslatorInterface
     */
    private $translator;

    public function __construct(TranslatorInterface $translator = null)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new Twig_SimpleFilter('time_diff', array($this, 'diff'), array('needs_environment' => true)),
        );
    }

    /**
     * Filter for converting dates to a time ago string like Facebook and Twitter has.
     *
     * @param Twig_Environment $env  a Twig_Environment instance
     * @param string|DateTime  $date a string or DateTime object to convert
     * @param string|DateTime  $now  A string or DateTime object to compare with. If none given, the current time will be used.
     *
     * @return string the converted time
     */
    public function diff(Twig_Environment $env, $date, $now = null)
    {
        // Convert both dates to DateTime instances.
        $date = twig_date_converter($env, $date);
        $now = twig_date_converter($env, $now);

        // Get the difference between the two DateTime objects.
        $diff = $date->diff($now);

        // Check for each interval if it appears in the $diff object.
        foreach (self::$units as $attribute => $unit) {
            $count = $diff->$attribute;

            if (0 !== $count) {
                return $this->getPluralizedInterval($count, $diff->invert, $unit);
            }
        }

        return '';
    }

    protected function getPluralizedInterval($count, $invert, $unit)
    {
        if ($this->translator) {
            $id = sprintf('diff.%s.%s', $invert ? 'in' : 'ago', $unit);

            return $this->translator->transChoice($id, $count, array('%count%' => $count), 'date');
        }

        if (1 !== $count) {
            $unit .= 's';
        }

        return $invert ? "in $count $unit" : "$count $unit ago";
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'date';
    }
}