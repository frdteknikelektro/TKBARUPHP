<?php

namespace App\Services;

use App\Model\PurchaseOrder;
use Doctrine\Common\Collections\Collection;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: miftah.fathudin
 * Date: 11/13/2016
 * Time: 2:18 AM
 */

/**
 * A service class which provide some service for purchase order operation such as creation, revision and rejection.
 *
 * Interface PurchaseOrderService
 * @package App\Services
 */
interface PurchaseOrderService
{
    /**
     * Save(create) a newly purchase order. The saved(created) purchase order will be returned.
     *
     * @param Request $request request which contains values from create form to create the purchase order.
     * @return PurchaseOrder created purchase order.
     */
    public function createPO(Request $request);

    /**
     * Get purchase order to be revised.
     *
     * @param int $poId id of purchase order to be revised.
     * @return PurchaseOrder purchase order to be revised.
     */
    public function getPOForRevise($poId);

    /**
     * Revise(modify) a purchase order. If the purchase order is still waiting for arrival, it's warehouse,
     * vendor trucking, shipping date and items can be changed. But, if it is already waiting for payment,
     * only it's items price can be changed. The revised(modified) purchase order will be returned.
     *
     * @param Request $request request which contains values from revise form to revise the purchase order.
     * @param int $poId the id of purchase order to be revised.
     * @return PurchaseOrder revised purchase order.
     */
    public function revisePO(Request $request, $poId);

    /**
     * Reject a purchase order. Only purchase orders with status waiting for arrival can be rejected.
     *
     * @param Request $request request which contains values for purchase order rejection.
     * @param int $poId the id of purchase order to be rejected.
     * @return void
     */
    public function rejectPO(Request $request, $poId);

    /**
     * Get purchase order which items want to be received.
     *
     * @param int $poId id of purchase order which items want to be received.
     * @return PurchaseOrder purchase order which items want to be received.
     */
    public function getPOForReceipt($poId);

    /**
     * Get all purchase order which belongs to warehouse with given id.
     *
     * @param int $warehouseId id of warehouse owning the purchase order(s).
     * @return Collection purchase orders of given warehouse.
     */
    public function getWarehousePO($warehouseId);

    /**
     * Get a purchase order with it's details related to payment.
     *
     * @param int $poId id of purchase order.
     * @return PurchaseOrder
     */
    public function getPOForPayment($poId);
}