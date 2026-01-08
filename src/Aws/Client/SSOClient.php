<?php
namespace AWS\SSO;

class SSOClient
{
    /**
     * @param array{roleName:string, accountId:string, accessToken:string} $args
     * @return \AWS\Result<array{roleCredentials?:array{accessKeyId?:string, secretAccessKey?:string, sessionToken?:string, expiration?:int}}>
     */
    public function getRoleCredentials(array $args): \AWS\Result { }

    /**
     * @param array{roleName:string, accountId:string, accessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleCredentials?:array{accessKeyId?:string, secretAccessKey?:string, sessionToken?:string, expiration?:int}}>
     */
    public function getRoleCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, accessToken:string, accountId:string} $args
     * @return \AWS\Result<array{nextToken?:string, roleList?:array<array{roleName?:string, accountId?:string}>}>
     */
    public function listAccountRoles(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, accessToken:string, accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, roleList?:array<array{roleName?:string, accountId?:string}>}>
     */
    public function listAccountRolesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, accessToken:string} $args
     * @return \AWS\Result<array{nextToken?:string, accountList?:array<array{accountId?:string, accountName?:string, emailAddress?:string}>}>
     */
    public function listAccounts(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, accessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, accountList?:array<array{accountId?:string, accountName?:string, emailAddress?:string}>}>
     */
    public function listAccountsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessToken:string} $args
     * @return \AWS\Result<void>
     */
    public function logout(array $args): \AWS\Result { }

    /**
     * @param array{accessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function logoutAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
