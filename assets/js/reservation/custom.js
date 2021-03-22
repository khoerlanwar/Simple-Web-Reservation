var urlDoctor, urlPatient;

$(document).ready(function () {
	urlDoctor = '/consult/doctor/selectDoctor';
	urlPatient = '/consult/patient/selectPatient';

   $('.date').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    $('.reservationtime').daterangepicker({
      singleDatePicker: true,
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'YYYY-MM-DD hh:mm A'
      }
    });

   $('select[id="patient"]').select2({
		placeholder: "Select Patient",
		allowClear: true,
		theme: 'bootstrap4',
		ajax: {
			url: urlPatient,
			dataType: 'json',
			delay: 250,
			data: function (params) {
				return {
					search: params.term
				};
			},
			processResults: function (data) {
				return {
					results: data
				};
			}
		}
	});

   $('select[id="doctor"]').select2({
		placeholder: "Select Doctor",
		allowClear: true,
		theme: 'bootstrap4',
		ajax: {
			url: urlDoctor,
			dataType: 'json',
			delay: 250,
			data: function (params) {
				return {
					search: params.term
				};
			},
			processResults: function (data) {
				return {
					results: data
				};
			}
		}
	});

});
