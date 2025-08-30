<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $service?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $service?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $service?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="photo" class="form-label">{{ __('Photo') }}</label>
            <input type="text" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo', $service?->photo) }}" id="photo" placeholder="Photo">
            {!! $errors->first('photo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="discount_percentage" class="form-label">{{ __('Discount Percentage') }}</label>
            <input type="text" name="discount_percentage" class="form-control @error('discount_percentage') is-invalid @enderror" value="{{ old('discount_percentage', $service?->discount_percentage) }}" id="discount_percentage" placeholder="Discount Percentage">
            {!! $errors->first('discount_percentage', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_one" class="form-label">{{ __('Date One') }}</label>
            <input type="text" name="date_one" class="form-control @error('date_one') is-invalid @enderror" value="{{ old('date_one', $service?->date_one) }}" id="date_one" placeholder="Date One">
            {!! $errors->first('date_one', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_two" class="form-label">{{ __('Date Two') }}</label>
            <input type="text" name="date_two" class="form-control @error('date_two') is-invalid @enderror" value="{{ old('date_two', $service?->date_two) }}" id="date_two" placeholder="Date Two">
            {!! $errors->first('date_two', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reason" class="form-label">{{ __('Reason') }}</label>
            <input type="text" name="reason" class="form-control @error('reason') is-invalid @enderror" value="{{ old('reason', $service?->reason) }}" id="reason" placeholder="Reason">
            {!! $errors->first('reason', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="function" class="form-label">{{ __('Function') }}</label>
            <input type="text" name="function" class="form-control @error('function') is-invalid @enderror" value="{{ old('function', $service?->function) }}" id="function" placeholder="Function">
            {!! $errors->first('function', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="complement" class="form-label">{{ __('Complement') }}</label>
            <input type="text" name="complement" class="form-control @error('complement') is-invalid @enderror" value="{{ old('complement', $service?->complement) }}" id="complement" placeholder="Complement">
            {!! $errors->first('complement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="effects" class="form-label">{{ __('Effects') }}</label>
            <input type="text" name="effects" class="form-control @error('effects') is-invalid @enderror" value="{{ old('effects', $service?->effects) }}" id="effects" placeholder="Effects">
            {!! $errors->first('effects', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="procces" class="form-label">{{ __('Procces') }}</label>
            <input type="text" name="procces" class="form-control @error('procces') is-invalid @enderror" value="{{ old('procces', $service?->procces) }}" id="procces" placeholder="Procces">
            {!! $errors->first('procces', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="goal" class="form-label">{{ __('Goal') }}</label>
            <input type="text" name="goal" class="form-control @error('goal') is-invalid @enderror" value="{{ old('goal', $service?->goal) }}" id="goal" placeholder="Goal">
            {!! $errors->first('goal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duration" class="form-label">{{ __('Duration') }}</label>
            <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror" value="{{ old('duration', $service?->duration) }}" id="duration" placeholder="Duration">
            {!! $errors->first('duration', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>