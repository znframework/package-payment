<?php namespace ZN\Payment;

class Currency
{
    /**
     * Currency short code list.
     * 
     * @var array
     */
    protected static $list = 
    [
        'USN' => 997,
        'XSU' => 994,
        'CLF' => 990,
        'BRL' => 986,
        'PLN' => 985,
        'BOV' => 984,
        'GEL' => 981,
        'UAH' => 980,
        'MXV' => 979,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'EUR' => 978,
        'BAM' => 977,
        'CDF' => 976,
        'BGN' => 975,
        'BYR' => 974,
        'AOA' => 973,
        'TJS' => 972,
        'AFN' => 971,
        'COU' => 970,
        'MGA' => 969,
        'SRD' => 968,
        'ZMW' => 967,
        'XUA' => 965,
        'XDR' => 960,
        'XPF' => 953,
        'XPF' => 953,
        'XPF' => 953,
        'XOF' => 952,
        'XOF' => 952,
        'XOF' => 952,
        'XOF' => 952,
        'XOF' => 952,
        'XOF' => 952,
        'XOF' => 952,
        'XOF' => 952,
        'XCD' => 951,
        'XCD' => 951,
        'XCD' => 951,
        'XCD' => 951,
        'XCD' => 951,
        'XCD' => 951,
        'XCD' => 951,
        'XCD' => 951,
        'XAF' => 950,
        'XAF' => 950,
        'XAF' => 950,
        'XAF' => 950,
        'XAF' => 950,
        'XAF' => 950,
        'TRY' => 949,
        'CHW' => 948,
        'CHE' => 947,
        'RON' => 946,
        'AZN' => 944,
        'MZN' => 943,
        'RSD' => 941,
        'UYI' => 940,
        'SDG' => 938,
        'VEF' => 937,
        'GHS' => 936,
        'TMT' => 934,
        'ZWL' => 932,
        'CUC' => 931,
        'TWD' => 901,
        'YER' => 886,
        'WST' => 882,
        'UZS' => 860,
        'UYU' => 858,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'USD' => 840,
        'TZS' => 834,
        'GBP' => 826,
        'GBP' => 826,
        'GBP' => 826,
        'GBP' => 826,
        'EGP' => 818,
        'MKD' => 807,
        'UGX' => 800,
        'TND' => 788,
        'AED' => 784,
        'TTD' => 780,
        'TOP' => 776,
        'THB' => 764,
        'SYP' => 760,
        'CHF' => 756,
        'CHF' => 756,
        'SEK' => 752,
        'SZL' => 748,
        'SSP' => 728,
        'ZAR' => 710,
        'ZAR' => 710,
        'ZAR' => 710,
        'SOS' => 706,
        'VND' => 704,
        'SGD' => 702,
        'SLL' => 694,
        'SCR' => 690,
        'SAR' => 682,
        'STN' => 678,
        'SHP' => 654,
        'RWF' => 646,
        'RUB' => 643,
        'QAR' => 634,
        'PHP' => 608,
        'PEN' => 604,
        'PYG' => 600,
        'PGK' => 598,
        'PAB' => 590,
        'PKR' => 586,
        'NOK' => 578,
        'NOK' => 578,
        'NOK' => 578,
        'NGN' => 566,
        'NIO' => 558,
        'NZD' => 554,
        'NZD' => 554,
        'NZD' => 554,
        'NZD' => 554,
        'NZD' => 554,
        'VUV' => 548,
        'AWG' => 533,
        'ANG' => 532,
        'ANG' => 532,
        'NPR' => 524,
        'NAD' => 516,
        'OMR' => 512,
        'MAD' => 504,
        'MAD' => 504,
        'MDL' => 498,
        'MNT' => 496,
        'MXN' => 484,
        'MUR' => 480,
        'MRU' => 478,
        'MVR' => 462,
        'MYR' => 458,
        'MWK' => 454,
        'MOP' => 446,
        'LYD' => 434,
        'LRD' => 430,
        'LSL' => 426,
        'LBP' => 422,
        'LAK' => 418,
        'KGS' => 417,
        'KWD' => 414,
        'KRW' => 410,
        'KPW' => 408,
        'KES' => 404,
        'JOD' => 400,
        'KZT' => 398,
        'JPY' => 392,
        'JMD' => 388,
        'ILS' => 376,
        'IQD' => 368,
        'IRR' => 364,
        'IDR' => 360,
        'INR' => 356,
        'INR' => 356,
        'ISK' => 352,
        'HUF' => 348,
        'HKD' => 344,
        'HNL' => 340,
        'HTG' => 332,
        'GYD' => 328,
        'GNF' => 324,
        'GTQ' => 320,
        'GIP' => 292,
        'GMD' => 270,
        'DJF' => 262,
        'FJD' => 242,
        'FKP' => 238,
        'ERN' => 232,
        'ETB' => 230,
        'SVC' => 222,
        'DOP' => 214,
        'DKK' => 208,
        'DKK' => 208,
        'DKK' => 208,
        'CZK' => 203,
        'CUP' => 192,
        'HRK' => 191,
        'CRC' => 188,
        'KMF' => 174,
        'COP' => 170,
        'CNY' => 156,
        'CLP' => 152,
        'LKR' => 144,
        'KYD' => 136,
        'CVE' => 132,
        'CAD' => 124,
        'KHR' => 116,
        'BIF' => 108,
        'MMK' => 104,
        'BND' => 96,
        'SBD' => 90,
        'BZD' => 84,
        'BWP' => 72,
        'BOB' => 68,
        'BTN' => 64,
        'BMD' => 60,
        'BBD' => 52,
        'AMD' => 51,
        'BDT' => 50,
        'BHD' => 48,
        'BSD' => 44,
        'AUD' => 36,
        'AUD' => 36,
        'AUD' => 36,
        'AUD' => 36,
        'AUD' => 36,
        'AUD' => 36,
        'AUD' => 36,
        'AUD' => 36,
        'ARS' => 32,
        'DZD' => 12,
        'ALL' => 8  
    ];

    /**
     * Get currency
     * 
     * @return 
     */
    public static function get($short)
    {
        if( is_numeric($short) && in_array($short, self::$list) )
        {
            return $short;
        }
        elseif( $currency = (self::$list[strtoupper($short)] ?? NULL) )
        {
            return $currency;
        }

        throw new Exception\InvalidCurrencyInformationException(NULL, $short);
    }
}