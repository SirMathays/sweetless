<template>
	<div class="user-bar">
		<b>{{ data.name }}</b>
		{{ date }}
	</div>
</template>

<script>
    var moment = require('moment');
    moment.locale('fi');

	export default {
		data: function() {
			return {
				date: "",
			}
		},
		props: {
			data: {
				required: true,
				type: Object
			}
		},
		methods: {
			moment(...args) {
                return moment(...args);
            },
            updateDateTime(date) {
                var app = this;

            	app.date = moment(date).fromNow();
				
				setInterval(function () {
					app.updateDateTime(date);
				}.bind(this), 1000); 
            }
		},
		mounted() {
			this.updateDateTime(this.data.latest_fail);
		}
	}
</script>