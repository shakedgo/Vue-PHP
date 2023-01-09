<script setup>
import { ref } from "@vue/reactivity";
import axios from "axios";

const name = ref("");
const email = ref("");
const password = ref("");

async function handleSubmit() {
	let res = await axios.post(
		"http://localhost:4000/form.php",
		JSON.stringify({
			name: name.value,
			email: email.value,
			pass: password.value,
		})
	);
	// let res = await axios.get("http://localhost:4000/");
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
		<br />
		<button type="submit">Submit</button>
	</form>

	<p>Name: {{ name }}</p>
	<p>Email: {{ email }}</p>
	<p>Password: {{ password }}</p>
</template>

<style></style>
