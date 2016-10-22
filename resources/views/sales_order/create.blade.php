@extends('layouts.adminlte.master')

@section('title')
    @lang('sales_order.create.title')
@endsection

@section('page_title')
    <span class="fa fa-cart-arrow-down fa-fw"></span>&nbsp;@lang('sales_order.create.page_title')
@endsection
@section('page_title_desc')
    @lang('sales_order.create.page_title_desc')
@endsection

@section('content')
    <form class="form-horizontal" action="{{ route('db.so.create') }}" method="post">
        <div ng-app="SalesOrderModule" ng-controller="SalesOrderCreateController">
            <div class="row">
                <div class="col-md-7">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">@lang('sales_order.create.box.supplier')</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputCustomerType" class="col-sm-3 control-label">@lang('sales_order.create.field.customer_type')</label>
                                <div class="col-sm-9">
                                    <select id="inputCustomerType"
                                            class="form-control"
                                            ng-options="key as value for (key, value) in customerTypeDDL track by key">
                                        <option value="">@lang('labels.PLEASE_SELECT')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCustomerName" class="col-sm-3 control-label">@lang('sales_order.create.field.customer_name')</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCustomerName" name="customer_name" placeholder="Customer Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCustomerDetails" class="col-sm-3 control-label">@lang('sales_order.create.field.customer_details')</label>
                                <div class="col-sm-9">
                                    <textarea id="inputCustomerDetails" class="form-control" rows="5" name="customer_detail"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">@lang('sales_order.create.box.purchase_order_detail')</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputSoCode" class="col-sm-2 control-label">@lang('sales_order.create.so_code')</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSoCode" name="so_code" placeholder="SO Code" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSoType" class="col-sm-2 control-label">@lang('sales_order.create.so_type')</label>
                                <div class="col-sm-10">
                                    <select id="inputSoType"
                                            class="form-control"
                                            ng-options="key as value for (key, value) in soTypeDDL track by key">
                                        <option value="">@lang('labels.PLEASE_SELECT')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSoDate" class="col-sm-2 control-label">@lang('sales_order.create.so_date')</label>
                                <div class="col-sm-10">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSoStatus" class="col-sm-2 control-label">@lang('sales_order.create.so_status')</label>
                                <div class="col-sm-10">
                                    <label class="control-label control-label-normal"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">@lang('sales_order.create.box.shipping')</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputShippingDate" class="col-sm-3 control-label">@lang('sales_order.create.field.shipping_date')</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputShippingDate" name="shipping_date" placeholder="Shipping Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputWarehouse" class="col-sm-3 control-label">@lang('sales_order.create.field.warehouse')</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputWarehouse" name="wareohouse" placeholder="Warehouse">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputVendorTrucking" class="col-sm-3 control-label">@lang('sales_order.create.field.vendor_trucking')</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputVendorTrucking" name="vendor_trucking" placeholder="Vendor Trucking">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-info">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">@lang('sales_order.create.box.transactions')</h3>
                        </div>
                        <div class="box-body">
                            <select id="inputProductSelect" class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="itemsListTable" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th width="30%">@lang('sales_order.create.table.item.header.product_name')</th>
                                            <th width="15%">@lang('sales_order.create.table.item.header.header.quantity')</th>
                                            <th width="15%" class="text-right">@lang('sales_order.create.table.item.header.unit')</th>
                                            <th width="15%" class="text-right">@lang('sales_order.create.table.item.header.price_unit')</th>
                                            <th width="5%">&nbsp;</th>
                                            <th width="20%" class="text-right">@lang('sales_order.create.table.item.header.total_price')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="itemsTotalListTable" class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td width="80%" class="text-right">@lang('sales_order.create.table.total.body.total')</td>
                                            <td width="20%" class="text-right"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">@lang('sales_order.create.box.remarks')</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea id="inputRemarks" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-offset-md-5">
                    <div class="btn-toolbar">
                        <button id="submitButton" type="submit" class="btn btn-primary pull-right">@lang('buttons.submit_button')</button>&nbsp;&nbsp;&nbsp;
                        <a id="printButton" href="#" target="_blank" class="btn btn-primary pull-right">@lang('buttons.print_preview_button')</a>&nbsp;&nbsp;&nbsp;
                        <button id="cancelButton" type="submit" class="btn btn-primary pull-right">@lang('buttons.cancel_button')</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('custom_js')
    <script type="application/javascript">
        var app = angular.module("SalesOrderModule", []);
        app.controller("SalesOrderCreateController", ['$scope', function($scope) {
            $scope.soTypeDDL = JSON.parse('{!! htmlspecialchars_decode($soTypeDDL) !!}');
            $scope.customerTypeDDL = JSON.parse('{!! htmlspecialchars_decode($customerTypeDDL) !!}');
        }]);
    </script>
@endsection