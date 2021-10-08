<template>
    <Link
        class="text-blue-400 hover:text-blue-600"
        :class="{'font-bold': active}"
    >
        <slot />
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    components: {Link},

    props: {
        active: Boolean,
    }
}
</script>
