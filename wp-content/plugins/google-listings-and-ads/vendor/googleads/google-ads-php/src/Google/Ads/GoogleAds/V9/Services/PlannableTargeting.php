<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The targeting for which traffic metrics will be reported.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.PlannableTargeting</code>
 */
class PlannableTargeting extends \Google\Protobuf\Internal\Message
{
    /**
     * Allowed plannable age ranges for the product for which metrics will be
     * reported. Actual targeting is computed by mapping this age range onto
     * standard Google common.AgeRangeInfo values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange age_ranges = 1;</code>
     */
    private $age_ranges;
    /**
     * Targetable genders for the ad product.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.GenderInfo genders = 2;</code>
     */
    private $genders;
    /**
     * Targetable devices for the ad product.
     * TABLET device targeting is automatically applied to reported metrics
     * when MOBILE targeting is selected for CPM_MASTHEAD,
     * GOOGLE_PREFERRED_BUMPER and GOOGLE_PREFERRED_SHORT products.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.DeviceInfo devices = 3;</code>
     */
    private $devices;
    /**
     * Targetable networks for the ad product.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ReachPlanNetworkEnum.ReachPlanNetwork networks = 4;</code>
     */
    private $networks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $age_ranges
     *           Allowed plannable age ranges for the product for which metrics will be
     *           reported. Actual targeting is computed by mapping this age range onto
     *           standard Google common.AgeRangeInfo values.
     *     @type \Google\Ads\GoogleAds\V9\Common\GenderInfo[]|\Google\Protobuf\Internal\RepeatedField $genders
     *           Targetable genders for the ad product.
     *     @type \Google\Ads\GoogleAds\V9\Common\DeviceInfo[]|\Google\Protobuf\Internal\RepeatedField $devices
     *           Targetable devices for the ad product.
     *           TABLET device targeting is automatically applied to reported metrics
     *           when MOBILE targeting is selected for CPM_MASTHEAD,
     *           GOOGLE_PREFERRED_BUMPER and GOOGLE_PREFERRED_SHORT products.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $networks
     *           Targetable networks for the ad product.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Allowed plannable age ranges for the product for which metrics will be
     * reported. Actual targeting is computed by mapping this age range onto
     * standard Google common.AgeRangeInfo values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange age_ranges = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAgeRanges()
    {
        return $this->age_ranges;
    }

    /**
     * Allowed plannable age ranges for the product for which metrics will be
     * reported. Actual targeting is computed by mapping this age range onto
     * standard Google common.AgeRangeInfo values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange age_ranges = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAgeRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V9\Enums\ReachPlanAgeRangeEnum\ReachPlanAgeRange::class);
        $this->age_ranges = $arr;

        return $this;
    }

    /**
     * Targetable genders for the ad product.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.GenderInfo genders = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGenders()
    {
        return $this->genders;
    }

    /**
     * Targetable genders for the ad product.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.GenderInfo genders = 2;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\GenderInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGenders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\GenderInfo::class);
        $this->genders = $arr;

        return $this;
    }

    /**
     * Targetable devices for the ad product.
     * TABLET device targeting is automatically applied to reported metrics
     * when MOBILE targeting is selected for CPM_MASTHEAD,
     * GOOGLE_PREFERRED_BUMPER and GOOGLE_PREFERRED_SHORT products.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.DeviceInfo devices = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Targetable devices for the ad product.
     * TABLET device targeting is automatically applied to reported metrics
     * when MOBILE targeting is selected for CPM_MASTHEAD,
     * GOOGLE_PREFERRED_BUMPER and GOOGLE_PREFERRED_SHORT products.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.DeviceInfo devices = 3;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\DeviceInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\DeviceInfo::class);
        $this->devices = $arr;

        return $this;
    }

    /**
     * Targetable networks for the ad product.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ReachPlanNetworkEnum.ReachPlanNetwork networks = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * Targetable networks for the ad product.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ReachPlanNetworkEnum.ReachPlanNetwork networks = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V9\Enums\ReachPlanNetworkEnum\ReachPlanNetwork::class);
        $this->networks = $arr;

        return $this;
    }

}
