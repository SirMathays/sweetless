<template>
    <container>
    	<div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Example Component</div>

                <div class="card-body">
                    I'm an example component.
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
        },
        mounted() {
        	// 
        }
    }
</script>