<template>
	<nav>
		<RouterLink to="/home">Home</RouterLink>
		<RouterLink to="/about">About</RouterLink>
	</nav>
	<RouterView />
</template>

<script>
import { RouterLink, RouterView } from "vue-router";
export default {};
</script>

<style></style>
