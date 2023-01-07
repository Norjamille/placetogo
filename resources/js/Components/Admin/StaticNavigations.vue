<script setup>
import {
    HomeIcon,
    UsersIcon,
    TagIcon,
    MapPinIcon,
    TicketIcon,
    BookmarkIcon
} from '@heroicons/vue/24/outline'
import { Link } from '@inertiajs/inertia-vue3'

const primaryNavigations = [
    {
        name: 'Dashboard',
        link: '/admin/dashboard',
        icon: HomeIcon
    },
    {
        name: 'Users',
        link: '/admin/users',
        icon: UsersIcon,
    },
    {
        name: 'Subcriptions',
        link: '/admin/subscriptions',
        icon: TicketIcon,
    },
    {
        name: 'Plans',
        link: '/admin/plans',
        icon: BookmarkIcon
    }
];

const secondaryNavigations = [
    {
        name: 'Places',
        link: '/admin/places',
        icon: MapPinIcon
    },
    {
        name: 'Categories',
        link: '/admin/categories',
        icon: TagIcon
    }
];


</script>

<template>
    <nav class="px-3 mt-6">
        <div class="space-y-1">
            <Link v-for="(nav, index) in primaryNavigations" :key="index" :href="nav.link"
                :class="{
                    'bg-purple-500 text-white': $page.url.startsWith(nav.link),
                    'text-gray-500 hover:text-gray-900 hover:bg-gray-50' : ! $page.url.startsWith(nav.link),
                }"
                class="flex items-center px-2 py-2 text-sm font-medium rounded-md group">
            <Component :is="nav.icon" class="flex-shrink-0 w-6 h-6 mr-3 " />
            {{ nav.name }}
            </Link>
        </div>
        <div class="mt-8">
            <h3 class="px-3 text-sm font-medium text-gray-500" id="desktop-teams-headline">
                Manage
            </h3>
            <div class="mt-1 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
                <Link v-for="(nav, index) in secondaryNavigations" :key="index" :href="nav.link"
                :class="{
                    'bg-purple-500 text-white': $page.url.startsWith(nav.link),
                    'text-gray-500 hover:text-gray-900 hover:bg-gray-50' : ! $page.url.startsWith(nav.link),
                }"
                class="flex items-center px-2 py-2 text-sm font-medium rounded-md group">
                <Component :is="nav.icon" class="flex-shrink-0 w-6 h-6 mr-3 " />
                {{ nav.name }}
                </Link>
            </div>
        </div>
    </nav>
</template>