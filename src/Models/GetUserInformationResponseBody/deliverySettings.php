<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetUserInformationResponseBody;

use AlibabaCloud\Tea\Model;

class deliverySettings extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $actiontrailDeliveryToOssEnabled;

    /**
     * @example 0101data
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example true
     *
     * @var bool
     */
    public $ossEnabled;

    /**
     * @example 7
     *
     * @var int
     */
    public $ossExpirationDays;

    /**
     * @example /test
     *
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'actiontrailDeliveryToOssEnabled' => 'ActiontrailDeliveryToOssEnabled',
        'ossBucketName'                   => 'OssBucketName',
        'ossEnabled'                      => 'OssEnabled',
        'ossExpirationDays'               => 'OssExpirationDays',
        'ossPath'                         => 'OssPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actiontrailDeliveryToOssEnabled) {
            $res['ActiontrailDeliveryToOssEnabled'] = $this->actiontrailDeliveryToOssEnabled;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossEnabled) {
            $res['OssEnabled'] = $this->ossEnabled;
        }
        if (null !== $this->ossExpirationDays) {
            $res['OssExpirationDays'] = $this->ossExpirationDays;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliverySettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiontrailDeliveryToOssEnabled'])) {
            $model->actiontrailDeliveryToOssEnabled = $map['ActiontrailDeliveryToOssEnabled'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssEnabled'])) {
            $model->ossEnabled = $map['OssEnabled'];
        }
        if (isset($map['OssExpirationDays'])) {
            $model->ossExpirationDays = $map['OssExpirationDays'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}