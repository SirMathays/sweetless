<template>
    <container>
    	<div class="col-md-8">
            <div class="card card-default">
                <div class="card-body">
                    <user-streak v-for="user, index in users" :key="user.id" :data="user" />
                </div>
            </div>
        </div>
    </container>
</template>

<script>
    import Container from 'containers/Container.vue';
    import UserStreak from 'parts/UserStreak.vue';

    export default {
        data: function () {
            return {
                users: [],
            }
        },
        components: {
            'container': Container,
            'user-streak': UserStreak,
        },
        methods: {
            getUsers() {
                var app = this;

                axios.get('/v1/front-page')
                    .then(function (resp) {
                        app.users = resp.data.topList;
                    })
                    .catch(function (resp) {
                        alert("Could not load users");
                    });
            }
        },
        mounted() {
        	this.getUsers();
        }
    }
</script>