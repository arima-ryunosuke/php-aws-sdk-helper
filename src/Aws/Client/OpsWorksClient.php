<?php
namespace AWS\OpsWorks;

class OpsWorksClient
{
    /**
     * @param array{InstanceId:string, LayerIds:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function assignInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, LayerIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function assignInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeId:string, InstanceId?:string} $args
     * @return \AWS\Result<void>
     */
    public function assignVolume(array $args): \AWS\Result { }

    /**
     * @param array{VolumeId:string, InstanceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function assignVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ElasticIp:string, InstanceId?:string} $args
     * @return \AWS\Result<void>
     */
    public function associateElasticIp(array $args): \AWS\Result { }

    /**
     * @param array{ElasticIp:string, InstanceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateElasticIpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ElasticLoadBalancerName:string, LayerId:string} $args
     * @return \AWS\Result<void>
     */
    public function attachElasticLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{ElasticLoadBalancerName:string, LayerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachElasticLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceStackId:string, Name?:string, Region?:string, VpcId?:string, Attributes?:array<"Color", string>, ServiceRoleArn:string, DefaultInstanceProfileArn?:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, UseOpsworksSecurityGroups?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, ClonePermissions?:bool, CloneAppIds?:array<string>, DefaultRootDeviceType?:"ebs"|"instance-store", AgentVersion?:string} $args
     * @return \AWS\Result<array{StackId?:string}>
     */
    public function cloneStack(array $args): \AWS\Result { }

