<div class="row">
  <div class="col-xs-6 col-xs-offset-6 col-sm-4 col-sm-offset-8">
    <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
          </div>
          <vue-datetimepicker v-model="saleOrderDateFilter" format="YYYY-MM-DD"></vue-datetimepicker>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center" width="17%">@lang('sales_order.revise.index.table.header.code')</th>
            <th class="text-center" width="17%">@lang('sales_order.revise.index.table.header.so_date')</th>
            <th class="text-center" width="27%">@lang('sales_order.revise.index.table.header.customer')</th>
            <th class="text-center" width="17%">@lang('sales_order.revise.index.table.header.shipping_date')</th>
            <th class="text-center" width="22%">@lang('sales_order.revise.index.table.header.status')</th>
          </tr>
        </thead>
        <tbody>
          <template v-for="(saleOrder, index) in saleOrders">
            <tr>
              <td class="text-center">@{{ saleOrder.code }}</td>
              <td class="text-center">@{{ saleOrder.soCreatedDate }}</td>
              <td class="text-center">@{{ saleOrder.customerType == 'CUSTOMERTYPE.R' ? saleOrder.customer.name : saleOrder.walkInCustomer }}</td>
              <td class="text-center">@{{ saleOrder.shippingDate }}</td>
              <td class="text-center">
                @{{ lookup[saleOrder.status] }}
                &nbsp;
                <span v-if="saleOrder.delivers.length" class="btn btn-xs btn-default" data-toggle="collapse" :data-target="'#delivers_' + index" aria-expanded="false" :aria-controls="'#delivers_' + index">
                  <i class="fa fa-chevron-down"></i>
                </span>
              </td>            </tr>
            <tr :id="'delivers_' + index" v-if="saleOrder.delivers.length" class="collapse">
              <td colspan="5" class="table-responsive">
                <table class="table table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th width="40%" class="text-center">@lang('warehouse.outflow.deliver.table.item.header.product_name')</th>
                      <th width="30%" class="text-center">@lang('warehouse.outflow.deliver.table.item.header.unit')</th>
                      <th width="30%" class="text-center">@lang('warehouse.outflow.deliver.table.item.header.brutto')</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="deliver in saleOrder.delivers">
                      <td>@{{ deliver.item.product.name }}</td>
                      <td>@{{ deliver.item.selectedUnit.unit.name }} (@{{ deliver.item.selectedUnit.unit.symbol }})</td>
                      <td>@{{ deliver.brutto }}</td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </template>
          <tr v-if="!saleOrders.length">
              <td class="text-center" colspan="5">@lang('labels.DATA_NOT_FOUND')</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
