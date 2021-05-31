<?php

namespace Drupal\mrmilu_device_helper\Twig;

use Twig\Extension\AbstractExtension;
use Drupal\mrmilu_device_helper\DeviceHelperService;
use Twig\TwigFunction;

class DeviceHelperTwigExtension extends AbstractExtension {

  /**
   * The device helper service
   *
   * @var DeviceHelperService
   */
  protected $deviceHelper;

  public function __construct(DeviceHelperService $device_helper) {
    $this->deviceHelper = $device_helper;
  }

  public function getName() {
    return 'device_helper';
  }

  public function getFunctions() {
    return [
      new TwigFunction('get_current_device', [$this, 'getCurrentDevice']),
      new TwigFunction('is_desktop', [$this, 'isDesktop']),
      new TwigFunction('is_tablet', [$this, 'isTablet']),
      new TwigFunction('is_mobile', [$this, 'isMobile']),
    ];
  }

  /**
   * @return string
   * The device type string ("desktop", "tablet" or "mobile"
   */
  public function getCurrentDevice() {
    return $this->deviceHelper->getCurrentDevice();
  }

  /**
   * @return bool
   */
  public function isDesktop() {
    return $this->deviceHelper->isDesktop();
  }

  /**
   * @return bool
   */
  public function istablet() {
    return $this->deviceHelper->isTablet();
  }

  /**
   * @return bool
   */
  public function isMobile() {
    return $this->deviceHelper->isMobile();
  }
}
