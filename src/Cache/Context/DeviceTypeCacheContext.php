<?php

namespace Drupal\mrmilu_device_helper\Cache\Context;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Cache\Context\CacheContextInterface;
use Drupal\mrmilu_device_helper\Helper\DeviceHelperService;

class DeviceTypeCacheContext implements CacheContextInterface {

  /**
   * The device helper service
   *
   * @var DeviceHelperService
   */
  protected $deviceHelper;

  public function __construct(DeviceHelperService $device_helper) {
    $this->deviceHelper = $device_helper;
  }

  public static function getLabel() {
    return t("Device type");
  }

  public function getContext() {
    return $this->deviceHelper->getCurrentDevice();
  }

  public function getCacheableMetadata() {
    return new CacheableMetadata();
  }
}
