<?php return [
  'metadata' => [
    'apiVersion' => '2014-10-17',
    'endpointPrefix' => 'config',
    'jsonVersion' => '1.1',
    'serviceAbbreviation' => 'Config Service',
    'serviceFullName' => 'AWS Config',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'StarlingDoveService',
    'protocol' => 'json',
  ],
  'operations' => [
    'DeleteDeliveryChannel' => [
      'name' => 'DeleteDeliveryChannel',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteDeliveryChannelRequest',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDeliveryChannelException',
          'exception' => true,
        ],
        [
          'shape' => 'LastDeliveryChannelDeleteFailedException',
          'exception' => true,
        ],
      ],
    ],
    'DeliverConfigSnapshot' => [
      'name' => 'DeliverConfigSnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeliverConfigSnapshotRequest',
      ],
      'output' => [
        'shape' => 'DeliverConfigSnapshotResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDeliveryChannelException',
          'exception' => true,
        ],
        [
          'shape' => 'NoAvailableConfigurationRecorderException',
          'exception' => true,
        ],
        [
          'shape' => 'NoRunningConfigurationRecorderException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeConfigurationRecorderStatus' => [
      'name' => 'DescribeConfigurationRecorderStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeConfigurationRecorderStatusRequest',
      ],
      'output' => [
        'shape' => 'DescribeConfigurationRecorderStatusResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchConfigurationRecorderException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeConfigurationRecorders' => [
      'name' => 'DescribeConfigurationRecorders',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeConfigurationRecordersRequest',
      ],
      'output' => [
        'shape' => 'DescribeConfigurationRecordersResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchConfigurationRecorderException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeDeliveryChannelStatus' => [
      'name' => 'DescribeDeliveryChannelStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeDeliveryChannelStatusRequest',
      ],
      'output' => [
        'shape' => 'DescribeDeliveryChannelStatusResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDeliveryChannelException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeDeliveryChannels' => [
      'name' => 'DescribeDeliveryChannels',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeDeliveryChannelsRequest',
      ],
      'output' => [
        'shape' => 'DescribeDeliveryChannelsResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDeliveryChannelException',
          'exception' => true,
        ],
      ],
    ],
    'GetResourceConfigHistory' => [
      'name' => 'GetResourceConfigHistory',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetResourceConfigHistoryRequest',
      ],
      'output' => [
        'shape' => 'GetResourceConfigHistoryResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTimeRangeException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidLimitException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidNextTokenException',
          'exception' => true,
        ],
        [
          'shape' => 'NoAvailableConfigurationRecorderException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotDiscoveredException',
          'exception' => true,
        ],
      ],
    ],
    'PutConfigurationRecorder' => [
      'name' => 'PutConfigurationRecorder',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutConfigurationRecorderRequest',
      ],
      'errors' => [
        [
          'shape' => 'MaxNumberOfConfigurationRecordersExceededException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidConfigurationRecorderNameException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRoleException',
          'exception' => true,
        ],
      ],
    ],
    'PutDeliveryChannel' => [
      'name' => 'PutDeliveryChannel',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutDeliveryChannelRequest',
      ],
      'errors' => [
        [
          'shape' => 'MaxNumberOfDeliveryChannelsExceededException',
          'exception' => true,
        ],
        [
          'shape' => 'NoAvailableConfigurationRecorderException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeliveryChannelNameException',
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchBucketException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidS3KeyPrefixException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSNSTopicARNException',
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientDeliveryPolicyException',
          'exception' => true,
        ],
      ],
    ],
    'StartConfigurationRecorder' => [
      'name' => 'StartConfigurationRecorder',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StartConfigurationRecorderRequest',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchConfigurationRecorderException',
          'exception' => true,
        ],
        [
          'shape' => 'NoAvailableDeliveryChannelException',
          'exception' => true,
        ],
      ],
    ],
    'StopConfigurationRecorder' => [
      'name' => 'StopConfigurationRecorder',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StopConfigurationRecorderRequest',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchConfigurationRecorderException',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'ARN' => [
      'type' => 'string',
    ],
    'AccountId' => [
      'type' => 'string',
    ],
    'AvailabilityZone' => [
      'type' => 'string',
    ],
    'Boolean' => [
      'type' => 'boolean',
    ],
    'ChannelName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'ChronologicalOrder' => [
      'type' => 'string',
      'enum' => [
        'Reverse',
        'Forward',
      ],
    ],
    'ConfigExportDeliveryInfo' => [
      'type' => 'structure',
      'members' => [
        'lastStatus' => [
          'shape' => 'DeliveryStatus',
        ],
        'lastErrorCode' => [
          'shape' => 'String',
        ],
        'lastErrorMessage' => [
          'shape' => 'String',
        ],
        'lastAttemptTime' => [
          'shape' => 'Date',
        ],
        'lastSuccessfulTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'ConfigStreamDeliveryInfo' => [
      'type' => 'structure',
      'members' => [
        'lastStatus' => [
          'shape' => 'DeliveryStatus',
        ],
        'lastErrorCode' => [
          'shape' => 'String',
        ],
        'lastErrorMessage' => [
          'shape' => 'String',
        ],
        'lastStatusChangeTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'Configuration' => [
      'type' => 'string',
    ],
    'ConfigurationItem' => [
      'type' => 'structure',
      'members' => [
        'version' => [
          'shape' => 'Version',
        ],
        'accountId' => [
          'shape' => 'AccountId',
        ],
        'configurationItemCaptureTime' => [
          'shape' => 'ConfigurationItemCaptureTime',
        ],
        'configurationItemStatus' => [
          'shape' => 'ConfigurationItemStatus',
        ],
        'configurationStateId' => [
          'shape' => 'ConfigurationStateId',
        ],
        'configurationItemMD5Hash' => [
          'shape' => 'ConfigurationItemMD5Hash',
        ],
        'arn' => [
          'shape' => 'ARN',
        ],
        'resourceType' => [
          'shape' => 'ResourceType',
        ],
        'resourceId' => [
          'shape' => 'ResourceId',
        ],
        'availabilityZone' => [
          'shape' => 'AvailabilityZone',
        ],
        'resourceCreationTime' => [
          'shape' => 'ResourceCreationTime',
        ],
        'tags' => [
          'shape' => 'Tags',
        ],
        'relatedEvents' => [
          'shape' => 'RelatedEventList',
        ],
        'relationships' => [
          'shape' => 'RelationshipList',
        ],
        'configuration' => [
          'shape' => 'Configuration',
        ],
      ],
    ],
    'ConfigurationItemCaptureTime' => [
      'type' => 'timestamp',
    ],
    'ConfigurationItemList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationItem',
      ],
    ],
    'ConfigurationItemMD5Hash' => [
      'type' => 'string',
    ],
    'ConfigurationItemStatus' => [
      'type' => 'string',
      'enum' => [
        'Ok',
        'Failed',
        'Discovered',
        'Deleted',
      ],
    ],
    'ConfigurationRecorder' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'RecorderName',
        ],
        'roleARN' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ConfigurationRecorderList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationRecorder',
      ],
    ],
    'ConfigurationRecorderNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RecorderName',
      ],
    ],
    'ConfigurationRecorderStatus' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'String',
        ],
        'lastStartTime' => [
          'shape' => 'Date',
        ],
        'lastStopTime' => [
          'shape' => 'Date',
        ],
        'recording' => [
          'shape' => 'Boolean',
        ],
        'lastStatus' => [
          'shape' => 'RecorderStatus',
        ],
        'lastErrorCode' => [
          'shape' => 'String',
        ],
        'lastErrorMessage' => [
          'shape' => 'String',
        ],
        'lastStatusChangeTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'ConfigurationRecorderStatusList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationRecorderStatus',
      ],
    ],
    'ConfigurationStateId' => [
      'type' => 'string',
    ],
    'Date' => [
      'type' => 'timestamp',
    ],
    'DeleteDeliveryChannelRequest' => [
      'type' => 'structure',
      'required' => [
        'DeliveryChannelName',
      ],
      'members' => [
        'DeliveryChannelName' => [
          'shape' => 'ChannelName',
        ],
      ],
    ],
    'DeliverConfigSnapshotRequest' => [
      'type' => 'structure',
      'required' => [
        'deliveryChannelName',
      ],
      'members' => [
        'deliveryChannelName' => [
          'shape' => 'ChannelName',
        ],
      ],
    ],
    'DeliverConfigSnapshotResponse' => [
      'type' => 'structure',
      'members' => [
        'configSnapshotId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeliveryChannel' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'ChannelName',
        ],
        's3BucketName' => [
          'shape' => 'String',
        ],
        's3KeyPrefix' => [
          'shape' => 'String',
        ],
        'snsTopicARN' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeliveryChannelList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeliveryChannel',
      ],
    ],
    'DeliveryChannelNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ChannelName',
      ],
    ],
    'DeliveryChannelStatus' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'String',
        ],
        'configSnapshotDeliveryInfo' => [
          'shape' => 'ConfigExportDeliveryInfo',
        ],
        'configHistoryDeliveryInfo' => [
          'shape' => 'ConfigExportDeliveryInfo',
        ],
        'configStreamDeliveryInfo' => [
          'shape' => 'ConfigStreamDeliveryInfo',
        ],
      ],
    ],
    'DeliveryChannelStatusList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeliveryChannelStatus',
      ],
    ],
    'DeliveryStatus' => [
      'type' => 'string',
      'enum' => [
        'Success',
        'Failure',
      ],
    ],
    'DescribeConfigurationRecorderStatusRequest' => [
      'type' => 'structure',
      'members' => [
        'ConfigurationRecorderNames' => [
          'shape' => 'ConfigurationRecorderNameList',
        ],
      ],
    ],
    'DescribeConfigurationRecorderStatusResponse' => [
      'type' => 'structure',
      'members' => [
        'ConfigurationRecordersStatus' => [
          'shape' => 'ConfigurationRecorderStatusList',
        ],
      ],
    ],
    'DescribeConfigurationRecordersRequest' => [
      'type' => 'structure',
      'members' => [
        'ConfigurationRecorderNames' => [
          'shape' => 'ConfigurationRecorderNameList',
        ],
      ],
    ],
    'DescribeConfigurationRecordersResponse' => [
      'type' => 'structure',
      'members' => [
        'ConfigurationRecorders' => [
          'shape' => 'ConfigurationRecorderList',
        ],
      ],
    ],
    'DescribeDeliveryChannelStatusRequest' => [
      'type' => 'structure',
      'members' => [
        'DeliveryChannelNames' => [
          'shape' => 'DeliveryChannelNameList',
        ],
      ],
    ],
    'DescribeDeliveryChannelStatusResponse' => [
      'type' => 'structure',
      'members' => [
        'DeliveryChannelsStatus' => [
          'shape' => 'DeliveryChannelStatusList',
        ],
      ],
    ],
    'DescribeDeliveryChannelsRequest' => [
      'type' => 'structure',
      'members' => [
        'DeliveryChannelNames' => [
          'shape' => 'DeliveryChannelNameList',
        ],
      ],
    ],
    'DescribeDeliveryChannelsResponse' => [
      'type' => 'structure',
      'members' => [
        'DeliveryChannels' => [
          'shape' => 'DeliveryChannelList',
        ],
      ],
    ],
    'EarlierTime' => [
      'type' => 'timestamp',
    ],
    'GetResourceConfigHistoryRequest' => [
      'type' => 'structure',
      'required' => [
        'resourceType',
        'resourceId',
      ],
      'members' => [
        'resourceType' => [
          'shape' => 'ResourceType',
        ],
        'resourceId' => [
          'shape' => 'ResourceId',
        ],
        'laterTime' => [
          'shape' => 'LaterTime',
        ],
        'earlierTime' => [
          'shape' => 'EarlierTime',
        ],
        'chronologicalOrder' => [
          'shape' => 'ChronologicalOrder',
        ],
        'limit' => [
          'shape' => 'Limit',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'GetResourceConfigHistoryResponse' => [
      'type' => 'structure',
      'members' => [
        'configurationItems' => [
          'shape' => 'ConfigurationItemList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'InsufficientDeliveryPolicyException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidConfigurationRecorderNameException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidDeliveryChannelNameException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidLimitException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidNextTokenException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidRoleException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidS3KeyPrefixException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidSNSTopicARNException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidTimeRangeException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'LastDeliveryChannelDeleteFailedException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'LaterTime' => [
      'type' => 'timestamp',
    ],
    'Limit' => [
      'type' => 'integer',
      'min' => 0,
      'max' => 100,
    ],
    'MaxNumberOfConfigurationRecordersExceededException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'MaxNumberOfDeliveryChannelsExceededException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'Name' => [
      'type' => 'string',
    ],
    'NextToken' => [
      'type' => 'string',
    ],
    'NoAvailableConfigurationRecorderException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'NoAvailableDeliveryChannelException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'NoRunningConfigurationRecorderException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'NoSuchBucketException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'NoSuchConfigurationRecorderException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'NoSuchDeliveryChannelException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'PutConfigurationRecorderRequest' => [
      'type' => 'structure',
      'required' => [
        'ConfigurationRecorder',
      ],
      'members' => [
        'ConfigurationRecorder' => [
          'shape' => 'ConfigurationRecorder',
        ],
      ],
    ],
    'PutDeliveryChannelRequest' => [
      'type' => 'structure',
      'required' => [
        'DeliveryChannel',
      ],
      'members' => [
        'DeliveryChannel' => [
          'shape' => 'DeliveryChannel',
        ],
      ],
    ],
    'RecorderName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'RecorderStatus' => [
      'type' => 'string',
      'enum' => [
        'Pending',
        'Success',
        'Failure',
      ],
    ],
    'RelatedEvent' => [
      'type' => 'string',
    ],
    'RelatedEventList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RelatedEvent',
      ],
    ],
    'Relationship' => [
      'type' => 'structure',
      'members' => [
        'resourceType' => [
          'shape' => 'ResourceType',
        ],
        'resourceId' => [
          'shape' => 'ResourceId',
        ],
        'relationshipName' => [
          'shape' => 'RelationshipName',
        ],
      ],
    ],
    'RelationshipList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Relationship',
      ],
    ],
    'RelationshipName' => [
      'type' => 'string',
    ],
    'ResourceCreationTime' => [
      'type' => 'timestamp',
    ],
    'ResourceId' => [
      'type' => 'string',
    ],
    'ResourceNotDiscoveredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'ResourceType' => [
      'type' => 'string',
      'enum' => [
        'AWS::EC2::CustomerGateway',
        'AWS::EC2::EIP',
        'AWS::EC2::Instance',
        'AWS::EC2::InternetGateway',
        'AWS::EC2::NetworkAcl',
        'AWS::EC2::NetworkInterface',
        'AWS::EC2::RouteTable',
        'AWS::EC2::SecurityGroup',
        'AWS::EC2::Subnet',
        'AWS::CloudTrail::Trail',
        'AWS::EC2::Volume',
        'AWS::EC2::VPC',
        'AWS::EC2::VPNConnection',
        'AWS::EC2::VPNGateway',
      ],
    ],
    'StartConfigurationRecorderRequest' => [
      'type' => 'structure',
      'required' => [
        'ConfigurationRecorderName',
      ],
      'members' => [
        'ConfigurationRecorderName' => [
          'shape' => 'RecorderName',
        ],
      ],
    ],
    'StopConfigurationRecorderRequest' => [
      'type' => 'structure',
      'required' => [
        'ConfigurationRecorderName',
      ],
      'members' => [
        'ConfigurationRecorderName' => [
          'shape' => 'RecorderName',
        ],
      ],
    ],
    'String' => [
      'type' => 'string',
    ],
    'Tags' => [
      'type' => 'map',
      'key' => [
        'shape' => 'Name',
      ],
      'value' => [
        'shape' => 'Value',
      ],
    ],
    'ValidationException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'Value' => [
      'type' => 'string',
    ],
    'Version' => [
      'type' => 'string',
    ],
  ],
];