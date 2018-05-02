<template>
	<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="/">Sweetless</a>

            <ul class="navbar-nav mr-auto">
                <slot>
                </slot>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">{{ this.$root.$data.user.name }}</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
	export default {
		// 
	}
</script>