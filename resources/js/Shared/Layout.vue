<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center space-x-2">
                <h1 class="font-bold text-lg">My App</h1>
                <p class="text-sm">Welcome back, {{ username }}</p>
            </div>
            <Nav/>
        </header>
    </section>

    <section>
        <iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless
                src="https://player.simplecast.com/10b6871b-9efe-42db-bfd8-caa52bdc0d04?dark=false"
        >
        </iframe>
    </section>

    <section class="p-6">
        <slot/>
    </section>
</template>

<script>
import Nav from './Nav';

export default {
    components: {Nav},

    computed: {
        username() {
            return this.$page.props.auth.user.username;
        }
    }
}
</script>
