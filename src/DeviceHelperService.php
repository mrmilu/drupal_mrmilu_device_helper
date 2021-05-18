<?php

namespace Drupal\mrmilu_device_helper\Helper;

use Mobile_Detect;

class DeviceHelperService {

  const DEVICE_MOBILE = 'mobile';
  const DEVICE_DESKTOP = 'desktop';
  const DEVICE_TABLET = 'tablet';

  protected $currentDevice = NULL;

  public function __construct() {
    $detect = new Mobile_Detect();
    if ($detect->isTablet()) {
      $this->currentDevice = self::DEVICE_TABLET;
    }
    elseif ($detect->isMobile()) {
      $this->currentDevice = self::DEVICE_MOBILE;
    }
    else {
      $this->currentDevice = self::DEVICE_DESKTOP;
    }
  }

  public function getCurrentDevice() {
    return $this->currentDevice;
  }

  public function isDesktop() {
    return $this->currentDevice == self::DEVICE_DESKTOP;
  }

  public function isTablet() {
    return $this->currentDevice == self::DEVICE_TABLET;
  }

  public function isMobile() {
    return $this->currentDevice == self::DEVICE_MOBILE;
  }
}
