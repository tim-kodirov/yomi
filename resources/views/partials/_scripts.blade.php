<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" type="text/javascript"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/uz.js" type="text/javascript"></script>

<script src = "{{ asset('js/pignose.calendar.full.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
	
	$(function()
	{
		var events;
		$.get('/events', function(data, status)
		{
			events = data;	
			$('.calendar').pignoseCalendar({
				lang: 'ru',
				week: 1,
				scheduleOptions: {
					colors: {
					    news: '#2fabb7',
						news_dep: '#5c6270'
					}
				},
				schedules: events,

			    select: function(data)
			    {
			    	
			    	var d = data[0].format('YYYY-MM-DD');
			    	location.href='/date?date='+d;
			    }
			});
		});

		
	});
</script>

@yield('scripts')

