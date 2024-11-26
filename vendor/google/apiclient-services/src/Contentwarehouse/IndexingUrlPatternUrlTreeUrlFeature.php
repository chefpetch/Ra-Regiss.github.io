<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class IndexingUrlPatternUrlTreeUrlFeature extends \Google\Model
{
  /**
   * @var string
   */
  public $fingerprint;
  /**
   * @var bool
   */
  public $fingerprintWithGroupInType;
  /**
   * @var string
   */
  public $groupInType;
  /**
   * @var string
   */
  public $type;
  /**
   * @var string
   */
  public $value;

  /**
   * @param string
   */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /**
   * @return string
   */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /**
   * @param bool
   */
  public function setFingerprintWithGroupInType($fingerprintWithGroupInType)
  {
    $this->fingerprintWithGroupInType = $fingerprintWithGroupInType;
  }
  /**
   * @return bool
   */
  public function getFingerprintWithGroupInType()
  {
    return $this->fingerprintWithGroupInType;
  }
  /**
   * @param string
   */
  public function setGroupInType($groupInType)
  {
    $this->groupInType = $groupInType;
  }
  /**
   * @return string
   */
  public function getGroupInType()
  {
    return $this->groupInType;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param string
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IndexingUrlPatternUrlTreeUrlFeature::class, 'Google_Service_Contentwarehouse_IndexingUrlPatternUrlTreeUrlFeature');
