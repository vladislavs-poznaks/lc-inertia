<template>
    <Link
        class="text-blue-400 hover:text-blue-600"
        :class="{'font-bold': active}"
    >
        <slot />
    </Link>
</template>

<script>
export default {
    props: {
        active: Boolean,
    }
}
</script>
