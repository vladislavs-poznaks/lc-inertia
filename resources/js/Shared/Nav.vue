<template>
    <nav class="mt-4">
        <ul>
            <li><Link href="/" class="text-blue-400 hover:text-blue-600">Home</Link></li>
            <li><Link href="/users" class="text-blue-400 hover:text-blue-600">Users</Link></li>
            <li><Link href="/settings" class="text-blue-400 hover:text-blue-600">Settings</Link></li>
            <li><Link href="/logout" method="post" as="button" class="text-blue-400 hover:text-blue-600">Logout</Link></li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: { Link },
}
</script>
