<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $employee?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $employee?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="role" class="form-label">{{ __('Role') }}</label>
            <select name="role" class="form-control @error('role') is-invalid @enderror" id="role">
                <option value="">Selecciona un rol</option>
                <option value="Servicio" {{ old('role', $employee->role ?? '') == 'Servicio' ? 'selected' : '' }}>Servicio</option>
                <option value="Recepcion" {{ old('role', $employee->role ?? '') == 'Recepcion' ? 'selected' : '' }}>Recepción</option>
            </select>
            {!! $errors->first('role', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        
        <div class="form-group mb-2 mb20">
            <label for="days" class="form-label">{{ __('Days') }}</label>
            <input type="hidden" name="days" id="days" value="{{ old('days', $employee?->days) }}">
            <div class="checkbox-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="monday" value="lunes">
                    <label class="form-check-label" for="monday">Lunes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="tuesday" value="martes">
                    <label class="form-check-label" for="tuesday">Martes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="wednesday" value="miercoles">
                    <label class="form-check-label" for="wednesday">Miércoles</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="thursday" value="jueves">
                    <label class="form-check-label" for="thursday">Jueves</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="friday" value="viernes">
                    <label class="form-check-label" for="friday">Viernes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="saturday" value="sabado">
                    <label class="form-check-label" for="saturday">Sábado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sunday" value="domingo">
                    <label class="form-check-label" for="sunday">Domingo</label>
                </div>
            </div>
            {!! $errors->first('days', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Split the existing days string into an array
                let existingDays = document.getElementById('days').value.split(', ');
        
                // Pre-check the checkboxes based on existing days
                existingDays.forEach(day => {
                    let checkbox = document.querySelector('.form-check-input[value="' + day + '"]');
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                });
        
                // Function to update the hidden input value
                function updateDays() {
                    let selectedDays = [];
                    document.querySelectorAll('.form-check-input:checked').forEach(function (checkbox) {
                        selectedDays.push(checkbox.value);
                    });
                    document.getElementById('days').value = selectedDays.join(', ');
                }
        
                // Add event listeners to all checkboxes
                document.querySelectorAll('.form-check-input').forEach(function (checkbox) {
                    checkbox.addEventListener('change', updateDays);
                });
        
                // Update the hidden input value on page load
                updateDays();
            });
        </script>
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>