<div class="row">
	<div class="col-md-2">
		<div class="form-group">
			<input placeholder="@lang('Sender')" name="sender" value="{{ isset($search['sender']) ? $search['sender'] : '' }}" type="text" class="form-control form-control-sm">
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<input placeholder="@lang('Receiver')" name="receiver" value="{{ isset($search['receiver']) ? $search['receiver'] : '' }}" type="text" class="form-control form-control-sm">
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<input placeholder="@lang('E-mail')" name="email" value="{{ isset($search['email']) ? $search['email'] : '' }}" type="text" class="form-control form-control-sm">
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<input placeholder="@lang('Transaction ID')" name="utr" value="{{ isset($search['utr']) ? $search['utr'] : '' }}" type="text" class="form-control form-control-sm">
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<input placeholder="@lang('Min Amount')" name="min" value="{{ isset($search['min']) ? $search['min'] : '' }}" type="text" class="form-control form-control-sm">
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<input placeholder="@lang('Maximum Amount')" name="max" value="{{ isset($search['max']) ? $search['max'] : '' }}" type="text" class="form-control form-control-sm">
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<input placeholder="@lang('Transaction Date')" name="created_at" id="created_at" value="{{ isset($search['created_at']) ? $search['created_at'] : '' }}" type="date" class="form-control form-control-sm" autocomplete="off">
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group search-currency-dropdown">
			<select name="currency_id" class="form-control form-control-sm">
				<option value="">@lang('All Currency')</option>
				@foreach($currencies as $key => $currency)
					<option value="{{ $currency->id }}" {{ isset($search['currency_id']) && $search['currency_id'] = $currency->id ? 'selected' : '' }}> {{ __($currency->code) }} @lang('-') {{ __($currency->name) }} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group search-currency-dropdown">
			<select name="status" class="form-control form-control-sm">
				<option value="">@lang('All Status')</option>
				<option value="1" {{ isset($search['status']) && $search['status'] = 1 ? 'selected' : '' }}> @lang('Success') </option>
				<option value="2" {{ isset($search['status']) && $search['status'] = 2 ? 'selected' : '' }}> @lang('Canceled') </option>
				<option value="0" {{ isset($search['status']) && $search['status'] = 0 ? 'selected' : '' }}> @lang('Pending') </option>
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-sm btn-block">@lang('Search')</button>
		</div>
	</div>
</div>
