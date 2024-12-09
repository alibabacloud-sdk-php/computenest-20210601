<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceInstancesLogs extends Model
{
    /**
     * @description Compliance package risk types. For example, data security checks within a VPC, such as VpcDataRisk
     *
     * @example VpcDataRisk
     *
     * @var string
     */
    public $compliancePackType;

    /**
     * @description Specific risk rule names for the compliance package. For example, ECS instance migration out of VPC - ecs-move-out-vpc.
     *
     * @example ecs-move-out-vpc
     *
     * @var string
     */
    public $complianceRuleName;

    /**
     * @description The log content.
     *
     * @example Start creating service instance
     *
     * @var string
     */
    public $content;

    /**
     * @description The log type. Valid values:
     *
     *   serviceInstance: log generated by the service instance.
     *   resource: log generated by ROS resources.
     *
     * @example serviceInstance
     *
     * @var string
     */
    public $logType;

    /**
     * @description The resource ID.
     *
     * @example si-5c6525c0589545c3****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * @example ROS.Stack
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The source of the service instance log. Valid values:
     *
     * actionTrail: logs generated by ActionTrail.
     * @example computeNest
     *
     * @var string
     */
    public $source;

    /**
     * @description The state of the service instance. Valid values:
     *
     *   Creating: The service instance is being created.
     *   Created: The service instance is created.
     *   Deploying: The service instance is being deployed.
     *   Deployed: The service instance is deployed.
     *   DeployedFailed: The service instance failed to be deployed.
     *   Expired: The service instance expired.
     *   ExtendSuccess: The service instance is renewed.
     *   Upgrading: The service instance is being updated.
     *   UpgradeSuccess: The service instance is updated.
     *
     * @example Creating
     *
     * @var string
     */
    public $status;

    /**
     * @description The timestamp of the service instance log.
     *
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'compliancePackType' => 'CompliancePackType',
        'complianceRuleName' => 'ComplianceRuleName',
        'content'            => 'Content',
        'logType'            => 'LogType',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
        'source'             => 'Source',
        'status'             => 'Status',
        'timestamp'          => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackType) {
            $res['CompliancePackType'] = $this->compliancePackType;
        }
        if (null !== $this->complianceRuleName) {
            $res['ComplianceRuleName'] = $this->complianceRuleName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInstancesLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackType'])) {
            $model->compliancePackType = $map['CompliancePackType'];
        }
        if (isset($map['ComplianceRuleName'])) {
            $model->complianceRuleName = $map['ComplianceRuleName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
