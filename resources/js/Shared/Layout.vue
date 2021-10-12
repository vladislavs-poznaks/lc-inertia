<template>
  <section class="p-6 bg-gray-200">
    <header class="flex">
      <h1 class="font-bold text-lg">My App</h1>
      <Nav />
    </header>
  </section>

  <section class="p-6">
    <slot />
  </section>
</template>

<script>
import Nav from './Nav';

export default {
  components: { Nav }
}
</script>