<?php
namespace AWS\NotificationsContacts;

class NotificationsContactsClient
{
    /**
     * @param array{arn:string, code:string} $args
     * @return \AWS\Result<array{}>
     */
    public function activateEmailContact(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, code:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function activateEmailContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, emailAddress:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string}>
     */
    public function createEmailContact(array $args): \AWS\Result { }

    /**
     * @param array{name:string, emailAddress:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string}>
     */
    public function createEmailContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEmailContact(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEmailContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{emailContact:array{arn:string, name:string, address:string, status:"inactive"|"active", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getEmailContact(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{emailContact:array{arn:string, name:string, address:string, status:"inactive"|"active", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getEmailContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, emailContacts:array<array{arn:string, name:string, address:string, status:"inactive"|"active", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listEmailContacts(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, emailContacts:array<array{arn:string, name:string, address:string, status:"inactive"|"active", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listEmailContactsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function sendActivationCode(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendActivationCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
