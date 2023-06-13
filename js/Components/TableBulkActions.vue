<template>
    <ButtonWithDropdown
        v-if="props.actions"
        ref="multiple_actions_dropdown"
        dusk="multiple-actions-dropdown"
        class="w-auto ml-2"
    >
        <template #button>
            <Cog6ToothIcon class="w-5 text-gray-400"/>
        </template>

        <div
            role="menu"
            aria-orientation="horizontal"
            aria-labelledby="multiple-actions-menu"
            class="min-w-max shadow-lg"
        >
            <button
                v-for="(action, key) in props.actions"
                :key="key"
                :dusk="`multiple-actions-row-${key}`"
                class="text-left w-full px-4 py-2 text-sm text-gray-900 dark:text-gray-300
                                hover:bg-violet-500 hover:rounded-md hover:text-white flex flex-row"
                role="menuitem"
                @click="onActionClick(action.id)"
            >
                <component v-if="action.icon" :is="action.icon"
                           class="mr-2 h-5 w-5 text-violet-400"/>
                {{ action.label }}
            </button>
        </div>
    </ButtonWithDropdown>
</template>
<script setup>
import { Cog6ToothIcon } from "@heroicons/vue/24/outline";
import ButtonWithDropdown from "./ButtonWithDropdown.vue";
import { ref } from "vue";

const props = defineProps({
    actions: {
        type: Object,
        required: true
    },
    onActionClick: {
        type: Function,
        required: true,
    }
});

const multiple_actions_dropdown = ref(null);

</script>
