<template>
	<div class="container">
        <div class="row justify-content-center">
            <slot></slot>
        </div>
	</div>
</template>

<style>
	/* ANIMATION */
	.slide-enter-active,
	.slide-leave-active {
	    transition: .4s
	}

	.slide-enter {
	    opacity: 0;
		transform: translateX(-10px);
	}

	.slide-leave-to {
		opacity: 0;
		transform: translateX(10px);
	}
</style>

<script>
	export default {
		// 
	}
</script>