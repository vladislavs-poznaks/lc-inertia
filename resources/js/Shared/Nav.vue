<template>
    <nav class="mt-4">
        <ul>
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>

            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post" as="button">Logout</NavLink>
            </li>
        </ul>
    </nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
import NavLink from '../Shared/NavLink';

export default {
    components: {Link, NavLink},
}
</script>
