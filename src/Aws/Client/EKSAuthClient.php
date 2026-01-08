<?php
namespace AWS\EKSAuth;

class EKSAuthClient
{
    /**
     * @param array{clusterName:string, token:string} $args
     * @return \AWS\Result<array{subject:array{namespace:string, serviceAccount:string}, audience:string, podIdentityAssociation:array{associationArn:string, associationId:string}, assumedRoleUser:array{arn:string, assumeRoleId:string}, credentials:array{sessionToken:string, secretAccessKey:string, accessKeyId:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeRoleForPodIdentity(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, token:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subject:array{namespace:string, serviceAccount:string}, audience:string, podIdentityAssociation:array{associationArn:string, associationId:string}, assumedRoleUser:array{arn:string, assumeRoleId:string}, credentials:array{sessionToken:string, secretAccessKey:string, accessKeyId:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeRoleForPodIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
