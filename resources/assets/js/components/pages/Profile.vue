<template>
	<container>
    	<div class="col-md-8">
            <div class="card card-default">
            	<div class="card-body">
            		<img :src="this.$root.$data.user.gravatar" class="avatar">
	                <p>{{ this.$root.$data.user.name }}</p>
	                <p>{{ this.$root.$data.user.email }}</p>
                </div>
            </div>
        </div>
    </container>
</template>

<script>
    import Container from 'containers/Container.vue';

	export default {
		components: {
            'container': Container,
        }
	}
</script>