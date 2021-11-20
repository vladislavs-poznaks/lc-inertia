<template>
  <!--  <Head title="Create User" />-->

  <h1 class="text-3xl mb-6">Edit a user</h1>

  <form @submit.prevent="submit" class="max-w-md mx-auto">
    <div class="mb-6">
      <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
      <input v-model="form.name" type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" required/>
      <div v-if="form.errors.name" v-text="form.errors.name" class="text-sm text-red-500 mt-1"></div>
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
      <input v-model="form.email" type="email" name="email" id="email" class="border border-gray-400 p-2 w-full" required/>
      <div v-if="form.errors.email" v-text="form.errors.email" class="text-sm text-red-500 mt-1"></div>
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
      <input v-model="form.password" type="password" name="password" id="password"
             class="border border-gray-400 p-2 w-full" />
      <div v-if="form.errors.password" v-text="form.errors.password" class="text-sm text-red-500 mt-1"></div>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded rounded-lg" :disabled="form.proccessing">Submit</button>
  </form>
</template>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";

let props = defineProps({
  user: Object
});

let form = useForm({
  name: props.user.name,
  email: props.user.email,
  password: '',
});

let submit = () => {
  form.post('/users');
};

</script>