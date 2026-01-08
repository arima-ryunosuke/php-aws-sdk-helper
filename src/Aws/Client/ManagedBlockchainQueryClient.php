<?php
namespace AWS\ManagedBlockchainQuery;

class ManagedBlockchainQueryClient
{
    /**
     * @param array{getTokenBalanceInputs?:array<array{tokenIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, ownerIdentifier:array{address:string}, atBlockchainInstant?:array{time?:int|string|\DateTimeInterface}}>} $args
     * @return \AWS\Result<array{tokenBalances:array<array{ownerIdentifier?:array{address:string}, tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, balance:string, atBlockchainInstant:array{time?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{time?:int|string|\DateTimeInterface}}>, errors:array<array{tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, ownerIdentifier?:array{address:string}, atBlockchainInstant?:array{time?:int|string|\DateTimeInterface}, errorCode:string, errorMessage:string, errorType:"VALIDATION_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"}>}>
     */
    public function batchGetTokenBalance(array $args = []): \AWS\Result { }

    /**
     * @param array{getTokenBalanceInputs?:array<array{tokenIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, ownerIdentifier:array{address:string}, atBlockchainInstant?:array{time?:int|string|\DateTimeInterface}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{tokenBalances:array<array{ownerIdentifier?:array{address:string}, tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, balance:string, atBlockchainInstant:array{time?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{time?:int|string|\DateTimeInterface}}>, errors:array<array{tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, ownerIdentifier?:array{address:string}, atBlockchainInstant?:array{time?:int|string|\DateTimeInterface}, errorCode:string, errorMessage:string, errorType:"VALIDATION_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"}>}>
     */
    public function batchGetTokenBalanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contractIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress:string}} $args
     * @return \AWS\Result<array{contractIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress:string}, tokenStandard:"ERC20"|"ERC721"|"ERC1155", deployerAddress:string, metadata?:array{name?:string, symbol?:string, decimals?:int}}>
     */
    public function getAssetContract(array $args): \AWS\Result { }

    /**
     * @param array{contractIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{contractIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress:string}, tokenStandard:"ERC20"|"ERC721"|"ERC1155", deployerAddress:string, metadata?:array{name?:string, symbol?:string, decimals?:int}}>
     */
    public function getAssetContractAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tokenIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, ownerIdentifier:array{address:string}, atBlockchainInstant?:array{time?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{ownerIdentifier?:array{address:string}, tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, balance:string, atBlockchainInstant:array{time?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{time?:int|string|\DateTimeInterface}}>
     */
    public function getTokenBalance(array $args): \AWS\Result { }

    /**
     * @param array{tokenIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, ownerIdentifier:array{address:string}, atBlockchainInstant?:array{time?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerIdentifier?:array{address:string}, tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, balance:string, atBlockchainInstant:array{time?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{time?:int|string|\DateTimeInterface}}>
     */
    public function getTokenBalanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{transactionHash?:string, transactionId?:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET"} $args
     * @return \AWS\Result<array{transaction:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", blockHash?:string, transactionHash:string, blockNumber?:string, transactionTimestamp:int|string|\DateTimeInterface, transactionIndex:int, numberOfTransactions:int, to:string, from?:string, contractAddress?:string, gasUsed?:string, cumulativeGasUsed?:string, effectiveGasPrice?:string, signatureV?:int, signatureR?:string, signatureS?:string, transactionFee?:string, transactionId?:string, confirmationStatus?:"FINAL"|"NONFINAL", executionStatus?:"FAILED"|"SUCCEEDED"}}>
     */
    public function getTransaction(array $args): \AWS\Result { }

    /**
     * @param array{transactionHash?:string, transactionId?:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET"} $args
     * @return \GuzzleHttp\Promise\Promise<array{transaction:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", blockHash?:string, transactionHash:string, blockNumber?:string, transactionTimestamp:int|string|\DateTimeInterface, transactionIndex:int, numberOfTransactions:int, to:string, from?:string, contractAddress?:string, gasUsed?:string, cumulativeGasUsed?:string, effectiveGasPrice?:string, signatureV?:int, signatureR?:string, signatureS?:string, transactionFee?:string, transactionId?:string, confirmationStatus?:"FINAL"|"NONFINAL", executionStatus?:"FAILED"|"SUCCEEDED"}}>
     */
    public function getTransactionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contractFilter:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", tokenStandard:"ERC20"|"ERC721"|"ERC1155", deployerAddress:string}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{contracts:array<array{contractIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress:string}, tokenStandard:"ERC20"|"ERC721"|"ERC1155", deployerAddress:string}>, nextToken?:string}>
     */
    public function listAssetContracts(array $args): \AWS\Result { }

    /**
     * @param array{contractFilter:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", tokenStandard:"ERC20"|"ERC721"|"ERC1155", deployerAddress:string}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{contracts:array<array{contractIdentifier:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress:string}, tokenStandard:"ERC20"|"ERC721"|"ERC1155", deployerAddress:string}>, nextToken?:string}>
     */
    public function listAssetContractsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{network:string, addressIdentifierFilter:array{transactionEventToAddress:array<string>}, timeFilter?:array{from?:array{time?:int|string|\DateTimeInterface}, to?:array{time?:int|string|\DateTimeInterface}}, voutFilter?:array{voutSpent:bool}, confirmationStatusFilter?:array{include:array<"FINAL"|"NONFINAL">}, sort?:array{sortBy?:"blockchainInstant", sortOrder?:"ASCENDING"|"DESCENDING"}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{events:array<array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", transactionHash:string, eventType:"ERC20_TRANSFER"|"ERC20_MINT"|"ERC20_BURN"|"ERC20_DEPOSIT"|"ERC20_WITHDRAWAL"|"ERC721_TRANSFER"|"ERC1155_TRANSFER"|"BITCOIN_VIN"|"BITCOIN_VOUT"|"INTERNAL_ETH_TRANSFER"|"ETH_TRANSFER", from?:string, to?:string, value?:string, contractAddress?:string, tokenId?:string, transactionId?:string, voutIndex?:int, voutSpent?:bool, spentVoutTransactionId?:string, spentVoutTransactionHash?:string, spentVoutIndex?:int, blockchainInstant?:array{time?:int|string|\DateTimeInterface}, confirmationStatus?:"FINAL"|"NONFINAL"}>, nextToken?:string}>
     */
    public function listFilteredTransactionEvents(array $args): \AWS\Result { }

    /**
     * @param array{network:string, addressIdentifierFilter:array{transactionEventToAddress:array<string>}, timeFilter?:array{from?:array{time?:int|string|\DateTimeInterface}, to?:array{time?:int|string|\DateTimeInterface}}, voutFilter?:array{voutSpent:bool}, confirmationStatusFilter?:array{include:array<"FINAL"|"NONFINAL">}, sort?:array{sortBy?:"blockchainInstant", sortOrder?:"ASCENDING"|"DESCENDING"}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{events:array<array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", transactionHash:string, eventType:"ERC20_TRANSFER"|"ERC20_MINT"|"ERC20_BURN"|"ERC20_DEPOSIT"|"ERC20_WITHDRAWAL"|"ERC721_TRANSFER"|"ERC1155_TRANSFER"|"BITCOIN_VIN"|"BITCOIN_VOUT"|"INTERNAL_ETH_TRANSFER"|"ETH_TRANSFER", from?:string, to?:string, value?:string, contractAddress?:string, tokenId?:string, transactionId?:string, voutIndex?:int, voutSpent?:bool, spentVoutTransactionId?:string, spentVoutTransactionHash?:string, spentVoutIndex?:int, blockchainInstant?:array{time?:int|string|\DateTimeInterface}, confirmationStatus?:"FINAL"|"NONFINAL"}>, nextToken?:string}>
     */
    public function listFilteredTransactionEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ownerFilter?:array{address:string}, tokenFilter:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{tokenBalances:array<array{ownerIdentifier?:array{address:string}, tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, balance:string, atBlockchainInstant:array{time?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{time?:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function listTokenBalances(array $args): \AWS\Result { }

    /**
     * @param array{ownerFilter?:array{address:string}, tokenFilter:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tokenBalances:array<array{ownerIdentifier?:array{address:string}, tokenIdentifier?:array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", contractAddress?:string, tokenId?:string}, balance:string, atBlockchainInstant:array{time?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{time?:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function listTokenBalancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{transactionHash?:string, transactionId?:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{events:array<array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", transactionHash:string, eventType:"ERC20_TRANSFER"|"ERC20_MINT"|"ERC20_BURN"|"ERC20_DEPOSIT"|"ERC20_WITHDRAWAL"|"ERC721_TRANSFER"|"ERC1155_TRANSFER"|"BITCOIN_VIN"|"BITCOIN_VOUT"|"INTERNAL_ETH_TRANSFER"|"ETH_TRANSFER", from?:string, to?:string, value?:string, contractAddress?:string, tokenId?:string, transactionId?:string, voutIndex?:int, voutSpent?:bool, spentVoutTransactionId?:string, spentVoutTransactionHash?:string, spentVoutIndex?:int, blockchainInstant?:array{time?:int|string|\DateTimeInterface}, confirmationStatus?:"FINAL"|"NONFINAL"}>, nextToken?:string}>
     */
    public function listTransactionEvents(array $args): \AWS\Result { }

    /**
     * @param array{transactionHash?:string, transactionId?:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{events:array<array{network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", transactionHash:string, eventType:"ERC20_TRANSFER"|"ERC20_MINT"|"ERC20_BURN"|"ERC20_DEPOSIT"|"ERC20_WITHDRAWAL"|"ERC721_TRANSFER"|"ERC1155_TRANSFER"|"BITCOIN_VIN"|"BITCOIN_VOUT"|"INTERNAL_ETH_TRANSFER"|"ETH_TRANSFER", from?:string, to?:string, value?:string, contractAddress?:string, tokenId?:string, transactionId?:string, voutIndex?:int, voutSpent?:bool, spentVoutTransactionId?:string, spentVoutTransactionHash?:string, spentVoutIndex?:int, blockchainInstant?:array{time?:int|string|\DateTimeInterface}, confirmationStatus?:"FINAL"|"NONFINAL"}>, nextToken?:string}>
     */
    public function listTransactionEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{address:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", fromBlockchainInstant?:array{time?:int|string|\DateTimeInterface}, toBlockchainInstant?:array{time?:int|string|\DateTimeInterface}, sort?:array{sortBy?:"TRANSACTION_TIMESTAMP", sortOrder?:"ASCENDING"|"DESCENDING"}, nextToken?:string, maxResults?:int, confirmationStatusFilter?:array{include:array<"FINAL"|"NONFINAL">}} $args
     * @return \AWS\Result<array{transactions:array<array{transactionHash:string, transactionId?:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", transactionTimestamp:int|string|\DateTimeInterface, confirmationStatus?:"FINAL"|"NONFINAL"}>, nextToken?:string}>
     */
    public function listTransactions(array $args): \AWS\Result { }

    /**
     * @param array{address:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", fromBlockchainInstant?:array{time?:int|string|\DateTimeInterface}, toBlockchainInstant?:array{time?:int|string|\DateTimeInterface}, sort?:array{sortBy?:"TRANSACTION_TIMESTAMP", sortOrder?:"ASCENDING"|"DESCENDING"}, nextToken?:string, maxResults?:int, confirmationStatusFilter?:array{include:array<"FINAL"|"NONFINAL">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{transactions:array<array{transactionHash:string, transactionId?:string, network:"ETHEREUM_MAINNET"|"ETHEREUM_SEPOLIA_TESTNET"|"BITCOIN_MAINNET"|"BITCOIN_TESTNET", transactionTimestamp:int|string|\DateTimeInterface, confirmationStatus?:"FINAL"|"NONFINAL"}>, nextToken?:string}>
     */
    public function listTransactionsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
