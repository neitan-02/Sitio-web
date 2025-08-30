let $doctor, $date, $speciality, iRadio;
let $hoursMorning, $hoursAfternoon, $titleMorning, $titlrAfternoon;

const titleMorning = `En la Mañana`;

const titleAfternoon = `En la Tarde`;

const noHours = `<h5 class="text-danger">
No hay horas Disponibles </h5>`;

$(function () {
    $speciality = $("#speciality");
    $doctor = $("#doctor");
    $date = $("#date");
    $titleMorning = $("#titleMorning");
    $hoursMorning = $("#hoursMorning");
    $titleAfternoon = $("#titleAfternoon");
    $hoursAfternoon = $("#hoursAfternoon");

    $date.change(() => {
        // cleanSpecialityAndDoctors();
    });

    $speciality.change(() => {
        const specialityId = $speciality.val();
        const url = `/especialidades/${specialityId}/medicos`;
        $.getJSON(url, onDoctorsLoaded);
    });

    $doctor.change(loadHours);
    // $date.change(loadHours);
});

function cleanSpecialityAndDoctors() {
    $speciality.val("");
    let htmlOptions = `<option value="">Seleccione un Servicio</option>`;

    $speciality.html(htmlOptions);
    $doctor.status = "disabled";
    $doctor.html("");
    let htmlOptions2 = `<option value="">Seleccione un Médico</option>`;
    $doctor.html(htmlOptions2);
}

function onDoctorsLoaded(doctors) {
    let htmlOptions = "";
    htmlOptions += `<option value="">Seleccione un Médico</option>`;
    doctors.forEach((doctor) => {
        htmlOptions += `<option value="${doctor.id}">${doctor.name}</option>`;
    });
    $doctor.html(htmlOptions);

    loadHours();
}

function loadHours() {
    const selectedDate = $date.val();
    const doctorId = $doctor.val();
    const url = `/horario/horas?date=${selectedDate}&doctor_id=${doctorId}`;
    $.getJSON(url, displayHours);
}

function displayHours(data) {
    let htmlHoursM = "";
    let htmlHoursA = "";
    iRadio = 0;

    if (data.morning) {
        const morning_intervalos = data.morning;
        morning_intervalos.forEach((intervalo) => {
            htmlHoursM += getRadioIntervaloHTML(intervalo);
        });
    }

    if (!htmlHoursM != "") {
        htmlHoursM += noHours;
    }

    if (data.afternoon) {
        const afternoon_intervalos = data.afternoon;
        afternoon_intervalos.forEach((intervalo) => {
            htmlHoursA += getRadioIntervaloHTML(intervalo);
        });
    }
    if (!htmlHoursA != "") {
        htmlHoursA += noHours;
    }

    $hoursMorning.html(htmlHoursM);
    $hoursAfternoon.html(htmlHoursA);
    $titleMorning.html(titleMorning);
    $titleAfternoon.html(titleAfternoon);
}

function getRadioIntervaloHTML(intervalo) {
    const text = `${intervalo.start} - ${intervalo.end}`;

    return `<div class="custom-control custom-radio mb-3">
           <input type="radio" id="interval${iRadio}" name="scheduled_time" value="${
        intervalo.start
    }" class="custom-control-input" required>
           <label class="custom-control-label" for="interval${iRadio++}">${text}</label>
           </div>`;
}
