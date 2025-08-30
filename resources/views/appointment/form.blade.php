<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="first_name" class="form-label">{{ __('First Name') }}</label>
            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $appointment?->first_name) }}" id="first_name" placeholder="First Name">
            {!! $errors->first('first_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="last_name_father" class="form-label">{{ __('Last Name Father') }}</label>
            <input type="text" name="last_name_father" class="form-control @error('last_name_father') is-invalid @enderror" value="{{ old('last_name_father', $appointment?->last_name_father) }}" id="last_name_father" placeholder="Last Name Father">
            {!! $errors->first('last_name_father', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="last_name_mother" class="form-label">{{ __('Last Name Mother') }}</label>
            <input type="text" name="last_name_mother" class="form-control @error('last_name_mother') is-invalid @enderror" value="{{ old('last_name_mother', $appointment?->last_name_mother) }}" id="last_name_mother" placeholder="Last Name Mother">
            {!! $errors->first('last_name_mother', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $appointment?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $appointment?->phone) }}" id="phone" placeholder="Phone">
            {!! $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="family_phone" class="form-label">{{ __('Family Phone') }}</label>
            <input type="text" name="family_phone" class="form-control @error('family_phone') is-invalid @enderror" value="{{ old('family_phone', $appointment?->family_phone) }}" id="family_phone" placeholder="Family Phone">
            {!! $errors->first('family_phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="consultation_reason" class="form-label">{{ __('Consultation Reason') }}</label>
            <input type="text" name="consultation_reason" class="form-control @error('consultation_reason') is-invalid @enderror" value="{{ old('consultation_reason', $appointment?->consultation_reason) }}" id="consultation_reason" placeholder="Consultation Reason">
            {!! $errors->first('consultation_reason', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="age" class="form-label">{{ __('Age') }}</label>
            <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $appointment?->age) }}" id="age" placeholder="Age">
            {!! $errors->first('age', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="consulting_room_id" class="form-label">{{ __('Consulting Room Id') }}</label>
            <input type="text" name="consulting_room_id" class="form-control @error('consulting_room_id') is-invalid @enderror" value="{{ old('consulting_room_id', $appointment?->consulting_room_id) }}" id="consulting_room_id" placeholder="Consulting Room Id">
            {!! $errors->first('consulting_room_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="service" class="form-label">{{ __('Service') }}</label>
            <input type="text" name="service" class="form-control @error('service') is-invalid @enderror" value="{{ old('service', $appointment?->service) }}" id="service" placeholder="Service">
            {!! $errors->first('service', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="doctor" class="form-label">{{ __('Doctor') }}</label>
            <input type="text" name="doctor" class="form-control @error('doctor') is-invalid @enderror" value="{{ old('doctor', $appointment?->doctor) }}" id="doctor" placeholder="Doctor">
            {!! $errors->first('doctor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="appointment_date" class="form-label">{{ __('Appointment Date') }}</label>
            <input type="text" name="appointment_date" class="form-control @error('appointment_date') is-invalid @enderror" value="{{ old('appointment_date', $appointment?->appointment_date) }}" id="appointment_date" placeholder="Appointment Date">
            {!! $errors->first('appointment_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="appointment_time" class="form-label">{{ __('Appointment Time') }}</label>
            <input type="text" name="appointment_time" class="form-control @error('appointment_time') is-invalid @enderror" value="{{ old('appointment_time', $appointment?->appointment_time) }}" id="appointment_time" placeholder="Appointment Time">
            {!! $errors->first('appointment_time', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sex" class="form-label">{{ __('Sex') }}</label>
            <input type="text" name="sex" class="form-control @error('sex') is-invalid @enderror" value="{{ old('sex', $appointment?->sex) }}" id="sex" placeholder="Sex">
            {!! $errors->first('sex', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pathology" class="form-label">{{ __('Pathology') }}</label>
            <input type="text" name="pathology" class="form-control @error('pathology') is-invalid @enderror" value="{{ old('pathology', $appointment?->pathology) }}" id="pathology" placeholder="Pathology">
            {!! $errors->first('pathology', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="invoice" class="form-label">{{ __('Invoice') }}</label>
            <input type="text" name="invoice" class="form-control @error('invoice') is-invalid @enderror" value="{{ old('invoice', $appointment?->invoice) }}" id="invoice" placeholder="Invoice">
            {!! $errors->first('invoice', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>