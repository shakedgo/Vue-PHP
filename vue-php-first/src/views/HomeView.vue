<script setup>
import { ref } from "@vue/reactivity";
import axios from "axios";

const name = ref("");
const email = ref("");
const password = ref("");
const passError = ref("");

async function handleSubmit() {
	let res = await axios.post(
		"http://localhost:4000/",
		JSON.stringify({
			name: name.value,
			email: email.value,
			pass: password.value,
		})
	);
	console.log(res.data);
}
</script>

<template>
	<form @submit.prevent="handleSubmit">
		<!-- prevents from page refresh -->
		<label>Name: </label>
		<input type="text" required v-model="name" />
		<br />
		<label>Email: </label>
		<input type="email" required v-model="email" />
		<br />
		<label>Password: </label>
		<input type="password" required v-model="password" />
		<div v-if="passError">{{ passError }}</div>
		<br />
		<button type="submit">Submit</button>
	</form>

	<p>Name: {{ name }}</p>
	<p>Email: {{ email }}</p>
	<p>Password: {{ password }}</p>
</template>

<style></style>
