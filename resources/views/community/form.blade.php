<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="beneficiary" class="form-label">{{ __('Beneficiary') }}</label>
            <input type="text" name="beneficiary" class="form-control @error('beneficiary') is-invalid @enderror" value="{{ old('beneficiary', $community?->beneficiary) }}" id="beneficiary" placeholder="Beneficiary">
            {!! $errors->first('beneficiary', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reason" class="form-label">{{ __('Reason') }}</label>
            <input type="text" name="reason" class="form-control @error('reason') is-invalid @enderror" value="{{ old('reason', $community?->reason) }}" id="reason" placeholder="Reason">
            {!! $errors->first('reason', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="photo" class="form-label">{{ __('Photo') }}</label>
            <input type="text" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo', $community?->photo) }}" id="photo" placeholder="Photo">
            {!! $errors->first('photo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_one" class="form-label">{{ __('Date One') }}</label>
            <input type="text" name="date_one" class="form-control @error('date_one') is-invalid @enderror" value="{{ old('date_one', $community?->date_one) }}" id="date_one" placeholder="Date One">
            {!! $errors->first('date_one', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_two" class="form-label">{{ __('Date Two') }}</label>
            <input type="text" name="date_two" class="form-control @error('date_two') is-invalid @enderror" value="{{ old('date_two', $community?->date_two) }}" id="date_two" placeholder="Date Two">
            {!! $errors->first('date_two', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gift" class="form-label">{{ __('Gift') }}</label>
            <input type="text" name="gift" class="form-control @error('gift') is-invalid @enderror" value="{{ old('gift', $community?->gift) }}" id="gift" placeholder="Gift">
            {!! $errors->first('gift', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>