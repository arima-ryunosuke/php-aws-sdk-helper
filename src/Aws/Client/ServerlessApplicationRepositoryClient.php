<?php
namespace AWS\ServerlessApplicationRepository;

class ServerlessApplicationRepositoryClient
{
    /**
     * @param array{Author:string, Description:string, HomePageUrl?:string, Labels?:array<string>, LicenseBody?:string, LicenseUrl?:string, Name:string, ReadmeBody?:string, ReadmeUrl?:string, SemanticVersion?:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, SpdxLicenseId?:string, TemplateBody?:string, TemplateUrl?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Author?:string, CreationTime?:string, Description?:string, HomePageUrl?:string, IsVerifiedAuthor?:bool, Labels?:array<string>, LicenseUrl?:string, Name?:string, ReadmeUrl?:string, SpdxLicenseId?:string, VerifiedAuthorUrl?:string, Version?:array{ApplicationId:string, CreationTime:string, ParameterDefinitions:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported:bool, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl:string}}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{Author:string, Description:string, HomePageUrl?:string, Labels?:array<string>, LicenseBody?:string, LicenseUrl?:string, Name:string, ReadmeBody?:string, ReadmeUrl?:string, SemanticVersion?:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, SpdxLicenseId?:string, TemplateBody?:string, TemplateUrl?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Author?:string, CreationTime?:string, Description?:string, HomePageUrl?:string, IsVerifiedAuthor?:bool, Labels?:array<string>, LicenseUrl?:string, Name?:string, ReadmeUrl?:string, SpdxLicenseId?:string, VerifiedAuthorUrl?:string, Version?:array{ApplicationId:string, CreationTime:string, ParameterDefinitions:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported:bool, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl:string}}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateBody?:string, TemplateUrl?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, CreationTime?:string, ParameterDefinitions?:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported?:bool, SemanticVersion?:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl?:string}>
     */
    public function createApplicationVersion(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateBody?:string, TemplateUrl?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, CreationTime?:string, ParameterDefinitions?:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported?:bool, SemanticVersion?:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl?:string}>
     */
    public function createApplicationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, Capabilities?:array<string>, ChangeSetName?:string, ClientToken?:string, Description?:string, NotificationArns?:array<string>, ParameterOverrides?:array<array{Name:string, Value:string}>, ResourceTypes?:array<string>, RollbackConfiguration?:array{MonitoringTimeInMinutes?:int, RollbackTriggers?:array<array{Arn:string, Type:string}>}, SemanticVersion?:string, StackName:string, Tags?:array<array{Key:string, Value:string}>, TemplateId?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, ChangeSetId?:string, SemanticVersion?:string, StackId?:string}>
     */
    public function createCloudFormationChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, Capabilities?:array<string>, ChangeSetName?:string, ClientToken?:string, Description?:string, NotificationArns?:array<string>, ParameterOverrides?:array<array{Name:string, Value:string}>, ResourceTypes?:array<string>, RollbackConfiguration?:array{MonitoringTimeInMinutes?:int, RollbackTriggers?:array<array{Arn:string, Type:string}>}, SemanticVersion?:string, StackName:string, Tags?:array<array{Key:string, Value:string}>, TemplateId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, ChangeSetId?:string, SemanticVersion?:string, StackId?:string}>
     */
    public function createCloudFormationChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, SemanticVersion?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, CreationTime?:string, ExpirationTime?:string, SemanticVersion?:string, Status?:"PREPARING"|"ACTIVE"|"EXPIRED", TemplateId?:string, TemplateUrl?:string}>
     */
    public function createCloudFormationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, SemanticVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, CreationTime?:string, ExpirationTime?:string, SemanticVersion?:string, Status?:"PREPARING"|"ACTIVE"|"EXPIRED", TemplateId?:string, TemplateUrl?:string}>
     */
    public function createCloudFormationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, SemanticVersion?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Author?:string, CreationTime?:string, Description?:string, HomePageUrl?:string, IsVerifiedAuthor?:bool, Labels?:array<string>, LicenseUrl?:string, Name?:string, ReadmeUrl?:string, SpdxLicenseId?:string, VerifiedAuthorUrl?:string, Version?:array{ApplicationId:string, CreationTime:string, ParameterDefinitions:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported:bool, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl:string}}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, SemanticVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Author?:string, CreationTime?:string, Description?:string, HomePageUrl?:string, IsVerifiedAuthor?:bool, Labels?:array<string>, LicenseUrl?:string, Name?:string, ReadmeUrl?:string, SpdxLicenseId?:string, VerifiedAuthorUrl?:string, Version?:array{ApplicationId:string, CreationTime:string, ParameterDefinitions:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported:bool, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl:string}}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<array{Statements?:array<array{Actions:array<string>, PrincipalOrgIDs?:array<string>, Principals:array<string>, StatementId?:string}>}>
     */
    public function getApplicationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Statements?:array<array{Actions:array<string>, PrincipalOrgIDs?:array<string>, Principals:array<string>, StatementId?:string}>}>
     */
    public function getApplicationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, TemplateId:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, CreationTime?:string, ExpirationTime?:string, SemanticVersion?:string, Status?:"PREPARING"|"ACTIVE"|"EXPIRED", TemplateId?:string, TemplateUrl?:string}>
     */
    public function getCloudFormationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, TemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, CreationTime?:string, ExpirationTime?:string, SemanticVersion?:string, Status?:"PREPARING"|"ACTIVE"|"EXPIRED", TemplateId?:string, TemplateUrl?:string}>
     */
    public function getCloudFormationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, MaxItems?:int, NextToken?:string, SemanticVersion?:string} $args
     * @return \AWS\Result<array{Dependencies?:array<array{ApplicationId:string, SemanticVersion:string}>, NextToken?:string}>
     */
    public function listApplicationDependencies(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, MaxItems?:int, NextToken?:string, SemanticVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Dependencies?:array<array{ApplicationId:string, SemanticVersion:string}>, NextToken?:string}>
     */
    public function listApplicationDependenciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, MaxItems?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{ApplicationId:string, CreationTime:string, SemanticVersion:string, SourceCodeUrl?:string}>}>
     */
    public function listApplicationVersions(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, MaxItems?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{ApplicationId:string, CreationTime:string, SemanticVersion:string, SourceCodeUrl?:string}>}>
     */
    public function listApplicationVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxItems?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Applications?:array<array{ApplicationId:string, Author:string, CreationTime?:string, Description:string, HomePageUrl?:string, Labels?:array<string>, Name:string, SpdxLicenseId?:string}>, NextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxItems?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{ApplicationId:string, Author:string, CreationTime?:string, Description:string, HomePageUrl?:string, Labels?:array<string>, Name:string, SpdxLicenseId?:string}>, NextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, Statements:array<array{Actions:array<string>, PrincipalOrgIDs?:array<string>, Principals:array<string>, StatementId?:string}>} $args
     * @return \AWS\Result<array{Statements?:array<array{Actions:array<string>, PrincipalOrgIDs?:array<string>, Principals:array<string>, StatementId?:string}>}>
     */
    public function putApplicationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, Statements:array<array{Actions:array<string>, PrincipalOrgIDs?:array<string>, Principals:array<string>, StatementId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Statements?:array<array{Actions:array<string>, PrincipalOrgIDs?:array<string>, Principals:array<string>, StatementId?:string}>}>
     */
    public function putApplicationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, OrganizationId:string} $args
     * @return \AWS\Result<void>
     */
    public function unshareApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function unshareApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, Author?:string, Description?:string, HomePageUrl?:string, Labels?:array<string>, ReadmeBody?:string, ReadmeUrl?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Author?:string, CreationTime?:string, Description?:string, HomePageUrl?:string, IsVerifiedAuthor?:bool, Labels?:array<string>, LicenseUrl?:string, Name?:string, ReadmeUrl?:string, SpdxLicenseId?:string, VerifiedAuthorUrl?:string, Version?:array{ApplicationId:string, CreationTime:string, ParameterDefinitions:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported:bool, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl:string}}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, Author?:string, Description?:string, HomePageUrl?:string, Labels?:array<string>, ReadmeBody?:string, ReadmeUrl?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Author?:string, CreationTime?:string, Description?:string, HomePageUrl?:string, IsVerifiedAuthor?:bool, Labels?:array<string>, LicenseUrl?:string, Name?:string, ReadmeUrl?:string, SpdxLicenseId?:string, VerifiedAuthorUrl?:string, Version?:array{ApplicationId:string, CreationTime:string, ParameterDefinitions:array<array{AllowedPattern?:string, AllowedValues?:array<string>, ConstraintDescription?:string, DefaultValue?:string, Description?:string, MaxLength?:int, MaxValue?:int, MinLength?:int, MinValue?:int, Name:string, NoEcho?:bool, ReferencedByResources:array<string>, Type?:string}>, RequiredCapabilities:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND"|"CAPABILITY_RESOURCE_POLICY">, ResourcesSupported:bool, SemanticVersion:string, SourceCodeArchiveUrl?:string, SourceCodeUrl?:string, TemplateUrl:string}}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