    /**
     * @param array{SourceStackId:string, Name?:string, Region?:string, VpcId?:string, Attributes?:array<"Color", string>, ServiceRoleArn:string, DefaultInstanceProfileArn?:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, UseOpsworksSecurityGroups?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, ClonePermissions?:bool, CloneAppIds?:array<string>, DefaultRootDeviceType?:"ebs"|"instance-store", AgentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackId?:string}>
     */
    public function cloneStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, Shortname?:string, Name:string, Description?:string, DataSources?:array<array{Type?:string, Arn?:string, DatabaseName?:string}>, Type:"aws-flow-ruby"|"java"|"rails"|"php"|"nodejs"|"static"|"other", AppSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, Domains?:array<string>, EnableSsl?:bool, SslConfiguration?:array{Certificate:string, PrivateKey:string, Chain?:string}, Attributes?:array<"DocumentRoot"|"RailsEnv"|"AutoBundleOnDeploy"|"AwsFlowRubySettings", string>, Environment?:array<array{Key:string, Value:string, Secure?:bool}>} $args
     * @return \AWS\Result<array{AppId?:string}>
     */
    public function createApp(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, Shortname?:string, Name:string, Description?:string, DataSources?:array<array{Type?:string, Arn?:string, DatabaseName?:string}>, Type:"aws-flow-ruby"|"java"|"rails"|"php"|"nodejs"|"static"|"other", AppSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, Domains?:array<string>, EnableSsl?:bool, SslConfiguration?:array{Certificate:string, PrivateKey:string, Chain?:string}, Attributes?:array<"DocumentRoot"|"RailsEnv"|"AutoBundleOnDeploy"|"AwsFlowRubySettings", string>, Environment?:array<array{Key:string, Value:string, Secure?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string}>
     */
    public function createAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, AppId?:string, InstanceIds?:array<string>, LayerIds?:array<string>, Command:array{Name:"install_dependencies"|"update_dependencies"|"update_custom_cookbooks"|"execute_recipes"|"configure"|"setup"|"deploy"|"rollback"|"start"|"stop"|"restart"|"undeploy", Args?:array<string, array<string>>}, Comment?:string, CustomJson?:string} $args
     * @return \AWS\Result<array{DeploymentId?:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, AppId?:string, InstanceIds?:array<string>, LayerIds?:array<string>, Command:array{Name:"install_dependencies"|"update_dependencies"|"update_custom_cookbooks"|"execute_recipes"|"configure"|"setup"|"deploy"|"rollback"|"start"|"stop"|"restart"|"undeploy", Args?:array<string, array<string>>}, Comment?:string, CustomJson?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeploymentId?:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, LayerIds:array<string>, InstanceType:string, AutoScalingType?:"load"|"timer", Hostname?:string, Os?:string, AmiId?:string, SshKeyName?:string, AvailabilityZone?:string, VirtualizationType?:string, SubnetId?:string, Architecture?:"x86_64"|"i386", RootDeviceType?:"ebs"|"instance-store", BlockDeviceMappings?:array<array{DeviceName?:string, NoDevice?:string, VirtualName?:string, Ebs?:array{SnapshotId?:string, Iops?:int, VolumeSize?:int, VolumeType?:"gp2"|"io1"|"standard", DeleteOnTermination?:bool}}>, InstallUpdatesOnBoot?:bool, EbsOptimized?:bool, AgentVersion?:string, Tenancy?:string} $args
     * @return \AWS\Result<array{InstanceId?:string}>
     */
    public function createInstance(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, LayerIds:array<string>, InstanceType:string, AutoScalingType?:"load"|"timer", Hostname?:string, Os?:string, AmiId?:string, SshKeyName?:string, AvailabilityZone?:string, VirtualizationType?:string, SubnetId?:string, Architecture?:"x86_64"|"i386", RootDeviceType?:"ebs"|"instance-store", BlockDeviceMappings?:array<array{DeviceName?:string, NoDevice?:string, VirtualName?:string, Ebs?:array{SnapshotId?:string, Iops?:int, VolumeSize?:int, VolumeType?:"gp2"|"io1"|"standard", DeleteOnTermination?:bool}}>, InstallUpdatesOnBoot?:bool, EbsOptimized?:bool, AgentVersion?:string, Tenancy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceId?:string}>
     */
    public function createInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, Type:"aws-flow-ruby"|"ecs-cluster"|"java-app"|"lb"|"web"|"php-app"|"rails-app"|"nodejs-app"|"memcached"|"db-master"|"monitoring-master"|"custom", Name:string, Shortname:string, Attributes?:array<"EcsClusterArn"|"EnableHaproxyStats"|"HaproxyStatsUrl"|"HaproxyStatsUser"|"HaproxyStatsPassword"|"HaproxyHealthCheckUrl"|"HaproxyHealthCheckMethod"|"MysqlRootPassword"|"MysqlRootPasswordUbiquitous"|"GangliaUrl"|"GangliaUser"|"GangliaPassword"|"MemcachedMemory"|"NodejsVersion"|"RubyVersion"|"RubygemsVersion"|"ManageBundler"|"BundlerVersion"|"RailsStack"|"PassengerVersion"|"Jvm"|"JvmVersion"|"JvmOptions"|"JavaAppServer"|"JavaAppServerVersion", string>, CloudWatchLogsConfiguration?:array{Enabled?:bool, LogStreams?:array<array{LogGroupName?:string, DatetimeFormat?:string, TimeZone?:"LOCAL"|"UTC", File?:string, FileFingerprintLines?:string, MultiLineStartPattern?:string, InitialPosition?:"start_of_file"|"end_of_file", Encoding?:"ascii"|"big5"|"big5hkscs"|"cp037"|"cp424"|"cp437"|"cp500"|"cp720"|"cp737"|"cp775"|"cp850"|"cp852"|"cp855"|"cp856"|"cp857"|"cp858"|"cp860"|"cp861"|"cp862"|"cp863"|"cp864"|"cp865"|"cp866"|"cp869"|"cp874"|"cp875"|"cp932"|"cp949"|"cp950"|"cp1006"|"cp1026"|"cp1140"|"cp1250"|"cp1251"|"cp1252"|"cp1253"|"cp1254"|"cp1255"|"cp1256"|"cp1257"|"cp1258"|"euc_jp"|"euc_jis_2004"|"euc_jisx0213"|"euc_kr"|"gb2312"|"gbk"|"gb18030"|"hz"|"iso2022_jp"|"iso2022_jp_1"|"iso2022_jp_2"|"iso2022_jp_2004"|"iso2022_jp_3"|"iso2022_jp_ext"|"iso2022_kr"|"latin_1"|"iso8859_2"|"iso8859_3"|"iso8859_4"|"iso8859_5"|"iso8859_6"|"iso8859_7"|"iso8859_8"|"iso8859_9"|"iso8859_10"|"iso8859_13"|"iso8859_14"|"iso8859_15"|"iso8859_16"|"johab"|"koi8_r"|"koi8_u"|"mac_cyrillic"|"mac_greek"|"mac_iceland"|"mac_latin2"|"mac_roman"|"mac_turkish"|"ptcp154"|"shift_jis"|"shift_jis_2004"|"shift_jisx0213"|"utf_32"|"utf_32_be"|"utf_32_le"|"utf_16"|"utf_16_be"|"utf_16_le"|"utf_7"|"utf_8"|"utf_8_sig", BufferDuration?:int, BatchCount?:int, BatchSize?:int}>}, CustomInstanceProfileArn?:string, CustomJson?:string, CustomSecurityGroupIds?:array<string>, Packages?:array<string>, VolumeConfigurations?:array<array{MountPoint:string, RaidLevel?:int, NumberOfDisks:int, Size:int, VolumeType?:string, Iops?:int, Encrypted?:bool}>, EnableAutoHealing?:bool, AutoAssignElasticIps?:bool, AutoAssignPublicIps?:bool, CustomRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, InstallUpdatesOnBoot?:bool, UseEbsOptimizedInstances?:bool, LifecycleEventConfiguration?:array{Shutdown?:array{ExecutionTimeout?:int, DelayUntilElbConnectionsDrained?:bool}}} $args
     * @return \AWS\Result<array{LayerId?:string}>
     */
    public function createLayer(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, Type:"aws-flow-ruby"|"ecs-cluster"|"java-app"|"lb"|"web"|"php-app"|"rails-app"|"nodejs-app"|"memcached"|"db-master"|"monitoring-master"|"custom", Name:string, Shortname:string, Attributes?:array<"EcsClusterArn"|"EnableHaproxyStats"|"HaproxyStatsUrl"|"HaproxyStatsUser"|"HaproxyStatsPassword"|"HaproxyHealthCheckUrl"|"HaproxyHealthCheckMethod"|"MysqlRootPassword"|"MysqlRootPasswordUbiquitous"|"GangliaUrl"|"GangliaUser"|"GangliaPassword"|"MemcachedMemory"|"NodejsVersion"|"RubyVersion"|"RubygemsVersion"|"ManageBundler"|"BundlerVersion"|"RailsStack"|"PassengerVersion"|"Jvm"|"JvmVersion"|"JvmOptions"|"JavaAppServer"|"JavaAppServerVersion", string>, CloudWatchLogsConfiguration?:array{Enabled?:bool, LogStreams?:array<array{LogGroupName?:string, DatetimeFormat?:string, TimeZone?:"LOCAL"|"UTC", File?:string, FileFingerprintLines?:string, MultiLineStartPattern?:string, InitialPosition?:"start_of_file"|"end_of_file", Encoding?:"ascii"|"big5"|"big5hkscs"|"cp037"|"cp424"|"cp437"|"cp500"|"cp720"|"cp737"|"cp775"|"cp850"|"cp852"|"cp855"|"cp856"|"cp857"|"cp858"|"cp860"|"cp861"|"cp862"|"cp863"|"cp864"|"cp865"|"cp866"|"cp869"|"cp874"|"cp875"|"cp932"|"cp949"|"cp950"|"cp1006"|"cp1026"|"cp1140"|"cp1250"|"cp1251"|"cp1252"|"cp1253"|"cp1254"|"cp1255"|"cp1256"|"cp1257"|"cp1258"|"euc_jp"|"euc_jis_2004"|"euc_jisx0213"|"euc_kr"|"gb2312"|"gbk"|"gb18030"|"hz"|"iso2022_jp"|"iso2022_jp_1"|"iso2022_jp_2"|"iso2022_jp_2004"|"iso2022_jp_3"|"iso2022_jp_ext"|"iso2022_kr"|"latin_1"|"iso8859_2"|"iso8859_3"|"iso8859_4"|"iso8859_5"|"iso8859_6"|"iso8859_7"|"iso8859_8"|"iso8859_9"|"iso8859_10"|"iso8859_13"|"iso8859_14"|"iso8859_15"|"iso8859_16"|"johab"|"koi8_r"|"koi8_u"|"mac_cyrillic"|"mac_greek"|"mac_iceland"|"mac_latin2"|"mac_roman"|"mac_turkish"|"ptcp154"|"shift_jis"|"shift_jis_2004"|"shift_jisx0213"|"utf_32"|"utf_32_be"|"utf_32_le"|"utf_16"|"utf_16_be"|"utf_16_le"|"utf_7"|"utf_8"|"utf_8_sig", BufferDuration?:int, BatchCount?:int, BatchSize?:int}>}, CustomInstanceProfileArn?:string, CustomJson?:string, CustomSecurityGroupIds?:array<string>, Packages?:array<string>, VolumeConfigurations?:array<array{MountPoint:string, RaidLevel?:int, NumberOfDisks:int, Size:int, VolumeType?:string, Iops?:int, Encrypted?:bool}>, EnableAutoHealing?:bool, AutoAssignElasticIps?:bool, AutoAssignPublicIps?:bool, CustomRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, InstallUpdatesOnBoot?:bool, UseEbsOptimizedInstances?:bool, LifecycleEventConfiguration?:array{Shutdown?:array{ExecutionTimeout?:int, DelayUntilElbConnectionsDrained?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{LayerId?:string}>
     */
    public function createLayerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Region:string, VpcId?:string, Attributes?:array<"Color", string>, ServiceRoleArn:string, DefaultInstanceProfileArn:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, UseOpsworksSecurityGroups?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, DefaultRootDeviceType?:"ebs"|"instance-store", AgentVersion?:string} $args
     * @return \AWS\Result<array{StackId?:string}>
     */
    public function createStack(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Region:string, VpcId?:string, Attributes?:array<"Color", string>, ServiceRoleArn:string, DefaultInstanceProfileArn:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, UseOpsworksSecurityGroups?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, DefaultRootDeviceType?:"ebs"|"instance-store", AgentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackId?:string}>
     */
    public function createStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IamUserArn:string, SshUsername?:string, SshPublicKey?:string, AllowSelfManagement?:bool} $args
     * @return \AWS\Result<array{IamUserArn?:string}>
     */
    public function createUserProfile(array $args): \AWS\Result { }

    /**
     * @param array{IamUserArn:string, SshUsername?:string, SshPublicKey?:string, AllowSelfManagement?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{IamUserArn?:string}>
     */
    public function createUserProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApp(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, DeleteElasticIp?:bool, DeleteVolumes?:bool} $args
     * @return \AWS\Result<void>
     */
    public function deleteInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, DeleteElasticIp?:bool, DeleteVolumes?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLayer(array $args): \AWS\Result { }

    /**
     * @param array{LayerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLayerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStack(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IamUserArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUserProfile(array $args): \AWS\Result { }

    /**
     * @param array{IamUserArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EcsClusterArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterEcsCluster(array $args): \AWS\Result { }

    /**
     * @param array{EcsClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterEcsClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ElasticIp:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterElasticIp(array $args): \AWS\Result { }

    /**
     * @param array{ElasticIp:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterElasticIpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RdsDbInstanceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterRdsDbInstance(array $args): \AWS\Result { }

    /**
     * @param array{RdsDbInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterRdsDbInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeId:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterVolume(array $args): \AWS\Result { }

    /**
     * @param array{VolumeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId?:string, ConfigurationManager?:array{Name?:string, Version?:string}} $args
     * @return \AWS\Result<array{AgentVersions?:array<array{Version?:string, ConfigurationManager?:array{Name?:string, Version?:string}}>}>
     */
    public function describeAgentVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{StackId?:string, ConfigurationManager?:array{Name?:string, Version?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgentVersions?:array<array{Version?:string, ConfigurationManager?:array{Name?:string, Version?:string}}>}>
     */
    public function describeAgentVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId?:string, AppIds?:array<string>} $args
     * @return \AWS\Result<array{Apps?:array<array{AppId?:string, StackId?:string, Shortname?:string, Name?:string, Description?:string, DataSources?:array<array{Type?:string, Arn?:string, DatabaseName?:string}>, Type?:"aws-flow-ruby"|"java"|"rails"|"php"|"nodejs"|"static"|"other", AppSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, Domains?:array<string>, EnableSsl?:bool, SslConfiguration?:array{Certificate:string, PrivateKey:string, Chain?:string}, Attributes?:array<"DocumentRoot"|"RailsEnv"|"AutoBundleOnDeploy"|"AwsFlowRubySettings", string>, CreatedAt?:string, Environment?:array<array{Key:string, Value:string, Secure?:bool}>}>}>
     */
    public function describeApps(array $args = []): \AWS\Result { }

    /**
     * @param array{StackId?:string, AppIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Apps?:array<array{AppId?:string, StackId?:string, Shortname?:string, Name?:string, Description?:string, DataSources?:array<array{Type?:string, Arn?:string, DatabaseName?:string}>, Type?:"aws-flow-ruby"|"java"|"rails"|"php"|"nodejs"|"static"|"other", AppSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, Domains?:array<string>, EnableSsl?:bool, SslConfiguration?:array{Certificate:string, PrivateKey:string, Chain?:string}, Attributes?:array<"DocumentRoot"|"RailsEnv"|"AutoBundleOnDeploy"|"AwsFlowRubySettings", string>, CreatedAt?:string, Environment?:array<array{Key:string, Value:string, Secure?:bool}>}>}>
     */
    public function describeAppsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeploymentId?:string, InstanceId?:string, CommandIds?:array<string>} $args
     * @return \AWS\Result<array{Commands?:array<array{CommandId?:string, InstanceId?:string, DeploymentId?:string, CreatedAt?:string, AcknowledgedAt?:string, CompletedAt?:string, Status?:string, ExitCode?:int, LogUrl?:string, Type?:string}>}>
     */
    public function describeCommands(array $args = []): \AWS\Result { }

    /**
     * @param array{DeploymentId?:string, InstanceId?:string, CommandIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Commands?:array<array{CommandId?:string, InstanceId?:string, DeploymentId?:string, CreatedAt?:string, AcknowledgedAt?:string, CompletedAt?:string, Status?:string, ExitCode?:int, LogUrl?:string, Type?:string}>}>
     */
    public function describeCommandsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId?:string, AppId?:string, DeploymentIds?:array<string>} $args
     * @return \AWS\Result<array{Deployments?:array<array{DeploymentId?:string, StackId?:string, AppId?:string, CreatedAt?:string, CompletedAt?:string, Duration?:int, IamUserArn?:string, Comment?:string, Command?:array{Name:"install_dependencies"|"update_dependencies"|"update_custom_cookbooks"|"execute_recipes"|"configure"|"setup"|"deploy"|"rollback"|"start"|"stop"|"restart"|"undeploy", Args?:array<string, array<string>>}, Status?:string, CustomJson?:string, InstanceIds?:array<string>}>}>
     */
    public function describeDeployments(array $args = []): \AWS\Result { }

    /**
     * @param array{StackId?:string, AppId?:string, DeploymentIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Deployments?:array<array{DeploymentId?:string, StackId?:string, AppId?:string, CreatedAt?:string, CompletedAt?:string, Duration?:int, IamUserArn?:string, Comment?:string, Command?:array{Name:"install_dependencies"|"update_dependencies"|"update_custom_cookbooks"|"execute_recipes"|"configure"|"setup"|"deploy"|"rollback"|"start"|"stop"|"restart"|"undeploy", Args?:array<string, array<string>>}, Status?:string, CustomJson?:string, InstanceIds?:array<string>}>}>
     */
    public function describeDeploymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EcsClusterArns?:array<string>, StackId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EcsClusters?:array<array{EcsClusterArn?:string, EcsClusterName?:string, StackId?:string, RegisteredAt?:string}>, NextToken?:string}>
     */
    public function describeEcsClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{EcsClusterArns?:array<string>, StackId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EcsClusters?:array<array{EcsClusterArn?:string, EcsClusterName?:string, StackId?:string, RegisteredAt?:string}>, NextToken?:string}>
     */
    public function describeEcsClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId?:string, StackId?:string, Ips?:array<string>} $args
     * @return \AWS\Result<array{ElasticIps?:array<array{Ip?:string, Name?:string, Domain?:string, Region?:string, InstanceId?:string}>}>
     */
    public function describeElasticIps(array $args = []): \AWS\Result { }

    /**
     * @param array{InstanceId?:string, StackId?:string, Ips?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ElasticIps?:array<array{Ip?:string, Name?:string, Domain?:string, Region?:string, InstanceId?:string}>}>
     */
    public function describeElasticIpsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId?:string, LayerIds?:array<string>} $args
     * @return \AWS\Result<array{ElasticLoadBalancers?:array<array{ElasticLoadBalancerName?:string, Region?:string, DnsName?:string, StackId?:string, LayerId?:string, VpcId?:string, AvailabilityZones?:array<string>, SubnetIds?:array<string>, Ec2InstanceIds?:array<string>}>}>
     */
    public function describeElasticLoadBalancers(array $args = []): \AWS\Result { }

    /**
     * @param array{StackId?:string, LayerIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ElasticLoadBalancers?:array<array{ElasticLoadBalancerName?:string, Region?:string, DnsName?:string, StackId?:string, LayerId?:string, VpcId?:string, AvailabilityZones?:array<string>, SubnetIds?:array<string>, Ec2InstanceIds?:array<string>}>}>
     */
    public function describeElasticLoadBalancersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId?:string, LayerId?:string, InstanceIds?:array<string>} $args
     * @return \AWS\Result<array{Instances?:array<array{AgentVersion?:string, AmiId?:string, Architecture?:"x86_64"|"i386", Arn?:string, AutoScalingType?:"load"|"timer", AvailabilityZone?:string, BlockDeviceMappings?:array<array{DeviceName?:string, NoDevice?:string, VirtualName?:string, Ebs?:array{SnapshotId?:string, Iops?:int, VolumeSize?:int, VolumeType?:"gp2"|"io1"|"standard", DeleteOnTermination?:bool}}>, CreatedAt?:string, EbsOptimized?:bool, Ec2InstanceId?:string, EcsClusterArn?:string, EcsContainerInstanceArn?:string, ElasticIp?:string, Hostname?:string, InfrastructureClass?:string, InstallUpdatesOnBoot?:bool, InstanceId?:string, InstanceProfileArn?:string, InstanceType?:string, LastServiceErrorId?:string, LayerIds?:array<string>, Os?:string, Platform?:string, PrivateDns?:string, PrivateIp?:string, PublicDns?:string, PublicIp?:string, RegisteredBy?:string, ReportedAgentVersion?:string, ReportedOs?:array{Family?:string, Name?:string, Version?:string}, RootDeviceType?:"ebs"|"instance-store", RootDeviceVolumeId?:string, SecurityGroupIds?:array<string>, SshHostDsaKeyFingerprint?:string, SshHostRsaKeyFingerprint?:string, SshKeyName?:string, StackId?:string, Status?:string, SubnetId?:string, Tenancy?:string, VirtualizationType?:"paravirtual"|"hvm"}>}>
     */
    public function describeInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{StackId?:string, LayerId?:string, InstanceIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{AgentVersion?:string, AmiId?:string, Architecture?:"x86_64"|"i386", Arn?:string, AutoScalingType?:"load"|"timer", AvailabilityZone?:string, BlockDeviceMappings?:array<array{DeviceName?:string, NoDevice?:string, VirtualName?:string, Ebs?:array{SnapshotId?:string, Iops?:int, VolumeSize?:int, VolumeType?:"gp2"|"io1"|"standard", DeleteOnTermination?:bool}}>, CreatedAt?:string, EbsOptimized?:bool, Ec2InstanceId?:string, EcsClusterArn?:string, EcsContainerInstanceArn?:string, ElasticIp?:string, Hostname?:string, InfrastructureClass?:string, InstallUpdatesOnBoot?:bool, InstanceId?:string, InstanceProfileArn?:string, InstanceType?:string, LastServiceErrorId?:string, LayerIds?:array<string>, Os?:string, Platform?:string, PrivateDns?:string, PrivateIp?:string, PublicDns?:string, PublicIp?:string, RegisteredBy?:string, ReportedAgentVersion?:string, ReportedOs?:array{Family?:string, Name?:string, Version?:string}, RootDeviceType?:"ebs"|"instance-store", RootDeviceVolumeId?:string, SecurityGroupIds?:array<string>, SshHostDsaKeyFingerprint?:string, SshHostRsaKeyFingerprint?:string, SshKeyName?:string, StackId?:string, Status?:string, SubnetId?:string, Tenancy?:string, VirtualizationType?:"paravirtual"|"hvm"}>}>
     */
    public function describeInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId?:string, LayerIds?:array<string>} $args
     * @return \AWS\Result<array{Layers?:array<array{Arn?:string, StackId?:string, LayerId?:string, Type?:"aws-flow-ruby"|"ecs-cluster"|"java-app"|"lb"|"web"|"php-app"|"rails-app"|"nodejs-app"|"memcached"|"db-master"|"monitoring-master"|"custom", Name?:string, Shortname?:string, Attributes?:array<"EcsClusterArn"|"EnableHaproxyStats"|"HaproxyStatsUrl"|"HaproxyStatsUser"|"HaproxyStatsPassword"|"HaproxyHealthCheckUrl"|"HaproxyHealthCheckMethod"|"MysqlRootPassword"|"MysqlRootPasswordUbiquitous"|"GangliaUrl"|"GangliaUser"|"GangliaPassword"|"MemcachedMemory"|"NodejsVersion"|"RubyVersion"|"RubygemsVersion"|"ManageBundler"|"BundlerVersion"|"RailsStack"|"PassengerVersion"|"Jvm"|"JvmVersion"|"JvmOptions"|"JavaAppServer"|"JavaAppServerVersion", string>, CloudWatchLogsConfiguration?:array{Enabled?:bool, LogStreams?:array<array{LogGroupName?:string, DatetimeFormat?:string, TimeZone?:"LOCAL"|"UTC", File?:string, FileFingerprintLines?:string, MultiLineStartPattern?:string, InitialPosition?:"start_of_file"|"end_of_file", Encoding?:"ascii"|"big5"|"big5hkscs"|"cp037"|"cp424"|"cp437"|"cp500"|"cp720"|"cp737"|"cp775"|"cp850"|"cp852"|"cp855"|"cp856"|"cp857"|"cp858"|"cp860"|"cp861"|"cp862"|"cp863"|"cp864"|"cp865"|"cp866"|"cp869"|"cp874"|"cp875"|"cp932"|"cp949"|"cp950"|"cp1006"|"cp1026"|"cp1140"|"cp1250"|"cp1251"|"cp1252"|"cp1253"|"cp1254"|"cp1255"|"cp1256"|"cp1257"|"cp1258"|"euc_jp"|"euc_jis_2004"|"euc_jisx0213"|"euc_kr"|"gb2312"|"gbk"|"gb18030"|"hz"|"iso2022_jp"|"iso2022_jp_1"|"iso2022_jp_2"|"iso2022_jp_2004"|"iso2022_jp_3"|"iso2022_jp_ext"|"iso2022_kr"|"latin_1"|"iso8859_2"|"iso8859_3"|"iso8859_4"|"iso8859_5"|"iso8859_6"|"iso8859_7"|"iso8859_8"|"iso8859_9"|"iso8859_10"|"iso8859_13"|"iso8859_14"|"iso8859_15"|"iso8859_16"|"johab"|"koi8_r"|"koi8_u"|"mac_cyrillic"|"mac_greek"|"mac_iceland"|"mac_latin2"|"mac_roman"|"mac_turkish"|"ptcp154"|"shift_jis"|"shift_jis_2004"|"shift_jisx0213"|"utf_32"|"utf_32_be"|"utf_32_le"|"utf_16"|"utf_16_be"|"utf_16_le"|"utf_7"|"utf_8"|"utf_8_sig", BufferDuration?:int, BatchCount?:int, BatchSize?:int}>}, CustomInstanceProfileArn?:string, CustomJson?:string, CustomSecurityGroupIds?:array<string>, DefaultSecurityGroupNames?:array<string>, Packages?:array<string>, VolumeConfigurations?:array<array{MountPoint:string, RaidLevel?:int, NumberOfDisks:int, Size:int, VolumeType?:string, Iops?:int, Encrypted?:bool}>, EnableAutoHealing?:bool, AutoAssignElasticIps?:bool, AutoAssignPublicIps?:bool, DefaultRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, CustomRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, CreatedAt?:string, InstallUpdatesOnBoot?:bool, UseEbsOptimizedInstances?:bool, LifecycleEventConfiguration?:array{Shutdown?:array{ExecutionTimeout?:int, DelayUntilElbConnectionsDrained?:bool}}}>}>
     */
    public function describeLayers(array $args = []): \AWS\Result { }

    /**
     * @param array{StackId?:string, LayerIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Layers?:array<array{Arn?:string, StackId?:string, LayerId?:string, Type?:"aws-flow-ruby"|"ecs-cluster"|"java-app"|"lb"|"web"|"php-app"|"rails-app"|"nodejs-app"|"memcached"|"db-master"|"monitoring-master"|"custom", Name?:string, Shortname?:string, Attributes?:array<"EcsClusterArn"|"EnableHaproxyStats"|"HaproxyStatsUrl"|"HaproxyStatsUser"|"HaproxyStatsPassword"|"HaproxyHealthCheckUrl"|"HaproxyHealthCheckMethod"|"MysqlRootPassword"|"MysqlRootPasswordUbiquitous"|"GangliaUrl"|"GangliaUser"|"GangliaPassword"|"MemcachedMemory"|"NodejsVersion"|"RubyVersion"|"RubygemsVersion"|"ManageBundler"|"BundlerVersion"|"RailsStack"|"PassengerVersion"|"Jvm"|"JvmVersion"|"JvmOptions"|"JavaAppServer"|"JavaAppServerVersion", string>, CloudWatchLogsConfiguration?:array{Enabled?:bool, LogStreams?:array<array{LogGroupName?:string, DatetimeFormat?:string, TimeZone?:"LOCAL"|"UTC", File?:string, FileFingerprintLines?:string, MultiLineStartPattern?:string, InitialPosition?:"start_of_file"|"end_of_file", Encoding?:"ascii"|"big5"|"big5hkscs"|"cp037"|"cp424"|"cp437"|"cp500"|"cp720"|"cp737"|"cp775"|"cp850"|"cp852"|"cp855"|"cp856"|"cp857"|"cp858"|"cp860"|"cp861"|"cp862"|"cp863"|"cp864"|"cp865"|"cp866"|"cp869"|"cp874"|"cp875"|"cp932"|"cp949"|"cp950"|"cp1006"|"cp1026"|"cp1140"|"cp1250"|"cp1251"|"cp1252"|"cp1253"|"cp1254"|"cp1255"|"cp1256"|"cp1257"|"cp1258"|"euc_jp"|"euc_jis_2004"|"euc_jisx0213"|"euc_kr"|"gb2312"|"gbk"|"gb18030"|"hz"|"iso2022_jp"|"iso2022_jp_1"|"iso2022_jp_2"|"iso2022_jp_2004"|"iso2022_jp_3"|"iso2022_jp_ext"|"iso2022_kr"|"latin_1"|"iso8859_2"|"iso8859_3"|"iso8859_4"|"iso8859_5"|"iso8859_6"|"iso8859_7"|"iso8859_8"|"iso8859_9"|"iso8859_10"|"iso8859_13"|"iso8859_14"|"iso8859_15"|"iso8859_16"|"johab"|"koi8_r"|"koi8_u"|"mac_cyrillic"|"mac_greek"|"mac_iceland"|"mac_latin2"|"mac_roman"|"mac_turkish"|"ptcp154"|"shift_jis"|"shift_jis_2004"|"shift_jisx0213"|"utf_32"|"utf_32_be"|"utf_32_le"|"utf_16"|"utf_16_be"|"utf_16_le"|"utf_7"|"utf_8"|"utf_8_sig", BufferDuration?:int, BatchCount?:int, BatchSize?:int}>}, CustomInstanceProfileArn?:string, CustomJson?:string, CustomSecurityGroupIds?:array<string>, DefaultSecurityGroupNames?:array<string>, Packages?:array<string>, VolumeConfigurations?:array<array{MountPoint:string, RaidLevel?:int, NumberOfDisks:int, Size:int, VolumeType?:string, Iops?:int, Encrypted?:bool}>, EnableAutoHealing?:bool, AutoAssignElasticIps?:bool, AutoAssignPublicIps?:bool, DefaultRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, CustomRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, CreatedAt?:string, InstallUpdatesOnBoot?:bool, UseEbsOptimizedInstances?:bool, LifecycleEventConfiguration?:array{Shutdown?:array{ExecutionTimeout?:int, DelayUntilElbConnectionsDrained?:bool}}}>}>
     */
    public function describeLayersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerIds:array<string>} $args
     * @return \AWS\Result<array{LoadBasedAutoScalingConfigurations?:array<array{LayerId?:string, Enable?:bool, UpScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}, DownScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}}>}>
     */
    public function describeLoadBasedAutoScaling(array $args): \AWS\Result { }

    /**
     * @param array{LayerIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBasedAutoScalingConfigurations?:array<array{LayerId?:string, Enable?:bool, UpScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}, DownScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}}>}>
     */
    public function describeLoadBasedAutoScalingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{UserProfile?:array{IamUserArn?:string, Name?:string, SshUsername?:string, SshPublicKey?:string}}>
     */
    public function describeMyUserProfile(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{UserProfile?:array{IamUserArn?:string, Name?:string, SshUsername?:string, SshPublicKey?:string}}>
     */
    public function describeMyUserProfileAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{OperatingSystems?:array<array{Name?:string, Id?:string, Type?:string, ConfigurationManagers?:array<array{Name?:string, Version?:string}>, ReportedName?:string, ReportedVersion?:string, Supported?:bool}>}>
     */
    public function describeOperatingSystems(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{OperatingSystems?:array<array{Name?:string, Id?:string, Type?:string, ConfigurationManagers?:array<array{Name?:string, Version?:string}>, ReportedName?:string, ReportedVersion?:string, Supported?:bool}>}>
     */
    public function describeOperatingSystemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IamUserArn?:string, StackId?:string} $args
     * @return \AWS\Result<array{Permissions?:array<array{StackId?:string, IamUserArn?:string, AllowSsh?:bool, AllowSudo?:bool, Level?:string}>}>
     */
    public function describePermissions(array $args = []): \AWS\Result { }

    /**
     * @param array{IamUserArn?:string, StackId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Permissions?:array<array{StackId?:string, IamUserArn?:string, AllowSsh?:bool, AllowSudo?:bool, Level?:string}>}>
     */
    public function describePermissionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId?:string, StackId?:string, RaidArrayIds?:array<string>} $args
     * @return \AWS\Result<array{RaidArrays?:array<array{RaidArrayId?:string, InstanceId?:string, Name?:string, RaidLevel?:int, NumberOfDisks?:int, Size?:int, Device?:string, MountPoint?:string, AvailabilityZone?:string, CreatedAt?:string, StackId?:string, VolumeType?:string, Iops?:int}>}>
     */
    public function describeRaidArrays(array $args = []): \AWS\Result { }

    /**
     * @param array{InstanceId?:string, StackId?:string, RaidArrayIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RaidArrays?:array<array{RaidArrayId?:string, InstanceId?:string, Name?:string, RaidLevel?:int, NumberOfDisks?:int, Size?:int, Device?:string, MountPoint?:string, AvailabilityZone?:string, CreatedAt?:string, StackId?:string, VolumeType?:string, Iops?:int}>}>
     */
    public function describeRaidArraysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, RdsDbInstanceArns?:array<string>} $args
     * @return \AWS\Result<array{RdsDbInstances?:array<array{RdsDbInstanceArn?:string, DbInstanceIdentifier?:string, DbUser?:string, DbPassword?:string, Region?:string, Address?:string, Engine?:string, StackId?:string, MissingOnRds?:bool}>}>
     */
    public function describeRdsDbInstances(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, RdsDbInstanceArns?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RdsDbInstances?:array<array{RdsDbInstanceArn?:string, DbInstanceIdentifier?:string, DbUser?:string, DbPassword?:string, Region?:string, Address?:string, Engine?:string, StackId?:string, MissingOnRds?:bool}>}>
     */
    public function describeRdsDbInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId?:string, InstanceId?:string, ServiceErrorIds?:array<string>} $args
     * @return \AWS\Result<array{ServiceErrors?:array<array{ServiceErrorId?:string, StackId?:string, InstanceId?:string, Type?:string, Message?:string, CreatedAt?:string}>}>
     */
    public function describeServiceErrors(array $args = []): \AWS\Result { }

    /**
     * @param array{StackId?:string, InstanceId?:string, ServiceErrorIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceErrors?:array<array{ServiceErrorId?:string, StackId?:string, InstanceId?:string, Type?:string, Message?:string, CreatedAt?:string}>}>
     */
    public function describeServiceErrorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string} $args
     * @return \AWS\Result<array{AgentInstallerUrl?:string, Parameters?:array<string, string>}>
     */
    public function describeStackProvisioningParameters(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgentInstallerUrl?:string, Parameters?:array<string, string>}>
     */
    public function describeStackProvisioningParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string} $args
     * @return \AWS\Result<array{StackSummary?:array{StackId?:string, Name?:string, Arn?:string, LayersCount?:int, AppsCount?:int, InstancesCount?:array{Assigning?:int, Booting?:int, ConnectionLost?:int, Deregistering?:int, Online?:int, Pending?:int, Rebooting?:int, Registered?:int, Registering?:int, Requested?:int, RunningSetup?:int, SetupFailed?:int, ShuttingDown?:int, StartFailed?:int, StopFailed?:int, Stopped?:int, Stopping?:int, Terminated?:int, Terminating?:int, Unassigning?:int}}}>
     */
    public function describeStackSummary(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackSummary?:array{StackId?:string, Name?:string, Arn?:string, LayersCount?:int, AppsCount?:int, InstancesCount?:array{Assigning?:int, Booting?:int, ConnectionLost?:int, Deregistering?:int, Online?:int, Pending?:int, Rebooting?:int, Registered?:int, Registering?:int, Requested?:int, RunningSetup?:int, SetupFailed?:int, ShuttingDown?:int, StartFailed?:int, StopFailed?:int, Stopped?:int, Stopping?:int, Terminated?:int, Terminating?:int, Unassigning?:int}}}>
     */
    public function describeStackSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackIds?:array<string>} $args
     * @return \AWS\Result<array{Stacks?:array<array{StackId?:string, Name?:string, Arn?:string, Region?:string, VpcId?:string, Attributes?:array<"Color", string>, ServiceRoleArn?:string, DefaultInstanceProfileArn?:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, UseOpsworksSecurityGroups?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, CreatedAt?:string, DefaultRootDeviceType?:"ebs"|"instance-store", AgentVersion?:string}>}>
     */
    public function describeStacks(array $args = []): \AWS\Result { }

    /**
     * @param array{StackIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Stacks?:array<array{StackId?:string, Name?:string, Arn?:string, Region?:string, VpcId?:string, Attributes?:array<"Color", string>, ServiceRoleArn?:string, DefaultInstanceProfileArn?:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, UseOpsworksSecurityGroups?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, CreatedAt?:string, DefaultRootDeviceType?:"ebs"|"instance-store", AgentVersion?:string}>}>
     */
    public function describeStacksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds:array<string>} $args
     * @return \AWS\Result<array{TimeBasedAutoScalingConfigurations?:array<array{InstanceId?:string, AutoScalingSchedule?:array{Monday?:array<string, string>, Tuesday?:array<string, string>, Wednesday?:array<string, string>, Thursday?:array<string, string>, Friday?:array<string, string>, Saturday?:array<string, string>, Sunday?:array<string, string>}}>}>
     */
    public function describeTimeBasedAutoScaling(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TimeBasedAutoScalingConfigurations?:array<array{InstanceId?:string, AutoScalingSchedule?:array{Monday?:array<string, string>, Tuesday?:array<string, string>, Wednesday?:array<string, string>, Thursday?:array<string, string>, Friday?:array<string, string>, Saturday?:array<string, string>, Sunday?:array<string, string>}}>}>
     */
    public function describeTimeBasedAutoScalingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IamUserArns?:array<string>} $args
     * @return \AWS\Result<array{UserProfiles?:array<array{IamUserArn?:string, Name?:string, SshUsername?:string, SshPublicKey?:string, AllowSelfManagement?:bool}>}>
     */
    public function describeUserProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{IamUserArns?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserProfiles?:array<array{IamUserArn?:string, Name?:string, SshUsername?:string, SshPublicKey?:string, AllowSelfManagement?:bool}>}>
     */
    public function describeUserProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId?:string, StackId?:string, RaidArrayId?:string, VolumeIds?:array<string>} $args
     * @return \AWS\Result<array{Volumes?:array<array{VolumeId?:string, Ec2VolumeId?:string, Name?:string, RaidArrayId?:string, InstanceId?:string, Status?:string, Size?:int, Device?:string, MountPoint?:string, Region?:string, AvailabilityZone?:string, VolumeType?:string, Iops?:int, Encrypted?:bool}>}>
     */
    public function describeVolumes(array $args = []): \AWS\Result { }

    /**
     * @param array{InstanceId?:string, StackId?:string, RaidArrayId?:string, VolumeIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Volumes?:array<array{VolumeId?:string, Ec2VolumeId?:string, Name?:string, RaidArrayId?:string, InstanceId?:string, Status?:string, Size?:int, Device?:string, MountPoint?:string, Region?:string, AvailabilityZone?:string, VolumeType?:string, Iops?:int, Encrypted?:bool}>}>
     */
    public function describeVolumesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ElasticLoadBalancerName:string, LayerId:string} $args
     * @return \AWS\Result<void>
     */
    public function detachElasticLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{ElasticLoadBalancerName:string, LayerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachElasticLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ElasticIp:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateElasticIp(array $args): \AWS\Result { }

    /**
     * @param array{ElasticIp:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateElasticIpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerId:string} $args
     * @return \AWS\Result<array{LayerId?:string, Hostname?:string}>
     */
    public function getHostnameSuggestion(array $args): \AWS\Result { }

    /**
     * @param array{LayerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LayerId?:string, Hostname?:string}>
     */
    public function getHostnameSuggestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ValidForInMinutes?:int} $args
     * @return \AWS\Result<array{TemporaryCredential?:array{Username?:string, Password?:string, ValidForInMinutes?:int, InstanceId?:string}}>
     */
    public function grantAccess(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ValidForInMinutes?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemporaryCredential?:array{Username?:string, Password?:string, ValidForInMinutes?:int, InstanceId?:string}}>
     */
    public function grantAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>, NextToken?:string}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>, NextToken?:string}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function rebootInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function rebootInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EcsClusterArn:string, StackId:string} $args
     * @return \AWS\Result<array{EcsClusterArn?:string}>
     */
    public function registerEcsCluster(array $args): \AWS\Result { }

    /**
     * @param array{EcsClusterArn:string, StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EcsClusterArn?:string}>
     */
    public function registerEcsClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ElasticIp:string, StackId:string} $args
     * @return \AWS\Result<array{ElasticIp?:string}>
     */
    public function registerElasticIp(array $args): \AWS\Result { }

    /**
     * @param array{ElasticIp:string, StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ElasticIp?:string}>
     */
    public function registerElasticIpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, Hostname?:string, PublicIp?:string, PrivateIp?:string, RsaPublicKey?:string, RsaPublicKeyFingerprint?:string, InstanceIdentity?:array{Document?:string, Signature?:string}} $args
     * @return \AWS\Result<array{InstanceId?:string}>
     */
    public function registerInstance(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, Hostname?:string, PublicIp?:string, PrivateIp?:string, RsaPublicKey?:string, RsaPublicKeyFingerprint?:string, InstanceIdentity?:array{Document?:string, Signature?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceId?:string}>
     */
    public function registerInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, RdsDbInstanceArn:string, DbUser:string, DbPassword:string} $args
     * @return \AWS\Result<void>
     */
    public function registerRdsDbInstance(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, RdsDbInstanceArn:string, DbUser:string, DbPassword:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerRdsDbInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Ec2VolumeId?:string, StackId:string} $args
     * @return \AWS\Result<array{VolumeId?:string}>
     */
    public function registerVolume(array $args): \AWS\Result { }

    /**
     * @param array{Ec2VolumeId?:string, StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeId?:string}>
     */
    public function registerVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerId:string, Enable?:bool, UpScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}, DownScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}} $args
     * @return \AWS\Result<void>
     */
    public function setLoadBasedAutoScaling(array $args): \AWS\Result { }

    /**
     * @param array{LayerId:string, Enable?:bool, UpScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}, DownScaling?:array{InstanceCount?:int, ThresholdsWaitTime?:int, IgnoreMetricsTime?:int, CpuThreshold?:float, MemoryThreshold?:float, LoadThreshold?:float, Alarms?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setLoadBasedAutoScalingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, IamUserArn:string, AllowSsh?:bool, AllowSudo?:bool, Level?:string} $args
     * @return \AWS\Result<void>
     */
    public function setPermission(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, IamUserArn:string, AllowSsh?:bool, AllowSudo?:bool, Level?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AutoScalingSchedule?:array{Monday?:array<string, string>, Tuesday?:array<string, string>, Wednesday?:array<string, string>, Thursday?:array<string, string>, Friday?:array<string, string>, Saturday?:array<string, string>, Sunday?:array<string, string>}} $args
     * @return \AWS\Result<void>
     */
    public function setTimeBasedAutoScaling(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AutoScalingSchedule?:array{Monday?:array<string, string>, Tuesday?:array<string, string>, Wednesday?:array<string, string>, Thursday?:array<string, string>, Friday?:array<string, string>, Saturday?:array<string, string>, Sunday?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setTimeBasedAutoScalingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function startInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string} $args
     * @return \AWS\Result<void>
     */
    public function startStack(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Force?:bool} $args
     * @return \AWS\Result<void>
     */
    public function stopInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string} $args
     * @return \AWS\Result<void>
     */
    public function stopStack(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function unassignInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function unassignInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeId:string} $args
     * @return \AWS\Result<void>
     */
    public function unassignVolume(array $args): \AWS\Result { }

    /**
     * @param array{VolumeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function unassignVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, Name?:string, Description?:string, DataSources?:array<array{Type?:string, Arn?:string, DatabaseName?:string}>, Type?:"aws-flow-ruby"|"java"|"rails"|"php"|"nodejs"|"static"|"other", AppSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, Domains?:array<string>, EnableSsl?:bool, SslConfiguration?:array{Certificate:string, PrivateKey:string, Chain?:string}, Attributes?:array<"DocumentRoot"|"RailsEnv"|"AutoBundleOnDeploy"|"AwsFlowRubySettings", string>, Environment?:array<array{Key:string, Value:string, Secure?:bool}>} $args
     * @return \AWS\Result<void>
     */
    public function updateApp(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, Name?:string, Description?:string, DataSources?:array<array{Type?:string, Arn?:string, DatabaseName?:string}>, Type?:"aws-flow-ruby"|"java"|"rails"|"php"|"nodejs"|"static"|"other", AppSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, Domains?:array<string>, EnableSsl?:bool, SslConfiguration?:array{Certificate:string, PrivateKey:string, Chain?:string}, Attributes?:array<"DocumentRoot"|"RailsEnv"|"AutoBundleOnDeploy"|"AwsFlowRubySettings", string>, Environment?:array<array{Key:string, Value:string, Secure?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ElasticIp:string, Name?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateElasticIp(array $args): \AWS\Result { }

    /**
     * @param array{ElasticIp:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateElasticIpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, LayerIds?:array<string>, InstanceType?:string, AutoScalingType?:"load"|"timer", Hostname?:string, Os?:string, AmiId?:string, SshKeyName?:string, Architecture?:"x86_64"|"i386", InstallUpdatesOnBoot?:bool, EbsOptimized?:bool, AgentVersion?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, LayerIds?:array<string>, InstanceType?:string, AutoScalingType?:"load"|"timer", Hostname?:string, Os?:string, AmiId?:string, SshKeyName?:string, Architecture?:"x86_64"|"i386", InstallUpdatesOnBoot?:bool, EbsOptimized?:bool, AgentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerId:string, Name?:string, Shortname?:string, Attributes?:array<"EcsClusterArn"|"EnableHaproxyStats"|"HaproxyStatsUrl"|"HaproxyStatsUser"|"HaproxyStatsPassword"|"HaproxyHealthCheckUrl"|"HaproxyHealthCheckMethod"|"MysqlRootPassword"|"MysqlRootPasswordUbiquitous"|"GangliaUrl"|"GangliaUser"|"GangliaPassword"|"MemcachedMemory"|"NodejsVersion"|"RubyVersion"|"RubygemsVersion"|"ManageBundler"|"BundlerVersion"|"RailsStack"|"PassengerVersion"|"Jvm"|"JvmVersion"|"JvmOptions"|"JavaAppServer"|"JavaAppServerVersion", string>, CloudWatchLogsConfiguration?:array{Enabled?:bool, LogStreams?:array<array{LogGroupName?:string, DatetimeFormat?:string, TimeZone?:"LOCAL"|"UTC", File?:string, FileFingerprintLines?:string, MultiLineStartPattern?:string, InitialPosition?:"start_of_file"|"end_of_file", Encoding?:"ascii"|"big5"|"big5hkscs"|"cp037"|"cp424"|"cp437"|"cp500"|"cp720"|"cp737"|"cp775"|"cp850"|"cp852"|"cp855"|"cp856"|"cp857"|"cp858"|"cp860"|"cp861"|"cp862"|"cp863"|"cp864"|"cp865"|"cp866"|"cp869"|"cp874"|"cp875"|"cp932"|"cp949"|"cp950"|"cp1006"|"cp1026"|"cp1140"|"cp1250"|"cp1251"|"cp1252"|"cp1253"|"cp1254"|"cp1255"|"cp1256"|"cp1257"|"cp1258"|"euc_jp"|"euc_jis_2004"|"euc_jisx0213"|"euc_kr"|"gb2312"|"gbk"|"gb18030"|"hz"|"iso2022_jp"|"iso2022_jp_1"|"iso2022_jp_2"|"iso2022_jp_2004"|"iso2022_jp_3"|"iso2022_jp_ext"|"iso2022_kr"|"latin_1"|"iso8859_2"|"iso8859_3"|"iso8859_4"|"iso8859_5"|"iso8859_6"|"iso8859_7"|"iso8859_8"|"iso8859_9"|"iso8859_10"|"iso8859_13"|"iso8859_14"|"iso8859_15"|"iso8859_16"|"johab"|"koi8_r"|"koi8_u"|"mac_cyrillic"|"mac_greek"|"mac_iceland"|"mac_latin2"|"mac_roman"|"mac_turkish"|"ptcp154"|"shift_jis"|"shift_jis_2004"|"shift_jisx0213"|"utf_32"|"utf_32_be"|"utf_32_le"|"utf_16"|"utf_16_be"|"utf_16_le"|"utf_7"|"utf_8"|"utf_8_sig", BufferDuration?:int, BatchCount?:int, BatchSize?:int}>}, CustomInstanceProfileArn?:string, CustomJson?:string, CustomSecurityGroupIds?:array<string>, Packages?:array<string>, VolumeConfigurations?:array<array{MountPoint:string, RaidLevel?:int, NumberOfDisks:int, Size:int, VolumeType?:string, Iops?:int, Encrypted?:bool}>, EnableAutoHealing?:bool, AutoAssignElasticIps?:bool, AutoAssignPublicIps?:bool, CustomRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, InstallUpdatesOnBoot?:bool, UseEbsOptimizedInstances?:bool, LifecycleEventConfiguration?:array{Shutdown?:array{ExecutionTimeout?:int, DelayUntilElbConnectionsDrained?:bool}}} $args
     * @return \AWS\Result<void>
     */
    public function updateLayer(array $args): \AWS\Result { }

    /**
     * @param array{LayerId:string, Name?:string, Shortname?:string, Attributes?:array<"EcsClusterArn"|"EnableHaproxyStats"|"HaproxyStatsUrl"|"HaproxyStatsUser"|"HaproxyStatsPassword"|"HaproxyHealthCheckUrl"|"HaproxyHealthCheckMethod"|"MysqlRootPassword"|"MysqlRootPasswordUbiquitous"|"GangliaUrl"|"GangliaUser"|"GangliaPassword"|"MemcachedMemory"|"NodejsVersion"|"RubyVersion"|"RubygemsVersion"|"ManageBundler"|"BundlerVersion"|"RailsStack"|"PassengerVersion"|"Jvm"|"JvmVersion"|"JvmOptions"|"JavaAppServer"|"JavaAppServerVersion", string>, CloudWatchLogsConfiguration?:array{Enabled?:bool, LogStreams?:array<array{LogGroupName?:string, DatetimeFormat?:string, TimeZone?:"LOCAL"|"UTC", File?:string, FileFingerprintLines?:string, MultiLineStartPattern?:string, InitialPosition?:"start_of_file"|"end_of_file", Encoding?:"ascii"|"big5"|"big5hkscs"|"cp037"|"cp424"|"cp437"|"cp500"|"cp720"|"cp737"|"cp775"|"cp850"|"cp852"|"cp855"|"cp856"|"cp857"|"cp858"|"cp860"|"cp861"|"cp862"|"cp863"|"cp864"|"cp865"|"cp866"|"cp869"|"cp874"|"cp875"|"cp932"|"cp949"|"cp950"|"cp1006"|"cp1026"|"cp1140"|"cp1250"|"cp1251"|"cp1252"|"cp1253"|"cp1254"|"cp1255"|"cp1256"|"cp1257"|"cp1258"|"euc_jp"|"euc_jis_2004"|"euc_jisx0213"|"euc_kr"|"gb2312"|"gbk"|"gb18030"|"hz"|"iso2022_jp"|"iso2022_jp_1"|"iso2022_jp_2"|"iso2022_jp_2004"|"iso2022_jp_3"|"iso2022_jp_ext"|"iso2022_kr"|"latin_1"|"iso8859_2"|"iso8859_3"|"iso8859_4"|"iso8859_5"|"iso8859_6"|"iso8859_7"|"iso8859_8"|"iso8859_9"|"iso8859_10"|"iso8859_13"|"iso8859_14"|"iso8859_15"|"iso8859_16"|"johab"|"koi8_r"|"koi8_u"|"mac_cyrillic"|"mac_greek"|"mac_iceland"|"mac_latin2"|"mac_roman"|"mac_turkish"|"ptcp154"|"shift_jis"|"shift_jis_2004"|"shift_jisx0213"|"utf_32"|"utf_32_be"|"utf_32_le"|"utf_16"|"utf_16_be"|"utf_16_le"|"utf_7"|"utf_8"|"utf_8_sig", BufferDuration?:int, BatchCount?:int, BatchSize?:int}>}, CustomInstanceProfileArn?:string, CustomJson?:string, CustomSecurityGroupIds?:array<string>, Packages?:array<string>, VolumeConfigurations?:array<array{MountPoint:string, RaidLevel?:int, NumberOfDisks:int, Size:int, VolumeType?:string, Iops?:int, Encrypted?:bool}>, EnableAutoHealing?:bool, AutoAssignElasticIps?:bool, AutoAssignPublicIps?:bool, CustomRecipes?:array{Setup?:array<string>, Configure?:array<string>, Deploy?:array<string>, Undeploy?:array<string>, Shutdown?:array<string>}, InstallUpdatesOnBoot?:bool, UseEbsOptimizedInstances?:bool, LifecycleEventConfiguration?:array{Shutdown?:array{ExecutionTimeout?:int, DelayUntilElbConnectionsDrained?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateLayerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SshPublicKey?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateMyUserProfile(array $args = []): \AWS\Result { }

    /**
     * @param array{SshPublicKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateMyUserProfileAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RdsDbInstanceArn:string, DbUser?:string, DbPassword?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateRdsDbInstance(array $args): \AWS\Result { }

    /**
     * @param array{RdsDbInstanceArn:string, DbUser?:string, DbPassword?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRdsDbInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackId:string, Name?:string, Attributes?:array<"Color", string>, ServiceRoleArn?:string, DefaultInstanceProfileArn?:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, DefaultRootDeviceType?:"ebs"|"instance-store", UseOpsworksSecurityGroups?:bool, AgentVersion?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateStack(array $args): \AWS\Result { }

    /**
     * @param array{StackId:string, Name?:string, Attributes?:array<"Color", string>, ServiceRoleArn?:string, DefaultInstanceProfileArn?:string, DefaultOs?:string, HostnameTheme?:string, DefaultAvailabilityZone?:string, DefaultSubnetId?:string, CustomJson?:string, ConfigurationManager?:array{Name?:string, Version?:string}, ChefConfiguration?:array{ManageBerkshelf?:bool, BerkshelfVersion?:string}, UseCustomCookbooks?:bool, CustomCookbooksSource?:array{Type?:"git"|"svn"|"archive"|"s3", Url?:string, Username?:string, Password?:string, SshKey?:string, Revision?:string}, DefaultSshKeyName?:string, DefaultRootDeviceType?:"ebs"|"instance-store", UseOpsworksSecurityGroups?:bool, AgentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IamUserArn:string, SshUsername?:string, SshPublicKey?:string, AllowSelfManagement?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateUserProfile(array $args): \AWS\Result { }

    /**
     * @param array{IamUserArn:string, SshUsername?:string, SshPublicKey?:string, AllowSelfManagement?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeId:string, Name?:string, MountPoint?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateVolume(array $args): \AWS\Result { }

    /**
     * @param array{VolumeId:string, Name?:string, MountPoint?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
