<template>
    <div class="chat-wrapper">
        <sidebar />
        <main class="chat-main relative bg-gray-100">
            <section class="chat-inbox w-full h-full is-active">
                <div class="chat-container relative">

                    <users :usuarios="users">

                    </users>
                    <conversation c></conversation>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Sidebar from "@/Components/_partials/Sidebar.vue";
import Users from "@/Components/_partials/Users.vue";
import Conversation from "@/Components/_partials/Conversation.vue";

export default {
    props: {
        users: Array
    },
    data() {
        return {};
    },
    components: {
        Sidebar,
        Users,
        Conversation,
    },
};
</script>
