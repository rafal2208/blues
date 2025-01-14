<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfFtpPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('csSecurityTaskExtraPlugin');
    $this->enablePlugins('sfProjectAnalyserPlugin');
    $this->enablePlugins('sfMessageWithLayoutPlugin');
    $this->enablePlugins('sfSslRequirementPlugin');
  }
}
