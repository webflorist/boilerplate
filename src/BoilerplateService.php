<?php

namespace Webflorist\Boilerplate;

/**
 * The main service-class of this package.
 *
 * Class BoilerplateService
 * @package Webflorist\Boilerplate
 *
 */
class BoilerplateService
{

    public function getCountryList(string $locale = null): array
    {
        if (is_null($locale)) {
            $locale = app()->getLocale();
        }
        $vendorFolder = $this->getVendorFolder();
        return include "$vendorFolder/umpirsky/country-list/data/$locale/country.php";
    }

    public function getCountryName(string $countryCode, ?string $locale = null): string
    {
        return $this->getCountryList($locale)[$countryCode];
    }

    public function getLanguageList(string $locale = null): array
    {
        if (is_null($locale)) {
            $locale = app()->getLocale();
        }
        $vendorFolder = $this->getVendorFolder();
        return include "$vendorFolder/umpirsky/language-list/data/$locale/language.php";
    }

    public function getLanguageName(string $languageLocale, string $resultLocale = null): string
    {
        return $this->getLanguageList($resultLocale)[$languageLocale];
    }

    public function formatNumber(int $number, int $decimals = 0): string
    {
        $locale = app()->getLocale();
        $decPoint = ($locale === 'de') ? ',' : '.';
        $thousandsSep = ($locale === 'de') ? '.' : ',';
        return number_format($number, $decimals, $decPoint, $thousandsSep);
    }

    public function mapContextToIcon(string $context) {
        $contextIconMapping = [
            'success' => 'check-circle',
            'info' => 'info-circle',
            'danger' => 'exclamation-circle'
        ];
        if (isset($contextIconMapping[$context])) {
            return $contextIconMapping[$context];
        }
        return 'info-circle';
    }

    public function mapContextToColor(string $context) {
        $contextColorMapping = [
            'success' => 'green',
            'info' => 'blue',
            'danger' => 'red',
            'warning' => 'orange'
        ];
        if (isset($contextColorMapping[$context])) {
            return $contextColorMapping[$context];
        }
        return 'blue';
    }

    /**
     * @return string
     */
    private function getVendorFolder(): string
    {
        $vendorFolder = base_path('vendor');
        if ($this->isPackageTest()) {
            $vendorFolder = dirname(__DIR__) . '/vendor';
        }
        return $vendorFolder;
    }

    /**
     * @return bool
     */
    private function isPackageTest(): bool
    {
        if (app()->environment() !== 'testing') {
            return false;
        }

        return base_path('vendor/webflorist/boilerplate') !== dirname(__DIR__);

    }

}
