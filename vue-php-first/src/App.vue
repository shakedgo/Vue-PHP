<template>
	<nav>
		<RouterLink to="/">Home</RouterLink>
		<RouterLink to="/about">About</RouterLink>
	</nav>
	<RouterView />
</template>

<script>
import { RouterLink, RouterView } from "vue-router";
export default {};
</script>

<style></style>
