<?php

namespace Picqer\Financials\Exact\Sync;

use Picqer\Financials\Exact\Model;
use Picqer\Financials\Exact\Persistance\Storable;
use Picqer\Financials\Exact\Query\Findable;

/**
 * Class Deleted
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncDeleted
 *
 * @property Int64 $Timestamp Timestamp
 * @property Guid $DeletedBy UserID of person who deleted record
 * @property DateTime $DeletedDate Deleted date
 * @property Int32 $Division Division code
 * @property Guid $EntityKey Entity key
 * @property Int32 $EntityType Entity Types:
 *   1  = TransactionLines
 *   2  = Accounts
 *   3  = Addresses
 *   4  = Attachments
 *   5  = Contacts
 *   6  = Documents
 *   7  = GLAccounts
 *   8  = SalesItemPrices
 *   9  = Items
 *   10 = PaymentTerms
 *   11 = Quotations
 *   12 = SalesOrders
 *   13 = SalesInvoices
 *   14 = TimeCostTransactions
 *   15 = StockPositions
 *   16 = GoodsDeliveries
 *   17 = GoodsDeliveryLines
 *   18 = GLClassifications
 * @property Guid $ID Primary key
 */
class Deleted extends Model
{
    use Findable;
    use Storable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'DeletedBy',
        'DeletedDate',
        'Division',
        'EntityKey',
        'EntityType',
        'ID',
    ];

    protected $url = 'sync/Deleted';

    // Entity Types
    const ENTITY_TYPE_TRANSACTION_LINES      = 1;
    const ENTITY_TYPE_ACCOUNTS               = 2;
    const ENTITY_TYPE_ADDRESSES              = 3;
    const ENTITY_TYPE_ATTACHMENTS            = 4;
    const ENTITY_TYPE_CONTACTS               = 5;
    const ENTITY_TYPE_DOCUMENTS              = 6;
    const ENTITY_TYPE_GLACCOUNTS             = 7;
    const ENTITY_TYPE_SALES_ITEM_PRICES      = 8;
    const ENTITY_TYPE_ITEMS                  = 9;
    const ENTITY_TYPE_PAYMENT_TERMS          = 10;
    const ENTITY_TYPE_QUOTATIONS             = 11;
    const ENTITY_TYPE_SALES_ORDERS           = 12;
    const ENTITY_TYPE_SALES_INVOICES         = 13;
    const ENTITY_TYPE_TIME_COST_TRANSACTIONS = 14;
    const ENTITY_TYPE_STOCK_POSITIONS        = 15;
    const ENTITY_TYPE_GOODS_DELIVERIES       = 16;
    const ENTITY_TYPE_GOODS_DELIVERY_LINES   = 17;
    const ENTITY_TYPE_GLCLASSIFICATIONS      = 18;
}