<?php
namespace AWS\Budgets;

class BudgetsClient
{
    /**
     * @param array{AccountId:string, Budget:array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}, NotificationsWithSubscribers?:array<array{Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}>, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createBudget(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Budget:array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}, NotificationsWithSubscribers?:array<array{Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}>, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AccountId:string, BudgetName:string, ActionId:string}>
     */
    public function createBudgetAction(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountId:string, BudgetName:string, ActionId:string}>
     */
    public function createBudgetActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createNotification(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function createSubscriber(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createSubscriberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBudget(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string} $args
     * @return \AWS\Result<array{AccountId:string, BudgetName:string, Action:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}>
     */
    public function deleteBudgetAction(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountId:string, BudgetName:string, Action:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}>
     */
    public function deleteBudgetActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNotification(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSubscriber(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, Subscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSubscriberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string} $args
     * @return \AWS\Result<array{Budget?:array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}}>
     */
    public function describeBudget(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Budget?:array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}}>
     */
    public function describeBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string} $args
     * @return \AWS\Result<array{AccountId:string, BudgetName:string, Action:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}>
     */
    public function describeBudgetAction(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountId:string, BudgetName:string, Action:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}>
     */
    public function describeBudgetActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string, TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ActionHistories:array<array{Timestamp:int|string|\DateTimeInterface, Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", EventType:"SYSTEM"|"CREATE_ACTION"|"DELETE_ACTION"|"UPDATE_ACTION"|"EXECUTE_ACTION", ActionHistoryDetails:array{Message:string, Action:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}}>, NextToken?:string}>
     */
    public function describeBudgetActionHistories(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string, TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ActionHistories:array<array{Timestamp:int|string|\DateTimeInterface, Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", EventType:"SYSTEM"|"CREATE_ACTION"|"DELETE_ACTION"|"UPDATE_ACTION"|"EXECUTE_ACTION", ActionHistoryDetails:array{Message:string, Action:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}}>, NextToken?:string}>
     */
    public function describeBudgetActionHistoriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Actions:array<array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}>, NextToken?:string}>
     */
    public function describeBudgetActionsForAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Actions:array<array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}>, NextToken?:string}>
     */
    public function describeBudgetActionsForAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Actions:array<array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}>, NextToken?:string}>
     */
    public function describeBudgetActionsForBudget(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Actions:array<array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}>, NextToken?:string}>
     */
    public function describeBudgetActionsForBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BudgetNotificationsForAccount?:array<array{Notifications?:array<array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}>, BudgetName?:string}>, NextToken?:string}>
     */
    public function describeBudgetNotificationsForAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BudgetNotificationsForAccount?:array<array{Notifications?:array<array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}>, BudgetName?:string}>, NextToken?:string}>
     */
    public function describeBudgetNotificationsForAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BudgetPerformanceHistory?:array{BudgetName?:string, BudgetType?:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit?:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", BudgetedAndActualAmountsList?:array<array{BudgetedAmount?:array{Amount:string, Unit:string}, ActualAmount?:array{Amount:string, Unit:string}, TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}}>}, NextToken?:string}>
     */
    public function describeBudgetPerformanceHistory(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BudgetPerformanceHistory?:array{BudgetName?:string, BudgetType?:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit?:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", BudgetedAndActualAmountsList?:array<array{BudgetedAmount?:array{Amount:string, Unit:string}, ActualAmount?:array{Amount:string, Unit:string}, TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}}>}, NextToken?:string}>
     */
    public function describeBudgetPerformanceHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Budgets?:array<array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function describeBudgets(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Budgets?:array<array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function describeBudgetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Notifications?:array<array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}>, NextToken?:string}>
     */
    public function describeNotificationsForBudget(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Notifications?:array<array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}>, NextToken?:string}>
     */
    public function describeNotificationsForBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Subscribers?:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>, NextToken?:string}>
     */
    public function describeSubscribersForNotification(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subscribers?:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>, NextToken?:string}>
     */
    public function describeSubscribersForNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string, ExecutionType:"APPROVE_BUDGET_ACTION"|"RETRY_BUDGET_ACTION"|"REVERSE_BUDGET_ACTION"|"RESET_BUDGET_ACTION"} $args
     * @return \AWS\Result<array{AccountId:string, BudgetName:string, ActionId:string, ExecutionType:"APPROVE_BUDGET_ACTION"|"RETRY_BUDGET_ACTION"|"REVERSE_BUDGET_ACTION"|"RESET_BUDGET_ACTION"}>
     */
    public function executeBudgetAction(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string, ExecutionType:"APPROVE_BUDGET_ACTION"|"RETRY_BUDGET_ACTION"|"REVERSE_BUDGET_ACTION"|"RESET_BUDGET_ACTION"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountId:string, BudgetName:string, ActionId:string, ExecutionType:"APPROVE_BUDGET_ACTION"|"RETRY_BUDGET_ACTION"|"REVERSE_BUDGET_ACTION"|"RESET_BUDGET_ACTION"}>
     */
    public function executeBudgetActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{ResourceTags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceTags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, ResourceTags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, ResourceTags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, ResourceTagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, ResourceTagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NewBudget:array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateBudget(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NewBudget:array{BudgetName:string, BudgetLimit?:array{Amount:string, Unit:string}, PlannedBudgetLimits?:array<string, array{Amount:string, Unit:string}>, CostFilters?:array<string, array<string>>, CostTypes?:array{IncludeTax?:bool, IncludeSubscription?:bool, UseBlended?:bool, IncludeRefund?:bool, IncludeCredit?:bool, IncludeUpfront?:bool, IncludeRecurring?:bool, IncludeOtherSubscription?:bool, IncludeSupport?:bool, IncludeDiscount?:bool, UseAmortized?:bool}, TimeUnit:"DAILY"|"MONTHLY"|"QUARTERLY"|"ANNUALLY", TimePeriod?:array{Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface}, CalculatedSpend?:array{ActualSpend:array{Amount:string, Unit:string}, ForecastedSpend?:array{Amount:string, Unit:string}}, BudgetType:"USAGE"|"COST"|"RI_UTILIZATION"|"RI_COVERAGE"|"SAVINGS_PLANS_UTILIZATION"|"SAVINGS_PLANS_COVERAGE", LastUpdatedTime?:int|string|\DateTimeInterface, AutoAdjustData?:array{AutoAdjustType:"HISTORICAL"|"FORECAST", HistoricalOptions?:array{BudgetAdjustmentPeriod:int, LookBackAvailablePeriods?:int}, LastAutoAdjustTime?:int|string|\DateTimeInterface}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string, NotificationType?:"ACTUAL"|"FORECASTED", ActionThreshold?:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition?:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn?:string, ApprovalModel?:"AUTOMATIC"|"MANUAL", Subscribers?:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>} $args
     * @return \AWS\Result<array{AccountId:string, BudgetName:string, OldAction:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}, NewAction:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}>
     */
    public function updateBudgetAction(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, ActionId:string, NotificationType?:"ACTUAL"|"FORECASTED", ActionThreshold?:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition?:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn?:string, ApprovalModel?:"AUTOMATIC"|"MANUAL", Subscribers?:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountId:string, BudgetName:string, OldAction:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}, NewAction:array{ActionId:string, BudgetName:string, NotificationType:"ACTUAL"|"FORECASTED", ActionType:"APPLY_IAM_POLICY"|"APPLY_SCP_POLICY"|"RUN_SSM_DOCUMENTS", ActionThreshold:array{ActionThresholdValue:float, ActionThresholdType:"PERCENTAGE"|"ABSOLUTE_VALUE"}, Definition:array{IamActionDefinition?:array{PolicyArn:string, Roles?:array<string>, Groups?:array<string>, Users?:array<string>}, ScpActionDefinition?:array{PolicyId:string, TargetIds:array<string>}, SsmActionDefinition?:array{ActionSubType:"STOP_EC2_INSTANCES"|"STOP_RDS_INSTANCES", Region:string, InstanceIds:array<string>}}, ExecutionRoleArn:string, ApprovalModel:"AUTOMATIC"|"MANUAL", Status:"STANDBY"|"PENDING"|"EXECUTION_IN_PROGRESS"|"EXECUTION_SUCCESS"|"EXECUTION_FAILURE"|"REVERSE_IN_PROGRESS"|"REVERSE_SUCCESS"|"REVERSE_FAILURE"|"RESET_IN_PROGRESS"|"RESET_FAILURE", Subscribers:array<array{SubscriptionType:"SNS"|"EMAIL", Address:string}>}}>
     */
    public function updateBudgetActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, OldNotification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, NewNotification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNotification(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, OldNotification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, NewNotification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, OldSubscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}, NewSubscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateSubscriber(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BudgetName:string, Notification:array{NotificationType:"ACTUAL"|"FORECASTED", ComparisonOperator:"GREATER_THAN"|"LESS_THAN"|"EQUAL_TO", Threshold:float, ThresholdType?:"PERCENTAGE"|"ABSOLUTE_VALUE", NotificationState?:"OK"|"ALARM"}, OldSubscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}, NewSubscriber:array{SubscriptionType:"SNS"|"EMAIL", Address:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateSubscriberAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
