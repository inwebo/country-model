<?php

namespace Inwebo\Geolocation\Country\Model;

/**
 * ISO 3166-1 (Codes for the representation of names of countries and their subdivisions – Part 1: Country code) is a
 * standard defining codes for the names of countries, dependent territories, and special areas of geographical interest.
 * It is the first part of the ISO 3166 standard published by the International Organization for Standardization.
 */
interface CountryInterface
{
    /**
     * Country Name – English (or French) short name (all upper-case).
     */
    public function getName(): string;

    /**
     * English (or French) short name lower case (title case).
     */
    public function getShortName(): string;

    /**
     * English (or French) full name.
     */
    public function getFullName(): string;

    /**
     * ISO 3166-1 alpha-2 codes are two-letter country codes defined in ISO 3166-1, part of the ISO 3166 standard
     * published by the International Organization for Standardization (ISO), to represent countries, dependent territories,
     * and special areas of geographical interest.
     */
    public function getAlpha2(): string;

    /**
     * ISO 3166-1 alpha-3 codes are three-letter country codes defined in ISO 3166-1, part of the ISO 3166 standard
     * published by the International Organization for Standardization (ISO), to represent countries, dependent territories,
     * and special areas of geographical interest.
     */
    public function getAlpha3(): string;

    /**
     * ISO 3166-1 numeric (or numeric-3) codes are three-digit country codes defined in ISO 3166-1, part of the ISO 3166
     * standard published by the International Organization for Standardization (ISO), to represent countries,
     * dependent territories, and special areas of geographical interest.
     */
    public function getNumericCode(): string;

    /**
     * Additional remarks on the territory's status.
     */
    public function getRemarks(): ?string;

    /**
     * Indicates if the country is independent.
     */
    public function isIndependent(): bool;
}
