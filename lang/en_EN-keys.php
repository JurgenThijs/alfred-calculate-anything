<?php

/**
 * Keywords
 * here you can define some keywords and
 * stopwords
 *
 * Keywords explanation:
 * Keywords are words that can be used
 * when writing a query in natural language
 * lets take for example the units array
 * The keys are the words that the user can write
 * and they will be converted to the correct value
 * if the user types:
 * 100 centimeters to meters
 * the code will transform that query to
 * 100 cm to m
 *
 * Stop words explanation:
 * stop words are words that can be used in the query
 * when using natural languge for example
 * 100km to cm - here the stop word is "to"
 *
 * Stop words are used to check if the query
 * has to be processed for example
 * 100km equals meters
 * if the word "equals" is not registered in the stop_words array
 * then it won't be processd.
 * At the end this stop words are removed so
 * 100km to cm becomes 100km cm
 */

return [
    'units' => [
        'hours' => 'hr',
        'hour' => 'hr',
        'seconds' => 's',
        'second' => 's',
        'sec' => 's',
        'minutes' => 'min',
        'minute' => 'min',
        'years' => 'year',
        'y' => 'year',
        'months' => 'month',
        'weeks' => 'week',
        'days' => 'day',
        'kelvin' => 'k',
        'fahrenheits' => 'f',
        'fahrenheit' => 'f',
        'celsius' => 'c',
        'meters' => 'm',
        'meter' => 'm',
        'centimeters' => 'cm',
        'centimeter' => 'cm',
        'kilometers' => 'km',
        'kilometer' => 'km',
        'milimeters' => 'mm',
        'milimeter' => 'mm',
        'micrometers' => 'μm',
        'miles' => 'mi',
        'mile' => 'mi',
        'yards' => 'yd',
        'yard' => 'yd',
        'feets' => 'ft',
        'feet' => 'ft',
        'foots' => 'ft',
        'foot' => 'ft',
        'inches' => 'in',
        'inch' => 'in',
        'liters' => 'l',
        'liter' => 'l',
        'pints' => 'pt',
        'pint' => 'pt',
        'us pints' => 'uspt',
        'us pint' => 'uspt',
        'uspints' => 'uspt',
        'uspint' => 'uspt',
        'uk pints' => 'pt',
        'uk pint' => 'ukpt',
        'ukpints' => 'ukpt',
        'ukpint' => 'ukpt',
        'uk pt' => 'ukpt',
        'ukpt' => 'ukpt',
        'gallons' => 'gal',
        'gallon' => 'gal',
        'grams' => 'g',
        'gram' => 'g',
        'kilograms' => 'kg',
        'kilogram' => 'kg',
        'miligrams' => 'mg',
        'miligram' => 'mg',
        'ounces' => 'oz',
        'ounce' => 'oz',
        'pounds' => 'lb',
        'pound' => 'lb',
        'lbs' => 'lb',
        'fluid ounces' => 'floz',
        'fluid ounce' => 'floz',
        'us gallon' => 'usgal',
        'us gal' => 'usgal',
        'usgallon' => 'usgal',
        'usgal' => 'usgal',
        'uk gallon' => 'ukgal',
        'uk gal' => 'ukgal',
        'ukgallon' => 'ukgal',
        'ukgal' => 'ukgal',

        'stop_words' => ['to', '=', 'in', 'as']
    ],
    'datastorage' => [
        'bytes' => 'b',
        'byte' => 'b',
        'kilobytes' => 'kb',
        'kilobyte' => 'kb',
        'megabytes' => 'mb',
        'megabyte' => 'mb',
        'megas' => 'mb',
        'mega' => 'mb',
        'gigabytes' => 'gb',
        'gigabyte' => 'gb',
        'gigas' => 'gb',
        'giga' => 'gb',
        'terabytes' => 'tb',
        'terabyte' => 'tb',
        'teras' => 'tb',
        'tera' => 'tb',
        'petabytes' => 'pb',
        'petabyte' => 'pb',
        'petas' => 'pb',
        'peta' => 'pb',
        'exabytes' => 'eb',
        'exabyte' => 'eb',
        'exas' => 'eb',
        'exa' => 'eb',
        'zettabytes' => 'zb',
        'zettabyte' => 'zb',
        'zetta' => 'zb',
        'z' => 'zb',
        'yottabytes' => 'yb',
        'yottabyte' => 'yb',
        'yottas' => 'yb',
        'yotta' => 'yb',
        'y' => 'yb',
        'kibibytes' => 'kib',
        'kibibyte' => 'kib',
        'mebibytes' => 'mib',
        'mebibyte' => 'mib',
        'mebis' => 'mib',
        'mebi' => 'mib',
        'gibibytes' => 'gib',
        'gibibyte' => 'gib',
        'gibis' => 'gib',
        'gibi' => 'gib',
        'tebibytes' => 'tib',
        'tebibyte' => 'tib',
        'tebis' => 'tib',
        'tebi' => 'tib',
        'pebibytes' => 'pib',
        'pebibyte' => 'pib',
        'pebis' => 'pib',
        'pebi' => 'pib',
        'exbibytes' => 'eib',
        'exbibyte' => 'eib',
        'exbis' => 'eib',
        'exbi' => 'eib',
        'zebibytes' => 'zib',
        'zebibyte' => 'zib',
        'zebis' => 'zib',
        'zebi' => 'zib',
        'yobibytes' => 'yib',
        'yobibyte' => 'yib',
        'yobis' => 'yib',
        'yobi' => 'yib',

        'stop_words' => ['to', '=', 'in']
    ],
    'time' => [
        'plus' => '+',
        'minus' => '-',
        'tomorrow' => '+1 day',
        'yesterday' => '-1 day',
        'workdays' => 'weekdays',
        'workday' => 'weekdays',
        'wd' => 'weekdays',
        'until' => ['until'],
        'between' => ['between'],
        'start of' => ['start of'],
        'end of' => ['end of'],

        'stop_words' => ['to', '=', 'in']
    ],
    'currency' => [
        '€' => 'EUR',
        'euro' => 'EUR',
        'euros' => 'EUR',
        '¥' => 'JPY',
        'yen' => 'JPY',
        'yens' => 'JPY',
        '$' => 'USD',
        'R$' => 'BRL',
        'лв' => 'BGN',
        '៛' => 'KHR',
        'C¥' => 'CNY',
        '₡' => 'CRC',
        '₱' => 'CUP',
        'Kč' => 'CZK',
        'kr' => 'DKK',
        'RD$' => 'DOP',
        '£' => 'GBP',
        '¢' => 'GHS',
        'Q' => 'GTQ',
        'L' => 'HNL',
        'Ft' => 'HUF',
        'Rp' => 'IDR',
        'rupe' => 'INR',
        'rupee' => 'INR',
        'rupees' => 'INR',
        'rupiah' => 'IDR',
        'us dollars' => 'USD',
        'us dollar' => 'USD',
        'mexican pesos' => 'MXN',
        'mexican peso' => 'MXN',
        'argentinian pesos' => 'ARS',
        'argentinian peso' => 'ARS',
        'argentinian' => 'ARS',
        'colombian pesos' => 'COP',
        'colombian peso' => 'COP',

        'canadian dollars' => 'CAD',
        'canadian dollar' => 'CAD',
        'canadian' => 'CAD',
        '₪' => 'ILS',
        'J$' => 'JMD',
        '₩' => 'KRW',
        'ден' => 'MKD',
        'RM' => 'MYR',
        'MT' => 'MZN',
        'ƒ' => 'ANG',
        'C$' => 'NIO',
        '₦' => 'NGN',
        'B/.' => 'PAB',
        'Gs' => 'PYG',
        'S/.' => 'PEN',
        'TT$' => 'TTD',
        '₴' => 'UAH',
        'Z$' => 'ZWD',
        'dollar' => 'USD',
        'dollars' => 'USD',

        'stop_words' => ['to', '=', 'in', 'as'],
    ],
    'crypto_currency' => [
        'bitcoins' => 'BTC',
        'ether' => 'ETH',
        'etherium' => 'ETH', //mispelled

        'stop_words' => ['to', '=', 'in', 'as'],
    ],
    'percentage' => [
        'plus' => '+',
        'minus' => '-',
        'as a % of' => '%',
        'is what % of' => '%',

        'stop_words' => ['of', 'in']
    ],
    'vat' => [
        'plus' => '+',
        'minus' => '-',
        'tax' => 'VAT',

        'stop_words' => ['of']
    ]
];
