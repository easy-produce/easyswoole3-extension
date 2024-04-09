<?php

namespace Es3\Utility;

/**
 * 时间戳助手
 * Class Time
 * @author  : evalor <master@evalor.cn>
 * @package Es3\Utility
 */
class Time
{
    // TODO 对于时间段维度的数据查询 可以使用时间戳助手 以下待实现

    // TODO 日维度 昨天 今天 明天 前几天 后几天
    // TODO 周维度 上周 本周 下周 前几周 后几周
    // TODO 月维度 上月 本月 下月 前几月 后几月
    // TODO 年维度 前年 今年 明年 前几年 后几年
    // TODO 周 日 时 分 换算成秒
    // TODO 取两日期相隔的秒数 取当前时间到某日期剩余倒计时秒数

    /**
     * 返回某一天开始的时间戳
     * @param string $date 可以传入 字符串日期 时间戳
     * @return bool|false|int
     * @throws \Exception
     * @author : evalor <master@evalor.cn>
     */
    static function startTimestamp($date = '')
    {
        if (!$dateTime = static::parserDateTime($date)) return false;
        return mktime(0, 0, 0, $dateTime[3], $dateTime[4], $dateTime[5]);
    }

    /**
     * 返回某一天结束的时间戳
     * @param string $date 可以传入 字符串日期 时间戳
     * @return bool|false|int
     * @throws \Exception
     * @author : evalor <master@evalor.cn>
     */
    static function endTimestamp($date = '')
    {
        if (!$dateTime = static::parserDateTime($date)) return false;
        return mktime(23, 59, 59, $dateTime[3], $dateTime[4], $dateTime[5]);
    }

    /**
     * 从字符串创建出 Datetime 对象
     * @param string $datetime 传入文本日期或者时间戳
     * @return false|\DateTime
     * @throws \Exception
     * @author : evalor <master@evalor.cn>
     */
    static function createDateTimeClass($datetime = '')
    {
        if (preg_match("/^\d+$/", trim($datetime))) return new \DateTime("@{$datetime}");
        if (!$timestamp = strtotime($datetime)) return false;
        return new \DateTime("@{$timestamp}");
    }

    /**
     * 从DateTime对象中获取年月日时分秒
     * @param \DateTime|string $dateTime 传入文本日期或者时间戳
     * @return array 时 分 秒 月 日 年
     * @throws \Exception
     * @author : evalor <master@evalor.cn>
     */
    static function parserDateTime($dateTime)
    {
        if (!$dateTime instanceof \DateTime) $dateTime = static::createDateTimeClass($dateTime);
        $year = $dateTime->format('Y');
        $day = $dateTime->format('j');
        $month = $dateTime->format('n');
        $hour = $dateTime->format('H');
        $minute = $dateTime->format('i');
        $second = $dateTime->format('s');
        return ['hour' => $hour, 'minute' => $minute, 'second' => $second, 'month' => $month, 'day' => $day, 'year' => $year];
    }

    /**
     * 判断年月日是否合法
     */
    static function isYmd(string $ymd, string $format = '-'): bool
    {
        $timeStamp = strtotime($ymd);
        if ($ymd == (date("Y{$format}m{$format}d", $timeStamp)) || $ymd == (date("Y{$format}m{$format}j", $timeStamp)) || $ymd == (date("Y{$format}n{$format}d", $timeStamp)) || $ymd == (date("Y{$format}n{$format}j", $timeStamp))) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 导入数据验证
     * @param array $validaData
     * @return array
     */
    static function excelDateToYmd(int $excelDate, string $format = 'Y-m-d'): string
    {
        $d = 25569;
        $t = 24 * 60 * 60;

        return strval(gmdate($format, ($excelDate - $d) * $t));
    }
}