<?php

namespace NetSuite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Netsuite\Classes\ChangePasswordResponse changePassword(\Netsuite\Classes\ChangePasswordRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\ChangeEmailResponse changeEmail(\Netsuite\Classes\ChangeEmailRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AddResponse add(\Netsuite\Classes\AddRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\DeleteResponse delete(\Netsuite\Classes\DeleteRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\SearchResponse search(\Netsuite\Classes\SearchRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\SearchMoreWithIdResponse searchMoreWithId(\Netsuite\Classes\SearchMoreWithIdRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\UpdateResponse update(\Netsuite\Classes\UpdateRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\UpsertResponse upsert(\Netsuite\Classes\UpsertRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AddListResponse addList(\Netsuite\Classes\AddListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\DeleteListResponse deleteList(\Netsuite\Classes\DeleteListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\UpdateListResponse updateList(\Netsuite\Classes\UpdateListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\UpsertListResponse upsertList(\Netsuite\Classes\UpsertListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetResponse get(\Netsuite\Classes\GetRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetListResponse getList(\Netsuite\Classes\GetListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetAllResponse getAll(\Netsuite\Classes\GetAllRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetSavedSearchResponse getSavedSearch(\Netsuite\Classes\GetSavedSearchRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetCustomizationIdResponse getCustomizationId(\Netsuite\Classes\GetCustomizationIdRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\InitializeResponse initialize(\Netsuite\Classes\InitializeRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\InitializeListResponse initializeList(\Netsuite\Classes\InitializeListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\getSelectValueResponse getSelectValue(\Netsuite\Classes\getSelectValueRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetItemAvailabilityResponse getItemAvailability(\Netsuite\Classes\GetItemAvailabilityRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetBudgetExchangeRateResponse getBudgetExchangeRate(\Netsuite\Classes\GetBudgetExchangeRateRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetCurrencyRateResponse getCurrencyRate(\Netsuite\Classes\GetCurrencyRateRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetDataCenterUrlsResponse getDataCenterUrls(\Netsuite\Classes\GetDataCenterUrlsRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetPostingTransactionSummaryResponse getPostingTransactionSummary(\Netsuite\Classes\GetPostingTransactionSummaryRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetServerTimeResponse getServerTime(\Netsuite\Classes\GetServerTimeRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AttachResponse attach(\Netsuite\Classes\AttachRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\DetachResponse detach(\Netsuite\Classes\DetachRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\UpdateInviteeStatusResponse updateInviteeStatus(\Netsuite\Classes\UpdateInviteeStatusRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\UpdateInviteeStatusListResponse updateInviteeStatusList(\Netsuite\Classes\UpdateInviteeStatusListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse asyncAddList(\Netsuite\Classes\AsyncAddListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse asyncUpdateList(\Netsuite\Classes\AsyncUpdateListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse asyncUpsertList(\Netsuite\Classes\AsyncUpsertListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse asyncDeleteList(\Netsuite\Classes\AsyncDeleteListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse asyncGetList(\Netsuite\Classes\AsyncGetListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse asyncInitializeList(\Netsuite\Classes\AsyncInitializeListRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse asyncSearch(\Netsuite\Classes\AsyncSearchRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetAsyncResultResponse getAsyncResult(\Netsuite\Classes\GetAsyncResultRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\AsyncStatusResponse checkAsyncStatus(\Netsuite\Classes\CheckAsyncStatusRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetDeletedResponse getDeleted(\Netsuite\Classes\GetDeletedRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetAccountGovernanceInfoResponse getAccountGovernanceInfo(\Netsuite\Classes\GetAccountGovernanceInfoRequest $arg)
 * @throws \Exception
 * @method static \Netsuite\Classes\GetIntegrationGovernanceInfoResponse getIntegrationGovernanceInfo(\Netsuite\Classes\GetIntegrationGovernanceInfoRequest $arg)
 * @throws \Exception
 *
 * @see \NetSuite\Classes\NetSuiteService
 */
class NetSuite extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'netsuite';
    }
}
