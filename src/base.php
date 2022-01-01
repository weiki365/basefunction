<?php

/*
 *--------------------------------------------------------------------------
 * @function base
 *
 *--------------------------------------------------------------------------
 *
 * @author    weiki
 * @email     happy_gzg@126.com
 * @Licensed  ( http://www.apache.org/licenses/LICENSE-2.0 )
 *--------------------------------------------------------------------------
 */

if (!function_exists('isBetWeen')) {
    /**
     * 判断一个变量是否在什么区间
     *
     * @param
     * @param
     * @param
     * @return boolean
     */
    function isBetWeen($var, $start, $end): bool
    {
        return $var >= $start && $var <= $end;
    }
}

if (!function_exists('isDate')) {
    /**
     * 判断一个字符串是否是时间
     *
     * @param  String
     * @return bool
     */
    function isDate($str): bool
    {
        return is_string($str) && strtotime($str);
    }
}

if (!function_exists('isImplementsInterface')) {
    /**
     * 通过反射检查一个 对象或者类 是否实现一个接口
     *
     * @param  string|object
     * @param  String
     * @return bool
     */
    function isImplementsInterface($object, String $interface): bool
    {
        if (is_object($object)) {
            $className = get_class($object);
        } else {
            $className = $object;
        }

        return class_exists($className) && (new \ReflectionClass($className))->implementsInterface($interface);
    }
}

if (!function_exists('privacyMobileCode')) {
    /**
     * 私隐蔽手机
     *
     * @param  string 手机号码
     * @return string
     */
    function privacyMobileCode(string $code): string
    {
        return substr_replace($code, '*****', 3, 5);
    }
}

if (!function_exists('toConst')) {
    /**
     * 驼峰命名转下划线大写(常量写法)
     *
     * @param  string
     * @return string
     */
    function toConst(string $str): string
    {
        $dstr = preg_replace_callback('/([A-Z]{1})/', function ($matchs) {
            return '_' . strtolower($matchs[0]);
        }, $str);
        $name = trim(preg_replace('/_{2,}/', '_', $dstr), '_');
        return strtoupper($name);
    }
}

if (!function_exists('toDate')) {
    /**
     * 将一个整数值转成特定格式时间
     *
     * YYYY-HH-DD HH:ii:ss
     *
     * @param  int timestamp
     * @return string
     */
    function toDate( ? int $timestamp) : string
    {
        return date('Y-m-d H:i:s', $timestamp);
    }
}

if (!function_exists('toJson')) {
    /**
     * 将一个变量转换成JSON格式
     *
     * YYYY-HH-DD HH:ii:ss
     *
     * @param  int|null|string|array|object $data
     * @return string
     */
    function toJson($data): string
    {
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}

if (!function_exists('xmlToArray')) {
    /**
     * 将一个XML字符串转换成Array
     *
     * @param  string
     * @return array
     */
    function xmlToArray(string $xml): array
    {
        $xml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        return json_decode(json_encode($xml), true);
    }
}
