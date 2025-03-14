<?php
// This file was auto-generated from sdk-root/src/data/ssm-sap/2018-05-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-10', 'auth' => [ 'aws.auth#sigv4', ], 'endpointPrefix' => 'ssm-sap', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceAbbreviation' => 'SsmSap', 'serviceFullName' => 'AWS Systems Manager for SAP', 'serviceId' => 'Ssm Sap', 'signatureVersion' => 'v4', 'signingName' => 'ssm-sap', 'uid' => 'ssm-sap-2018-05-10', ], 'operations' => [ 'DeleteResourcePermission' => [ 'name' => 'DeleteResourcePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/delete-resource-permission', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteResourcePermissionInput', ], 'output' => [ 'shape' => 'DeleteResourcePermissionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeregisterApplication' => [ 'name' => 'DeregisterApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/deregister-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeregisterApplicationInput', ], 'output' => [ 'shape' => 'DeregisterApplicationOutput', ], 'errors' => [ [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetApplication' => [ 'name' => 'GetApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetApplicationInput', ], 'output' => [ 'shape' => 'GetApplicationOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetComponent' => [ 'name' => 'GetComponent', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-component', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetComponentInput', ], 'output' => [ 'shape' => 'GetComponentOutput', ], 'errors' => [ [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetDatabase' => [ 'name' => 'GetDatabase', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-database', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDatabaseInput', ], 'output' => [ 'shape' => 'GetDatabaseOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetOperation' => [ 'name' => 'GetOperation', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-operation', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetOperationInput', ], 'output' => [ 'shape' => 'GetOperationOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetResourcePermission' => [ 'name' => 'GetResourcePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-resource-permission', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetResourcePermissionInput', ], 'output' => [ 'shape' => 'GetResourcePermissionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListApplications' => [ 'name' => 'ListApplications', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-applications', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListApplicationsInput', ], 'output' => [ 'shape' => 'ListApplicationsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListComponents' => [ 'name' => 'ListComponents', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-components', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListComponentsInput', ], 'output' => [ 'shape' => 'ListComponentsOutput', ], 'errors' => [ [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListDatabases' => [ 'name' => 'ListDatabases', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-databases', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDatabasesInput', ], 'output' => [ 'shape' => 'ListDatabasesOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListOperationEvents' => [ 'name' => 'ListOperationEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-operation-events', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListOperationEventsInput', ], 'output' => [ 'shape' => 'ListOperationEventsOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListOperations' => [ 'name' => 'ListOperations', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-operations', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListOperationsInput', ], 'output' => [ 'shape' => 'ListOperationsOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], ], 'PutResourcePermission' => [ 'name' => 'PutResourcePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/put-resource-permission', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutResourcePermissionInput', ], 'output' => [ 'shape' => 'PutResourcePermissionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'RegisterApplication' => [ 'name' => 'RegisterApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/register-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'RegisterApplicationInput', ], 'output' => [ 'shape' => 'RegisterApplicationOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartApplication' => [ 'name' => 'StartApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/start-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartApplicationInput', ], 'output' => [ 'shape' => 'StartApplicationOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartApplicationRefresh' => [ 'name' => 'StartApplicationRefresh', 'http' => [ 'method' => 'POST', 'requestUri' => '/start-application-refresh', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartApplicationRefreshInput', ], 'output' => [ 'shape' => 'StartApplicationRefreshOutput', ], 'errors' => [ [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopApplication' => [ 'name' => 'StopApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/stop-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StopApplicationInput', ], 'output' => [ 'shape' => 'StopApplicationOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], 'idempotent' => true, ], 'UpdateApplicationSettings' => [ 'name' => 'UpdateApplicationSettings', 'http' => [ 'method' => 'POST', 'requestUri' => '/update-application-settings', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateApplicationSettingsInput', ], 'output' => [ 'shape' => 'UpdateApplicationSettingsOutput', ], 'errors' => [ [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AllocationType' => [ 'type' => 'string', 'enum' => [ 'VPC_SUBNET', 'ELASTIC_IP', 'OVERLAY', 'UNKNOWN', ], ], 'AppRegistryArn' => [ 'type' => 'string', 'pattern' => 'arn:aws:servicecatalog:[a-z0-9:\\/-]+', ], 'Application' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'ApplicationId', ], 'Type' => [ 'shape' => 'ApplicationType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'AppRegistryArn' => [ 'shape' => 'AppRegistryArn', ], 'Status' => [ 'shape' => 'ApplicationStatus', ], 'DiscoveryStatus' => [ 'shape' => 'ApplicationDiscoveryStatus', ], 'Components' => [ 'shape' => 'ComponentIdList', ], 'LastUpdated' => [ 'shape' => 'Timestamp', ], 'StatusMessage' => [ 'shape' => 'String', ], 'AssociatedApplicationArns' => [ 'shape' => 'ApplicationArnList', ], ], ], 'ApplicationArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SsmSapArn', ], ], 'ApplicationCredential' => [ 'type' => 'structure', 'required' => [ 'DatabaseName', 'CredentialType', 'SecretId', ], 'members' => [ 'DatabaseName' => [ 'shape' => 'DatabaseName', ], 'CredentialType' => [ 'shape' => 'CredentialType', ], 'SecretId' => [ 'shape' => 'SecretId', ], ], ], 'ApplicationCredentialList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApplicationCredential', ], 'max' => 20, 'min' => 0, ], 'ApplicationDiscoveryStatus' => [ 'type' => 'string', 'enum' => [ 'SUCCESS', 'REGISTRATION_FAILED', 'REFRESH_FAILED', 'REGISTERING', 'DELETING', ], ], 'ApplicationId' => [ 'type' => 'string', 'max' => 60, 'min' => 1, 'pattern' => '[\\w\\d\\.-]+', ], 'ApplicationStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVATED', 'STARTING', 'STOPPED', 'STOPPING', 'FAILED', 'REGISTERING', 'DELETING', 'UNKNOWN', ], ], 'ApplicationSummary' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'ApplicationId', ], 'DiscoveryStatus' => [ 'shape' => 'ApplicationDiscoveryStatus', ], 'Type' => [ 'shape' => 'ApplicationType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'ApplicationSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApplicationSummary', ], ], 'ApplicationType' => [ 'type' => 'string', 'enum' => [ 'HANA', 'SAP_ABAP', ], ], 'Arn' => [ 'type' => 'string', 'pattern' => 'arn:(.+:){2,4}.+$|^arn:(.+:){1,3}.+\\/.+', ], 'AssociatedHost' => [ 'type' => 'structure', 'members' => [ 'Hostname' => [ 'shape' => 'String', ], 'Ec2InstanceId' => [ 'shape' => 'String', ], 'IpAddresses' => [ 'shape' => 'IpAddressList', ], 'OsVersion' => [ 'shape' => 'String', ], ], ], 'BackintConfig' => [ 'type' => 'structure', 'required' => [ 'BackintMode', 'EnsureNoBackupInProcess', ], 'members' => [ 'BackintMode' => [ 'shape' => 'BackintMode', ], 'EnsureNoBackupInProcess' => [ 'shape' => 'Boolean', ], ], ], 'BackintMode' => [ 'type' => 'string', 'enum' => [ 'AWSBackup', ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ClusterStatus' => [ 'type' => 'string', 'enum' => [ 'ONLINE', 'STANDBY', 'MAINTENANCE', 'OFFLINE', 'NONE', ], ], 'Component' => [ 'type' => 'structure', 'members' => [ 'ComponentId' => [ 'shape' => 'ComponentId', ], 'Sid' => [ 'shape' => 'SID', ], 'SystemNumber' => [ 'shape' => 'SAPInstanceNumber', ], 'ParentComponent' => [ 'shape' => 'ComponentId', ], 'ChildComponents' => [ 'shape' => 'ComponentIdList', ], 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentType' => [ 'shape' => 'ComponentType', ], 'Status' => [ 'shape' => 'ComponentStatus', ], 'SapHostname' => [ 'shape' => 'String', ], 'SapFeature' => [ 'shape' => 'String', ], 'SapKernelVersion' => [ 'shape' => 'String', ], 'HdbVersion' => [ 'shape' => 'String', ], 'Resilience' => [ 'shape' => 'Resilience', ], 'AssociatedHost' => [ 'shape' => 'AssociatedHost', ], 'Databases' => [ 'shape' => 'DatabaseIdList', ], 'Hosts' => [ 'shape' => 'HostList', 'deprecated' => true, 'deprecatedMessage' => 'This shape is no longer used. Please use AssociatedHost.', ], 'PrimaryHost' => [ 'shape' => 'String', 'deprecated' => true, 'deprecatedMessage' => 'This shape is no longer used. Please use AssociatedHost.', ], 'DatabaseConnection' => [ 'shape' => 'DatabaseConnection', ], 'LastUpdated' => [ 'shape' => 'Timestamp', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], ], ], 'ComponentArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SsmSapArn', ], ], 'ComponentId' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '[\\w\\d-]+', ], 'ComponentIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentId', ], ], 'ComponentInfo' => [ 'type' => 'structure', 'required' => [ 'ComponentType', 'Sid', 'Ec2InstanceId', ], 'members' => [ 'ComponentType' => [ 'shape' => 'ComponentType', ], 'Sid' => [ 'shape' => 'SID', ], 'Ec2InstanceId' => [ 'shape' => 'InstanceId', ], ], ], 'ComponentInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentInfo', ], 'max' => 5, 'min' => 0, ], 'ComponentStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVATED', 'STARTING', 'STOPPED', 'STOPPING', 'RUNNING', 'RUNNING_WITH_ERROR', 'UNDEFINED', ], ], 'ComponentSummary' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'ComponentType' => [ 'shape' => 'ComponentType', ], 'Tags' => [ 'shape' => 'TagMap', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], ], ], 'ComponentSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentSummary', ], ], 'ComponentType' => [ 'type' => 'string', 'enum' => [ 'HANA', 'HANA_NODE', 'ABAP', 'ASCS', 'DIALOG', 'WEBDISP', 'WD', 'ERS', ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'ConnectedEntityType' => [ 'type' => 'string', 'enum' => [ 'DBMS', ], ], 'CredentialType' => [ 'type' => 'string', 'enum' => [ 'ADMIN', ], ], 'Database' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'Credentials' => [ 'shape' => 'ApplicationCredentialList', ], 'DatabaseId' => [ 'shape' => 'DatabaseId', ], 'DatabaseName' => [ 'shape' => 'String', ], 'DatabaseType' => [ 'shape' => 'DatabaseType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'Status' => [ 'shape' => 'DatabaseStatus', ], 'PrimaryHost' => [ 'shape' => 'String', ], 'SQLPort' => [ 'shape' => 'Integer', ], 'LastUpdated' => [ 'shape' => 'Timestamp', ], 'ConnectedComponentArns' => [ 'shape' => 'ComponentArnList', ], ], ], 'DatabaseConnection' => [ 'type' => 'structure', 'members' => [ 'DatabaseConnectionMethod' => [ 'shape' => 'DatabaseConnectionMethod', ], 'DatabaseArn' => [ 'shape' => 'SsmSapArn', ], 'ConnectionIp' => [ 'shape' => 'String', ], ], ], 'DatabaseConnectionMethod' => [ 'type' => 'string', 'enum' => [ 'DIRECT', 'OVERLAY', ], ], 'DatabaseId' => [ 'type' => 'string', 'max' => 300, 'min' => 1, 'pattern' => '.*[\\w\\d]+', ], 'DatabaseIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabaseId', ], ], 'DatabaseName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'DatabaseStatus' => [ 'type' => 'string', 'enum' => [ 'RUNNING', 'STARTING', 'STOPPED', 'WARNING', 'UNKNOWN', 'ERROR', ], ], 'DatabaseSummary' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'DatabaseId' => [ 'shape' => 'DatabaseId', ], 'DatabaseType' => [ 'shape' => 'DatabaseType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'DatabaseSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabaseSummary', ], ], 'DatabaseType' => [ 'type' => 'string', 'enum' => [ 'SYSTEM', 'TENANT', ], ], 'DeleteResourcePermissionInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ActionType' => [ 'shape' => 'PermissionActionType', ], 'SourceResourceArn' => [ 'shape' => 'Arn', ], 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'DeleteResourcePermissionOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'String', ], ], ], 'DeregisterApplicationInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], ], ], 'DeregisterApplicationOutput' => [ 'type' => 'structure', 'members' => [], ], 'Filter' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', 'Operator', ], 'members' => [ 'Name' => [ 'shape' => 'FilterName', ], 'Value' => [ 'shape' => 'FilterValue', ], 'Operator' => [ 'shape' => 'FilterOperator', ], ], ], 'FilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], 'max' => 10, 'min' => 1, ], 'FilterName' => [ 'type' => 'string', 'max' => 32, 'min' => 1, ], 'FilterOperator' => [ 'type' => 'string', 'enum' => [ 'Equals', 'GreaterThanOrEquals', 'LessThanOrEquals', ], ], 'FilterValue' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'GetApplicationInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ApplicationArn' => [ 'shape' => 'SsmSapArn', ], 'AppRegistryArn' => [ 'shape' => 'AppRegistryArn', ], ], ], 'GetApplicationOutput' => [ 'type' => 'structure', 'members' => [ 'Application' => [ 'shape' => 'Application', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'GetComponentInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', 'ComponentId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], ], ], 'GetComponentOutput' => [ 'type' => 'structure', 'members' => [ 'Component' => [ 'shape' => 'Component', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'GetDatabaseInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'DatabaseId' => [ 'shape' => 'DatabaseId', ], 'DatabaseArn' => [ 'shape' => 'SsmSapArn', ], ], ], 'GetDatabaseOutput' => [ 'type' => 'structure', 'members' => [ 'Database' => [ 'shape' => 'Database', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'GetOperationInput' => [ 'type' => 'structure', 'required' => [ 'OperationId', ], 'members' => [ 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'GetOperationOutput' => [ 'type' => 'structure', 'members' => [ 'Operation' => [ 'shape' => 'Operation', ], ], ], 'GetResourcePermissionInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ActionType' => [ 'shape' => 'PermissionActionType', ], 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'GetResourcePermissionOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'String', ], ], ], 'Host' => [ 'type' => 'structure', 'members' => [ 'HostName' => [ 'shape' => 'String', ], 'HostIp' => [ 'shape' => 'String', ], 'EC2InstanceId' => [ 'shape' => 'String', ], 'InstanceId' => [ 'shape' => 'String', ], 'HostRole' => [ 'shape' => 'HostRole', ], 'OsVersion' => [ 'shape' => 'String', ], ], ], 'HostList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Host', ], ], 'HostRole' => [ 'type' => 'string', 'enum' => [ 'LEADER', 'WORKER', 'STANDBY', 'UNKNOWN', ], ], 'InstanceId' => [ 'type' => 'string', 'pattern' => 'i-[\\w\\d]{8}$|^i-[\\w\\d]{17}', ], 'InstanceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceId', ], 'max' => 1, 'min' => 1, ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'IpAddressList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpAddressMember', ], ], 'IpAddressMember' => [ 'type' => 'structure', 'members' => [ 'IpAddress' => [ 'shape' => 'String', ], 'Primary' => [ 'shape' => 'Boolean', ], 'AllocationType' => [ 'shape' => 'AllocationType', ], ], ], 'ListApplicationsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'Filters' => [ 'shape' => 'FilterList', ], ], ], 'ListApplicationsOutput' => [ 'type' => 'structure', 'members' => [ 'Applications' => [ 'shape' => 'ApplicationSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListComponentsInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListComponentsOutput' => [ 'type' => 'structure', 'members' => [ 'Components' => [ 'shape' => 'ComponentSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDatabasesInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListDatabasesOutput' => [ 'type' => 'structure', 'members' => [ 'Databases' => [ 'shape' => 'DatabaseSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListOperationEventsInput' => [ 'type' => 'structure', 'required' => [ 'OperationId', ], 'members' => [ 'OperationId' => [ 'shape' => 'OperationId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Filters' => [ 'shape' => 'FilterList', ], ], ], 'ListOperationEventsOutput' => [ 'type' => 'structure', 'members' => [ 'OperationEvents' => [ 'shape' => 'OperationEventList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListOperationsInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Filters' => [ 'shape' => 'FilterList', ], ], ], 'ListOperationsOutput' => [ 'type' => 'structure', 'members' => [ 'Operations' => [ 'shape' => 'OperationList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'SsmSapArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'pattern' => '.{16,1024}', ], 'Operation' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'OperationId', ], 'Type' => [ 'shape' => 'OperationType', ], 'Status' => [ 'shape' => 'OperationStatus', ], 'StatusMessage' => [ 'shape' => 'String', ], 'Properties' => [ 'shape' => 'OperationProperties', ], 'ResourceType' => [ 'shape' => 'ResourceType', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], 'ResourceArn' => [ 'shape' => 'Arn', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'LastUpdatedTime' => [ 'shape' => 'Timestamp', ], ], ], 'OperationEvent' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => 'String', ], 'Resource' => [ 'shape' => 'Resource', ], 'Status' => [ 'shape' => 'OperationEventStatus', ], 'StatusMessage' => [ 'shape' => 'String', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], ], ], 'OperationEventList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationEvent', ], ], 'OperationEventResourceType' => [ 'type' => 'string', 'pattern' => '[\\w]+::[\\w]+::[\\w]+', ], 'OperationEventStatus' => [ 'type' => 'string', 'enum' => [ 'IN_PROGRESS', 'COMPLETED', 'FAILED', ], ], 'OperationId' => [ 'type' => 'string', 'pattern' => '[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?', ], 'OperationIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationId', ], ], 'OperationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Operation', ], ], 'OperationMode' => [ 'type' => 'string', 'enum' => [ 'PRIMARY', 'LOGREPLAY', 'DELTA_DATASHIPPING', 'LOGREPLAY_READACCESS', 'NONE', ], ], 'OperationProperties' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'OperationStatus' => [ 'type' => 'string', 'enum' => [ 'INPROGRESS', 'SUCCESS', 'ERROR', ], ], 'OperationType' => [ 'type' => 'string', ], 'PermissionActionType' => [ 'type' => 'string', 'enum' => [ 'RESTORE', ], ], 'PutResourcePermissionInput' => [ 'type' => 'structure', 'required' => [ 'ActionType', 'SourceResourceArn', 'ResourceArn', ], 'members' => [ 'ActionType' => [ 'shape' => 'PermissionActionType', ], 'SourceResourceArn' => [ 'shape' => 'Arn', ], 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'PutResourcePermissionOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'String', ], ], ], 'RegisterApplicationInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', 'ApplicationType', 'Instances', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ApplicationType' => [ 'shape' => 'ApplicationType', ], 'Instances' => [ 'shape' => 'InstanceList', ], 'SapInstanceNumber' => [ 'shape' => 'SAPInstanceNumber', ], 'Sid' => [ 'shape' => 'SID', ], 'Tags' => [ 'shape' => 'TagMap', ], 'Credentials' => [ 'shape' => 'ApplicationCredentialList', ], 'DatabaseArn' => [ 'shape' => 'SsmSapArn', ], 'ComponentsInfo' => [ 'shape' => 'ComponentInfoList', ], ], ], 'RegisterApplicationOutput' => [ 'type' => 'structure', 'members' => [ 'Application' => [ 'shape' => 'Application', ], 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'ReplicationMode' => [ 'type' => 'string', 'enum' => [ 'PRIMARY', 'NONE', 'SYNC', 'SYNCMEM', 'ASYNC', ], ], 'Resilience' => [ 'type' => 'structure', 'members' => [ 'HsrTier' => [ 'shape' => 'String', ], 'HsrReplicationMode' => [ 'shape' => 'ReplicationMode', ], 'HsrOperationMode' => [ 'shape' => 'OperationMode', ], 'ClusterStatus' => [ 'shape' => 'ClusterStatus', ], 'EnqueueReplication' => [ 'shape' => 'Boolean', ], ], ], 'Resource' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => 'Arn', ], 'ResourceType' => [ 'shape' => 'OperationEventResourceType', ], ], ], 'ResourceId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'SAPInstanceNumber' => [ 'type' => 'string', 'pattern' => '[0-9]{2}', ], 'SID' => [ 'type' => 'string', 'pattern' => '[A-Z][A-Z0-9]{2}', ], 'SecretId' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'sensitive' => true, ], 'SsmSapArn' => [ 'type' => 'string', 'pattern' => 'arn:(.+:){2,4}.+$|^arn:(.+:){1,3}.+\\/.+', ], 'StartApplicationInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], ], ], 'StartApplicationOutput' => [ 'type' => 'structure', 'members' => [ 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'StartApplicationRefreshInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], ], ], 'StartApplicationRefreshOutput' => [ 'type' => 'structure', 'members' => [ 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'StopApplicationInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'StopConnectedEntity' => [ 'shape' => 'ConnectedEntityType', ], 'IncludeEc2InstanceShutdown' => [ 'shape' => 'Boolean', ], ], ], 'StopApplicationOutput' => [ 'type' => 'structure', 'members' => [ 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'pattern' => '(?!aws:)[a-zA-Z+-=._:/]+', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'SsmSapArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UnauthorizedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 401, 'senderFault' => true, ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'SsmSapArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateApplicationSettingsInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'CredentialsToAddOrUpdate' => [ 'shape' => 'ApplicationCredentialList', ], 'CredentialsToRemove' => [ 'shape' => 'ApplicationCredentialList', ], 'Backint' => [ 'shape' => 'BackintConfig', ], 'DatabaseArn' => [ 'shape' => 'SsmSapArn', ], ], ], 'UpdateApplicationSettingsOutput' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'OperationIds' => [ 'shape' => 'OperationIdList', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
