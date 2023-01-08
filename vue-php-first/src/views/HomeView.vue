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

<script>
import axios from "axios";
export default {
	data() {
		return {
			name: "",
			email: "",
			password: "",
			passError: "",
		};
	},
	methods: {
		handleSubmit() {
			axios
				.post(
					"http://localhost:4000/",
					JSON.stringify({
						name: this.name,
						email: this.email,
						pass: this.password,
					})
				)
				.then((res) => {
					// Process the response data
					console.log(res.data);
				});
		},
	},
};
</script>

<style></style>
