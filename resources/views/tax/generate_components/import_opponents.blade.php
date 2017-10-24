<div style="overflow-x:auto;white-space:nowrap">
  <table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.lt')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.tax_id')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.name')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.street')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.block')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.number')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.rt')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.rw')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.district')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.village')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.region')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.province')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.postal_code')</th>
            <th class="text-left" style="vertical-align:middle">@lang('tax.generate.import_opponents.table.header.phone_number')</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="taxOutput in taxesOutput" v-cloak>
            <td class="text-left">LT</td>
            <td class="text-left">@{{ taxOutput.opponentTaxIdNo }}</td>
            <td class="text-left">@{{ taxOutput.opponentName }}</td>
            <td class="text-left">@{{ taxOutput.opponentAddress }}</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
            <td class="text-left">-</td>
        </tr>
        <tr v-if="!products.length">
            <td class="text-center" colspan="14">@lang('labels.DATA_NOT_FOUND')</td>
        </tr>
    </tbody>
  </table>
</div>
<div class="row">
  <div class="col-xs-12 text-center">
    <a href="{{ route('db.tax.generate.import_opponents.excel', [ 'xlsx' ]) }}" class="btn btn-primary">@lang('buttons.download_excel_button')</a>
  </div>
</div>