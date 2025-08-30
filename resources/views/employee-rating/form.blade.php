<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="service_employee" class="form-label">{{ __('Service Employee') }}</label>
            <select name="service_employee" class="form-control @error('service_employee') is-invalid @enderror" id="service_employee">
                <option value="">{{ __('Select a Service Employee') }}</option>
                @foreach($employees as $employee)
                    @if ($employee->role === 'Servicio')
                        <option value="{{ $employee->id }}" {{ old('service_employee', $employeeRating->service_employee ?? null) == $employee->id ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('service_employee', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="counter_employee" class="form-label">{{ __('Counter Employee') }}</label>
            <select name="counter_employee" class="form-control @error('counter_employee') is-invalid @enderror" id="counter_employee">
                <option value="">{{ __('Select a Counter Employee') }}</option>
                @foreach($employees as $employee)
                    @if ($employee->role === 'Recepcion')
                        <option value="{{ $employee->id }}" {{ old('counter_employee', $employeeRating->counter_employee ?? null) == $employee->id ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('counter_employee', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

        <div class="form-group mb-2 mb20">
            <label for="customer" class="form-label">{{ __('Customer') }}</label>
            <input type="text" name="customer" class="form-control @error('customer') is-invalid @enderror" value="{{ old('customer', $employeeRating->customer ?? null) }}" id="customer" placeholder="Customer">
            {!! $errors->first('customer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="service_rating" class="form-label">{{ __('Service Rating') }}</label>
            <input type="text" name="service_rating" class="form-control @error('service_rating') is-invalid @enderror" value="{{ old('service_rating', $employeeRating->service_rating ?? null) }}" id="service_rating" placeholder="Service Rating">
            {!! $errors->first('service_rating', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="counter_rating" class="form-label">{{ __('Counter Rating') }}</label>
            <input type="text" name="counter_rating" class="form-control @error('counter_rating') is-invalid @enderror" value="{{ old('counter_rating', $employeeRating->counter_rating ?? null) }}" id="counter_rating" placeholder="Counter Rating">
            {!! $errors->first('counter_rating', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="service_feedback" class="form-label">{{ __('Service Feedback') }}</label>
            <input type="text" name="service_feedback" class="form-control @error('service_feedback') is-invalid @enderror" value="{{ old('service_feedback', $employeeRating->service_feedback ?? null) }}" id="service_feedback" placeholder="Service Feedback">
            {!! $errors->first('service_feedback', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="counter_feedback" class="form-label">{{ __('Counter Feedback') }}</label>
            <input type="text" name="counter_feedback" class="form-control @error('counter_feedback') is-invalid @enderror" value="{{ old('counter_feedback', $employeeRating->counter_feedback ?? null) }}" id="counter_feedback" placeholder="Counter Feedback">
            {!! $errors->first('counter_feedback', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
